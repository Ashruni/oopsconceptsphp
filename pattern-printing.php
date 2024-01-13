<!-- 187 -->
<!-- print a triangle pattern -->
<?php 
for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo "\n";
}
?>
<!-- 188 -->
<!-- print in another way -->
<?php
for($i=1;$i<=6;$i++){
    for($j=1;$j<$i+1;$j++){
        echo "*";
    }
    echo "\n";
}   
?>
<!-- 189 -->
<!-- pyramid pattern  -->
<?php 
for($i=7;$i>=0;$i--){
    for($j=1;$j<=$i;$j++){
        echo $j;
    }
    for($k=1;$k<=7-$i+1;$k++){
        echo " * ";
    }
    echo "\n";
}
?>
<!-- 190 -->
<!-- pattern printing with numbers reverse right angled triangle -->
<?php 
for($i=7;$i>=0;$i--){
    for($j=1;$j<=$i;$j++){
        echo " * ";
    }
    echo "\n";
}
?>
<!-- 191 -->
<!-- patter printing with j and k as numbers-->
<?php 
for($i=7;$i>=0;$i--){
    for($j=1;$j<=$i;$j++){
        echo $j;
    }
    echo "\n";
}
?>
<!-- 
7654321
654321
54321
4321
321
21
1
 -->
 <!-- print the above pattern -->
<?php 
for($i=7;$i>0;$i--){
    for($j=$i;$j>0;$j--){
        echo $j;
    }
    echo "\n";
}
?>
<!-- 192 -->
<!--
111111
11111
1111
111
11
1  -->

<?php 
for($i=7;$i>=0;$i--){
    for($j=1;$j<=$i;$j++){
        echo " 1 ";
    }
    echo "\n";
}
?>
<!-- 193 -->
<!--  -->
<?php 
$str="VISHAL";
$word= str_split($str);
foreach($word as $w){
    echo $w ."\n";
}
?>
<!-- 194 -->
<?php 
$str="VISHAL";
for($i=0;$i<strlen($str);$i++){
    for($j=0;$j<=$i;$j++){
        echo $str[$j];
    }
    echo "\n" ;
}
?>
<!-- 195 -->
<!-- patter printing -->
<?php
for($i=0;$i<=7;$i++){
    for($j=0;$j<=$i;$j++){
        echo '*';
    }
    for($k=0;$k<=7-$i;$k++){
        echo $k;
    }
    echo "\n" ;

}

?>