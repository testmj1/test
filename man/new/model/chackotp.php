<?php
include "./model/config.php";
extract($_POST);



$res=$o->otpp($otp);

if(!$res){
  echo"  <script> alert('wrong OTP !!!')</script>";
  //header("location:index.php?page=otp");
  echo "<script> window.location='index.php?page=otp';</script>";
}else header('location:index.php?page=conpass&otp='.$otp."");

?>