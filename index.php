<?php
/**
 * Created by PhpStorm.
 * User: yusuke
 * Date: 9/28/16
 * Time: 20:13
 */

$person = new Person(18, "yusuke");
echo $person->getAge();
$person->isYoung();
function dumpPersonName($person)
{
    echo $person->getName();
    if ($person instanceof Person) {
        echo $person->getName();
        echo $person->getName();
    }
}
