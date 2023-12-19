<!-- Add to the class a constructor method
 to set a value to the $firstName property as
  soon as the object is created -->
<!-- 18 -->
  <?php
  class magic{
    private $firstName;
    
    public function __construct($fsn){
        $this->firstName = $fsn;
    }
    public function getFirstname(){
        return $this->firstName;
    }

  }
  $obj=new magic("hima");
  echo $obj->getFirstname();
  ?>

<!-- //   echo $obj->__construct("Hema"); -->
<!-- //Get the full name, and echo it to the screen."John Duo" -->
<!-- 19 -->
<?php
class magics{
    private $firstNames;
    private $secondNames;
    public function __construct($fns,$sns){

        $this->firstNames=$fns;
        $this->secondNames=$sns;


    }
    public function  getFullname(){
        return $this->firstNames." ". $this->secondNames;

    }


}
$obj1=new magics("John","Duo");
echo $obj1->getFullname();


?>
<!-- 20 -->

