<!-- 54 basic method overriding question -->
<?php 
class ABC{
    public function features(){
        echo "THIS IS THE PARENT CLASS \n";
    }
}

class BCD extends ABC{
    public function features(){
        echo "THIS IS THE CHILD CLASS WHO HAS OVERRIDDEN THE PARENT CLASS METHOD";
    }
}
$new_obj=new ABC();
$new_obj->features();

$new_obj1=new BCD();
$new_obj1->features();


?>
<!-- 55 -->
<?php 
class AB{
    public $fruitName;
    public $fruitColor;
    public function __construct($fn,$fc){
        $this->fruitName=$fn;
        $this->fruitColor=$fc;

    }
    public function Fruits(){
        echo "this is a {$this->fruitName} and is {$this->fruitColor} in color ";

    }

}
class BC extends AB{
   public $fruitOrigin;

    public function __construct($fn,$fo,$fc){
        $this->fruitName=$fn;
        $this->fruitColor=$fc;
        $this->fruitOrigin=$fo;
    } 
    public function Fruits(){
        echo " \n this is Fruit named {$this->fruitName} and is originated from {$this->fruitOrigin} and is {$this->fruitColor} in color";
    }

}
$new_obj2=new AB("Orange","orange");
$new_obj2->Fruits();
$new_obj3=new BC("Strawberry","America","Red");
$new_obj3->Fruits();

?>
<!-- method overriding with access modifiers 56 -->
<?php 
class ParentA{
    public function features(){
        echo "this is a parent class \n";
    }


}
class ChildA extends ParentA{
    public function features(){
        echo "this is a child class";

    }

}
$new1=new ParentA();
$new1->features();
$new2=new ChildA();
$new2->features();


?>
<!-- 57  -->
<!-- public accessibility cannot be overridden as  private cannot reduce the visibility -->
<?php 
class Kingdom{
    public function PlantKingdom(){
        echo "this is the plant kingdom \n ";
    }
    public function AnimalKingdom(){
        echo "this is the animal kingdom \n";
    }
}
class Human extends Kingdom{
    public function AnimalKingdom(){
        echo "this is a human species from animal kingdom \n";
    }
    
}
class Algae extends Kingdom{
    // protected function PlantKingdom(){
// Fatal error: Access level to Algae::PlantKingdom() must be public (as in class Kingdom)
//  in C:\xamppp\htdocs\oopsphp\method-overriding.php on line 98
    public function PlantKingdom(){
        echo "this is a plant from plant kingdom \n";
    } 
}
$ne= new Kingdom();
$ne->AnimalKingdom();
$ne->PlantKingdom();
$ne1=new Human();
$ne1->AnimalKingdom();
$ne2= new Algae();
$ne2->PlantKingdom();

?>
<!--parent private cannot be accessed to anwhere ot class 58 -->
<?php 
class Privacy{
    // private function family(){
    public function family(){
        echo " this family is private";

    }
   
}
class Friends extends Privacy{
    public function family(){
        echo "This is a friend";

    } 
}
$ne3=new Privacy();




// $ne3->family();
$ne4=new Privacy();
$ne4->family();
$ne5=new Friends();
$ne5->family();


// Fatal error: Uncaught Error: Call to private method Privacy::family() 
// from global scope in C:\xamppp\htdocs\oopsphp\method-overriding.php:128


?>

<!-- 58 -->
<?php 
class Teacher{
    protected function sub(){
        echo "this is a teacher \n";
    }
    public function suba(){
        echo  $this->sub();

    }

}
class Student extends Teacher{
    public function sub(){{
        echo "this is a Student \n";
    }
}
}
$new_y=new Teacher();
// Fatal error: Uncaught Error: Call to protected method Teacher::sub()
//  from global scope in C:\xamppp\htdocs\oopsphp\method-overriding.php:164
$new_y->suba();
$new_y1=new Student();
$new_y1->sub();



?>


