<?php
    class person{

        private $name="";
        private $age="";
        public function setName($name=""){

                $this->name=$name;
                return $this;
        }
        public function setAge($age=""){
    
            $this->age=$age;
            return $this;
        }
        public function getInfo(){
            echo "I am ".$this->name." and my age is ".$this->age." years.";
        }
    }
    $person = new person();
    $person->setName("Susmita Basu Mallick")->setAge("22")->getInfo(); // method chaining

 ?>

