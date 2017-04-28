<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 28.04.2017
 * Time: 2:57
 */

namespace form;


use form;

require_once dirname(__DIR__) . './templates/form.php';
require_once dirname(__DIR__) . './db_connect/database.php';



class FormHandlerTest extends \PHPUnit_Framework_TestCase
{

    public function dataMustBeSavedTest(){
        $dbConnection = $GLOBALS['link'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $mail=$_POST['mail'];

        $sql="INSERT INTO authorisation (login, password, mail) 
VALUES ($login,$password,$mail)";

        if ($dbConnection->query($sql)===TRUE) {
            echo "New user added.";
        }
        else {
            echo "Error! " . $sql . $dbConnection->error;
        }

        $dbConnection->close;
    }

}
