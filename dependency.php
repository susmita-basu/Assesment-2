<?php
   class Person {
      private $name;
        function setName($name){
         $this->name = $name;
      }
   }
   $obj = new Person();
   $name = array('Susmita','Archita','Swati','Alok');
   $obj->setName($name);
?>