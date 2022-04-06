<?php 
include './model/config.php';

extract($_POST);

if(isset($_POST['conpass'])){

$res=$o->uemailid($password);

$email=$res;


$re=$o->UpdatePassword($email ,$conpass);
if($re){
   $o->deleteEmail($email); 
   echo "<script> alert('RESET PASSWORD SUCCESSFULL !!!')</script>";


   echo "<script> window.location='index.php?page=login';</script>";

}
else{
    echo"fail";
}
}//header('location:index.php?page=login');



?>