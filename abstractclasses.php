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
<!-- 22.Create an abstract class 'Bank' with an abstract method 'getBalance'.
$100, $150 and $200 are deposited in banks A, B and C respectively.
'BankA', 'BankB' and 'BankC' are subclasses of class 'Bank', each having
a method named 'getBalance'. Call this method by creating an object of
 each of the three classes -->
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