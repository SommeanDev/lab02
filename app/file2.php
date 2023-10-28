<?php
namespace Company\MyProject;

class Person{
    function getName(){
        return 'abc';
    }

    function sayHiTo($name){
        return "<br>abc says hi to $name";
    }
}
echo "Hello from File2.php<br>";