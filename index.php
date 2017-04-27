<?php

ini_set('session.use_trans_sid', true);
session_start();

include('form.php');
require_once ('database.php');

class FormMethods
{
    public function sum($a, $b)
    {
        return $a + $b;
    }
}


$formMethods = new FormMethods;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $symb1 = htmlspecialchars($_REQUEST['a']);
    $symb2 = htmlspecialchars($_REQUEST['b']);
    if (empty($symb1)) {
        echo('<div>a is empty</div>');
    }

    if (empty($symb2)) {
        echo('<div>b is empty</div>');
    } else {
        echo '<br>' . $GLOBALS['formMethods']->sum($symb1, $symb2);
    }

}

?>