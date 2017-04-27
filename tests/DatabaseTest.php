<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 27.04.2017
 * Time: 19:10
 */

namespace FormMethods;

require_once dirname(__DIR__). './database.php';
use FormMethods;

class DatabaseTest extends \PHPUnit_Framework_TestCase
{
    public function testFormMustSaveData() {
        $dbConnection = $GLOBALS['link'];

        $sql = "INSERT INTO authorisation (login, password, mail) 
VALUES ('NewUser', '123', 'nu@mail.com')";

        if ($dbConnection->query($sql)===TRUE) {
            echo "New user added.";
        }
        else {
            echo "Error! " . $sql . $dbConnection->error;
        }

        $dbConnection->close;
    }
}
