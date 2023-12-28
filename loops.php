<!-- Output $i as long as $i is less than 6 -->
<!-- 1 -->
<?php 
$number=0;
while($number <= 5){
    echo "This is a while loop execution \n";
    $number++;

}

?>
<!-- //2. Output $i as long as $i is less than 6. -->

<?php
$number=0;
while($number<=6){
    echo $number . "\n";
    $number++;

}
?>
<!-- 3 -->
<!-- Create a loop that runs from 0 to 9 -->
<!-- for loop -->
<?php 
$i=0;
for($i=0;$i<10;$i++){
    echo $i ." ";
}
?>
<!-- 4 -->
<!-- loop through the items in the $colors array -->
<?php 
$color=array("Grey","red","green");
foreach($color as $x){
    echo $x . "\n";
}
?>
<?php 
$numbers=array(1,2,"red","green ",44);
foreach($numbers as $x){
    echo $x."\n";
}
?>
<!-- Output the second item in the $fruits array. -->
<?php
$fruits=array("mango","grapes","strawberry");
echo $fruits[1];

?>

<!-- Create an associative array containing the age of Peter, Ben and Joe -->

<?php
$age=array("Suresh "=>"18 ","Ram "=>"34 ");
foreach($age as $x){ 
    echo $x ."\n" ;
}
echo $age['Suresh '];
?>
<!-- Use the correct array method to sort the $colors array alphabetically. -->

// $color=array("Blue","red","green");
// echo sort($color);
// echo $f=sort($color);

<!-- Use the correct array method to sort the $age array according to the values -->
<?php 
$colors=array("Blue"=>"45","red"=>"56","green"=>"55");
echo asort($colors);
?>





