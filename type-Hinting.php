<!-- 204 -->
<!--Use default values for constructor parameters with type hinting.  -->
<?php 
class TypeHinting {
    public function giveDataType(array $numbers){
        $sum=0;
        foreach($numbers as $number){
            $sum = $sum + $number;

        }
        echo $sum;
    }
}
$newObj=new TypeHinting();
$newObj->giveDataType(array(12,23));
?>

<!-- 205 -->
<!-- Write a class that has PHP function that accepts an integer parameter 
using type hinting. Ensure the function returns double the input value. -->
<?php 
class IntegerParameter{
    public $sum = 0;
    public function integerFunction(int $x,int $y){

        $sum = $x+$y;
        echo "Therefore the sum is {$sum}";

    }
}
$obj=new IntegerParameter();
$obj->integerFunction(23,'34');
// $obj1=new IntegerParameter();
// $obj1->integerFunction(23,'art');
?>
<!-- 206 -->
<!-- Return Type Hinting for Objects:

Define a class called Person with properties for name and age. 
Write a function that accepts an instance of the Person class and returns the person's name. -->
<?php 
class Person {
    public function PersonInfo(string $x,int $y){
        echo "Persons name is {$x}";
    }
}
$newObj = new Person();
$newObj ->PersonInfo('Kiran',23);
?>
<!-- 207 -->
<!-- Modify the Person class from the previous question to 
allow the age property to be nullable. Update the function to 
handle cases where the age is not set.
Union Type Hinting: -->
<?php 
class Person1 {
    public function PersonInfo1(string $x,int $y=null){
        echo "Persons name is {$x} . {$y}";
    }
}
$newObj1 = new Person1();
$newObj1 ->PersonInfo1('Kiran');
?>
<!-- 208 -->
<!-- Create a function that takes a parameter which can be either an integer 
or a string (use union type hinting). If the input is an integer, return its 
square; if it's a string, return its length. -->
<?php 
class UnionHinting{
    public $value;
    // public function givingTypesHereAsParameters(float|int $value): int|float{ 
    //     echo $value;
    
        public function squareAndAdd(string | int $bar): int | string {
            if(gettype($bar) == 'integer'){
                return "Square of {$bar} is ". $bar ** 2 ;
            }
            else{
                return "string length is " .strlen($bar);
            }
          
         
        }
    
}
$newObject= new UnionHinting();
echo $newObject->squareAndAdd(3);
echo "\n";
$newObject1= new UnionHinting();
echo $newObject1->squareAndAdd('figure');

?>
<!-- 209 -->
<!-- Type Hinting in Traits:

Define a trait called Logger that has a method log accepting a string parameter. 
Create a class FileProcessor that uses this trait and implements a method to process
a file, logging relevant information. -->
 
<?php 
trait TraitNameLogger{
    public function log(){
       echo $string = "WE ARE LOGGING IN";
    }
} 

class FileProcessor {
    use TraitNameLogger;
    public function process(){
        $t = fopen("file123.txt","r");
        echo fread($t,filesize("file123.txt"));
        echo ("\n");
        echo "file has opened successfully";
        fclose($t);
        


    }

}
$object = new FileProcessor();
$object->log();
echo "\n";
$object->process();


?>
<!-- 210 -->
<!-- Write a function that accepts a callback as a parameter.
The callback should take two integers and return their product. 
Use type hinting to ensure the callback adheres to the specified signature.
 -->
<?php
// class hii{
function smth($str){
        echo $str . " L \n" ;
    }
function snmth($str){
        echo $str . " K";
    }
function retr($str,$htm){
        echo $htm($str);
    }
// }
// $newobj = new hii();
retr("welcome","smth");
retr("welcome","snmth");


?>
<!-- 211 -->
<!-- Write a function that accepts a callback as a parameter. 
The callback should take two integers and return their product.
 Use type hinting to ensure the callback adheres to the specified signature.
 -->
 <?php 
function functionName($num1,$num2){
    echo "product " . $num1*$num2;
}
function functionName1($num1,$num2){
    echo "sum ". $num1+$num2;
}
function returnFunction($num1,$num2,$anotherVariable){
    echo $anotherVariable($num1,$num2);
}
echo returnFunction(7,2,"functionName");
echo "\n";
echo returnFunction(7,2,"functionName1");

 ?>
 <!-- Array type Hinting -->
 <!-- 212 -->
 <!-- 
Design a function that takes an array of Person objects and returns an array of
 their names. Use array type hinting for the parameter. -->
 <?php 
 function TakeArrayOfPerson(array $persons){
    foreach($persons as $person){
        echo "person".$person."\n";
    }
    
 }
 $persons =["1.Arun","2.Srihari","3.Alan"];
 echo TakeArrayOfPerson( $persons);
 ?>


<!-- 213 -->
<!-- Create a class Product with properties for name and price. 
Implement a constructor that accepts these two parameters with appropriate type hinting. -->
<?php
class Product{
    public $name;
    public  $price;
    public function __construct(string $name, int $price){
        echo "product details :" .$name ." ".$price;

    }
}
$newObjects= new Product("Milk","23");
// $newObjects->
?>

