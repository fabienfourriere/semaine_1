<?php
require_once "./classes/calcul.class.php";

use PHPUnit\Framework\TestCase;

class CalculTest extends TestCase
{   
    public function testDivideOk()
    {
        $oCalcul = new Calcul();

        $number = 10;
        $divide = 2;

        $result = $oCalcul->divide($number, $divide);

        $this->assertEquals(5, $result);
    }        
}