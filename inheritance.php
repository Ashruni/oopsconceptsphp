// 20 Create a user class. 1
<?php 

class user1{

}
?>
// 21 Add to the class a private property with the name of $username.
<?php
class user2{
    private $username1;

}

?>
//22 Create a setter method that can set the value of the $username. 3
<?php 
class user3{ 
    private $username2;
    public function set($us){
        $this->username2= $us;

    }

}

?>
//23 Create a class Admin that inherits the User class. 4
<?php 
class user4{
    private $username3;
    public function set($us)
    {
       echo $this->username3=$us;

    }

}
// $obj=new user4("hema");
class Admin extends user4{
    private $lastname;
    public function another(){
        return $this->username3;
    }
}

// $obj1=new user4("hima");
$obj2=new admin();
echo $obj2->set("hima   ");


?>

/* 24 Create a user class
    Add to the class a private property with the name of $username
    Create a setter method that can set the value of the $username
 Create a class Admin that inherits the User class
Now, let's add to the Admin class some code. First, add a public method by 
the name of expressYourRole(), and make it return the string: "Admin
Add to the Admin class another public method, sayHello(), that
 returns the string "Hello admin, XXX" with the username instead of XXX */
 <?php 
 class User{
    private $username1;
    public function set($usnm){
      $this->usernames=$usnm;

    }
 }
 class Admins extends User{
    public function expressYourRole(){
        return "Admin";
    }
    public function sayHello(){
         return "HEL ADMIN "." ".$this->usernames;
    }

 }
$obj3=new Admins();
// echo $obj->sayHello("himalaya"); its wrong cz 
$obj3->set("himalaya");
echo $obj3->sayHello();

 ?>

 <!-- Try to write the solution with a getter 
 method inside the parent that can be used 
 from the child class -->
 <?php
 class User_new{
    private $usersname;
    public function getter($usrnm){
        return $this->username=$usrnm;
    }


 }
 class Administrator extends User_new{ 
    public function printer(){
        return "hello "."  ".$this->username;

    }
 }

 $ob=new Administrator();
 $ob->getter("JACOB");
 echo $ob->printer();




 ?>




