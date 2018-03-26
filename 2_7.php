<?php
// Static method and property, The value of either are not relative to a certain object instance or instance of a class
// Relative to a class itself, EX with password validation
class User {
    public $name;
    public $age;
    // $minPassLength is static because it does not change by object
    public static $minPassLength = 6;


    public static function validatePass($pass){
        // When referring to a static variable, we use self::staticVariable instead of
        // $this->staticVariable
        if(strlen($pass) >= self::$minPassLength){
            return true;
        } else {
            return false;
        }
    }
}

$password = 'hello';
// Call the class and then its static method with Class::staticMethod
if(User::validatePass($password)){
    echo 'Password valid';
} else {
    echo 'Password not valid';
}

?>



