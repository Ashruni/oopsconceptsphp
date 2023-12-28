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
fur color set to "Brown." Display the information using the appropriate methods 104 --> 
<?php 
class LivingBeing{

}
class Animal extends LivingBeing{

}
class Mammal extends Animal{
    public $species ="Humans";
    public $sounds="Talk";
    public $furColor="Brown";
    public function __constructor($species,$sounds,$furColor){
        $this->species=$species;
        $this->sounds=$sounds;
        $this->$furColor=$furColor;
    }
    public function setter(){
        echo $this->species ." ". $this->sounds ." ". " and their fur is " .$this->furColor ;
    }
}
$newObjectA= new Mammal();
$newObjectA->setter();
?>
// Method Overriding:

// 105 Add a method displayInfo() to the Person class. 105
// Override the displayInfo() method in the Employee class to include the employeeId


<?php 
class Persons{
    public function displayInfo(){

    }
}
class Employees extends Persons{
    public function displayInfo(){
        echo "Employee Id : 302936";
    }
}
$newEmployee = new Employees();
$newEmployee->displayInfo();

?>
<!-- 106 Create a class MathOperation with a method calculate($a, $b) that adds two numbers.
Extend the class to create a class AdvancedMathOperation and override the calculate() method to
 perform multiplication instead of addition.
Test the overridden method with numerical values. -->
<?php 
// public $a=(int)readline("enter a number :");
// public $b=(int)readline("enter a number :");
class MathOperation {
   
    function calculate($a,$b){
        echo " sum is : ". $c= $a + $b; 
    }
}
class AdvancedMathOperation extends MathOperation{
    function calculate($a,$b){
        echo " Product is :  " .$c =$a*$b;
    }
}
$newMaths= new MathOperation();
$newMaths->calculate(3,4);
$newMathsA= new AdvancedMathOperation();
$newMathsA->calculate(4,5);
?>
<!-- 107 
Extend the AdvancedMathOperation class to create a class CustomMathOperation and override
 the calculate() method to perform exponentiation.Test the overridden method with numerical values -->
<?php 
class AdvancedMathOperations{
    function calculation($number1,$number2){

    }
}
class CustomMathOperation extends AdvancedMathOperations{
    function calculation($number1,$number2){
        echo "exponentiation :".$number1**$number2;

    }
}
$newAdvanced=new CustomMathOperation();
$newAdvanced->calculation(8,3)

?>
<!-- 108 Accessing Parent Numeric Method:
Add a method divide() to the MathOperation class.
Override the divide() method in the AdvancedMathOperation class to perform division.
Override it again in the CustomMathOperation class to print "Custom division."
Call both the parent and child class methods from an instance of CustomMathOperation 
with numerical values. -->
<?php
class MathOperations{
    
    public function divide($x,$y){

    }
}
class AdvancedMathsOperations extends MathOperations{
    public function divide($x,$y){
        echo $z= $x / $y."\n" ;

    }
}
class CustomMathOperations extends AdvancedMathsOperations{
    public function divide($x,$y){
        echo $x ." ".$y ;
    } 
}
$newMathOperation =new AdvancedMathsOperations();
$newMathOperation->divide(100,2);
$newMathOperation1= new CustomMathOperations ();
$newMathOperation1->divide("custom", " division ");
?>
<!-- 109 Using Parent Keyword for Numeric Methods:
In the CustomMathOperation class, use the parent::calculate() to call the calculate() method 
from the AdvancedMathOperation class.Display the result with numerical values. -->
<?php 
class CustomMathOperations 
?>








