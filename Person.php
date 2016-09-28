<?php

/**
 * Created by PhpStorm.
 * User: yusuke
 * Date: 7/16/16
 * Time: 16:51
 */
class Person
{
    protected $age;
    protected $name;

    function isYoung(){
        return $this->age < 18;
    }
}