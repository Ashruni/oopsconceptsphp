
<!-- 33 -->
<?php 
class Rectangle{
    public $length;
    public $width;
    public $ans1;
    public $ans2;
    public function __construct($length,$width){
        $this->length=$length;
        $this->width=$width;

    }
    public function rectangleArea(){
        echo $ans1= $this->length * $this->width  ."\n";

        
    }
    public function perimeter(){
        echo $ans2 = 2*($this->length + $this->width);


    }


}
$new_obj=new Rectangle(4,10);
$new_obj->rectangleArea();
$new_obj->perimeter();

?>
<!-- 34 + 20 = 54 -->

<!-- 59 -->
<!-- Write a PHP a class hierarchy for a library system, including classes like 
'LibraryItem', 'Book', 'DVD', etc. Implement appropriate properties and methods
 for each class. -->
 <?php 
class LibrarySystem{
    public function available(){
        echo "Library is open from monday to friday \n";
    }
}
class LibraryItem extends LibrarySystem{

    public function libraryItem(){
        echo "It has got several items including cd's ,books, materials \n";

    }
}
class Book extends LibrarySystem{
    public function books(){
        echo "They have wide range of books like fictional and motivation ect \n";

    }
}
class DVD extends LibrarySystem{
    public function videos(){
        echo "Academic related videos are contained here ";
    }
}
$new_obj6= new LibrarySystem();
$new_obj6->available();

$new_obj7=new Book();
$new_obj7->books();

$new_obja=new DVD();
$new_obja->videos();

$new_obj9=new LibraryItem();
$new_obj9->libraryItem();
 ?>
<!-- 60 -->
<!-- 7. Write a PHP class called 'Student' with properties like 'name',
 'age', and 'grade'. Implement a method to display student information. -->
 <?php 
 class Student{
    public $studentName;
    public $studentAge;
    public $studentGrade;
    public function __construct($studentName,$studentAge,$studentGrade){
        $this->studentName=$studentName;
        $this->studentAge=$studentAge;
        $this->studentGrade=$studentGrade;   
    }

    public function getStudentInfo(){
       
        echo "STUDENT NAME: $this->studentName \n STUDENT AGE : $this->studentAge   \n STUDENT GRADE : $this->studentGrade \n";
    } 
 }
$new_obj1=new Student("Akshaya R ","20","89");
$new_obj1->getStudentInfo();

 ?>
 <!-- Write a PHP a class called "BankAccount" with properties like "accountNumber" and "balance". 
 Implement methods to deposit and withdraw money from the account -->
 <!-- 61 -->
 <?php 
 class BankAccount{
    public $accountNumber;
    public $balance;
    public function __construct($acNumber,$balance){
        $this->accountNumber=$acNumber;
        $this->balance=$balance;
    }
    public function deposit(){
        echo "ac number:  {$this->accountNumber} \n Balance: {$this->balance} \n";
    }
    public function withdrawMoney(){
        echo "withdrawed money \n current balance : {$this->balance} ";

    }

 }
 $object_creation= new BankAccount("ACV21346","90000");
 $object_creation->deposit();
 $object_creation->withdrawMoney();
 ?>

 <!-- 62 -->
 <!-- . Write a PHP abstract class called 'Animal' with abstract methods like 'eat()'
  and 'makeSound()'. Create subclasses like 'Dog', 'Cat', and 'Bird' that implement these methods. -->
  <?php 
  abstract class Animal
  {
    abstract public function eat();
 
    abstract public function makeSound();
    // {
    //     echo "I ";
    // }

  }
  class Dog extends Animal{
    public function eat(){
        echo " \n Bones are there favorite snack! \n";
    }
    public function makeSound(){
        echo "Dogs bark \n ";

    }
  }
  class Cat extends Animal{
    public function eat(){
        echo "Fish is there favorite food \n";
    }
    public function makeSound(){
        echo "Meow Meow!";
    }
  }
  $new_object=new Dog();
  $new_object->eat();
  $new_object->makeSound();
  $new_objecta=new Cat();
  $new_objecta->eat();
  $new_objecta->makeSound();


  ?>
  <!-- 63 Inheritance and private access modifiers  -->
  <?php 
  class Jewellery
  
  {
    private $price1=10000;
    private function price(){
        echo "Price ranges from here {$this->price1}";
    }
  }
  class Jewels extends Jewellery{
    public function anotherPrice(){
        echo $this->price1;

    }
  }
  $new_object1=new Jewels();
//   $new_object1->price();
//  echo  $new_object1=new Jewellery();
  $new_object1->anotherPrice();




  ?>

<!-- 64 protected am in inheritance -->
<?php
class JewelleryNew{
    protected $variable1 =10000;
    protected $variable2 =20000;
    protected function sum(){
        echo "sum is" . $this->variable1 +  $this->variable2;
    }
}
class Necklace extends JewelleryNew{
    public $tax=300;
    function billAmount(){
        echo "sum : " . $this->variable1 + $this->variable2 + $this->tax ;
    }  
}
$new_obj1=new Necklace();
$new_obj1->billAmount();

?>

<!-- 65 -->
<!-- PHP program to create an object of a class and access the class attributes -->
<?php 
class NewClass{
    public $attribute1="apple";
    public $attribute2="oranges";
    public $attribute3="grapes";
    public function getAttributes(){
        echo $this->attribute1 ."\n";
        echo $this->attribute2."\n";
        echo $this->attribute3;
    } 
}
$new_object_creation = new NewClass();
$new_object_creation->getAttributes();


?>
<!-- 66 -->
<!-- PHP program to create multiple objects of a class and access attributes of the class -->
<?php 
class MultipleObjectCreation {
    public $attributeColor;
    public $attributeSteering;
    public function __construct($attributeColor,$attributeSteering){
        $this->attributeColor=$attributeColor;
        $this->attributeSteering=$attributeSteering;
    
    }
    public function showAttributes()
    {
        echo "The car is ".$this->attributeColor ." in color and its steering is ".$this->attributeSteering ."\n";

    }
}
$object1= new MultipleObjectCreation("RED","AUTOMATIC");
$object1->showAttributes();
$object2= new MultipleObjectCreation("BLUE","MANUAL");
$object2->showAttributes();
$object3= new MultipleObjectCreation("VIOLET","AUTOMATIC");
$object3->showAttributes();
?>
<!--67 PHP program to define methods within the class -->
<?php 
class DefineMethods{
    public function definingMethods(){
        echo "This is a method created inside the class ";
    }
}
$new_object_create=new DefineMethods();
$new_object_create->definingMethods();

?>
<!-- 67 -->
<!-- PHP program to initialize data members without using the constructor -->
<?php
class InitializeClass{
    public $dataMember1;
    public $dataMember2;
    public function Initialize(){
        $this->dataMember1="Diamonds";
        $this->dataMember2="Corals";
        echo $this->dataMember1;
        echo $this->dataMember2;
}

}
$new1=new InitializeClass();
$new1->Initialize();
// 68
// PHP program to print the size of the empty class
?> 
 <?php
class EmptyClass{

} 
$newObject= new EmptyClass();
$array= array($newObject);
echo "the size of empty class is :". sizeof($array);
?> 
<!--69 PHP program to create a class with setter and getter functions -->
<?php 
class NewClassA{
    public $variableA;
    public $variableB;
    public function setterFunction($variableA,$variableB){
        $this->variableA=$variableA;
        $this->variableB=$variableB;
    }
    public function getterFunction(){
        return $this->variableA . $this->variableB;
    }
}
$new_object_a = new NewClassA();
$new_object_a->setterFunction("Ayur","Veda");
ECHO $new_object_a->getterFunction();

?>
<!-- 70 -->
<!-- PHP program to create a class to add two distances -->
<?php 
class DistanceClass{
    public $distanceOne;
    public $distanceTwo;
    public function __construct($distanceOne,$distanceTwo){
        $this->distanceOne=$distanceOne;
        $this->distanceTwo=$distanceTwo;
        
    }
    public function getDistance(){
        echo $this->distanceOne."cm " . $this->distanceTwo."cm" ;
    }
}
$new_object_one=new DistanceClass(34,89);
$new_object_one->getDistance();
?>
<!-- 71 -->
<!-- PHP program to create a class to subtract one distance from another distance -->
<?php 
class DistanceReader{
    public $distance1;
    public $distance2;
    public $sub;
    public function getDistances($distance1,$distance2){
        $this->distance1=$distance1;
        $this->distance2=$distance2;
    }
    public function subractDistance(){
      
        echo $sub= $this->distance1 - $this->distance2;
    }
}
$new=new DistanceReader();
$new->getDistances(90,78);
$new->subractDistance();

?>
<!-- 72 -->
<!-- PHP program to create a class to add two times -->
<?php 
class AddTwoTimes{
    public $firstNumber;
    public $secondNumber;
    public function addTwoSetter($firstNumber,$secondNumber){
        $this->firstNumber=$firstNumber;
        $this->secondNumber=$firstNumber;
    }
    public function addTwo(){
        echo "answer is: ". 2 *( $this->firstNumber + $this->secondNumber); 
    }
}
$newA=new AddTwoTimes();
$newA->addTwoSetter(89,80);
$newA->addTwo();
?>
<!-- 73 -->
<!-- PHP program to convert seconds into hours, minutes, and seconds -->
<?php 
class Reader{
    public $seconds;
    public function secondsReader($sec){
        $this->seconds=$sec;
    }
    public function hourConvertor(){
        echo  $this->seconds / 3600 . " hours\n " ;
    }
    public function minuteConvertor(){
        echo  $this->seconds/ 60 ."minute\n";
    }
}

$newConvertor=new Reader();
$newConvertor->secondsReader(60);
$newConvertor->minuteConvertor();
$newConvertor->hourConvertor();
?>
<!-- 74 -->
<!-- PHP program to convert hours, minutes, and seconds into several seconds -->
<?php 
class TimeReader{
    public $time;
    public function timeSetter($time){
        $this->time=$time;
    }
    public function hourToSec(){
       echo "{$this->time} Hour = ".( $this->time *60*60 ). "secs\n " ;
    }
    public function minutesToSec(){
        echo "{$this->time} Minute = ".( $this->time *60 ). "secs\n";
    }
}
$newConverter=new TimeReader();
$newConverter->timeSetter(1);
$newConverter->hourToSec();
$newConverter->minutesToSec();

?>
<!-- 75 -->
<!-- PHP program to implement a cascaded function call -->
<!-- cascaded call will return the function content in $this and after creating an object its called like chained -->
<?php 
class CascadedFunctionCall{
    public function function1(){
        print("function1() \n");
        return $this;
    }
    public function function2(){
        print("function2() \n");
        return $this;
    }
    public function function3(){
        print("function3()");
        return $this;
    }
    }
$new_object_a = new CascadedFunctioncall();
$new_object_a->function1() ->function2()->function3();
?>
<!-- 76 -->
<!-- PHP program to implement the parameterized constructor using __construct() -->
<?php 
class ParametrizedConstructor{
    public $plantName;
    public $plantSpecies;
    public function __construct($plantName,$plantSpecies){
        echo "PLANT NAME " . $this->plantName =$plantName . "\n";
        echo "PLANT SPECIES " . $this->plantSpecies =$plantSpecies ."\n";
    } 
}
$new_object_creation_a=new ParametrizedConstructor("Rose","Roseacea");
// $new_object_creation_a->
?>
<!-- 77 -->
<!-- PHP program to demonstrate the use of destructor -->
<?php 
class DestructorDemonstrator{
    public function __destruct(){
        echo "This is a destructor function that returns the content \n ";
    }
}
// $newObjectCreation = new DestructorDemonstrator();

?>
<!-- 78 -->
<!-- PHP program to call a base class constructor from the derived class -->
<?php 
class ConstructorFromDerivedClass{
    public $variableA;
    public $variableB;
    public function __construct($variableA,$variableB){
        $this->variableA=$variableA;
        $this->variableB=$variableB;
        echo "Your name is ". $this->variableA ."and your age is ". $this->variableB ;
    }
}
class DerivedClass extends ConstructorFromDerivedClass{
    public function __construct(){
        parent ::construct();
        echo "This is a derived class ";     
    }
}
$newObject=new ConstructorFromDerivedClass("Agarwal","26");
?>
<!-- 79 -->
<!-- PHP program to demonstrate the multi-level inheritance -->
<?php
class MultiLevelInheritanceClass{
    public function metal(){
        echo "its a metal\n ";
    }
} 
class MultiLevelInheritanceOne extends MultiLevelInheritanceClass{
    public function gold(){
        echo  "its a gold \n";
    }
}
class MultiLevelInheritanceTwo extends MultiLevelInheritanceOne{
    public function copper(){
        echo "its a copper \n";
    }
}
// $A = new MultiLevelInheritanceClass();
// $A->metal();
$B = new  MultiLevelInheritanceTwo();
echo $B->copper();
echo $B->metal();
echo $B->gold();
?>
<!-- 80 -->
<!-- PHP program to demonstrate the example of the simple abstract class -->
<?php 
abstract class SimpleAbstractClass{
    abstract public function abstractFunction();
}
class AnotherClass extends SimpleAbstractClass{
    public function abstractFunction(){
        echo "This is an abstract class method \n";
    }
}
$new_objectA = new AnotherClass();
$new_objectA->abstractFunction();
?>
<!-- 81 -->
<?php 
// PHP program to inherit an abstract class into multiple non-abstract classes
abstract class AbstractClass{
    abstract public function services();

}
class CarClass extends AbstractClass{
    public function services(){
        echo "Cars should be serviced in between 6 months \n ";
    }
}
class GadgetsClass1 extends AbstractClass{
    public function services(){
        echo "Gadgets will have a warranty card ";
    } 
}
$new_objectB=new CarClass();
$new_objectB->services();
$new_objectC=new GadgetsClass1();
$new_objectC->services();
?>
<!-- 82 -->
<!-- PHP program to demonstrate the inheritance of abstract classes -->
<?php 
abstract class AnimalSpecies{
    abstract public function care();
}
class AbstractDogs extends AnimalSpecies{
    public function care(){
        echo "Dogs fur and nails need to be taken care of \n";
    }
} 
class AbstractCats extends AnimalSpecies{
    public function care(){
        echo "Cats need to be taken care of thr fur and nails too";
    }
}
$new_object_create= new AbstractDogs();
$new_object_create->care();
$new_object_createB= new AbstractCats();
$new_object_createB->care();
// $new_object_createC= new AnimalSpecies();
// $new_object_createC->care();
// Uncaught Error: Cannot instantiate abstract class AnimalSpecie
?>
<!-- 83 -->
<!-- PHP program to demonstrate the method overriding -->
<?php 
class MethodOverridingClass{
    public $variableAB;
    public $variableBC;
    public function __construct($variableAB,$variableBC){
        $this->variableAB = $variableAB;
        $this->variableBC = $variableBC;
    }
}

class MethodOverridingClass1 extends MethodOverridingClass{
    public $variableCD;
    public function __construct($variableAB,$variableBC,$variableCD){
        $this->variableAB = $variableAB;
        $this->variableBC = $variableBC;
        $this->variableCD = $variableCD;
        echo $this->variableAB . $this->variableBC .$this->variableCD ;

    }
}
$newObj=new MethodOverridingClass1("hi ","its ","my method");
?>
<!-- 84 -->
<!-- PHP programs to pass an object of class as an argument -->
<?php 
class ObjectClass{
    public $variableAB;
    public function __construct($variableAB){
        $this->variableAB= $variableAB;
    }
    public function getVariables(){
        echo "this is : ". $this->variableAB;
    } 
}
$new_obj_creation=new ObjectClass("Mangos");
$new_obj_creation->getVariables();

?>
<!-- 85 -->
<!-- PHP programs to demonstrate the function returning object -->
<?php
class FunctionReturningObject{
    public function Returnfunctions(){
        echo "this is nice ! \n ";
    }
}
$newObjectA=new FunctionReturningObject();
$newObjectA->Returnfunctions();


?>
<!-- 86 -->
<!-- PHP program to implement an interface into multiple classes -->
<?php 
class Toy{

}
class Vehicle{

}
class Scooter{

}
interface Charger{
    public function rechargeBattery();
}
class ElectricToy extends Toy implements Charger{
    public function rechargeBattery(){
        echo "Electric Toy needs to charged for 40 minutes \n";
    }
}
class ElectricVehicle extends Vehicle implements Charger{
    public function rechargeBattery(){
        echo "electric vehicle needs 10 hours of charging \n";
    }


}
class ElectricScooter extends Scooter implements Charger{
    public function rechargeBattery(){
        echo "echo Electric scooter needs to charged for 6 hour a day \n";
    }

} 
$newly_created1=new ElectricToy();
$newly_created1->rechargeBattery();
$newly_created2=new ElectricVehicle();
$newly_created2->rechargeBattery();
$newly_created3=new  ElectricScooter();
$newly_created3->rechargeBattery();


?>
<!-- 87 -->
<!-- PHP code to implement an interface into multiple classes -->
<?php 
class LivingBeing{

}
interface Food{
    public function basicFood();
}
class Monkeys extends LivingBeing implements Food{
    public function basicFood(){
        echo "Monkeys eat banana \n";
    }
    
}
class Horses extends LivingBeing implements Food{
    public function basicFood(){
        echo "Horses eat oats \n";
     }
}
$newObjectCreation=new Monkeys();
$newObjectCreation->basicFood();
$newObjectCreationA=new Horses();
$newObjectCreationA->basicFood();
?>
<!-- 88 -->
<!-- PHP code to implement multiple interfaces in the same class -->
<?php 
class Humans{
    
}
interface Foods{
    public function getFood(); 
}
interface Air{
    public function getAir();
}
interface Water{
    public function getWater(); 
}
class LivingBeings extends Humans implements Foods,Air,Water{
    public function getFood(){
        echo "Humans take food due to there hunger drive \n";
    }
    public function getAir(){
        echo "Humans take oxygen to survive \n";
    }
    public function getWater(){
        echo "Water is one of the basic nessaccity \n";
    }
}
$newObjectCreateA= new LivingBeings();
$newObjectCreateA->getFood();
$newObjectCreateA->getAir();
$newObjectCreateA->getWater();
// $newObjectCreateB=new LivingBeings();
// $newObjectCreateB->getFood();
// $newObjectCreateA->getAir();
// $newObjectCreateA->getWater();

?>
<!-- 89 -->
<!-- PHP program to demonstrate the multi-level inheritance -->
<?php 
class Parents{
    public function parentFeatures(){
        echo "this is parent method \n";
    }
}
class Child1 extends  Parents{
    public function child1(){
        echo "this is child1 method \n";
    }

}
class Child2 extends Parents{
    public function child2(){
        echo "this is child2 method \n";
    }
}
$new_object_cre= new Child2();
$new_object_cre->child2();
$new_object_creA=new Child1();
$new_object_creA->child1();
$new_object_creB=new Child1();
$new_object_creB->child1();

?>
<!-- 90 -->
<!-- create car parent class abstract method mileage and wheel ,child class Tesla and suzuki -->
<?php 
abstract class CarParent{
    abstract public function mileage();
    abstract public function wheel();
}
class Tesla extends CarParent{
    public function mileage(){
        echo "Great mileage";
    }
   public function wheel(){
        echo "Great wheel ";
    }
}
class Suzuki extends CarParent{
    public function mileage(){
        echo "Great mileage";
    }
    public function wheel(){
        echo "Great wheel ";
    }
}
$carObject=new Tesla();
$carObject-> mileage();
$carObject-> wheel();

// abstract class 
// ?>
<!-- 95 - 100 -->

<!-- 100 -->
<!-- # create a class laptop using construct (processor ,color,os,memory) 2 lap obj -->
<?php 
class Laptop{
    public $process ;
    public $color;
    public $os;
    public $memory;
    public function __construct($process,$color,$os,$memory){
        $this->process = $process;
        $this->color=$color;
        $this->os=$os;
        $this->memory=$memory;
    }
    public function laptops(){
        echo "Laptop has ".$this->process . " and is ".$this->color." in color with " . $this->os. " and ".$this->memory ;
    }
}
$laptops=new Laptop("intel","rose quartz","windows","250");
$laptops->laptops();

?>
<!-- 101 -->
<!-- Create three classes: Vehicle, Car, and SportsCar. 
Demonstrate multilevel inheritance where SportsCar inherits 
from Car, and Car inherits from Vehicle.
 Each class should have a method that reflects its purpose -->
<?php 
class Vehicles{
    public function features()
    {
        echo "There are wide range of vehicles  \n";
    }
}
class Car extends Vehicle {
    // extends Vehicles
    public function features(){
        echo "Basic use of Vehicle is for transportation! \n";

    }

   

} 
class SportsCar extends Car{
    public function features()
    {
        echo "Sports cars are built different \n";
    }
}
$new_ObjectA=new Vehicles();
$new_ObjectA->features();
$new_ObjectB=new Car();
$new_ObjectB->features();
$new_ObjectC=new SportsCar();
$new_ObjectC->features();
?>
<!-- Consider the Shape hierarchy with Circle and ColoredCircle. 
If the radius of a circle is 5 units, calculate the area of the circle 
using the calculateArea() method  102 -->
<?php

class Shapes{
    public $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }
    function shape(){
        echo "closed surfaces";
    }
} 
class CirclesABC extends Shapes {
    public function circle(){
        echo "its a circle";
    } 
    public function calculateArea(){
        echo "Area of a circle : " . 2 * 3.14 * $this->radius;  
    }
}
class  ColoredCircle extends CirclesABC {
    public function coloredCircle(){
        echo "its a colored Circle";
    } 
}
$new_ObjectAB= new CirclesABC(34);
$new_ObjectAB->calculateArea();

?>
<!-- Employee Salary Calculation: 103

In the Person, Employee, and Manager hierarchy, assume that an Employee has a base 
salary of $50,000 and a Manager has an additional bonus of $10,000.
 Calculate and display the total salary of a Manager using the work() method. -->
 <?php 
 class Person{

 }
 class Employee{
    public $salary= 50000 ;



 }
 class Manager{
    public $managerSalary;
    public function __construct(){
        $this->managerSalary = 60000 ;
    }  


 }
 class Display extends Manager{
    public  $totalSalary;
    public function work(){
        echo "total salary of the manager is ".$this->managerSalary ;
    }

 }
 $new_Object_ABC=new Display();
 $new_Object_ABC->work();


 ?>
 <!-- Living Being Information:

Given the LivingBeing, Animal, and Mammal classes, instantiate a Mammal
object with the species set to "Human," the sound set to "Talks," and the
fur color set to "Brown." Display the information using the appropriate methods -->








