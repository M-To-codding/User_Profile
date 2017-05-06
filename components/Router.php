<?php

/**
 * Created by PhpStorm.
 * User: Я
 * Date: 07.05.2017
 * Time: 0:27
 */
class Router
{
    private $routes;

    public function __construct(){
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

//    Returns request string

    private function getUri(){
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run (){

        $uri = $this->getUri();

        foreach ($this->routes as $uriPattern=>$path) {

            if (preg_match("~$uriPattern~", $uri)) {

//                Define controller and action that handling request
                $segments = explode('/', $path);

                $controllerName = array_shift($segments).'Controller';

                $controllerName = ucfirst($controllerName);

                $actionName = 'action'.ucfirst(array_shift($segments));

//                include file of class-controller
               $controllerFile = ROOT . '/controllers/' .
                   $controllerName . '.php';

               if (file_exists($controllerFile)) {
                   include_once ($controllerFile);
               }

//               create an object and call the action function
               $controllerObject = new $controllerName;
               $result = $controllerObject->$actionName();
               if ($result != null) {
                   break;
               }
            }

        }

    }

}