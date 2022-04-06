<?php 
include './model/config.php';
try {
  
  //If the exception is thrown, this text will not be shown
  


//catch exception

 extract($_POST);

 $res=$o->Isemail($email);

 if($res){
 
 //Will be used for confirmation once the database entry has been matched
//  $token = random_bytes(32);
 $validator=rand(10,10000);
 
 //URL will vary depending on where the website is being hosted from
 //$url = 'http://localhost/new/resetp.php?&validator='.$validator.'&email='.$email;
  
$to_email = "$email";   
$subject = "Simple Email Test via PHP";
$query="INSERT INTO `pwdreset`( `validator`,  `UemailId`) VALUES ('$validator','$email')";
$res=$o->Token($query);
 
$body = "Hi, This is test email send by  PHP Script your otp is "."$validator";
$headers = "From: testmj19@gmail.com";
//$expires = date("U") + 1800;
//if(->deleteEmail($usersEmail)){}
$res=mail($to_email, $subject, $body, $headers);
if ($res) {
  // $query='insert into selector,validator from ragistration where email="$email"';

 // echo "'Email successfully sent to $to_email...' check your Email</script>";
  header('location:index.php?page=otp');
     
    echo "Email sending failed...";
}
 }else {
  echo"  <script> alert('this email is  not exits in database !!!')</script>";
  echo "<script> window.location='index.php?page=forget';</script>";
  }
}
catch(Exception $e) {
  echo 'Message: ' ;
}
 