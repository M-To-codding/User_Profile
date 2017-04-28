<?php

ini_set('session.use_trans_sid', true);
session_start();

require_once('db_connect/database.php');

class Main
{
    static public function callForm()
    {
        return include('templates/form.php');
    }
}

echo Main::callForm();

?>