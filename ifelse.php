<?php 
if (0<10){
    echo "super
    ";
}
?>
<!-- 1 Output "Hello World" if $a is greater than $b -->
<?php 
$a=100;
$b=90;
if($a>$b){
    echo "hello World";
}
?>
<!--2 Output "Hello World" if $a is NOT equal to $b -->
<?php 
$a=30;
$b=40;
if($a!=$b){
    echo "HelloWorld";
}
?>
<!-- 3 Output "Yes" if $a is equal to $b, otherwise output "No" -->
<?php 
$a=10;
$b=10;
if($a=$b){
    echo "YES";
}
?>
<!-- 4 -->
<!-- Output "1" if $a is equal to $b, print "2" if $a is greater than $b, otherwise output "3" -->
<?php 
$a=(int)readline("Enter a number ");
$b=(int)readline("Enter a number ");
// $a=10;
// $b=10;
if($a==null or $b==null){
    echo "please enter correct value";
}
elseif($a==$b){
    echo "a=b : 1";
}
elseif($a>$b){
    echo "a>b : 2";
}
else{
    echo " or 3 ";

}

?>
<!--  -->
