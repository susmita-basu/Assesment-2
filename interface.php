<?php
    interface Person {                                                  // interface
        function name();
        function age(); 

    }

    abstract class Info1 implements Person {                            // abstract class
        function name() {                                               // defining one method of interface
            echo "My name is Susmita Basu Mallick and<br>";
        }
    }

    class Info2 extends Info1{                                          // concrete class
        function age(){
            echo 'I am 22 years old. <br>';
        }
    } 

$obj = new Info2();                                                     // object of concrete class
$obj->name();
$obj->age();

?>