<?php

include ("../app/file2.php");
include ("../app/controller/TestController.php");

echo "Hello from test.php<br>";

$person1 = new Company\MyProject\Person();
echo "HI from ", $person1->getName();
echo $person1->sayHiTo("def");

use \Company\MyProject\Person;
$person2 = new Person();

echo "Hi from ", $person2->getName();
echo $person2->sayHiTo("ghi");

use Company\MyProject\TestController;
$controller = new TestController();
echo $controller->display();