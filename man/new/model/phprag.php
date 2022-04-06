  <?php

  $res="";

  include './model/config.php'; //include config file 


  extract($_POST); //for use data extract in its variable use from html form and get data from method post
  if(isset($submit)){  // isset submit button to run this code
  $im=$_FILES['img']['name']; //images uplode in our folder temprary uplode images
  $n=$_POST['name'];//$n in store name   in html form get and store in variable
//images uplode in our folder temprary uplode images
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



  ?>