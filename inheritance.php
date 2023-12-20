// 20 Create a user class. 1
<?php 

class user1{

}
?>
// 21 Add to the class a private property with the name of $username.2
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
 returns the string "Hello admin, XXX" with the username instead of XXX 5*/
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

 <!-- 25 Try to write the solution with a getter 
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
 <!-- 26 6 -->
 <?php
 class Fruits{
    public $name;
    public $color;
    public $origin;
    public function __construct($fnm,$clr){
        $this->name=$fnm;
        $this->color=$clr;
        
    }

    public function shortintro(){
        return "FRUITS are very healthy for humans";

    }
 }
 class fruitname extends Fruits{
    public function fruits_name(){
        echo  $this->shortintro()." ".$this->name ."are fruits and its color is ".$this->color;

    }
 }
$obj1=new fruitname("STRAWBERRIES ","RED");
$obj1->fruits_name();


 ?>

 <!-- 7 -->
<?php
class FRUITS_A{
    public $FRUIT_NAME;
    public $FRUIT_COLOR;
    public $FRUIT_ORIGIN;
    public function __construct($FN,$FC,$FO){
        $this->FRUIT_NAME=$FN;
        $this->FRUIT_COLOR=$FC;
        $this->FRUIT_ORIGIN=$FO;

    }
    public function about_fruits(){
        echo "\n FRUITS ARE FULL OF ANTI-OXIDENTS \n";
    }
}
class REAL_FRUITS extends FRUITS_A{
    public function real_fruits(){
        echo $this->FRUIT_NAME." ARE ".$this->FRUIT_COLOR." IN COLOR AND IS ORIGINATED FROM ".$this->FRUIT_ORIGIN;

    }
}
$new_obja =new REAL_FRUITS("PINEAPPLES","YELLOW","NORTH AMERICA");
$new_obja->real_fruits();
$new_obja->about_fruits();
$new_objb=new REAL_FRUITS("STRAWBERRIES","RED","AMERICA");
$new_objb->real_fruits();
$new_objb->about_fruits();

 
 ?>

 <!-- 8 -->
 <?php
 class HUMANS{
    public $sense1;
    public $sense2;
    public $sense3;
    public function __construct($s1,$s2,$s3){
         $this->sense1=$s1;
         $this->sense2=$s2;
         $this->sense3=$s3;

    }
    public function about(){
        return "are three of the senses of a human being ";

    }
 }
 class human_features extends HUMANS{
    public function explain_human(){
        echo $this->sense1.",".$this->sense2." and ".$this->sense3." ".$this->about();

    }
 }

 $human_obj=new human_features("EYES","NOSE","TONGUE");
 $human_obj->explain_human();

 ?>
<!-- 9 -->

<?php
class Vegitables{
    public $vegname;
    public $vegcolor;
    public function __construct($vn,$vc){
        $this->vegname=$vn;
        $this->vegcolor=$vc;

    } 
    protected function vegprivacy(){
        return "hii  I am {$this->vegname} and I can fix health issues and usually I am {$this->vegcolor} in color";
    }
}
class health extends Vegitables{
    public function message(){
        return "Vegitables should be eaten steamed to get its max benefit";
    }
}

$new_objc= new health("Drum Stick ","Green ");
// $new_objc->vegprivacy();
$new_objc->message();


?>
<!-- 10 -->
<!-- how to sort the above problem -->

 <?php
 class veg{
    public $vegName;
    public $vegCure;
    public function __construct($vegn,$vegc){
        $this->vegName=$vegn;
        $this->vegCure=$vegc;
    
    }
    protected function veg_info(){
        echo " I AM  {$this->vegName}  AND I CAN CURE  {$this->vegCure}" ;

    }

 }
 class healthy extends veg{
    public function veg_message(){
        echo "vegetables are great for skin";
        $this->veg_info();

    }
 }
 $new_vegobj=new healthy("Beetroots","Iron deficiency");
 $new_vegobj->veg_message();


 ?>
<!-- 11 -->
<?php 
class vehicles{
    public $vName;
    public $vName1;
    public function __construct($vhn1,$vhn2){
        $this->vName=$vhn1;
        $this->vName1=$vhn2;

    }
    protected function aboutVehicles(){
       echo  " either it might be a {$this->vName} or a {$this->vName1} the core feature of vehicle is transportation";

    }

    }
class vehiclep extends vehicles{
        public function vehiclePrint(){
           echo  "They are available in the market. \n" ;
           $this->aboutVehicles();

        }

    }


$objewd= new vehiclep("RANGE ROVER","NISSAN SUNNY ");
$objewd->vehiclePrint();

?>
<!-- 13 -->
<?php 
class call{
    public function calla(){
        return "bell ";

    }
}
class override_call extends call{
    public function  calla(){
        return "bell rang";

    }
}
$o=new override_call();
echo $o->calla();


?>

<!-- 14 -->
<?php 
class Rectangle{
    public $length;
    public $width;
    public function __construct($l,$w){
        $this->length=$l;
        $this->width=$w;

    }
    public function area(){
        return "Area of the rectangle is ".$this->length*$this->width ;

    }
}
$new_obe=new Rectangle(30,50);
echo $new_obe->area();
?>
<!-- some other qns  -->
<!-- 15 -->
<?php 
class Circle{
    public $pie;
    public $radius;
    public function __construct($ra){
        $this->radius=$ra;
        $this->pie=3.14;
    }
    public function area(){
        return "Area of the circle is ".$this->pie*$this->radius**2 ."\n";


    }
    public function circumferance(){
        return "Circumference of a circle is ". 2*$this->pie*$this->radius;

    }

}
$newobjf=new Circle(34);
echo $newobjf->area();
echo $newobjf->circumferance();


?>
 
<!-- 16 -->
<?php 
// brand model year
class Vehicle{
    public $brand;
    public $year;
    public $model;
    public function display(){
        echo $this->brand="Nissan" . " ".$this->year="1999"." ".$this->model="Nissan Sunny";

    }
}
$obj_g=new Vehicle();
$obj_g->display();

?>


