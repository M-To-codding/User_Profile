<?php

//ini_set('session.use_trans_sid', true);
//session_start();

//errors displaying
ini_set('display_errors', 1);
error_reporting(E_ALL);

//including system files
define('ROOT', __DIR__);
require_once(ROOT . '/components/Router.php');
require_once (ROOT.'/components/Database.php');

//call Router
$router = new Router();
$router->run();



?>