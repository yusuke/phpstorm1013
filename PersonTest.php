<?php
require 'Person.php';

class PersonTest extends \PHPUnit_Framework_TestCase
{

    public function testIsYoung(){
        $a = new Person("yusuke", 18);
        $this->assertEquals(true, $a->isYoung());
    }
}