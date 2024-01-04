<!-- 135 -->
 <!-- encapsulation preliminary questions  -->
 <?php 
 class ParentEncapsulate{
    private $name;
    private $password ;
    private $userId ;
    public function setEncapsulation($name,$password,$userId){
        $this->name = $name;
        $this->password = $password;
        $this->userId = $userId;
    }
    public function getEncapsulations(){
        echo "NAME: ".$this->name . "PASSWORD ".$this->password ."USER_ID ".$this->userId ;
    }
}
$newParent = new ParentEncapsulate();
$newParent->setEncapsulation("Rithika Shenay ","1234 ","DE18RJ ");
$newParent->getEncapsulations();

 ?>

 <!-- 136 Encapsulation and Static Property:
Create a class with a private static numeric property. 
Demonstrate how encapsulation works with static properties. -->
<?php 
class StaticEncapsulation{
    private static $encapsulatesNumericProperty ="setting here a value so that get printed as static is been called within a function ";
    public function setEncapsulesStatic(){
        $this->encapsulatesNumericProperty;
    }
    public function numericPropertyFunction(){
        echo self::$encapsulatesNumericProperty ;
    }
}
$newEncapsules = new StaticEncapsulation();
$newEncapsules ->setEncapsulesStatic();
$newEncapsules->numericPropertyFunction();
?>
<!-- 137 -->
<!-- Encapsulation in Inheritance:
Design a parent class with a private numeric property. Extend this class with a child class and 
attempt to access the private property directly from the child class. Explain the result. -->
<?php 
class PrivateParent{
    // private $numericProperty ="hello world";
    private $numericProperty ;
    private function numericProperties(){
        $this->numericProperty = "hello world";
    }
    
}
class PrivateChild extends PrivateParent{

    public function numericProperties(){
        echo  $this->numericProperty =90 ;
        // PHP Warning:  Undefined variable $numericProperty in C 
    } 
    
}
$newPrivate = new PrivateChild();
$newPrivate -> numericProperties();
?>
<!-- 138 -->
<!-- Getter-Only Property for Computation:
Develop a class with a private numeric property representing the radius of a circle.
 Provide only a getter method that calculates and returns the area of the circle. -->
 <?php 
 class NewClass{
   // private function getRadius($radius){
    public function getRadius($radius){
        return (3.14 * $radius **2) ;
        // Uncaught Error: Call to private method NewClass::getRadius() from global scope in
    }
 }
 $newClassObject = new NewClass();
 echo $newClassObject->getRadius(17);
 ?>
 <!-- 139 -->
 <!--  -->

<!-- 146 -->
 <!-- Design a simple bank account system with classes for Account and Transaction.
  The Account class should have private properties for the account balance and an array 
  of transactions. Implement methods for deposit, withdrawal, and displaying the account balance.
  Ensure that the transaction history is encapsulated and cannot be directly modified -->
  <?php 
  class Account{
    // private $accountBalance;
    // private $TransactionHistory;
   
}
class Transactions{
    private $accountBalance;
    private $TransactionHistory;
    public function __construct(){
        $this->accountBalance = 0;
        $this->TransactionHistory=[];
        $a=array();

        // $transactionHistory
    }
    public function deposit($amount){
        echo "current Deposits :". $this->accountBalance += $amount."\n";
        // echo  $this->TransactionHistory[] = new Transaction("current Deposits :", $amount );
        // $transaction= new Account($amount ,"deposit");
        // array_push($a ,"current Deposits :" => $amount);
        // print_r($a);

    }
    public function withdrawal($amount){
        if ($this->accountBalance < $amount){
            echo "\n  Insufficient funds ";
        }
        else{
            echo "\n amount withdrawn :". $amount;
            echo " \n Balance after amount withdrawn : " . $this->accountBalance -= $amount ."\n";
          
        }
    } 
    public function displayAcBalance(){
        echo "\n Current Bank Balance :". $this->accountBalance;
       

    }

  }

  $account= new Transactions();
  $account->deposit(1500); 
  $account->withdrawal(600);
  $account->displayAcBalance();
  ?>

  <!-- 147 -->
  <!-- Create classes for Student and Course. Each student can enroll in multiple courses,
   and each course can have multiple students. Implement methods for adding students to courses 
   and displaying the list of enrolled students for a particular course. Ensure that the student 
   and course information is encapsulated. -->
   <?php 
   class Student{
    private $studentName;
    private $studentDepartment;
    public function __construct($studentName,$studentDepartment){
        $this->studentName= $studentName;
        $this->studentDepartment= $studentDepartment;
          } 
    public function getStudentInfo(){
        return $this->studentName;
        return $this->studentDepartment;
    }

  

   }
   class Courses{
    private $courseName;
    private $studentName;
    private $arrayOne=[];
    // private $arrayTwo;
    public function __construct(){
        $this->courseName= "g";
        $this->studentName="g";
        $this->arrayOne= array();
        $this->arrayTwo= array();
    }
    public function getCourseStudentInfo(){
        return $this->courseName;
        return $this->$studentName=$studentName;
        
    }
    public function studentEnroll($nameStudent,$nameCourse){
        if($nameCourse=="ECONOMICS" ){
            var_dump( $this->arrayOne[]=$nameStudent);
        }
        elseif($nameCourse=="COMPUTER SCIENCE"){
            var_dump( $this->arrayTwo[]=$nameStudent);
            
            
        }
        else{
            echo " print nothing";
        }
    }

   }
$newCourse = new Courses();
$newCourse->studentEnroll("Fathima","ECONOMICS");
$newCourse1 = new Courses();
$newCourse1->studentEnroll("Hima","COMPUTER SCIENCE");
$newCourse2 = new Courses();
$newCourse2->studentEnroll("Rithika","ECONOMICS");

   ?>
   <!-- 148 -->
   <!-- Create a class PasswordValidator with a private property for the password and 
   methods to set and validate the password. The password should be at least 8 characters 
   long and contain a combination of letters, numbers, and special characters. -->
   <?php 
   class PasswordValidator{
    private $password;
    public function __construct($password){
        $this->password = $password;
    }
    public function validatePassword(){
        if(strlen($this->password )<8 && preg_match('/[A-Za-z]/',$this->password) && preg_match('/\d/',$this->password) && preg_match('/[^A-Za-z0-9]/',$this->password)){
            echo "password should be atleast 8 characters long";
        }
        else{
            echo "Renter the password";
        }

    }
   }
   $newPassword=new PasswordValidator("Ashrunirk1!");
   $newPassword->validatePassword();

   ?>
   <!-- 149 -->
<!-- Employee Salary Calculator
Design a class Employee with private properties for name, position, and salary.
Implement methods to set these properties and a method to calculate and return the
annual salary. Ensure that the salary cannot be directly modified. -->
<?php 
class Employee{
    private $name;
    private $positions;
    private $salary;
    public function __construct( $name, $position,$salary)
    {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }
    public function getEmployeeInfo(){
        return $this->name .$this->position.$this->salary;
    } 
    public function getAnnualSalary(){
       echo $this->name."\n".$this->position."\n"."Annual Salary :". $this->salary * 12 ."₹" ; 
    }

}
$employeeObject = new Employee("Raghav Mishra ","Software Developer ",15000);
$employeeObject->getAnnualSalary();
?>

<!-- 150 -->
<!-- Develop a class ShoppingCart with private properties for the items in the cart and their
 quantities. Implement methods to add items, remove items, and calculate the total cost of the 
 items in the cart. Ensure that the items and quantities are encapsulated. -->
 <?php 
 class ShoppingCart{
    private $items1;
    private $quantity1;
    private $rate1;
    private $items2;
    private $quantity2;
    private $rate2;
    
    
    public function __construct($items1,$quantity1,$rate1,$items2,$quantity2,$rate2){
        $this->items1 = $items1;
        $this->quantity1 = $quantity1;
        $this->rate1 = $rate1;
        $this->items2 = $items2;
        $this->quantity2 = $quantity2;
        $this->rate2 = $rate2;

        $cart = array();    
     }
    public function getItemsInfo(){
        return  $this->items . $this->quantity . $this->rate ;
    }
    public function addItemsInCart(){
        
        $cart[]= $this->items1;
        $cart[]=$this->items2;
        var_dump($cart);
    }
    // public function removeItemsInCart(){
    //     // unset($cart[1]);
    //     // var_dump($cart);
    //     $array_pop($cart);

    // }
    public function totalCost(){
        // $this->items1 = $items1;
        // $this->quantity1 = $quantity1;
        // $this->rate1 = $rate1;


        echo $this->items1 ." ". $this->quantity1 * $this->rate1." Rupee"."\n" ;
        echo $this->items2 ." ". $this->quantity2 * $this->rate2." Rupee" ;


    }
    }
 
 $newCartItem=new ShoppingCart("milk",2,34,"Milk powder",1,134);
 $newCartItem->addItemsInCart();
$newCartItem->totalCost()
//  $newCartItem->removeItemsInCart();
//  //  $newCartItem1=new ShoppingCart("cleaner",2,134);
 ?>


<!-- 151 -->
<!-- Product Inventory
Create a class Product with private properties for name, price, 
and quantity_in_stock. Implement methods to set these properties and 
a method to check if a product is in stock. Ensure that the quantity in 
stock cannot be directly modified. -->
<?php 
class Products{
    private $name;
    private $price;
    private $quantity_in_stock;
    public function __construct( $name, $price, $quantity_in_stock){
        $this->name = $name;
        $this->price = $price;
        $this->quantity_in_stock = $quantity_in_stock;
        

    }
    public function checkProducts(){
        $product = array("Milk","Bread","Cakes","Corn flour","Wheat Flour","yogurt");
        foreach($product as $x){
            if($this->quantity_in_stock!=$x){
                // continue;
            }
                // echo "yes product is in stock";
            elseif($this->quantity_in_stock){
                echo "yes ".$this->quantity_in_stock." is in stock " ;
            }
            else{    
                // echo "yes ".$this->quantity_in_stock." is in stock " ;
                echo "No";
            }
        }
    }
}
$newObjectCreation= new Products("Nila",32,"Milk");
$newObjectCreation->checkProducts();
?>

<!-- 152 Design a class LoanApplication with private properties for applicantName, income, 
and loanAmount. Implement methods to set these properties and a method to check if the 
loan application is approved based on income and loan amount criteria. Ensure that the 
income and loan amount cannot be directly modified. -->
<?php 
class LoanApplication{
    private $applicantName;
    private $income;
    private $loanAmount;
    public function __construct($applicantName, $income){
        $this->applicantName = $applicantName;
        $this->income = $income;
        $this->loanAmount = "18 lakhs" ;
    }
    public function getApplicantInfo(){
        return $this->applicantInfo;
    }
    public function loanApplicationApproval(){
        if($this->income >= 25000 && $this->income <=50000){
            echo $this->applicantName."\n" ."income is $this->income \n" ."loan amount upto 18 - 20 lakhs can be approved";
        }
        elseif($this->income >= 50000 && $this->income <=75000){
            echo $this->applicantName."\n" ."income is $this->income \n" ."loan amount 37 - 47 lakhs can be approved";
        }
        elseif($this->income >= 75000){
            echo $this->applicantName."\n" ."income is $this->income \n" ."loan amount 55 - 60 lakhs can be approved";
        }
        else{
            echo $this->applicantName."\n" ."income is $this->income \n" ."loan amount you are not eligible for loan right now";

        }
      }
}

$newObjectLoan = new LoanApplication("Rishi Rishtha",30000);
$newObjectLoan->loanApplicationApproval()


?>
<!-- 152  -->
<!-- go to inheritance -->




