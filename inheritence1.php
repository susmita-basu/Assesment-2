<?php 
  
// In php multiple inheritence can be acheived in various ways. One of the way is using traits. A single class can have multiple traits as its functionality.
// Traits can have methods and abstract methods that can be used in multiple classes.

trait Info1 { 
    function name() { 
     echo "Susmita Basu Mallick"; 
   } 
 } 
  

trait Info2 { 
    function age() { 
     echo "<br> I am 22 years old"; 
   } 
 } 
  
class Person { 
  use Info1; 
  use Info2; 
    function details() { 
      echo "My name is "; 
   }  
} 
  
$obj = new Person(); 
$obj->details();
$obj->name();
$obj->age();

?> 