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
class AdvancedMathematicalOperation {
    public static function calculates(){

        echo "this is parent \n";
    }    
}
class CustomMathematicalOperations extends AdvancedMathematicalOperation{
    public function display(){
        parent:: calculates();
        echo "this is child \n ";

    }
}
$newObjectMaths= new CustomMathematicalOperations();
$newObjectMaths->display();

?>
<!-- 110 Mark the calculate() method in the MathOperation class as final.
Attempt to override it in the AdvancedMathOperation class.
Abstract Class with Numeric Methods: -->
<?php 
class AdvancedMath{
    final public function calculatess(){

    }
}
class AdvancedMathssOperations extends AdvancedMath{
    // public function calculatess(){
        // Fatal error:  Cannot override final method AdvancedMath::calculatess()
        // echo "tried method overriding after declaring it as final \n";
    // }
}
$newAdvancedMath= new AdvancedMathssOperations();
$newAdvancedMath->calculatess();

?>
<!-- 111 
Create an abstract class NumericOperation with an abstract method process($a, $b).
Extend NumericOperation with classes AdditionOperation, MultiplicationOperation, and
 ExponentiationOperation implementing the process() method.
Interface for Numeric Methods: -->
<?php 
abstract class NumericOperation{

    abstract function process($a,$b);
}
class AdditionOperation extends NumericOperation{
    function process($a,$b){
        echo $c= $a + $b ."\n";

    }
}
class MultiplicationOperation extends NumericOperation{
    function process($a,$b){
        echo $c= $a * $b ."\n";

    }

}
class ExponentiationOperation extends NumericOperation{
    function process($a,$b){
        echo $c= $a ** $b ."\n";

    }
}
// $newObj=new NumericOperation();
// $newObj->process(2,3);
// <!-- cannot instantiate abstract class  -->
$newObj=new AdditionOperation();
$newObj->process(2,9);
$newObj1=new MultiplicationOperation();
$newObj1->process(4,5);
$newObj2= new ExponentiationOperation();
$newObj2->process(3,2);
?>

<!-- 112 Create an interface NumericOperationInterface with a method getResult().
Implement the NumericOperationInterface in the MathOperation class.
Extend the MathOperation class to create a class SubtractionOperation and
 implement the getResult() method. -->
 <?php 
 interface NumericOperationInterface{
    public function getResult($x1,$y1);
 }
 class  MathematicsOperations{
   
    function calculate($a,$b){
        echo " sum is : ". $c= $a + $b; 
    }
}

 class SubtractionOperation extends MathematicsOperations implements NumericOperationInterface{
    public function getResult($x1,$y1){
        echo "this is a sub operation ! and the ans is : ".$p = $x1 - $y1 ;
    }
 } 
 $ObjectInterface = new SubtractionOperation();
 $ObjectInterface->getResult(8,9);

 ?>

 <!-- 113 Static Numeric Method Override:

Add a static method staticOperation() to the MathOperation class that adds two static numbers.
Override the staticOperation() in the AdvancedMathOperation class with multiplication.
Call both the parent and child class static methods with numerical values.
Multiple Instances with Numeric Values: -->
 
<?php 
class MathematicalOperations{

    public static function staticOperation($variable1,$variable2){
        echo "added :".$variable1 + $variable2 ;
    }
}
class AdvancedMathematicsOperations extends MathematicalOperations{
    public static function staticOperation($variable1,$variable2){

        echo "\n multiplied :". $variable1*$variable2  ;
    }
}
$newAdvanced1 = new MathematicalOperations();
$newAdvanced1->staticOperation(33,33); 
$newAdvanced = new AdvancedMathematicsOperations();
$newAdvanced-> staticOperation(23,44);
?>
<!--114 Create multiple instances of the CustomMathOperation class.
Call the calculate() and divide() methods for each instance with different numerical values.
Visibility Modifiers for Numeric Methods: -->
<?php 
class CustomMathematicalOperation{
    public function calculating($variableA,$variableB){
        echo " calculating";
    }
    public function divide($variableA,$variableB){
       echo "division " . $variable = $variableA / $variableB;
    }
}
$newCustom = new CustomMathematicalOperation();
$newCustom->calculating(34,45);
$newCustom->divide(100,2);

?>
<!-- 115 Add private, protected, and public methods to the MathOperation class.
Attempt to override each method in the AdvancedMathOperation and CustomMathOperation
 classes with different visibility modifiers.
 -->
 <?php 
 class MathsOperationClass{
    public function maths(){
        echo "PUBLIC  ACCESS MODIFIED";

    }
    private function maths1(){
        echo "PRIVATE ACCESS MODIFIED";
    }
    protected function maths2(){
        echo "PROTECTED ACCESS MODIFIED";
    }
 }
 class AdvancedMathssOperation extends MathsOperationClass{
    public function maths(){
        echo "THIS IS OVERRIDDEN \n";
    } 
    // private function maths1(){
    //     echo "THIS IS OVERRIDING PARENT CLASS";
    // }
    public function maths2(){
        echo "THIS WAS PROTECTED";
    }
  }
 class CustomMathssOperation extends AdvancedMathssOperation{
    public function maths(){
        echo "This is overriding ";

    }
    // protected function maths1(){
    //     echo "This is overriding ";

    // }
    public function maths2(){
        echo "This is overriding2";

    }
 }
 $newMaths= new AdvancedMathssOperation();
 $newMaths->maths();
//  $newMaths->maths1(); we cannot call private methods outside the class 
 $newMaths->maths2();
 ?>
 <!-- 116  
Add a method displayInfo() to the Person class.
Override the displayInfo() method in the Employee class to include the employeeId.
Multilevel Inheritance:-->
<?php 
class PersonNew{
    public function displayInfo(){
        echo "HII";   
    }
}
class EmployeeNew extends PersonNew{
    public function displayInfo(){
        echo "\n EMPLOYEE ID VP162637";
   }
}
$newEmployee = new EmployeeNew();
$newEmployee->displayInfo();

?>
<!-- // 117 Create a PHP class named Rectangle with a constructor that takes the
 length and width as parameters.Implement a method to calculate and return 
 the area of the rectangle. -->

 <?php 
 class Rectangle{
   public $length1;
   public $width1;
   public function __construct($length1,$width1){
        $this->length1=$length1;
        $this->width1=$width1;
        // echo "Rctangle Area :";
    }
    function calculate(){
        echo "AREA OF RECTANGLE IS :" . ($this->length1*$this->width1) ;

     }
 }
 $newRectangle=new Rectangle(14,20);
 $newRectangle->calculate();
 ?>
 <!-- 118 -->
 <!-- Define a PHP class called Student with a constructor that takes
  the student's name and three test scores as parameters. 
 Implement a method to calculate and return the average score. -->
  
<?php 
class Student{
    public $studentName;
    public $score1;
    public $score2;
    public $score3;
    public function __construct($studentName,$score1,$score2,$score3){
        $this->studentName=$studentName;
        $this->score1=$score1;
        $this->score2=$score2;
        $this->score3=$score3;
    }
    public function averageScore(){
         echo "STUDENT NAME ".$this->studentName." ".$score = ($this->score1+$this->score2+$this->score3)/300 *100 ."%";
    }
}
$newStudentScore= new Student("Rithika Niana :",90,89,90);
$newStudentScore->averageScore();


?>











