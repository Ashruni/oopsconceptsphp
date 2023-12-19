<!-- 6 -->
<!-- Add to the hello() method the ability to approach the $firstName property, so the hello() method would be able to return the string "hello, $firstName". -->
<?php
class User1{
    public $user_name;
    public $last_name;
    public function hello(){
    return "hellooo, " . $this->user_name ; 


    }
}
$obj1=new User1();
$obj1->hello();
$obj1->user_name="Neha";
$obj1->last_name="Kakkar";
echo $obj1->hello();
?>
<!-- 7 -->
<!-- access the properties from a class and echo the information from the function -->
<?php
class Test{
    public $username;
    public $rollnumber;
    public function Test_slot(){
        return "Your USERNAME is ".$this->username="WEP123". "and your ROLL NUMBER is ".$this->rollnumber=567 ;
    }
}
$obj1=new Test();
echo $obj1->Test_slot();


?>
<!-- 8 -->
<?php
class Candidate_info{
    public $can_name;
    public $can_rollno;
    public $can_sub;
    public $can_examdate;
    public function CTicket(){
        return "CANDIDATE NAME :".$this->can_name="Shene"."\n CANDIDATE ROLL NO :".$this->can_rollno="WOP3456". "\n SUBJECT:".$this->can_sub="CORE"."\n CANDIDATE EXAM DATE ".$this->can_examdate="4/04/23";


    }

}
$obj1=new Candidate_info();

// $obj1->can_name="Shene";
// $obj1->can_rollno="WPP234";
// $obj1->can_sub="CORE";
// $obj1->can_examdate="23/3/78";
echo $obj1->CTicket();

?>

<!-- 9 -->
<!-- Add a register() method to the class that echoes the string " >> registered" -->
<?php
class Registerthings
{
    public $name;
    public $email;
    public $phno;
    public function register()
    {
        return ">> registered";

    }
}
$obj1=new Registerthings();
echo $obj1->register();

?>
<!-- 10 -->
<!-- Add a mail() method to the class that echoes the string " >> email sent". -->
<?php
class Datacollect{
    public $datasource;
    public function function_name(){
        return "\n Email sent ";

    }

}
$obj1=new Datacollect();
$obj1->datasource="Hospital";
echo $obj1->function_name();
?>

<!-- 11 -->
<!-- Add return $this to the hello() method so it can be chained to any other method in the class. -->
<!-- Add return $this to the register() method so it can also be chained. -->
<!-- this is chaining -->
<?php
class classname{
    public $first_name;
    public function function_name(){
        return "hello ". $this->first_name="NEHA\n";
    }
    public function function_name1(){
        return "Hai ".$this->first_name;

    }
}
$obj1=new classname();
echo $obj1->function_name();
echo $obj1->function_name1();

?>
<!-- 12 -->
<!-- Create a new $user1 object with the first name of "Jane".
For this object, chain the methods in the following order: hello() -> register() -> mail() -->
<?php
class class_name{
    public $attribute1;
    public $attribute2;
    public function hello(){
        return " HELLO " .$this->attribute1="Jane\n";
    } 

    public function register(){
        return $this->attribute1;

    }
    public function mail(){
        return $this->attribute1;

    } 
}
$obj1=new class_name();

echo $obj1->hello();
echo $obj1->register();
echo $obj1->mail();

?>

<!-- 13 public and private--> 
<!-- Create a new class property with the name of $firstName, and prevent any code
 from outside the class from changing the property value by using the appropriate 
 access modifier (private or public) -->
 <?php

 class class_names{
    // private $firstname;
    public $firstname;

    public function function_name(){
        return "new class";

    }
 }
$obj=new class_names();
echo $obj->firstname="hello";

 ?>
 <!-- 14 -->
 <!-- Create a method to set the $firstName property value.
Use the right access modifier for the method (public/private). -->
<?php 
class class_new1{
    // private $attribute;
    public $attribute;
    public function fun_new(){
        return "this is a function block ";
    }
}
$obj1=new class_new1();
echo $obj1->attribute="hema";

?>
<!-- this code will give you private property access error due to usage of private in variable -->
<!-- 15 /16-->
<!-- solve the above problem by using another access modifier -->
<?php
class class_new2{
    private $attribute;
    public function fun_name($rc){
         return $this->attribute=$rc;


    }

}
$obj2=new class_new2();
echo $obj2->fun_name( "HIMA R ");
?>
<!-- since the attribute is declared private we wont
 be able to access this attribute outside the class 
if we tries to access this it will throw error therefore through
 another public function and argument set the value to the private variable  -->
 <!-- 17 -->
 <!-- Create a new user object with the name 
 of $user1, set its name to "Joe" and 
 make it return its name. -->
 <?php 
 class new_class3{
    private $firstname;
    public function function_name3($nm){
        return $this->firstname=$nm;
    }
 }
 $user1=new new_class3();
 echo $user1->function_name3("Joe");
 ?>
 