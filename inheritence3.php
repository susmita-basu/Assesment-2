<?php 

//Question 3 part 2 using multiple inheritence using interface
 
// Multiple inheritence can be achieved by by implementing more than one interface.

interface Info1 { 
   function name(); 
} 
  
interface Info2 { 
   function age(); 
} 
  
class Person implements Info1, Info2 { 
  
    // Function of the interface B 
    function name() { 
        echo "My name is Susmita Basu Mallick<br>"; 
    } 
  
    // Function of the interface C 
    function age() { 
        echo "I am 22 yeras old<br>"; 
    } 
  
    public function details() 
    { 
        echo "I live in Kolkata<br>"; 
    } 
} 
  
$obj = new Person(); 
$obj->name(); 
$obj->age(); 
$obj->details(); 
?> 