<!-- from new construct.php -->
<!-- 228 -->
<!-- Create a class with a constant variable named PI representing the value of pi -->
<?php 
const PI = 3.14;
class NewConstants{
    
    public function __construct(){
        echo PI ;
    }
}
$con = new NewConstants();
?>
<!-- 229 -->
<!-- Define a constant MAX_LENGTH in a class to represent the maximum length of a string. -->
<!-- define(name, value, case-insensitive); -->
<?php 
// $input = readline('enter a string '); $input 
$input ='AAAAAADDDDD';
$string = strlen($input);
define('MAX_LENGTH',$string);
class NewConstantMaxLength{
        public function stringLength($in)
{
    echo "LENGTH OF {$in} is ". MAX_LENGTH ."\n";
}

}

$objectCreation = new NewConstantMaxLength(MAX_LENGTH);
$objectCreation->stringLength($input);


?>
<!-- 230 -->
<!--Create a class with a constant MIN_AGE representing 
the minimum age for a user.  -->
<?php
define('MIN_AGE',18);
class ConstantMinAge{
    public function displayfunction(){
        echo "MIN_AGE : " . MIN_AGE ;
    }
}
$obj = new ConstantMinAge();
$obj->displayfunction(MIN_AGE);
?>
<!-- 231 -->
<!-- Create a class with a constant DEFAULT_FONT_SIZE for a 
text formatting class. -->
<?php 
define('DEFAULT_FONT_SIZE',28);
class ConstantFontSize{
    public function displayCFfunction(){
        echo "font size :".DEFAULT_FONT_SIZE;
    }
}
$objectCreate = new ConstantFontSize();
$objectCreate ->displayCFfunction(DEFAULT_FONT_SIZE); 
?>
<!-- 232 -->
<!-- Implement a class constant ERROR_LOG_FILE for
 logging errors. -->
 <?php
 define('ERROR_LOG_FILE','An error occurred ');
 class ErrorClassDisplay
    {
        public function displayECFunction(){
            echo ERROR_LOG_FILE;
        }
    }
$newObjects = new ErrorClassDisplay();
$newObjects->displayECFunction($newObjects);
 
 ?>

 <!-- 233 -->
 <!-- Define a constant CACHE_EXPIRATION_TIME for a caching class -->
 <?php
 $d=date("Y-m-d");
 define('CACHE_EXPIRATION_TIME',$d);
 class CacheExpirationTime{
    public function cacheExpirationTime(){
        echo "THE CACHE EXPIRES IN ".CACHE_EXPIRATION_TIME;
    }
 }
 $newObjects= new CacheExpirationTime(CACHE_EXPIRATION_TIME);

 $newObjects->cacheExpirationTime();

  ?>
  <!-- 234 -->
  <!-- Create a class constant SMTP_SERVER 
  for an email handling class. -->
  <?PHP 
  define('SMTP_SERVER','this is server sent message');
  class SmtpServer {
    public function handleFunction(){
        echo SMTP_SERVER ;
    }
}
$nwo= new SmtpServer();
$nwo->handleFunction();
  
  ?>
  <!-- 235 -->
<!-- Implement a class with a constant MAX_FILE_SIZE
 for file upload validation -->
 <?php 
 define('MAX_FILE_SIZE','122mp');

 class FileUploadSize{
    public function getFileSize(){
        echo "file size is : ". MAX_FILE_SIZE;
    }
 }
 $newObjectcreations= new FileUploadSize();
 $newObjectcreations->getFileSize();

 ?>
 <!-- 236 -->
 <!-- Define a class constant DEFAULT_LANGUAGE 
 for a multilingual application -->
<?php 
define('DEFAULT_LANG','Hindi');
class DefaultLanguage{
    public function defaultLanguage(){
        echo DEFAULT_LANG . " is your default language ";
       
    }
}
$newOBjectCr= new DefaultLanguage();
$newOBjectCr->defaultLanguage();
?>
<!-- 237 -->
<!-- Create a class with a constant DEFAULT_TIMEZONE 
for date and time handling -->
<?php 
define('DEFAULT_TIMEZONE',date("Y-m-d H:i:s"));
class DefaultTimeZone{
    public function defaultTimeZone(){
        echo DEFAULT_TIMEZONE . " is your default time zone";
    }
}
$newOne = new DefaultTimeZone;
$newOne->defaultTimeZone();
?>
<!-- Implement a class constant ADMIN_ROLE 
representing the administrator role. -->
<!-- 238 -->
<?php 
define('ADMIN_ROLE','Sri Pall');
class AdminRole{
    public function adminRole(){
        echo ADMIN_ROLE . " is the admin role ";
    }
}

$objNew = new AdminRole();
$objNew->adminRole();

?>
<!-- 239 -->
<!-- Define a class constant GUEST_USER_ID
 for identifying guest users. -->
<?php 
define('ADMIN_USER_ID','');
class GUEST_USER_ID{
    public function guestUserId()
    {
        echo ADMIN_USER_ID ;
    }
}
 
?>
<!-- 240 -->
<!-- Create a class with a constant DEFAULT_COUNTRY 
for user location settings. -->
<?php 
define('DEFAULT_COUNTRY','USA');
class DefaultCountry{
    public function country(){
        echo DEFAULT_COUNTRY;
    }
}
$new = new DefaultCountry();
$new->country();

?>
