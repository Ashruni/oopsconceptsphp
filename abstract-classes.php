<!-- 19 -->
<!-- abstract class -->
<?php 
abstract class Vehicle{
    public function accelerate(){
        echo "vehicle is started";

    }
    public function break_Apply(){
        echo "break is applied";

    }
    abstract public function service();
}
class scooter extends Vehicle{
    public function service(){
        echo "service need to be initiated for scooter after six months";

    }

}
class bike extends Vehicle{
    public function service(){
        echo "service need to be initiated after ";
    }
} 

?>
<!-- create an abstract class with child classes  20 -->
<?php
abstract class kingdom{
    public function species(){

    }
    public function features(){

    }
    abstract public function living_beings();

}
class Humans extends Kingdom{
    public function human_feature(){

    }
    public function living_beings(){
        echo "humans are living beings";

    }
}
$objf1=new Humans();
$objf1->living_beings();


// we cannot create abstract object
?>
<!-- 21 -->

<?php 
abstract class Parent1{
    abstract public function message();

}
class first_class extends Parent1{
    public function message(){
        echo "this is the first subclass \n";

    }


}
class second_class extends Parent1{
    public function message(){
        echo "this is the second subclass ";

    }
}
$obj_new=new first_class();
$obj_new->message();
$obj_new1=new second_class();
$obj_new1->message();


?>
<!-- 22 -->

<?php
 abstract class Bank{
    abstract public function getBalance();
 }
 class BankA extends Bank{
    
    public function getBalance(){
        echo "$100 IS BANK A's DEPOSIT \n";

 }
}
class BankB extends Bank{
    public function getBalance(){
        echo "$150  IS BANK B's DEPOSIT\n";

    }
}
class BankC extends Bank{
    public function getBalance(){
        echo "$200 IS BANK C's DEPOSIT \n";

    }
}
$obj_new3=new BanKA();
$obj_new3->getBalance();
$obj_new4=new BankB();
$obj_new4->getBalance();
$obj_new5=new BankC();
$obj_new5->getBalance();


 ?>
 <!-- 23 -->
 

 <?php 
 abstract class Mark{
    public $mark1;
    public $mark2;
    public $mark3;
    public function __construct($m1,$m2,$m3){
        $this->mark1=$m1;
        $this->mark2=$m2;
        $this->mark3=$m3;


    }
    public function three_marks(){

    }
    abstract public function getPercentage();

 }
//  24
 class A extends Mark{
    public $sum;
    public $per;
    public function getPercentage(){
        $sum = $this->mark1 + $this->mark2 +$this->mark3 ;
        $per= ($sum/300)*100;
        echo "percentage in 3 subjects are "." $per "."\n";



    }

 }
 class B extends Mark{
    public $mark4;
    public $add;
    public $percentage;
    public function __construct($m1,$m2,$m3,$m4){
        $this->mark1=$m1;
        $this->mark2=$m2;
        $this->mark3=$m3;
        $this->mark4=$m4;

    }
    public function getPercentage(){
        $add = $this->mark1 + $this->mark2 +$this->mark3 + $this->mark4;
        $percentage = ($add/400)*100;
        echo "percentage of B in 4 subjects are ". $percentage ."\n";
        // echo $add;
    }


 }
 $new_obj =new A(96,98,90);
 $new_obj->getPercentage();
 $new_obj1=new B(88,89,99,97);
 $new_obj1->getPercentage();


 ?>
 <!-- 25 -->


<?php 
abstract class new_class{
    public function __construct(){
        echo "this is constructor of abstract class \n";

    }
    abstract public function a_method();
    
    public function non_abs_method(){
        echo "this is a normal method of  abstract class \n";

    }


}
class new_class1 extends new_class{
    public function  a_method(){

        echo "this is abstract method\n";
    }
    public function non_abs_method(){
        echo "this is a normal method of  abstract class \n";

    }



}

$new_obj6=new new_class1();
$new_obj6->a_method();
$new_obj6->non_abs_method();

?>
<!-- // 26 -->


<?php 
abstract class classA{
    public function __construct(){
        echo "this a constructor of abstract class \n";


    }
    abstract public function a_method();
    public function  non_abt_method(){
        echo "this is a normal abstract method ";

    }
    
}
class subclass extends classA{
    public function a_method(){
        echo "this is an abstract method \n ";

    } 
    public function __construct(){
        parent::__construct();

    }
    public function  non_abt_method(){
        echo "this is a normal abstract method \n ";
    }

}
$obj9=new subclass();
$obj9->a_method();
$obj9->non_abt_method();

?>
<!-- 27 -->
  <?php 
  abstract class Animals
  {
    abstract public function cats();
    abstract public function dogs();
  }

  class Cats extends Animals{
    public function cats(){
        echo "Meow Meow \n";
    }
    public function dogs(){
        

    } 


  }
  class Dogs extends Animals{
    public function dogs(){
        echo "Bow Bow";
    }
    public function cats(){

    }

  }

  $obj_new5=new Cats();
  $obj_new5->cats();
  $obj_new6=new Dogs();
  $obj_new6->dogs();



  ?>
  <!-- 28 -->
 
<?php 
abstract class Shape
{
    public $length;
    public $breadth;
    public $sides;
    public $radius;
    abstract public function RectangleArea($length,$breadth);
    abstract public function SquareArea($sides);
    abstract public function CircleArea($radius);
}
class Area extends Shape{
    
    public function RectangleArea($l,$b){
        $this->length=$l;
        $this->breadth=$b;

        echo  $ans = " Rectangular Area is =". ($this->length * $this->breadth) ."\n";

      
    }

    
    public function SquareArea($s){
        $this->sides=$s;
        echo "Area of Square ".($this->sides**2)."\n" ;

    }
    public function CircleArea($r){
        $pi= 3.14;
        $this->radius=$r;
        echo "Area of Circle ". (2*$pi*$this->radius**2) ."\n";


    }
}
$obj_new8=new Area();
$obj_new8->RectangleArea(14,20);
$obj_new8->SquareArea(10);
$obj_new8->CircleArea(5);

?>

<!-- 30

<?php 
abstract class Animals1{
    abstract function cats();
    abstract function dogs();

}
class Cats1{
    public function cats(){
        echo "Cats meow \n";


    }
    public function dogs(){
        echo "Dogs  Paw Paw";

    }

}
$obj_new1=new Cats1();
$obj_new1->cats();
$obj_new1->dogs();

?>

<!133  -->
 <!-- Abstract Class and Inheritance:
Create an abstract class Shape with an abstract method calculateArea(). 
Extend this class with two child classes Rectangle and Circle that implement the 
abstract method. Instantiate objects of both classes and display their areas. -->
<?php 
abstract class CircleArea{
    abstract public function calculateArea($radius);
}
class Circle extends CircleArea{
    public function calculateArea($radius){
        echo "Area ". 3.14*$radius**2 ;

    }
}
$newObjectCircle = new Circle();
$newObjectCircle->calculateArea(20);
?>
<!-- SAME QUESTION -->
<!-- !-- Abstract Class and Inheritance:
Create an abstract class Shape with an abstract method calculateArea(). 
Extend this class with two child classes Rectangle and Circle that implement the 
abstract method. Instantiate objects of both classes and display their areas. --> 
<?php 
 abstract class ShapeClass {
   
    abstract public function calculateArea1();
    // abstract public function calculateArea2($radius);


}
class RectangleClass extends ShapeClass{
    public $length;
    public $breadth;

    public function __construct($length,$breadth){
        $this->length = $length;
        $this->breadth = $breadth;
    }
    public function calculateArea1(){
        echo "Area of a Rectangle : ". $this->length*$this->breadth;
    }
}
class CircleClass extends RectangleClass{
    public function __construct($radius){
        $this->radius = $radius;
    }
    public function calculateArea1(){
        // $this->radius=$radius;
        echo "Area of a Circle : ". 2*3.14* $this->radius ;

    }
}
$newAbstractClass = new RectangleClass(10,20);
$newAbstractClass->calculateArea1();
$newAbstractClass1 = new CircleClass(20);
$newAbstractClass1->calculateArea1();


?>

__________

<!-- //  134 Protected Property:
// Design a class with a protected property. Extend this class in a child class and attempt to
//  access the protected property directly. Explain the result. -->
<?php 
 class ProtectedProperty{
    protected $variable= "Salary";
    protected function protectedProperty(){
        echo "This is protected";
    }
 }
 class ChildClassProtected extends ProtectedProperty{
    public $variable ="My SALARY";
    public function protectedProperty(){
        echo "This is child class extending protected parents ";
    }
 }
 $newObjectCreation = new ChildClassProtected();
 $newObjectCreation ->protectedProperty();


 ?>
 <!-- 135 is in encapsulation -->

 <!-- 143 -->
 <!-- Abstract Class:
Create an abstract class Shape with an abstract method draw().
Extend Shape with classes Circle and Square implementing the draw() method.
Override the draw() method in the Square class. -->
<?php 
abstract class ShapeClasses{
    abstract function draw();
}
class CirclesClasses extends ShapeClasses{
    public function draw(){
        echo "ITs A CIRCLE CLASS";
    }
}  

class SquareClasses extends CirclesClasses{
    public function draw(){
        echo "IT's A SQUARE CLASS";
    }
}  
$newerObjectShape= new SquareClasses();
$newerObjectShape->draw();
?>
<!-- 145 -->
<!-- Create an abstract class Person with abstract methods introduce and attendClass.
 Implement concrete classes Student and Teacher that extend the Person class. 
 Provide specific implementations for introducing and attending classes for each type of person. -->
 <?php 
 abstract class Person{
    abstract public function introduce();
    abstract public function attend();
    
 }
 ?>
 <!-- 165 -->
 <!-- Design an abstract class Product with properties productName and price.
  Include an abstract method calculateDiscount in the class. Create two concrete 
  classes ElectronicProduct and ClothingProduct that extend the Product class. 
  Each subclass should implement the calculateDiscount method differently based 
  on the type of product (e.g., electronics may have a percentage discount, while 
  clothing may have a fixed discount). -->

  <?php 
  abstract class Products{
    public $productName;
    public $price;
    abstract public function calculateDiscount( $productName);
  }
class ElectronicProduct extends Products{
    public function calculateDiscount($productName){
        echo("check for discounts : washing machine,TV,vacuum cleaner \n");
        if($productName=="washing machine"){
        echo "the discounted  amount for : ". $productName  ." is ".$discountedRate = 50000 - (50000*0.3) ." from 50000"."\n";
        }
        elseif($productName=="TV"){
            echo "the discounted  amount for : ". $productName  ." is ".$discountedRate = 45000 - (45000*0.4) ." from 45000"."\n";

        }
        elseif($productName=="vacuum cleaner"){

            echo "the discounted  amount for : ". $productName  ." is ".$discountedRate = 100000 - (100000*0.2)." from 100000"."\n";
        }        // echo $discountedRate;
        else{
            echo "ENTER THE CORRECT CHOICE ";
        }
        }

    }
    class ClothingDiscount extends ElectronicProduct{
        public function calculateDiscount($productName){
            echo " \n AADI SALES 30% OFF FOR EVERY PICK : Sarees,Shirts,Pants \n ";
            if($productName =="Sarees"){
                echo "30% off for EVERY Sarees \n";
            }
            elseif($productName == "Shirts"){
                echo "30% off for EVERY Shirts \n";
            }
            elseif($productName == "Pants"){
                echo "30% off for EVERY Pants \n";
            }
            else{
                echo "30% off for EVERY PRODUCT";
            }
        }
    }

  $newDiscount = new ElectronicProduct();
  $newDiscount->calculateDiscount("washing machine");
  echo "\n";
  $newDiscount1 = new ElectronicProduct();
  $newDiscount1->calculateDiscount("vacuum cleaner");
  echo "\n";
  $newDiscount2 = new ElectronicProduct();
  $newDiscount2->calculateDiscount("TV");
  echo "\n";
  $newDiscount3=new ClothingDiscount();
  $newDiscount3->calculateDiscount("Shirts");
  ?>
<!-- 166 -->
<!-- Question 4: Abstract Animal Class
Create an abstract class Animal with properties name and sound. 
Include a method makeSound to display the sound of the animal. 
Create two concrete classes Dog and Cat that extend the Animal class.
 Implement the makeSound method in each subclass to display the specific 
 sound each animal makes. -->
 <?php 
 abstract class AnimalsClassNew{
    private $name;
    private $sound;
    abstract public function makeSound();

 }
 class DogsClass extends AnimalsClassNew{
    public function makeSound(){
        echo "Dogs BARK \n";
    }

 }
 class CatsClass extends Dogs{
    public function makeSound(){
        echo "cats MEOW \n";
    }

 }
 $newObject = new DogsClass();
 $newObject->makeSound();
 $newObject1 = new CatsClass();
 $newObject1->makeSound();

 ?>
 <!-- 167 -->
 <!--  Abstract Vehicle Class
Design an abstract class Vehicle with properties brand and model. 
Include abstract methods start and stop in the class. 
Create two concrete classes Car and Motorcycle that extend the Vehicle class.
Implement the start and stop methods in each subclass to simulate starting and
stopping the respective vehicles. -->
  <?php 
  abstract class VehicleClasses{
    private $brand;
    private $model;
    abstract public function Start();
    abstract public function Stop();
  }
  class Cars extends VehicleClasses{
    public function Start(){
        echo "Starting a Car";

    }
    public function Stop(){
        
        echo "Stopping a Car";
    }

  }
  class Motorcycle extends Cars{
    public function Start(){
        echo "Starting a Motorcycle";
        
    }
    public function Stop(){
        echo "Stopping a Motorcycle";
    }

  }
  $newObjectVehi = new Cars();
  $newObjectVehi->Start();
  $newObjectVehi1 = new Motorcycle();
  $newObjectVehi1->Start();
   



  ?>
<!-- 168 -->
<!-- Create an abstract class BankAccount with properties
 accountNumber and balance. Include abstract methods deposit 
 and withdraw in the class. Implement two concrete classes
  SavingsAccount and CheckingAccount that extend the BankAccount 
  class. Each subclass should have additional properties such as 
  interest rate for savings and overdraft limit for checking. 
  Implement the deposit and withdraw methods in each subclass accordingly. -->

<?php 
abstract class BankAccount{
    public $accountNumber;
    public $balance;
    public $variable;
    public function __construct(){
        $this->accountNumber;
        $this->balance=0;
        $this->variable;
    }
    abstract public function withdraw($amount);
    abstract public function deposit($amount);
}
class SavingsAccount extends BankAccount{
   
    public function deposit($amount){
        
        echo "Deposit amount ". $this->balance+=$amount;
        
    }
    public function withdraw($amount){
        echo " balance after withdrawal ". $this->balance-=$amount;
    }
    public function interestRate(){
        echo "Interest Rate for current balance " . $this->variable += $this->balance +($this->balance * 0.2). "\n"; 
    } 

}
class CheckingAccount extends SavingsAccount{
    
    public function withdraw($amount){
        
        echo " balance after withdrawal ". $this->balance-=$amount;

    }
    public function deposit($amount){
        
        echo "Deposit amount ". $this->balance+=$amount;
        
    }
    public function overDraftLimit($AnotherAmount){
        if($this->balance-$AnotherAmount <=500){
            echo "Maintain minimum balance of Rupees 500  ";
        }
        elseif($this->balance-=$AnotherAmount){
            echo $this->balance ;
        }
    }

}
$newObject= new SavingsAccount();
$newObject->deposit(500);
echo "\n";
$newObject->withdraw(400);
echo "\n";
$newObject->interestRate();
$newObject= new CheckingAccount();
echo "\n";
$newObject->deposit(1500);
echo "\n";
$newObject->withdraw(200);
echo "\n";
$newObject->overDraftLimit(500);
?>
<!--169-->
<!-- Question 8: Abstract Messaging System
Create an abstract class Message with properties sender, recipient, and content. 
Include an abstract method sendMessage in the class. Implement two concrete classes
EmailMessage and TextMessage that extend the Message class. 
Each subclass should implement the sendMessage method to display or 
send the message using the appropriate medium. -->
 <?php 
 abstract class Messages{
    public $sender;
    public $recipient;
    public function content(){
        echo "HHii";
    }
    abstract public function sendMessage($messagePass);

 }
 class EmailMessage extends Messages{
    public function sendMessage($messagePass){
        echo $messagePass;

    }
 }
 class TextMessage extends EmailMessage{
    public function sendMessage($messagePass){
        echo $messagePass ;
    }
 }
 $newObjectMessage= new EmailMessage();
 $newObjectMessage->sendMessage("This email messages are to be sent :");
 echo "\n";
 $newObjectMessage1= new TextMessage();
 $newObjectMessage1 ->sendMessage("This text messages are to be sent :");
 ?>
<!-- 170 -->
 <!--  Abstract Authentication System
Design an abstract class Authentication with properties username and password.
 Include abstract methods authenticate and changePassword in the class. 
 Create two concrete classes UsernamePasswordAuth and TwoFactorAuth that extend the 
 Authentication class. Implement the authentication and password change 
 methods in each subclass, with TwoFactorAuth requiring an additional step for authentication. -->
 <?php 
abstract class Authentication{
    public $username;
    public $password;
    public $authPetName;
    public function __construct(){
        $this->username;
        $this->password;
        $this->authPetName="malu";
    }
    abstract public function authenticate($userName,$password);
    abstract public function changePassword();
}
class UsernamePasswordAuth extends Authentication{
    public function authenticate($userName,$password){
        echo $userName . $password;
    }
    public function changePassword(){
    }
}
class TwoFactorAuth extends UsernamePasswordAuth{
     public function authenticate($userName,$password){
       echo $userName . $password;
     $this->username=$userName;
     $this->password=$password;
    }
    

    public function twoFactorAuth($petName,$changePassword){
        echo "Confirm with your pet name given during registration : ";
        if($this->authPetName == $petName){
            
            
            $this->password=$changePassword;
            
            echo "Two factor Authentication successful \n";

        }
        else{
            echo "Two factor Authentication failed \n";
        }

    }
    public function changePassword(){
        echo "Updated password is ". $this->password;
        // echo $this->password=$changePassword;
    }

}

$newObjectUser1= new TwoFactorAuth();
$userName= readline("enter your username :");
$password = readline("enter your password :"); 

$newObjectUser1->authenticate($userName,$password);


$petName = readline("enter the same pet Name entered during registration:"); 
$changePassword = readline("Change your password :");
$newObjectUser1->twoFactorAuth($petName,$changePassword);
$newObjectUser1->changePassword();
?>
<!-- 171 -->
<!-- Abstract Online Shopping Cart
Create an abstract class ShoppingCart with properties items and totalPrice.
Include abstract methods addItem and calculateTotal in the class.
Implement two concrete classes StandardCart and DiscountedCart that extend the
ShoppingCart class. The DiscountedCart should apply a percentage discount on
the total price. Implement the methods accordingly. -->
<?php 
abstract class ShoppingCart{
    public $items;
    public $totalPrice;
    public $Price;
    public function __construct(){
        $this->items;
        $this->totalPrice;
        $this->Price;
    }
    abstract public function addItem($item,$rate,$quantity);
    abstract public function calculateTotal();
} 
class StandardCart extends ShoppingCart{
    public function addItem($item,$rate,$quantity){
        echo "CART"."\n";
        echo "Product Name :".$this->items= $item. "\n";
        echo "Product Rate :" .$this->Price=$rate."\n";
        echo "Total Price :" .$this->totalPrice= $quantity*$this->Price."\n";
        
    }
    public function calculateTotal(){
        echo $this->totalPrice;

    }
}
class DiscountedCart extends StandardCart{
    public function addItem($item,$rate,$quantity){
        echo "CART"."\n";
        echo "Product Name :".$this->items= $item. "\n";
        echo "Product Rate :" .$this->Price=$rate."\n";
        echo "Total Price :" .$this->totalPrice= $quantity*$this->Price."\n";
        
    }
    public function calculateTotal(){
        echo $this->totalPrice;

    }
    public function discountPercentage(){
        $discountPercentage = $this->totalPrice - ($this->totalPrice * 0.2);
        echo "Discounted amount :".$discountPercentage;


    }

    // percentage discount on total price
}
// $newStandardCart = new DiscountedCart();
// $newStandardCart->addItem("milk",34,2);
// $newStandardCart->discountPercentage();
// echo "\n";
// $newStandardCart1 = new DiscountedCart();
// $newStandardCart1->addItem("Bread",45,2);
// $newStandardCart1->discountPercentage();
// echo "\n";
// $newStandardCart2 = new DiscountedCart();
// $newStandardCart2->addItem("Butter",54,1);
// $newStandardCart2->discountPercentage();
?>
<!-- 172 -->
<!-- Abstract Sorting Algorithm
Design an abstract class SortAlgorithm with an abstract method 
sort that takes an array of integers as input. Create two concrete 
classes BubbleSort and QuickSort that extend the SortAlgorithm class. 
Implement the sort method in each subclass to perform the respective sorting algorithm. -->


<?php 
class SortAlgorithm{
    public $newArray;
    public function __construct(){
        $this->newArray;

    } 
    public function getNumber(){
        $this->newArray= [];
    $array_with_range = range(0,3);
    for ($i=0; $i<=6 ;$i++){
        $new= readline("Enter a new number");
        $this->newArray[]=$new;
    }
    print_r($this->newArray);

    }
    



}
class BubbleSort extends SortAlgorithm{
    public function getNumber(){
        parent::getNumber();
        var_dump($this->newArray);
        $length = count($this->newArray);
        print_r($length);
        for($i=0;$i<$length;$i++){
            for($j=0;$j<=($length-1-$i);$j++){
                if($this->newArray[$j]>$this->newArray[$j+1]){
                    $temp=$this->newArray[$j];
                    $this->newArray[$j]=$this->newArray[$j+1];
                    $this->newArray[$j+1]=$temp;
                }
            }
        }

    echo "Sorted array :";
    for($k=0;$k<$length;$k++){
        echo $this->newArray[$k] ." ";
    }
       
       
    }
    

    }
// class QuickSort extends QuickSort{

// }
$newSort = new BubbleSort();
$newSort->getNumber();


?>