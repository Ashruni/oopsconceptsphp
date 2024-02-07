<!-- PHP program to create a a class to find the addition of two integer numbers
249 -->
<?php 
class Addition{
    public $varA;
    public $varB;
    public function __construct($varA,$varB){
        $this->varA = $varA;
        $this->varB =$varB;
    }
    public function addition(){
        $this->sum = $this->varA + $this->varB;
        echo $this->sum;

    }
}
$newObj = new Addition(1,5);
$newObj->addition();
?>
<!-- 250 try doing the addition without construct -->
<?php 
class Addition1{
    PUBLIC $varA;
    PUBLIC $varB;
    public function add($varA,$varB){
        $this->sum = ($this->varA=$varA) + ($this->varB=$varB);
        echo $this->sum;

    }
}
$obj = new Addition1();
$obj->add(3,4);
?>
<!-- 251 dO THE ADDITION USING INHERITANCE -->
<?php 
class Addition2{
    public $a=1;
    public $b=2;
    public function add1(){
        $this->sum= $a +$b;
        echo $this->sum;
        
    }
}
?>
<!-- 252 PHP Code to print current date in various formats in simple oops using different methods-->

<?php 
class Dates{
    public function date1(){
        echo "TODAY IS ". date("d/m/y")."\n";
    }
    public function date2(){
        echo "TODAY IS". date("d/M/Y")."\n";
    }
    public function date3(){
        echo "TODAY IS ".date("D,d/m/y")."\n";
    }
    public function date4(){
        echo "TODAY IS ".date("D,d/M/Y")."\n";
    }

}
$newObj = new Dates();
$newObj->date1();
$newObj->date2();
$newObj->date3();
$newObj->date4();

?>
<!-- 253 Design a hierarchical structure for Fibonacci series,
 with a base class and two derived classes representing 
 different variations of the series -->
 <?php 
 class FibonacciSeries{
    
    
    public function fibonacci($var1,$var2){
        $this->a=array(0,1);
        $this->sum=0;
        $this->var1=0;
        $this->var2=1;
        for($i=0;$i<=10;$i++){
           
            $this->sum = ($this->var1) + ($this->var2);
            $this->var1=$this->var2;
            $this->var2=$this->sum;
            array_push($this->a,$this->sum); 
        }
        echo "FIBONACCI  SERIES :";
        foreach($this->a as $k){
            echo " ".$k ; 
        }
        
       
    }
   
 }
 class ChildFibonacci extends FibonacciSeries{

    public function evenFib(){
        parent::fibonacci(0,1);
        echo "\n";
        echo "EVEN FIBONACCI  SERIES :";
        foreach($this->a as $k){
            if($k%2==0){
                echo " ".$k;
            }
        }
        echo "\n";
        
    }
 }
 class SecondChildSeries extends ChildFibonacci{
    public function oddFib(){
        parent::evenFib();
        echo "ODD FIBONACCI  SERIES  :";
        foreach($this->a as $k){
            if($k%2!=0){
                
                    echo " ". $k;
                
                
            }
        }
       
    }
 }
 $newOBJECT = new FibonacciSeries(0,1);
 $newOBJECT2= new SecondChildSeries();
 $newOBJECT2->oddFib();

 ?>

 <!-- 254 -->
 <!-- Use an abstract class for the base Fibonacci series.
  Implement concrete classes that inherit from it 
 to represent different types of fib series with distinct calculations -->
 <?php 
 abstract class FibonacciSeries1{
    abstract public function fibonacci1($var1,$var2);
 }
 class InheritedClass extends FibonacciSeries1{
   
        public function fibonacci1($var1,$var2){
            $this->a=array(0,1);
            $this->sum=0;
            $this->var1=0;
            $this->var2=1;
            for($i=0;$i<=10;$i++){
               
                $this->sum = ($this->var1) + ($this->var2);
                $this->var1=$this->var2;
                $this->var2=$this->sum;
                array_push($this->a,$this->sum); 
            }
            echo "FIBONACCI  SERIES :";
            foreach($this->a as $k){
                echo " ".$k ; 
            }
        }
 }
 $newO = new InheritedClass();
 $newO->fibonacci1(0,1);
 ?>
 <!-- 255 -->
 <!-- Add a static method in the base class to calculate the Fibonacci
  series without creating an instance.
   Demonstrate its usage in a derived class -->
   <?php 
   class StaticClassFib{
   
    public static function fibonacciA(){
        echo "without instance "."0112358..";
      }
    }
StaticClassFib::fibonacciA();
class DerivedStaticClassFib extends StaticClassFib{
    public function fib(){
        parent::fibonacciA();
        echo "  with instance and the above is inherited";
    }
}
$denew = new DerivedStaticClassFib();
$denew ->fib();
   ?>
   <!-- 255 -->
   <!-- Simulate multiple inheritance by using interfaces. Create a Fibonacci interface with 
   a method signature and implement it in a class along with another base class. 
   Then, derive a class from these two, showcasing multiple inheritance. -->
   <?php 
   class ParentClassFibonacci{
    public function fibonacciPC(){
        echo "this is a parent class";
    }
   }
   interface Fib{
    
    public function fibonacciIn();
}
class childFibInterface extends ParentClassFibonacci implements Fib{
    public $var1;
    public $var2;
    public $sum;
    public function fibonacciPC(){
        echo "FIBINOCCI SERIES: 01";
    }
    
    public function fibonacciIn(){
    
        $this->var1=0;
        $this->var2=1;
        $this->sum=0;
        for($i=0;$i<=10;$i++){
            $this->sum= $this->var1+$this->var2;
            $this->var1= $this->var2;
            $this->var2= $this->sum;
            echo $this->sum;
        }

    }
} 
$newObjectIn = new childFibInterface();
$newObjectIn->fibonacciPC();
$newObjectIn->fibonacciIn();

?> 
<!-- 256 -->
<!-- Create a PHP class representing a Fibonacci series with encapsulation. 
Include methods to generate the series up to a given number -->
<?php 
class FibonacciEncapsulation {
    private $var1;
    private $var2;
    private $sum;
    public function getFib(){
        $this->var1;
        $this->var2;
        $this->sum;
      
    }
    public function setterFib($var1,$var2,$sum){
        $this->var1 = $var1;
        $this->var2 = $var2;
        $this->sum = $sum;
        echo "FIB SERIES USING ENCAPSULATION 0 1";
       
    }
    public function fibDisplay(){
        for($i=0;$i<=16;$i++){
            $this->sum = $this->var1 + $this->var2;
            $this->var1= $this->var2;
            $this->var2= $this->sum;
            echo " ".$this->sum;
        }
    }
}

    $nwo= new FibonacciEncapsulation();
    $nwo->getFib();
    $nwo->setterFib(0,1,0);
    $nwo->fibDisplay();

?>

<!-- 257 -->
<!-- Modify the Fibonacci series class to have a 
private variable for the series array. 
Implement getter and setter methods to access and modify the series. -->
<?php 
class fibonacciEncapsulate{

    private $var1;
    private $var2;
    private $sum;
    private $a=array(0,1);

    public function getterEncapsulation(){
        $this->var1;
        $this->var2;
        $this->sum;
        $this->a;

    }
    public function setterEncapsulation($var1,$var2,$sum,)
    {
        $this->var1=$var1;
        $this->var2=$var2;
        $this->sum=$sum;
        $this->a;
        for($i=0;$i<=10;$i++){
            $this->sum = $this->var1 + $this->var2;
            $this->var1= $this->var2;
            $this->var2= $this->sum;
            // echo " ".$this->sum;
            array_push($this->a,$this->sum);
           
        }
        foreach($this->a as $k){
            echo "\n". " ".$k;
        }
        // var_dump($this->a);
    }
}
$newOBject = new fibonacciEncapsulate();
$newOBject->setterEncapsulation(0,1,0);
?>
<!-- 258 -->
<!-- Add a constructor to the Fibonacci series class that
 initializes the series with the first two elements.
The series is encapsulated and cannot be accessed directly -->
<?php 
class FibConstructor{
    private $first;
    private $second;
    private $sum;
    public function __construct(){
        $this->first =0;
        $this->second=1;
        $this->sum=0;
        echo "FIB SERIES : ";
    }
    public function display(){
        for($i=0;$i<=16;$i++){
        $this->sum= $this->first+$this->second;
        $this->first = $this->second;
        $this->second =$this->sum;
        echo $this->sum ." ";
        }
}

}
$newFib = new FibConstructor();
$newFib->display();
?>
<!-- 259 -->
<!-- Create a protected method in the Fibonacci series class that
 calculates the next element in the series.
 Ensure it cannot be accessed directly from outside the class. -->
 <?php 
 class FibProtected{
    private $first;
    private $second;
    private $sum;
    private $a;
    private $n;
    public function __construct(){
        $this->first =0;
        $this->second=1;
        $this->sum=0;
        $this->a=array(0,1);
        $this->n;
        echo "FIB SERIES WITH ENCAPSULATION AND CONSTRUCT: ";
    }
    public function fibProtected($n){
        for($i=0;$i<=10;$i++){
            $this->sum =  $this->first +  $this->second;
            $this->first= $this->second;
            $this->second= $this->sum;
            $this->n=$n;
            array_push($this->a,$this->sum);


    }
    
    foreach($this->a as $k){
        echo $k;
    }
    echo  "\n  {$this->n}th element is ".$this->a[$this->n-1];
    }
 }

$newFib = new FibProtected();
$newFib->fibProtected(5);
 ?>
 <!-- 260 -->
 <!-- PHP program to create an object of a class and access the class attributes -->
 <?php 
 class NewClass{
    public $name="Shekar";
    public $age = 23;
    public function newFunction(){
        echo "class attributes and objects : " .$this->name . $this->age ;

    }
 }
 $nw = new NewClass();
 $nw->newFunction();
 ?>
 <!-- 261 -->
 <!-- PHP program to create multiple objects of 
 a class and access methods of the class -->
 <?php 
 class MultiObjectClass{
    public $name;
    public $age;
    public $contactNumber;
    public function multiObject1($name){
        echo " ".$this->name = $name;
    }
    public function multiObject2($name){
        echo " ".$this->name = $name;
    }

    public function multiObject3($name){
        echo " ".$this->name = $name;
    }
 }
 $new1= new MultiObjectClass();
 $new1->multiObject1("Rahul");
 $new1->multiObject2("Gokul");
 $new1->multiObject3("Raghav");

 ?>
  <!-- 262 -->
 <!-- PHP program to create multiple objects of 
 a class and access attributes of the class -->
 <?php
 class AttributesClass{
    public $name;
    public $age;
    public $number;

 }
  $names= new AttributesClass();
  echo $names->name = "Rithu"."\n";
  echo "age ". $names->age = 25 . "\n";
  echo $names->number = "contact number:". 234567;
 ?>
 <!-- 263 -->
 <!-- PHP program to initialize data members without using the constructor -->
 <?php 
 class DataClass{
    public $var1;
    public $var2;
    public $sum;

    public function dataFunction(){
        $this->var1=9;
        $this->var2=7;
        echo "without using constructor : ".$this->sum = $this->var1 + $this->var2;
    }
 } 
 $nw= new DataClass();
 $nw->dataFunction();
 ?>
 <!-- 264 -->
 <!-- PHP program to print the size of the empty class -->
 <?php 
 class EmptyClass{
 }
 $s= new EmptyClass();
 $r=array($s);
 echo "size ".sizeof($r);
 ?>
 <!-- 265 -->
 <!-- PHP program to create a class with setter and getter functions -->
 <?php 
 class SetterGetter{
    public $var1;
    public $var2;
    public $var3;
    public function setter(){
        $this->var1=90;
        $this->var2=99;
        $this->var3=98;
    }
    public function getter(){
        echo " ". $this->var1;
        echo " ".$this->var2;
        echo " ".$this->var3;

    }
 }
 $newSetter = new SetterGetter();
 $newSetter -> setter();
$newSetter ->getter();
 
 ?>
 <!-- 266 -->
 <!-- PHP program to create a class to add two distances -->
 <?php 
 class DistanceClass{
    public $distance1;
    public $distance2;
    public function getDistance(){
        $this->distance1=90;
        $this->distance2=89;
        echo " ADDED DISTANCES ".$this->distance1 + $this->distance2 ."km";
    }
 }
 $newDistance = new DistanceClass();
 $newDistance->getDistance();
 ?>

<!-- 267 -->
<!-- PHP program to create a class to subtract one distance from another distance -->
<?php 
class SubtractClass{
    public $distance1;
    public $distance2;
    
    public function getDistance(){
        $this->distance1=790;
        $this->distance2=660;
        echo "SUBTRACTED DISTANCES ".$this->distance1 - $this->distance2;
    
    }
}
$distance = new SubtractClass();
$distance->getDistance();
?>
<!-- 268 -->
<!-- 
PHP program to create a class to add two times -->
<?php 
class TimesClass{
    public $hour;
    public $minute;
    public $second;
    public function timeFunctionReceive($h,$m,$s){
        echo $this->hour =$h . ":". $this->minute =$m .":".$this->second = $s ."\n";
    } 
    public function timeCalculator($nw,$nw1){
        $this->second=$nw->second + $nw1->second;
        $this->minute= $nw->minute + $nw1->minute + ($this->second/60);
        $this->hour= $nw->hour + $nw1->hour +($this->minute/60);
        $this->second %=60;
        $this->hour %=60;

        echo " ". $this->hour;
        echo " " .$this->minute;
        echo " ". $this->second;
    }
}
$nw = new TimesClass();
$nw->timeFunctionReceive(12,34,67);
$nw1 = new TimesClass();
$nw1->timeFunctionReceive(15,35,90);
$nw->timeCalculator($nw,$nw1);
// $nw->timeCalculator();
?>
<!-- 269 -->
<!-- PHP program to convert seconds into hours, minutes -->
<?php
class TimeConversion{
    public $var1;
    public $var2;
    public function minuteConverter($n){
        $this->var1 ;
        echo $this->var1 = $n/60 ."secs";

    }
    public function HourConverter($k){
        $this->var2 ;
        echo $this->var2 = $k/(60*60) . " hours";

    }
}
$new= new TimeConversion();
echo "enter your seconds here \n";
$new->minuteConverter(4000);
echo "\n";
$new->HourConverter(36000); //
?>

<!-- 270 -->
<!--  Create an interface named FibonacciGenerator 
with a method for generating the series. Implement
 this interface in the Fibonacci 
series class while maintaining encapsulation.-->

<?php 
interface FibonacciGenerator{
    public function generate();
}
class EncapsulatesFib implements FibonacciGenerator{
    private $var1;
    private $var2;
    private $var3;
    public function generate(){
        $this->var1 =0;
        $this->var2 =1;
        $this->var3 =0;
        ECHO "0 1 ";
        for($i=0;$i<=10;$i++){
            $this->var3= $this->var1 + $this->var2;
            $this->var1=$this->var2;
            $this->var2=$this->var3;
            echo $this->var3." ";

        }
    }
}
$newEnca = new EncapsulatesFib();
$newEnca->generate();
?>
<!-- 271 -->
<!-- Declare a method as final in the Fibonacci series class. 
Attempt to override this method in a subclass and
 observe the behavior. Ensure encapsulation is not compromised. -->
 <?php 
 final class FibonacciFinal{
    public function finalMethod(){
        echo "hiii" ;
    }
 }
//  class ChildOverride extends FibonacciFinal{
//     public function finalMethod(){
//         echo "hello";
//     }
//  }
//  $nwO = new ChildOverride();
//  $nwO->finalMethod();
// Class ChildOverride cannot extend final class FibonacciFinal

 ?>
 <!-- 272 -->
 <!-- Extend the Fibonacci series class to create a
  new class representing a modified Fibonacci series. 
 Ensure that encapsulation is maintained in the child class. -->
 <?php 
 class ParentClass{
    public function fibinocci(){
        echo " (0 1) =>";
    }
 }
 class ChildClass extends ParentClass{
    private $var1;
    private $var2;
    private $var3;
    public function setFibinocci(){
        $this->var1 =0;
        $this->var2 =1;
        $this->var3 = 0;
        for($i=0;$i<10;$i++){ 
            $this->var3 = $this->var2 + $this->var1;
            $this->var1 = $this->var2;
            $this->var2 = $this->var3; 
            echo  "  ".$this->var3;
        }

    }
 }
 $nw1= new ParentClass();
 $nw1->fibinocci();
 $nw = new ChildClass();
 $nw->setFibinocci();
 ?>
 <!-- 273 -->
 <!-- Write a PHP function to check if a given number 
 is an Armstrong number or not in class based pgm   -->
 <?php 
 class ArmstrongNumber{
    public $var1;
    public $var2;
    public $var3;
    public $var4;

    public function ArmstrongChecker($number){
$this->var1 = $number;
for($i=0;$i<=strlen($this->var1);$i++){
     $var4= $this->var1%10;
   
   $this->var3+=($var4)**3 ;
    
    intval($this->var1/10)." ";
   
   $this->var1=intval($this->var1/10)." ";
}
echo " ".  $number;
if($this->var3 == $number){
    echo " YES ITS AN ARMSTRONG NUMBER ";
}
else{
    echo " IS NOT AN ARMSTRONG NUMBER ";
}
 }
 }
 $newe= new ArmstrongNumber();
 $newe->ArmstrongChecker(153);
 ?>

<!-- 274 -->
<!--  -->

 
