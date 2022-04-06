<?php

class phpcode{
  
public function login()
{   
  include './model/config.php';
$Email ='';
extract($_POST);

if(isset($_POST['login']))
$Email=$email;
{ $res="select email,password from ragistration where email='$email 'AND password='$password'";
  $res= $o->login($email,$password);
     if($res){
      echo" <script> alert('LOGIN SUCCESSFULL !!!')</script>";
       $rows=$o->select($email);
 echo"<script> window.location='index.php?page=view';</script>";
     }else{
      echo" <script> alert('EMAIL PASSWORD NOT MATCH !!!')</script>";
      echo"<script> window.location='index.php?page=login';</script>";
      echo"<script> window.Location:index.php?page=login';</script>";
      // header('Location:index.php');
     }
    
}  
}
public function submit()
{
 $res="";
  
    include './model/config.php';
  
    extract($_POST);
    if(isset($submit)){
    $im=$_FILES['img']['name'];
    $n=$_POST['name'];
    echo'hello';
    move_uploaded_file($_FILES['img']['tmp_name'],$_FILES['img']['name']);
        //$ins="insert into ragistration (fname,lname,gender,email,password,city,address,img)values('$name','$lname','$g','$email','$password','$city','$address','$im')";
      $res=$o->insdata($name,$lname,$g,$email,$password,$city,$address,$im);
      if($res){
        echo" <script> alert('REGISTRATION SUCCESSFULL !!!')</script>";
  
    echo"<script> window.location='index.php?page=login';</script>";
        //  $o->url("index.php?msg=true");
      }
      else{ echo" <script> alert('email allrady exits')</script>";

        echo"<script> window.location='index.php';</script>";}

      echo"<pre>";   
    $res="";
      // header('location:rag.php',$res);
    } else $err="REGISTRAION FAILED";
  
  
  

}
public function editupdate()
{
    
include './model/config.php';
if(isset($_POST['update'])){
 extract($_POST);

 
   

   $im=$_FILES['image']['name'];
   move_uploaded_file($_FILES['image']['tmp_name'],$_FILES['image']['name']);


  $res=$o->updatedata($email,$N,$L,$A,$city,$g,$im);
  if($res){
      echo"<script> alert('DATA  SUCCESSFULL  UPDETED!!!')</script>";
      //echo $email.' '. $local;
   echo "<script>  window.location='index.php?page=view';</script>"; 
  } else echo"<script> alert('DATA  NOT UPDETED!!!')</script>";

}





// }
// public function password()
// {
//     echo "first";
 
//   echo 
// include './model/config.php'; 
  
// extract($_POST);


// $res=$o->resetpass($validator);
// if($res){
//   $o->UpdatePassword("UPDATE ragistration SET password='$password' where email='$email'");
//    $o->deleteEmail($email);
//   echo "<script>  window.location='index.php?page=login';</script>"; 
// }
// else echo"by";
// //te("U") + 1800;
// // //if(->deleteE
//  }
// public function forgetphp()
// {
//     include './model/config.php';

  
//   //If the exception is thrown, this text will not be shown
  


// //catch exception

//  extract($_POST);
//  $selector = bin2hex(random_bytes(8));
//  //Will be used for confirmation once the database entry has been matched
//  $token = random_bytes(32);
//  $validator=bin2hex($token);
//  //URL will vary depending on where the website is being hosted from
//  $url = 'http://localhost/new/resetp.php?selector='.$selector.'&validator='.bin2hex($token).'&email='.$email;
  
// $to_email = "$email";
// $subject = "Simple Email Test via PHP";
// $query="INSERT INTO `pwdreset`(`id`, `selector`, `validator`,  `UemailId`) VALUES ('','$selector','$validator','$email')";
// $res=$o->Token($query);
 
// $body = "Hi, This is test email send by  PHP Script "."$url";
// $headers = "From: testmj19@gmail.com";
// //$expires = damail($usersEmail)){}
// $res=mail($to_email, $subject, $body, $headers);
// if ($res) {
//   // $query='insert into selector,validator from ragistration where email="$email"';

//   echo "'Email successfully sent to $to_email...' check your Email</script>";
    
// } else {
//     echo "Email sending failed...";
// }
 }

 

public function forphp()
{
    include './model/config.php';
try {
  
  //If the exception is thrown, this text will not be shown
  


//catch exception

 extract($_POST);
 $selector = bin2hex(random_bytes(8));
 //Will be used for confirmation once the database entry has been matched
 $token = random_bytes(32);
 $validator=bin2hex($token);
 //URL will vary depending on where the website is being hosted from
 $url = 'http://localhost/new/resetp.php?selector='.$selector.'&validator='.bin2hex($token).'&email='.$email;
  
$to_email = "$email";
$subject = "Simple Email Test via PHP";
$query="INSERT INTO `pwdreset`(`id`, `selector`, `validator`,  `UemailId`) VALUES ('','$selector','$validator','$email')";
$res=$o->Token($query);
 
$body = "Hi, This is test email send by  PHP Script "."$url";
$headers = "From: testmj19@gmail.com";
//$expires = date("U") + 1800;
//if(->deleteEmail($usersEmail)){}
$res=mail($to_email, $subject, $body, $headers);
if ($res) {
  // $query='insert into selector,validator from ragistration where email="$email"';

  echo "'Email successfully sent to $to_email...' check your Email</script>";
    
} else {
    echo "Email sending failed...";
}
}
catch(Exception $e) {
  echo 'Message:kjhskH ' ;
}
 
}


}
$code=new phpcode();


?>