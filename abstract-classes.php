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
<!-- 134 Protected Property:
Design a class with a protected property. Extend this class in a child class and attempt to
 access the protected property directly. Explain the result. -->
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