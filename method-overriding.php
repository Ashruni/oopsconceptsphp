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
<!-- method overriding with access modifiers -->