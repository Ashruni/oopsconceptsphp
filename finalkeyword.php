<!-- 241 Create a class with a final method named finalMethod.
Attempt to override a final method in a subclass. -->
<?php 
class FinalMethodClass{
    final function finalMethod(){
        echo "this is final";
    }
}
// class FinalAnotherClass extends FinalMethodClass{
    // public function finalMethod(){
        // echo "hii";
    // }

// }
$nf = new FinalMethodClass();
$nf->finalMethod();
// $nfg = new FinalAnotherMethodClass();
// $nfg->finalAnotherMethod();
// Fatal error: Cannot override final method FinalMethodClass::finalMethod() i
?>

<!-- 242 -->
<!-- . Create a class with a final constructor.

Attempt to extend a class with a final constructor -->
<?php 
class FinalConstructor{
    protected $variable;

    final function __construct(){
        $this->variable = "hmm"; 
        
    }
}
class Finalize extends FinalConstructor{
    public function extensions(){
        echo $this->variable;
    }
}
$newObj = new Finalize();
$newObj->extensions();
?>
<!-- 243 -->
<!-- 
Write a class Shape with a final method calculateArea().
 Create two subclasses, Circle and Rectangle, and try
  to override the final method. -->
  <?php
  class Shape {
    // final function calculateArea(){
     public function calculateArea(){
        echo "this is final area";
    }
  }
  class Circle extends Shape{
    public function calculateArea(){
        echo "jj";}
    // Fatal error: Cannot override
    //  final method Shape::calculateArea() in
    //  C:\xamppp\htdocs\oopsphp\oopsconceptsphp\finalkeyword.
    // php on line 55
  }
  class Rectangle extends Circle{
    public function calculateArea(){
        echo "jj" ;
    }
  }
//   $newObject= new Circle();
//   $newObject->circle();
//   $newObject1 = new Rectangle();
//   $newObject1->rectangle();

  ?>
  <!-- 244 -->
  


