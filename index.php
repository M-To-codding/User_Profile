<?php

ini_set('session.use_trans_sid', true);
session_start();

//errors displaying
ini_set('display_errors', 1);
error_reporting(E_ALL);

//including system files
define('ROOT', __DIR__);
require_once (ROOT.'components/Router.php');

//require_once('db_connect/database.php');

//class Main
//{
//    static public function callForm()
//    {
//        return include('templates/form.php');
//    }
//}
//
//echo Main::callForm();

?>