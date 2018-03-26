<?php
class User {
    private $name;
    private $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }


    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    public function setAge($age){
        $this->age = $age;
    }
    public function getAge(){
        return $this->age;
    }

    // __get MAGIC METHOD
    public function __get($property){
        if(property_exists($this, $property)){
           return $this->$property;
        }
    }

    // __set MAGIC METHOD
    public function __set($property, $value){
        if(property_exists($this, $property)){
            $this->$property = $value;
        }
        return $this;
    }



}

$user1 = new User('John', 40);
//echo $user1->getName();
//echo '<br>';
//echo $user1->getAge();
//echo $user1->setName('Jeff');
//echo '<br>';
//echo $user1->getName();
$user1->__set('age',41);
//echo $user1->__get('name');
echo $user1->__get('age');