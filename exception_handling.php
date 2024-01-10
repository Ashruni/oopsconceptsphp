<!-- 173 -->
<?php 
try{
$s=10;
if($s>10){
    echo $s;
}
else{
   throw new Exception("Something went wrong : enter a number greater than 10 :\n");
}
}
catch(Exception $e){
    echo $e->getMessage(); 

}
?>
<!-- zero division error -->
<!-- 174 -->
<?php 
try{
    $y=0;
    if($y==0){
        throw new Exception("DIVISION BY ZERO IS NOT POSSIBLE HERE :");
        $div=$x/$y;
    }

}
catch(Exception $e){
   echo $e->getMessage();
}
?>
<!-- 175 -->
<!-- Write a PHP function that attempts to divide two numbers. 
Use a try-catch block to handle the division by zero exception -->
<?php
function divideTwoNumber($numerator,$denominator){
    
    if($denominator==0){
        throw new Exception("Division by zero is not possible :");
    }
    else{
        $div = $numerator / $denominator ;
        echo $div ."\n";
        // echo ;
    }
}
try{
    $res= divideTwoNumber(200,2);
    
    $res1= divideTwoNumber(200,0);

    
    
    // echo $res;
    
    // echo $res1;
}
catch(Exception $e){
   echo $e->getMessage();
}

 ?>
 
<?php
$newFile= fopen("new_Text.txt","w") or die("cannot open :");
$txt = "This is a test file :";
fwrite($newFile ,$txt );
fclose($newFile);
// Tada you have just created a new file :)  || !$file means  file not found  

?>
<?php 
function fileOpener(){
    if($newFile == NULL){
        throw new Exception("File is not here :") ;
    }
    

    try{
        $newFile = fopen("objects.php","w");

    }
    catch(Exception $e){
        echo $e->getMessage();
    }
}
?>
<!-- 176 -->
 <!-- Create a PHP function that opens a file 
 based on a given filename. Handle both the file 
 not found and permission issues using multiple catch blocks.
Custom Exception: -->

<!-- ======== -->
<?php 
function fileOpen($fileName){
    
    try{
        $open = fopen($fileName,'r');
        if(!$open){
            
           throw new Exception("Could not open file");
        }
        fclose($open);
        return "File opened successfully ";
    }
    catch(FileNotFoundException $e){
        return "Error : File Not Found ".$e->getMessage() ;
    }
    catch(Exception $e){
        return "Error : Exception ". $e->getMessage();
    }
    catch(PermissionDeniedException $e){
        return "Error : Permission Denied ".$e->getMessage();
    }
}
$fileName = "function.php";
$file=fileOpen($fileName);
echo $file;

?>
<!-- 177 -->
<!-- Question: Define a custom exception class called InvalidEmailException.
Write a function that accepts an email address as a parameter and throws
this exception if the email format is invalid. -->
<?php 
class InvalidEmailExceptions{
    function emailFunction($address){
        try{
            if(filter_var($address, FILTER_VALIDATE_EMAIL)){
                echo "It is valid :";
                
            }
            else{
                throw new Exception("EMAIL FORMAT IS NOT VALID :"); 
            }
        }
        catch(Exception $e){
                echo "InvalidEmailException :" . $e->getMessage();
            }
    }  
    
}
$address =readline("enter your email address");
$email = new InvalidEmailExceptions();
$email->emailFunction($address);
?>
<!-- 178 -->
<!-- Question: Write a PHP function that calls another function, which may throw an exception. 
Use nested try-catch blocks to handle exceptions at both the outer and inner levels.  -->


