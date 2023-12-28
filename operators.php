<!-- 1. == equal to operator checks weather values are equal or not   -->
<?php 
$a=10;
$b=10;
// $a=(int)readline("Enter a number :");
// $b=(int)readline("Enter a number :");
if ($a==$b){
    echo "hello ";
}
else{
    echo "Numbers are not the same !";
}
?>
<!-- 2. -->
<!-- ===  returns values only if data types and values are equal  -->
<?php 
// $a=(int)readline("Enter a number ");
// $b=readline("Enter a number");
$a=49;
$b=49;
// $b="D";
if($a===$b){
    echo "both are just the same";
}
else{
    echo "first block didn't execute because of ==== return value as true onl if data types and values are the same";
}
?> 
<!-- 3 -->
<!-- != -->
<?php 
$a=19;
$b=30;
if($a!=$b){
    echo "NOT EQUAL";
}
?>
<!-- !== 4 -->
<!-- NOT IDENTICAL -->
<?php 
$b=30;
// $c="hi";
$c=30;
if($b!==$c){
    echo "data types and the values are not the same thats why I have returned true";
}
else{
    echo "data types and the values are the same";

}

?>

<!-- logical operator -->
<!-- Write a message if the condition is NOT true -->
<!-- 5 -->
<?php 
$number1=40;
$number2=90;
if(!($number1 > $number1)){
    echo "HIII";
}
?>


