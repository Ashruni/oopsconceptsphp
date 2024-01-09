/* <?php 
print "print can also be used";
print "print can also be used";
echo "echo is another wa of displaying";
$number = 123;
echo $number
?> */
<?php 

$binary_number = 0b1010;
echo $binary_number;

?>
<?php 
$a =10;
$b = 50;
echo $a++;
echo $a;
// use then change rule 
echo ++$a;


?>
<?php
$string = '\'hi\'';
echo $string;
$string = '\'his\'';
echo $string;


?>
// 
<?php 
$age  = 28;
$note = "her age is $age\n ";
echo $note;
//get to know about the difference between single quotes and double quotes here in this context

$note ='her age is $age \n ';
echo $note; 
$age=78;
$note = "her is age is $age \n ";
echo $note; 
// since php is interpreted its values ma get updated through out 

// concatinating string s
$first_name ="Arya";
$middle_name ="R";
$third_name ="Krishna\n";
echo $first_name." ".$middle_name." ".$third_name


?>
<?php

$number = array(10,20);
array_push($number,30);
echo $number[2];

// print_r($number);
// if we need to see the array items we can use print_r() 
$numbers_str =array(12,23);
array_push($numbers_str,'this is php');
print_r($numbers_str);

// what if we need to remove the items from this array
unset($numbers_str[2]);
// print_r($numbers_str);
echo var_dump($numbers_str);
// Control Statements IF STATEMENT
if(1>=10){
    echo  "1<=10";
}
else{
    echo "no 1<=10 is false \n";
}
$a=200;
$b=100;
echo($a>$b)?$a:$b;
echo "\n";

$a=900;
$b=300;
echo($a<$b)?$a:$b;
// for eg someone ask wheather 20>30 ? 20 or 30 so we reply with 30
//   switch case 
$a = 1;
switch($a){
    case 1: echo "sunday ";break;
    case 2:echo "monday";break;

}

// LOOPING 
// WHILE LOOP
$a=0;
while($a<=5){
    echo $a." "."\n";
    $a++;
}
$a=10;
while($a>1){
    echo $a." "."\n";
    $a--;

}
// FOR LOOPING

for($i=0;$i<=10;$i++){
    echo $i." "."\n";
}
for($i=10;$i>=0;$i--){
    echo $i." "."\n";
}

 $number=[10,20,30,40,50];
 for($i=0;$i<count($number);++$i){
    echo $number[$i]." ";

 }

$f=0;
while($f<=10){
    echo $f."    ";
    $f++;
}

for($g=0;$g<=4;$g++){
    echo "Hello"."\n";
}




?>


