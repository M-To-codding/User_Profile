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
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $db= new PDO($dsn, $params['user'], $params['password'], $opt);

        return $db;
    }
}