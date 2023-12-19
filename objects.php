<!-- few practise questions -->
<?php 
class Student {
    private $student_name;
    private $s_roll_no;

    public function studentName($sn){
        $this->student_name = $sn;
        

    }
    public function studentRollno($rn){
        $this->s_roll_no= $rn;
    }
    public function getStudentname(){
        return $this->student_name;
    }
    public function getRollno(){
        return $this->s_roll_no;
    }
  

}
$obj= new Student();
$obj->studentName("Anittha");
$obj->studentRollno("30");
echo $obj-> getStudentname();
echo " ";
echo $obj-> getRollno();



?>
<!-- 1 -->
<?php
//Your practice code
 class User{
    public $username;
    public $userage;
    public function user_details(){
        return "hello";
        
    }
 }
 $obj=new User();
 $obj -> username ="anil";
 $obj -> userage ="40";
 echo $obj->username . " " . $obj->userage;


?>
<!-- 2 -->
<?php 
class Students{
    public $student_name;
    public $student_rollno;
    public $student_department;
    public $student_age;
    public function student_details(){
        return "Student belongs to here";

    }


}
$obj1= new Students();
$obj1-> student_name="Haritha";
$obj1-> student_rollno="HO22";
$obj1-> student_department="CSE";
$obj1-> student_age="22";
echo $obj1->student_name ." ".$obj1->student_rollno." ".$obj1->student_department." ".$obj1-> student_age;
?>
<!-- 3 -->
<?php
class Car{
    public $car_name;
    public $car_color;
    public $car_model;
    public function car_details(){
        return "THIS IS A CAR";

    }
}
$obj2=new Car();
$obj2-> car_name="Nissan Sunny";
$obj2-> car_color="RED";
$obj2-> car_model="automaic ";
echo $obj2-> car_name . " ".$obj2-> car_color." ".$obj2->car_model."";



?>
<!-- 4 -->
<!-- Use the hello() method with the first and last name variables in order to say hello to the user: -->
<?php
class Users{
    public $first_name;
    public $last_name;
    public function user_details(){
        return "Hello, ";
    }
}
$obj1=new Users();
// $obj1-> fisrt_name ="Neha";
// $obj1-> last_name= "Sera" . " ";
echo $obj1-> user_details() . " " . $obj1-> fisrt_name ="Neha" ." ".$obj1-> last_name= "Sera" . " \n";
?>
<!-- 5 -->
<?php
// <!-- Add another object, call it $user2, give it a first name of 'Jane' and last name of 'Doe', then say hello to the user. -->
class User1{
    public $fisrt_name;
    public $second_name;
    public function user_data(){
        return "Hello ,";

    }

 
}
$obj1= new User1();
$obj1-> first_name="John";
$obj1-> second_name="Doe";
echo $obj1->user_data() . $obj1->first_name ." ".$obj1->second_name."\n";
$obj2= new User1();
$obj2-> first_name="Jane";
$obj2->second_name="Doe";
echo $obj2->user_data().$obj2->first_name." ".$obj2->second_name;


?>