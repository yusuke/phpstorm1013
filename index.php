<?php
/**
 * Created by PhpStorm.
 * User: yusuke
 * Date: 5/20/16
 * Time: 14:13
 */
$person = new Person("yusuke", 18);
dumpIsYoung($person);
//$hoge = "apple";
//$hoge = "ringoasfasf";

function dumpIsYoung(Person  $person){
    echo $person->isYoung();
}