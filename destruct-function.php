<!-- 31 -->
<?php 
class User{
    public $username;
    public $age;
    public function __construct($un,$ag){
        $this->username=$un;
        $this->age=$ag;
    }
    public function __destruct(){
        echo "hii I am  {$this->username}  I am  {$this->age} years old ";
    }
}
$obj_nw= new User("Haritha","28");
?>
<!-- 32 -->
<?php 
class Animal{
    public $animal_name;
    public $animal_nature;

    public function __construct($anm,$an){
        $this->animal_name=$anm;
        $this->animal_nature=$an;
    }
    public function __destruct(){
        echo "Hi thats a {$this->animal_name} and its nature is {$this->animal_nature} \n ";

    }
}
$obj_new1= new Animal("Tiger","Carnivorous");

?>
<!--  -->
