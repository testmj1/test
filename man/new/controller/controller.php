 


<?php $page='index'; $phpcode='';
$admin='';include './controller/model.php';

  if(isset($_GET['page'])){
  $page=$_GET['page']; $obj->$page();}
   else {
     if(isset($_GET['phpcode'])){
       $phpcode=$_GET['phpcode'];
       include './model/php.php';
       $code->$phpcode();
     }
     else
      { $obj->$page();
     // include './controller/admincontroller.php'; $obj2->$admin(); 
     }

    }
     
     
  
?>