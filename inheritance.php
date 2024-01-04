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
<?php 
class Animal{
    protected $animalName;
    protected $animalOrigin;
    public function __construct(){
        echo "\n THIS IS AN ANIMAL class method \n";
    } 


}
class Dog extends Animal{
    protected $dogName;
    protected $dogOrigin;
    public function __construct(){
        parent ::__construct();
        echo " this is a dog class method \n ";
    }
}
class Cat extends Animal{
    protected $catName;
    protected $catOrigin;
    public function __construct(){
        parent ::__construct();
        echo "\n this is a cat class method";
    }
    public function catInfo(){
        echo "\n I am a cat";
    }
}

$obj0=new Dog();

$objf1= new Cat();
$objf1->catInfo();


?>
<!-- 17 -->
<?php 
class Humanss{
    protected $humanFeature;
    protected $humanNature;
    public function __construct(){
        
        echo "this is a public parent __construct method  \n";

    }
}
class Female extends Humanss{
    protected $femaleFeature;
    public function __construct(){
        parent::__construct();
        echo "this is a female class method ";

    }
}
class Male extends Humanss{
    protected $maleFeature;
    public function __construct(){
        parent::__construct();
        echo "this is a male class method";

    } 

}
$objh=new Male();
$objh1=new Female();



?>
<!-- 18 -->
<?php 
class Humansss {
    protected $name;
    protected $place;
    public function __construct($nm,$pl){
        $this->name=$nm;
        $this->place=$pl;
        echo "hi i am  {$this->name} and his place is {$this->place} ";
    }
}
class person extends Humansss {
    protected $feature_person;
    public function personInfo(){
        echo "\n this is person class ";

    }
}

$objg=new Person("Hema","Himalayas");
$objg->personInfo();
?>
 <!-- 127 -->
<!-- Inheritance and Calculation:
Create a parent class with a constructor that initializes a numeric value. 
Extend this class with a child class that multiplies the inherited 
value by a factor. Display the final result. -->
<?php 
 class ParentClass{
  public $numericValue;
  public function __construct($numericValue){
     $this->numericValue = $numericValue;
  }
 }
 class ChildClass extends ParentClass{
    public function childFunction(){
        echo "ANSWER :" . $this->numericValue/2;
    }
 }

 $newChildObject1= new ChildClass(100);
 $newChildObject1->childFunction();
 ?>
 <!-- 128 -->
<!-- Accessing Parent Properties:
Create a parent class Employee with a protected property $salary.
 Extend this class with a child class Manager that has an additional property $bonus.
 Calculate and display the total compensation (salary + bonus) for a Manager object. -->
<?php 
class EmployeeClass{
    protected $salary;
    public function __construct($salary){
        $this->salary = $salary;
    }

}
class Manager extends EmployeeClass{
    public $bonus;
    public function displaySalary($bonus){
        echo "Total compensation of the manager : ". $this->salary + $bonus ;
    }
}
$managerObject= new Manager(20000);
$managerObject->displaySalary(10000);

?>
<!-- 129 -->
<!-- Multiple Inheritance:
Implement two classes, A and B. Create a third class C that extends both A and B. 
Instantiate an object of class C and display properties from both parent classes. -->
<?php 
class AClass{
    public function features(){
        echo "These are the features of A \n ";
    }
}
class BClass extends AClass{
    public function features(){
        echo "These are the features of B \n ";
    }
}

class CClass extends BClass{
    public function features(){
        echo "These are the features of C \n";
    }
}
$newClass=new  AClass();
$newClass->features();
$newClass1= new BClass();
$newClass1->features();
$newClass2= new CClass();
$newClass2->features();
?>
<!-- 130 -->
<!-- Access Modifiers in Inheritance:
Design a class Product with private property $price. 
Extend this class with a child class DiscountedProduct that applies a discount to the price. 
Ensure that the discount is applied correctly and display the final price. -->
<?php 
class Product{
    public $prices1;
    // private   $prices1; causing error 
    public function __construct($prices1){
        $this->prices1 = $prices1 ;
    }

}
class DiscountedProduct extends Product{
    public $discountRate;
    public function discountPrices(){
        $discountRate = ($this->prices1 )* 20 /100 ;
        echo "final price ". $this->prices1-$discountRate ;
    }
}
$newDiscount = new DiscountedProduct(400);
$newDiscount->discountPrices();
?>
<!-- 131 -->
<!-- 
Inheriting Static Properties:
Implement a class MathOperations with a static property $pi. Extend this class with a 
child class Circle that uses the inherited static property to 
calculate the circumference of a circle. Display the result. -->
<?php 
class MathOperations {
    public static $pi = 3.14;

}
class Circles extends MathOperations{
    
    public function calculateCircumferance($radius){
        parent::$pi;
        echo "Circumference Of A Circle : ". 2 *parent::$pi*$radius;
    }

}
$newCircle= new Circles();
$newCircle->calculateCircumferance(45);

?>
<!-- 132 -->
<!-- Parent Method Call:
Define a class Person with a method introduce().
 Extend this class with a child class Employee that overrides the introduce() 
 method to include job information.
 Call both the parent and child methods for an Employee object. -->
 <?php 
 class PersonsClass{
    public function introduce(){
        echo "This is a person \n ";
    }
 }
 class EmployeeClasses extends PersonsClass{
    public function introduce(){
        echo "this employee has joined on 3/04/2000 ";
    }
 }
 $newPersonEmployee= new PersonsClass();
 $newPersonEmployee->introduce();
 $newPersonEmployee1= new EmployeeClasses();
 $newPersonEmployee1->introduce();
 ?>
 <!-- 139 -->
 <!-- 
Extend the Dog class to create a class GermanShepherd and override the makeSound() 
method to make a specific bark sound.
Extend the GermanShepherd class to create a class WorkingGermanShepherd and override 
the makeSound() method again with a modified sound.
Create an instance of WorkingGermanShepherd and call its makeSound() method.
Accessing Parent Method: -->

<?php 
class Doggies{
    public function makeSound(){
        echo "dogs bark specifically ";
    } 
}
class GermanShepherd extends Doggies{
    public function makeSound(){
        echo "their voices are louder ";
    }
} 
class WorkingGermanShepherd extends GermanShepherd{
    public function makeSound(){
        echo "their voices are louder  and we can hear the echo  ";
    }
}
$newObjectDog = new WorkingGermanShepherd();
$newObjectDog-> makeSound();

?>
<!-- 140 1 -->
<!-- Add a method run() to the Dog class.
Override the run() method in the GermanShepherd class to add additional functionality.
Call both the parent and child class methods from an instance of GermanShepherd. -->
 <?php 
 class PersonsClasses{
    public function introduce(){
        echo "This is a person \n ";
    }
 }
 class EmployeeClasses1 extends PersonsClasses{
    public function introduce(){
        echo "this employee has joined on 3/04/2000 ";
    }
 }
 $newPersonEmployee= new PersonsClasses();
 $newPersonEmployee->introduce();
 $newPersonEmployee1= new EmployeeClasses1();
 $newPersonEmployee1->introduce();
 ?>
 <!-- 139 -->
 <!-- 
Extend the Dog class to create a class GermanShepherd and override the makeSound() 
method to make a specific bark sound.
Extend the GermanShepherd class to create a class WorkingGermanShepherd and override 
the makeSound() method again with a modified sound.
Create an instance of WorkingGermanShepherd and call its makeSound() method.
Accessing Parent Method: -->

<?php 
class DogClasses{
    public function makeSound(){
        echo "dogs bark specifically ";
    } 
}
class GermanShepherd1 extends DogClasses{
    public function makeSound(){
        echo "their voices are louder ";
    }
} 
class WorkingGermanShepherd1 extends GermanShepherd1{
    public function makeSound(){
        echo "their voices are louder  and we can hear the echo  ";
    }
}
$newObjectDog = new WorkingGermanShepherd1();
$newObjectDog-> makeSound();
?>
// 140
// Add a method run() to the Dog class.
// Override the run() method in the GermanShepherd class to add additional functionality.
// Call both the parent and child class methods from an instance of GermanShepherd.
<?php 
class DogClass{
    public function makeSound(){
        echo "dogs bark specifically :";
    } 
    public function run(){
        echo "they run very fast :";
    }
}
class GermanShepherd2 extends DogClass{
    public function makeSound(){
        echo "their voices are louder \n";
    }
    public function run(){
        echo "they run very fast and they are very active \n";
    }
} 
class WorkingGermanShepherds extends GermanShepherd2{
    public function makeSound(){
        echo "their voices are louder  and we can hear the echo  \n ";
    }
}
$newObjectDog = new WorkingGermanShepherds();
$newObjectDog-> makeSound();
$newObjectDog->run();
?>
// 141
// 
// In the WorkingGermanShepherd class, use the parent::makeSound() to call the makeSound()
//  method from the GermanShepherd class.
// Display the result.

<?php 
class DogClass1{
    public static function makeSound(){
        echo "dogs bark specifically :";
    } 
    // public function run(){
    //     echo "they run very fast :";
    // }
}
class GermanShepherd3 extends DogClass1{
    public function makeSounds(){
        echo parent::makeSound();
        echo "their voices are louder \n";
    }
    // public function run(){
    //     echo "they run very fast and they are very active \n";
    // }
} 
class WorkingGermanShepherds1 extends GermanShepherd3{
    public function makeSounds1(){
        echo parent::makeSounds();
        echo "their voices are louder  and we can hear the echo  \n ";
    }
}

// $newObjectDog1 = new GermanShepherd3();
// $newObjectDog1 ->makeSounds();
// $newObjectDog1 ->run();

$newObjectDog = new WorkingGermanShepherds1();
$newObjectDog-> makeSounds1();
?>
// $newObjectDog->run();
// 142
// Final Keyword:
// Mark the makeSound() method in the Dog class as final.
// Attempt to override it in the GermanShepherd class.
<?php 
class DogClass5{
    // final public  function makeSound(){
        // Fatal error: Cannot override final method DogClass5::makeSound()
       public function makeSound(){
        echo "dogs bark specifically :";
    } 
}
class GermanShepherd4 extends DogClass5{
    public function makeSound(){
        echo "their voices are louder \n";
    }
}
$newObjectDog1 = new GermanShepherd4();
$newObjectDog1 ->makeSound();


?>
<!-- 144 -->
<!-- Create an interface Speakable with a method speak().
Implement the Speakable interface in the Person class.
Extend the Person class to create a class Student and override the speak() method. -->
<?php 
interface Speakable{
    public function speak();
}
class ClassPersonSpeakable implements Speakable{
    public function speak(){
        echo "this is interface :";
    } 
    
}
class StudentSpeakable extends ClassPersonSpeakable{
    public function speak(){
        echo "this is overridden speak() ";
    }
}
$newSpeak = new StudentSpeakable();
$newSpeak->speak();
?>
<!-- 152(from encapsulation) -->
<!-- Multiple Inheritance:
Implement a scenario with multiple inheritance using interfaces.
 Create an interface Movable with a method move(), and another interface Resizable 
 with a method resize(). Create a class Shape that implements both interfaces.
  Write a class ResizableCircle that extends Shape and provides a specific 
  implementation for resizing. -->
  <?php 
 interface Movable{
    public function move();
 }
 interface Resizable{
    public function resize();
 } 
 class ShapeNew implements Movable, Resizable{
    public function move(){
        echo "its movable ";
    } 
    public function resize(){
        echo "its resizable ";
    }
 }
 class Resizables extends ShapeNew{
    public function resize(){
        echo "SPECIFIC IMPLEMENTATION FOR RESIZE";
    }
 }
 $newRezizables = new Resizables();
 $newRezizables->resize();
  ?>

  <!-- 153 -->
  <!-- Bank Account Inheritance:
Design a class BankAccount with properties accountNumber, 
balance, and methods deposit and withdraw. Create two subclasses - 
SavingsAccount and CheckingAccount. The SavingsAccount should have an
 additional property interestRate, and the CheckingAccount should have 
 an additional property overdraftLimit. Override the withdraw method in both 
 subclasses to handle specific rules for each account type. -->
 <?php 
 class BankAccount{
    private $accountNumber;
    private $balance;
    public function __construct($accountNumber,$balance){
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }
    public function withdraw(){
      echo "Account";

    }
    
 }
class SavingsAccount extends BankAccount{
    public function interestRate(){

    }
    public function withdraw(){
        echo "Account";
    }
    

}
class CheckingAccount extends SavingsAccount{
 
    public function overdraftLimit(){

    }
    public function withdraw(){
        echo "Account withdrawal 2";
    }

}
$newBank = new CheckingAccount("12dg34",56432);
$newBank->withdraw();

 ?>
 <!-- 154 -->
 <!-- Fibonacci Series with Inheritance:
Create a class Fibonacci with a method generateSeries($n) that generates the 
first $n elements of the Fibonacci series. Now, create two subclasses - 
EvenFibonacci and OddFibonacci. Override the generateSeries method in each 
subclass to generate only the even or odd elements of the Fibonacci series.
 Demonstrate the use of these classes to display the first 10 even and odd Fibonacci numbers -->
 <?php 

 $a=0;
 $b=1;
 $sum = $a +$b;
 for($i=0;$i<=10;$i++){
    
    echo $sum = $a + $b ." ";
    $a = $b;
    $b =$sum;
}
 ?>
 <!--   Fibonacci Series with Inheritance:
Create a class Fibonacci with a method generateSeries($n) that generates the 
first $n elements of the Fibonacci series. Now, create two subclasses - 
EvenFibonacci and OddFibonacci. Override the generateSeries method in each 
subclass to generate only the even or odd elements of the Fibonacci series.
 Demonstrate the use of these classes to display the first 10 even and odd Fibonacci numbers -->
 <?php 
 class Fibonacci{
    private $n;
    private $sum;
    public function __construct($n){
        $this->n=$n;
        $this->sum=0;


    }

    public function generateSeries(){

        $a=0;
        $b=1;
        $this->sum = $a +$b;
        for($i=0;$i<=$this->n;$i++){
           
           echo $this->sum = $a + $b ." ";
           $a = $b;
           $b =$this->sum;
        }
    }
 }
//  class EvenFibonacci extends Fibonacci{
//     public function generateSeries(){
//         echo $this->sum;

//     }


//  }
//  class OddFibonacci extends Fibonacci{
//     public function generateSeries(){
//         if ($this->sum %2!=0){
//             echo "odd fibonacci " .$this->sum;
//         }
//         else{
//             exit();
//         }
//     }

//  }
 $newFibonacci =new Fibonacci(20);
 $newFibonacci->generateSeries();
//  $OddFibonacci = new EvenFibonacci(4);
//  $OddFibonacci->generateSeries();



 

 ?>
  





