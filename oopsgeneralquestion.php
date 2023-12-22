

<?php 
class Rectangle{
    public $length;
    public $width;
    public $ans1;
    public $ans2;
    public function __construct($l,$w){
        $this->length=$l;
        $this->width=$w;

    }
    public function rectangleArea(){
        echo $ans1= $this->length * $this->width  ."\n";

        
    }
    public function perimeter(){
        echo $ans2 = 2*($this->length + $this->width);


    }


}
$new_obj=new Rectangle(4,10);
$new_obj->rectangleArea();
$new_obj->perimeter();

?>
<!-- // $obj_a=new heirarchy();
// echo $obj_a->constructab("Neena","Chronicles of Narnia");
// echo $obj_a->libraryItem();

gi