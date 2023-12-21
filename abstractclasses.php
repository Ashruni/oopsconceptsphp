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
        echo "service need to be initiattetd after ";
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
 <!-- We have to calculate the percentage of marks obtained in 
 three subjects (each out of 100) by student A and in four subjects
  (each out of 100) by student B. Create an abstract class 'Marks' with 
  an abstract method 'getPercentage'. It is inherited by two other classes 
  'A' and 'B' each having a method with the same name which returns the percentage 
  of the students. The constructor of student A takes the marks in three subjects
   as its parameters and the marks in four subjects as its parameters for student B. 
   Create an object for eac of the two 
 classes and print the percentage of marks for both the students -->

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