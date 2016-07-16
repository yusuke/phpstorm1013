<?php
/**
 * Created by PhpStorm.
 * User: yusuke
 * Date: 7/16/16
 * Time: 13:41
 */
$person = new Person(18, "yusuke");
echo $person->getAge();
dumpYoung($person);

function dumpYoung($person){
    if ($person instanceof Person) {
        echo $person->isYoung();
    }
}