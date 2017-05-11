<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 28.04.2017
 * Time: 1:09
 */

class Database
{

    public static function getConnection(){

        $paramsPath = ROOT . '/config/db_params.php';
        $params = include ($paramsPath);



        $dsn ="mysql:host={$params ['host']};
dbname={$params['dbname']}";
        $db= new PDO($dsn, $params['user'], $params['password'],
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        return $db;
    }
}