<?php 

use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase
{

    public function testCompareBrand(){  
        $car = new \App\Car();      
        $this->assertEquals($car->brandName(), 'BMW');    
    }

    //ce uporabimo spodnjo definicijo nam pred funkcijo ni potrebno pisati test
    /** @test */
    public function compareBrand1(){
        //ce zelimo testirat funkcije izven classa moramo navesti pot do funkcije v tem primeru getTest() je v function_custom.php
        require_once(dirname(__FILE__)."/../../../function_custom.php");
        $this->assertEquals(getTest(), 'Opel');
    }

}

?>