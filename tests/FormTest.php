<?php
/**
 * Created by PhpStorm.
 * User: Я
 * Date: 27.04.2017
 * Time: 19:10
 */

namespace FormMethods;

require_once dirname(__DIR__). './index.php';
use FormMethods;

class FormTest extends \PHPUnit_Framework_TestCase
{
    public function testFormMustSumData() {
        $a=3;
        $b=7;
        $formMethods=new FormMethods();
        $this->assertEquals(10,$formMethods->sum($a,$b));
    }
}
