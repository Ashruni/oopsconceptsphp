<!-- 33 -->
<?php 
class leaving_message{
    const GOOD_BYES = "I am leaving by 6:00am";
   
    
}
echo leaving_message::GOOD_BYES;
?>
<!-- how to call the constants in a function -->

<?php 
class Message{
    public $var1;
    public $var2;
    const LEAVING_A_MESSAGE ="Its 6:00 the flight departure ";
    public function message(){
        echo self::LEAVING_A_MESSAGE;

    }
}
$OBJ=new Message();
$OBJ->message();
?>
<!-- 34 -->
<?php 
class Messages1{
    public $first_name;
    public $second_name;
    const GREETINGS ="Merry Christmas And a Happy New year ";
    
    public function mess(){
        
        echo self::GREETINGS ." " ;
        

        
    }

}
$new1=new Messages1();
// $new1
echo $new1->mess();

// echo Messages1->=mess();


?>
