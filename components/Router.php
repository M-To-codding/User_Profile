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

    public function run (){
//        echo 'Class Router, method run()';
        print_r($this->routes);
    }

}