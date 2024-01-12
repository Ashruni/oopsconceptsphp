<!-- 178 -->
<!-- Create an interface Animal with a method makeSound().
Implement this interface in three classes: Dog, Cat, and Bird.
Each class should have its own implementation of makeSound().
Create an array of Animal objects and call makeSound() on each one. -->
<?php 
interface Animal{
    function makeSound();
    }
// Dog, Cat, and Bird
class Dog implements Animal{
    function makeSound(){
        echo "Dogs bark :";
    }

}
class Cat implements Animal{
    function makeSound(){
        echo "cats Meow :";
    }
}
class Bird implements Animal{
    function makeSound(){
        echo "Birds chirp :";
    }
}
$newObject = new Bird();
$newObject->makeSound();
$newObject1 = new Dog();
$newObject1->makeSound();
$newObject2 = new Cat();
$newObject2->makeSound();
// $array=array($newObject,$newObject1,$newObject2);

// var_dump($array);

?>
// 179
// Method Overriding:
// Create a base class Vehicle with a method startEngine().
// Extend the Vehicle class with two subclasses: Car and Motorcycle. 
// Override the startEngine() method in both subclasses.
// Create objects of both subclasses and call the startEngine() method on each.
<?php 
class Vehicle{
    function startEngine(){
        echo "Vehicles need to start :";
    }
}
class Car extends Vehicle{
    function startEngine(){
        echo "Car has started  \n";
    }
}
class Motorcycle extends Car{
    function startEngine(){
        echo "Motorcycle has started  \n";
    }
}
$newObject1 = new Car();
$newObject1->startEngine();
$newObject2 = new Motorcycle();
$newObject2 -> startEngine();
?>
<!-- 180 -->
<!-- Create a function calculateArea that accepts an 
object implementing an interface Shape with a calculateArea() method.
The function should call the calculateArea() method
 on the provided object and return the result.
Test the function with instances of different classes
 implementing the Shape interface, such as Circle and Square. -->
 <?php 
 Interface Shape{
    function calculateArea($radius);
 }
 class Circle implements Shape{
    function calculateArea($radius){
        echo "area of a circle : ".(3.14*$radius**2)."\n" ;
    }

 }
 class Square implements Shape{
    function calculateArea($sides){
        echo "area of a square : ".($sides**2)."\n";
    }
 }
 $newObject1 = new Circle();
 $newObject1->calculateArea(4);
 $newObject2 = new Square();
 $newObject2->calculateArea(5);
 ?>
 <!-- 181 -->
 <!--
Define an interface Drawable with a method draw().
Implement two classes, Circle and Square, that implement the Drawable interface.
Demonstrate polymorphism by creating a list of Drawable objects and calling their draw() methods.

 -->

 <?php 
 interface Drawable{
    function draw();
 }
 class Circles implements Drawable{
    function draw(){
        echo "Circle is a closed surface \n ";
    }
 }
 class Squares implements Drawable{
    function draw(){
        echo "Square is a closed surface ";
    }
 }
 $newObjects= new Circles();
 $newObjects->draw();
 $newObjects1= new Squares();
 $newObjects1->draw();
 ?>
<!-- 182 -->
<!-- Implement a class Logger with a method log($message). 
Derive two classes FileLogger and DatabaseLogger from Logger. 
Override the log method in both derived classes to write messages to 
a file for FileLogger and to a database for DatabaseLogger. 
Write a function that takes an array of Logger objects and logs a 
message using each logger. -->
<?php 
class Logger{
    public function log($message){

    }
}
class FileLogger extends Logger{
    public function log($message){
        $file = fopen("log.txt" , "w");
        $writtenMessage=fwrite($file, $message);
        echo "successfully created a file and manipulated it :";

    }
   


}
class DatabaseLogger extends FileLogger{

}
$newFileCreated = new FileLogger();
echo $newFileCreated->log("THIS IS A NEW FILE dear");


?>
<!-- 183 -->
<!-- Create an interface Renderable with a method render(). 
Implement this interface in classes Button, TextBox, and Image. 
Each class should have its own implementation of the render() method.
Write a function that takes an array of Renderable objects and calls 
the render() method for each object.

 <?php 
 interface Renderable {
    public function render();
 }
 class Button implements Renderable{
    public function render(){
        echo "the button";

    }
 }
 class TextBox implements Renderable{

    public function render(){
        echo "TextBox";
        
    }
 }
 class Image implements Renderable{
    public function render(){
        echo "Image ";   
    }
 }
 function RenderableObjects(){

 }
 $newRender= new Button();
 $newRender->render();
 echo "\n";
 $newRender= new TextBox();
 $newRender->render();
 echo "\n";
 $newRender= new Image();
 $newRender->render();
 echo "\n";
// should check 

 ?>


<!-184 -->
<!-- Design a class hierarchy for a drawing application. 
Have a base class Shape with methods draw() and resize($percentage).
 Derive two classes Circle and Rectangle from Shape. 
 Implement the methods accordingly, and make sure resizing is handled 
 appropriately for each shape. -->
<?php 
class Shapes{
    public $initialRadius;
    public $initialLength;
    public $initialBreadth;
    public $circumference;
    public  $resize;
    public function __construct(){
        
        $this->initialRadius=12;
        $this->initialLength=10;
        $this->initialBreadth=20;
        $this->circumference;
        $this->resize;

    }
    public function draw(){
    }
    public function resize($percentage){

    }
}
class Circles1 extends Shapes{
   
    
 public function draw(){
    echo $this->circumference = $this->initialRadius*2*3.14;
    echo "This is a draw class  with radius circumference  ". $this->circumference ."\n";
}

    
public function resize($percentage){
        echo "This is a resized circumference percentage ". $this->resize = ($this->circumference*$percentage) +$this->circumference."\n";
    }
    }

// class Rectangle extends Circle{

// }
$Shape = new Circles1();
$Shape->draw();
$Shape->resize(0.5);


?>
<!-- 185 -->
<!-- Implement a class hierarchy for a content management system.
 Have a base class Content with methods display() and publish(). 
 Derive two classes Article and Video from Content. 
 Implement the methods accordingly, and ensure that publishing works differently 
 for articles and videos. -->
 <?php 
 class Content{
    public function display(){
        echo "";
    }
    public function publish(){
        echo "";
 }
}
class Article extends Content{
    public function publish(){
        echo "the article is published \n";
    } 

}
class Videos extends Article{
    public function display(){
        echo "the video is published ";
    }
    
}
$newArticle1 = new Article();
$newArticle1-> publish();
$newArticle2 = new Videos();
$newArticle2->display();


 ?>
 <!-- 186 -->
 <!-- Create an interface PaymentGateway with methods processPayment($amount) 
and refund($transactionId). Implement this interface in classes CreditCardGateway
and PaypalGateway. Each class should have its own implementation for processing 
payments and refunds. Write a function that takes an array of PaymentGateway 
objects and processes payments and refunds using each gateway -->
<?php 
interface PaymentGateway{
    
    public function processPayment($amount);
    public function refund($transactionId);
   
}
class CreditCardGateway implements PaymentGateway{
    public $balance;
    public $creditCardPaymentBalance;
    public $creditCardRefund;
    public $amountDeduced;

    public function __construct(){
        $this->balance=1600;
        $this->creditCardPaymentBalance;
        $this->creditCardRefund;
        $this->amountDeduced;

    } 
    public function processPayment($amount){
        $this->creditCardPaymentBalance = $this->balance - $amount;
        $this->amountDeduced = $amount;
        echo  "Payment of : ". $this->amountDeduced ." is successful "." Current balance is : ". $this->creditCardPaymentBalance."\n";
       
    }
    public function refund($transactionId)
    {

        $this->creditCardRefund = $this->creditCardPaymentBalance  +  $this->amountDeduced;
        $this->creditCardPayment = $this->creditCardRefund ;
        echo "Refunded final Balance :" .$this->creditCardPayment;
        
        
       
    }
}
class PaypalGateway extends CreditCardGateway implements PaymentGateway{
    public $payPalAmount;
    public $balanceAmount;
    public $amountDeducedPayPal;
    public $payPalBalance;

    public function __construct(){
        parent::__construct();
        $this->amountDeducedPayPal ;
        $this->payPalBalance = 1600;
        $this->balanceAmount;
       
    } 
    public function processPayment($amount){

        $this->amountDeducedPayPal = $amount;
        echo "Balance amount after pay pal payment  :". $this->balanceAmount = $this->payPalBalance - $this->amountDeducedPayPal."\n";

        // echo $this->creditCardPayment;
       
    }
    public function refund($transactionId){

        echo "hii";
    }

}
$newPayment= new CreditCardGateway();
$newPayment->processPayment(400);
$newPayment->refund(123);
echo "\n";
$newPayment1= new PaypalGateway();
$newPayment1->processPayment(500);
$newPayment1->refund(123);


?>




