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
$obj1->user_name="Neha"
$obj1->last_name="Kakkar"
echo $obj1->hello();
<?