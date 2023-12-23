
<!-- 33 -->
<?php 
class Rectangle{
    public $length;
    public $width;
    public $ans1;
    public $ans2;
    public function __construct($len,$wid){
        $this->length=$len;
        $this->width=$wid;

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
<!-- 34 + 20 = 54 -->

<!-- 59 -->
<!-- Write a PHP a class hierarchy for a library system, including classes like 
'LibraryItem', 'Book', 'DVD', etc. Implement appropriate properties and methods
 for each class. -->
 <?php 
class LibrarySystem{
    public function available(){
        echo "Library is open from monday to friday \n";
    }
}
class LibraryItem extends LibrarySystem{

    public function libraryItem(){
        echo "It has got several items including cd's ,books, materials \n";

    }
}
class Book extends LibrarySystem{
    public function books(){
        echo "They have wide range of books like fictional and motivation ect \n";

    }
}
class DVD extends LibrarySystem{
    public function videos(){
        echo "Academic related videos are contained here ";
    }
}
$new_obj6= new LibrarySystem();
$new_obj6->available();

$new_obj7=new Book();
$new_obj7->books();

$new_obja=new DVD();
$new_obja->videos();

$new_obj9=new LibraryItem();
$new_obj9->libraryItem();
 ?>
<!-- 60 -->
<!-- 7. Write a PHP class called 'Student' with properties like 'name',
 'age', and 'grade'. Implement a method to display student information. -->
 <?php 
 class Student{
    public $studentName;
    public $studentAge;
    public $studentGrade;
    public function __construct($studentName,$studentAge,$studentGrade){
        $this->studentName=$studentName;
        $this->studentAge=$studentAge;
        $this->studentGrade=$studentGrade;   
    }

    public function getStudentInfo(){
       
        echo "STUDENT NAME: $this->studentName \n STUDENT AGE : $this->studentAge   \n STUDENT GRADE : $this->studentGrade \n";
    } 
 }
$new_obj1=new Student("Akshaya R ","20","89");
$new_obj1->getStudentInfo();

 ?>
 <!-- Write a PHP a class called "BankAccount" with properties like "accountNumber" and "balance". 
 Implement methods to deposit and withdraw money from the account -->
 <!-- 61 -->
 <?php 
 class BankAccount{
    public $accountNumber;
    public $balance;
    public function __construct($acNumber,$balance){
        $this->accountNumber=$acNumber;
        $this->balance=$balance;
    }
    public function deposit(){
        echo "ac number:  {$this->accountNumber} \n Balance: {$this->balance} \n";
    }
    public function withdrawMoney(){
        echo "withdrawed money \n current balance : {$this->balance} ";

    }

 }
 $object_creation= new BankAccount("ACV21346","90000");
 $object_creation->deposit();
 $object_creation->withdrawMoney();
 ?>