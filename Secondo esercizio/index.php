<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class User {
     private $username; 
     private $password;
     private $age;


public function __construct($name,$code){
    if( strlen($name) < 3 || strlen($name) > 16){
        throw new Exception("Is not correct the number of letters");
      }
      if(ctype_alnum($code)){
        throw new Exception("Is not correct the value you insert");
    }

$this -> username = $name;
$this -> password = $code;
}

    // username

    public function getUserName(){
    return $this -> username;  
    }

    public function setUserName($newUserName){
        $this -> username = $newUserName;
    }

    // password

    public function getPasscode(){
        return $this -> password;
    }

    public function setPasscode($newPasscode){
        $this -> password = $newPasscode;  
    }

    // age

    public function getUserAge(){
    return $this -> age;
    }

    public function setUserAge($newUserAge){
        $this -> age = $newUserAge;
    }

    public function __toString(){
        return $this -> username . " :" . $this -> age . "[" . $this -> password . "]";
    }

}

try{
   $firstUser = new User ("Albsio", "fo@@@@obar");
   $firstUser -> setUserAge("32");
   echo  $firstUser -> __toString();
}
catch(Exception $e){
    echo "Error: " . $e -> getMessage() . "<br>";
}


?>  