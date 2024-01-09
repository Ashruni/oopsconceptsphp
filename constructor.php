<!-- Add to the class a constructor method
 to set a value to the $firstName property as
  soon as the object is created -->
<!-- 18 -->
  <?php
  class magic{
    private $firstName;
    
    public function __construct($fsn){
        $this->firstName = $fsn;
    }
    public function getFirstname(){
        return $this->firstName;
    }

  }
  $obj=new magic("hima");
  echo $obj->getFirstname();
  ?>

<!-- //   echo $obj->__construct("Hema"); -->
<!-- //Get the full name, and echo it to the screen."John Duo" -->
<!-- 19 -->
<?php
class magics{
    private $firstNames;
    private $secondNames;
    public function __construct($fns,$sns){

        $this->firstNames=$fns;
        $this->secondNames=$sns;


    }
    public function  getFullname(){
        return $this->firstNames." ". $this->secondNames;

    }


}
$obj1=new magics("John","Duo");
echo $obj1->getFullname();


?>
<!-- 20 -->


<!-- // 117 Create a PHP class named Rectangle with a constructor that takes the
 length and width as parameters.Implement a method to calculate and return 
 the area of the rectangle. -->

 <?php 
 class Rectangle{
   public $length1;
   public $width1;
   public function __construct($length1,$width1){
        $this->length1=$length1;
        $this->width1=$width1;
        // echo "Rctangle Area :";
    }
    function calculate(){
        echo "AREA OF RECTANGLE IS :" . ($this->length1*$this->width1) ;

     }
 }
 $newRectangle=new Rectangle(14,20);
 $newRectangle->calculate();
 ?>
 <!-- 118 -->
 <!-- Define a PHP class called Student with a constructor that takes
  the student's name and three test scores as parameters. 
 Implement a method to calculate and return the average score. -->
  
<?php 
class Student{
    public $studentName;
    public $score1;
    public $score2;
    public $score3;
    public function __construct($studentName,$score1,$score2,$score3){
        $this->studentName=$studentName;
        $this->score1=$score1;
        $this->score2=$score2;
        $this->score3=$score3;
    }
    public function averageScore(){
         echo "STUDENT NAME ".$this->studentName." ".$score = ($this->score1+$this->score2+$this->score3)/300 *100 ."%";
    }
}
$newStudentScore= new Student("Rithika Niana :",90,89,90);
$newStudentScore->averageScore();
?>
<!-- 119 -->
<!-- Develop a PHP class named Calculator with a constructor that initializes a result variable. 
Implement methods for addition, subtraction, multiplication, and division, each taking a parameter 
and updating the result accordingly. Provide a method to get the current result -->
<?php 
class Calculator{
    public $variable1;
    public $variable2;
    
    public function __construct($x,$y){
        $this->variable1 = $x;
        $this->variable2 = $y;

     }
     public function addition(){
        $sum = $this->variable1 + $this->variable2;
        echo " Addition result :" . $sum ."\n"; 
    }
    public function subtraction(){
        $subtract =$this->variable1 - $this->variable2;
        
        echo " subtraction result :" . $subtract ."\n";
        
    }
    public function division(){
        $div = $this->variable1 / $this->variable2;
    
        echo " division result :" . $div ."\n" ;
    }
}
$newCalculator = new Calculator(21,7);
$newCalculator->addition();
$newCalculator->subtraction();
$newCalculator->division();
?>
<!-- 120 -->
<!-- Create a PHP class named Circle with a constructor that takes the radius as a parameter.
 Implement methods to calculate and return the area and circumference of the circle. -->
 <?php 
 class Circle{
    public $radius;
    public function __construct($radius){
        $this->radius = $radius;
    } 
    public function calculateArea(){
        $area = 3.14 * ($this->radius)**2 ;
        echo "Area of Circle : ".$area ."\n";
    }
    public function calculateCircumference(){
        $circumference = 2 * 3.14 * ($this->radius) ;
        echo "Circumference of Circle : ".$circumference ."\n";
    } 
 }
 $newCircle = new Circle(30);
 $newCircle->calculateArea();
 $newCircle->calculateCircumference();
 ?>
 <!-- 121 -->
 <!-- Define a PHP class called Person with a constructor that takes the person's name and
  age as parameters.Implement a method to determine if the person is 
  a minor (below 18 years old) or an adult -->
  <?php 
  class PersonClass{
    public $name;
    public $age;
    public function __construct($name,$age){
        $this->name = $name;
        $this->age =$age;
    }
    public function ageCalculation(){
        if($this->age > 18){
            echo $this->name ." aged ".$this->age ." is an adult  ";
        }
        else{
            echo $this->name ." aged ".$this->age ."is a minor " ;
        }
    }
  }
  $newAgeCalculations = new PersonClass("Rithika",23);
  $newAgeCalculations->ageCalculation();
?>
<!-- 122 -->
<!-- Develop a PHP class named BankAccount with a constructor that initializes the account balance.
 Implement methods for deposit and withdrawal, each taking an amount as a parameter.
 Ensure that the withdrawal method does not allow the balance to go below zero -->
 <?php 
 class BankAccount{
  public $amount;
  public function __construct($amount){
    $this->amount = $amount;
  }
  public function deposits($deposit){
    // $currentBalance = 1000;
    $this->amount+=$deposit ;
    echo "Balance after deposit : ".$this->amount ."\n" ; 
  }
  public function withdrawal($withdraw){
    $bal= $this->amount-$withdraw; 
    if($bal <= 0){
      echo "you cant withdraw any amount: current Balance is 0";
    }
    else{
      echo "Balance : ". $bal ;
    }
  }
 }
//  $newBank =new Bank();
 $newBank = new BankAccount(10000);
 $newBank ->deposits(10000);
 $newBank->withdrawal(20000);
 ?>
<!-- 123 -->
<!-- Create a PHP class called TemperatureConverter with a constructor that takes a temperature 
value and a scale (Celsius or Fahrenheit) as parameters. Implement methods to convert
 the temperature between Celsius and Fahrenheit. -->
 <?php 
 class TemperatureConverter{
  public $temperature;
  public $scale;
  public function __construct($temp,$scale){
    $this->temperature = $temp;
    $this->scale= $scale;
  }
  public function convert(){
    // "celsius" || "Celsius" ||
    if($this->scale ==  "C" || $this->scale == "celsius" || $this->scale == "Celsius"){
      echo  $this->temperature." Celsius = ". $fahrenheit=($this->temperature * 9/5) + 32 ." fahrenheit"."\n" ;
    }
    // || "Fahrenheit" || "fahrenheit"
    elseif($this->scale ==  "F" || $this->scale == "fahrenheit" || $this->scale == "Fahrenheit"){
      echo  $this->temperature." Fahrenheit = " . $celsius=($this->temperature - 32) * 5/9 . " Celsius";
    }
    else{
      echo " enter correct information ";
    }

  }
 }
 $temperatureConverter = new TemperatureConverter(100,"C");
 $temperatureConverter->convert();
 $temperatureConverter1 = new TemperatureConverter(220,"F");
 $temperatureConverter1->convert();
 $temperatureConverter2 = new TemperatureConverter(220,"Fare");
 $temperatureConverter2->convert();
 ?>
 <!--124-->
 <!-- Define a PHP class named TimeConverter with a constructor that takes the
  number of seconds as a parameter.Implement methods to convert seconds 
  to minutes and seconds to hours. -->
  <?php 
  class TimeConverter{
    public $seconds;
    public function __construct($seconds){
      $this->seconds = $seconds;
    } 
    public function secondsToMinutes(){
      echo $this->seconds . " seconds is " . $this->seconds/ 60  ." Minutes \n" ;
    }
    public function secondsToHours(){
      echo $this->seconds ." seconds is " .$this->seconds/3600 ." Hour \n";
  }
}

  $timeConvert = new TimeConverter(3600);
  $timeConvert-> secondsToMinutes();
  $timeConvert-> secondsToHours();
  $timeConvert1 = new TimeConverter(20000);
  $timeConvert1-> secondsToMinutes();
  $timeConvert1-> secondsToHours();
  ?>
  <!-- 125 -->
  <!--
Develop a PHP class named Product with a constructor that takes the product name, 
price, and quantity as parameters.Implement a method to calculate and
 return the total value of the product (price * quantity). -->
 <?php 
 class Product{
  public $productName;
  public $price;
  public $quantity;
  public function __construct($productName,$price,$quantity){
    $this->productName= $productName;
    $this->price =$price;
    $this->quantity =$quantity;
  } 
  public function getProductPrice(){
     $finalPrice = $this->price * $this->quantity;
     echo $this->quantity." " . $this->productName ." is " . $finalPrice." Rupee  ";
  }
 }
 $productPrice=new Product("Milk packets",34,4);
 $productPrice->getProductPrice();
 ?>
 <!-- 126 -->
 <!-- Create a PHP class named DistanceConverter with a constructor that 
 takes a distance value and a unit of measurement (miles or kilometers) as parameters. 
 Implement methods to convert the  between miles and kilometers. -->
 <?php 
 class DistanceConverter{
  public $distance;
  public $unit;
  public function __construct($distance,$unit){
    $this->distance = $distance;
    $this->unit = $unit;
  }
  public function MilesConverter(){
    if($this->unit == "Kilometers" || $this->unit == "KM" ){
       echo $this->distance ." KM TO MILES IS : ". $this->distance * 0.6  ." miles \n";
    }
    elseif($this->unit == "Miles"){
      echo $this->distance ." MILES TO KM IS : ". $this->distance * 1.609  ." kilometers \n";
    }
    else{
      echo "Enter KM OR Miles as unit : \n ";
    }
 }
}

 $newDistance = new DistanceConverter(100,"KM");
 $newDistance -> MilesConverter();
 $newDistance1 = new DistanceConverter(100,"M");
 $newDistance1 -> MilesConverter();
 $newDistance2 = new DistanceConverter(200,"Miles");
 $newDistance2 -> MilesConverter();
 ?>




// $newObjectUser1->changePassword($changePassword);
 




