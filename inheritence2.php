<?php 

// Question 3 part 2 using multiple inheritence using class and interface

// Multiple inhertence ca also be achieved using class and interface.

class Name { 
   function name() { 
    echo "Susmita Basu Mallick<br>"; 
     } 
} 
  
interface Age { 
    function age(); 
} 
  
class Details extends Name implements Age { 
  
    function age() { 
        echo "I am 22 years old<br>"; 
    } 
  
    function place() { 
    echo "I live in Kolkata"; 
    } 
} 
  
$obj = new Details(); 
$obj->name(); 
$obj->age(); 
$obj->place(); 
?> 