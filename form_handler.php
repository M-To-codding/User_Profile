<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 28.04.2017
 * Time: 2:49
 */
require_once('db_connect/database.php');


$dbConnection = $GLOBALS['link'];

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$login = mysqli_real_escape_string($link, $_POST['login']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$mail = mysqli_real_escape_string($link, $_POST['mail']);

$sql="INSERT INTO authorisation (login, password, mail) 
VALUES ('$login', '$password', '$mail')";

if (mysqli_query($link, $sql)) {
    echo "New user added.
<h1>List of users</h1>";
}

else {
//    echo "Error! " . mysqli_error($link);
    header('Location: http://phpTest/index.php');
}

mysqli_close($link);