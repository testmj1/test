<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit profile</title> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

</head>
<style>				                
body{margin-top:20px;}
.avatar{
width:200px;
height:200px;
}				              </style>
<body>
    <?php session_start(); if($_SESSION['username']){?>
<div class="container bootstrap snippets bootdey " style="height: 100%; background-color: rgba(255,0,0,0.1);">
  <div class="row p-3">
    <div class="col col-sm-12">
    <h1 class=" text-dark text-center">Edit Profile</h1></div>
    <a href="index.php?page=view" class="btn text-center  btn-info">Back</a>
  </div>
    
      <hr>
      
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="<?php echo $_SESSION['img'];?>"  class="avatar img-circle img-thumbnail" alt="avatar">
          <!-- <h6>Upload a different photo...</h6> -->
      
          <!-- <input type="file"  class="form-control"  name="imges"> -->
          <br> <a class="btn btn-danger" href="index.php?page=logout">logout</a>
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
       
        <h3>Personal info</h3>
        
        <form class="form-horizontal" enctype="multipart/form-data"  role="form" method="post" onsubmit="return validation();" action="index.php?phpcode=editupdate">
          <div class="form-group">
         
          <input type="hidden" id="custId" name="email" value="<?php echo $_SESSION['email'];?>">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" id="name" name="N" type="text" value="<?php echo $_SESSION['username']?>">
            </div> <small  id="firstName_err" style="color: red;"></small>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control"  name="L" type="text" id="lastname" value="<?php echo $_SESSION['lastname'] ?>">
            </div><small  id="lastName_err" style="color: red;"></small>
          </div>
          <div class="col-md-6 mb-4">

<h6 class="mb-2 pb-1">Gender: </h6>

<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="g"
        id="maleGender" value="Male"  <?php if( $_SESSION['gender']=="Male"){?> checked <?php } ?> />
    <label>Male</label>
</div>

<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="g"
        id="femaleGender" value="Female" <?php  if($_SESSION['gender']=='Female'){?> checked <?php }?> />
    <label>Female</label>
</div>

<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="g"
        id="otherGender" value="Other" <?php if($_SESSION['gender']=='Other'){?>checked <?php }?> />
    <label>Other</label>
</div>

</div>
     
          <div class="form-group">
            <label class="col-lg-3 control-label">address:</label>
            <div class="col-lg-8">
              <input class="form-control" name="A" type="text" id="add" value="<?php echo$_SESSION['address']?>">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Select Your City</label>
            <div class="col-lg-8">
              <div class="ui-select">
                  
                <select name="city" id="city"  class="form-control">
                <option  value="<?php echo$_SESSION['city']; ?>"><?php echo$_SESSION['city']; ?></option>
                  <option value="indore">indore</option>
                  <option value="bhopal">bhopal</option>
                  <option value="mumbai ">mumbai</option>
                 
                 
                </select>
                <small  id="errcitycity" style="color: red;"></small>
             <br>
             <input type="file" name="image"> <br><br><br>
              </div></div>
          </div>
          </div>
          <div class="row">
            <div class="col">
              <button class="btn bg-primary form-control" type="submit" name="update">  SUBMIT </button>
            </div></div>
               </div>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
</body>
</html>
<?php } else header('Location:index.php'); ?>

<script> function validation(){
     var fname = document.getElementById("name").value;
            var lname = document.getElementById("lastname").value;
            var add=document.getElementById('add').value;
            var city=document.getElementById('city').value;

            status=true
            if (fname == "") {
                document.getElementById("firstName_err").innerHTML = "**Please Enter Your First Name";
             return false;
            }
            else if (!(fname.match(/^[A-Za-z]+$/))) {
                document.getElementById("firstName_err").innerHTML = "**First name must have alphabet characters";
                 return false;
            }
            else {
                document.getElementById("firstName_err").innerHTML = "";
            
            }

            /*For Last Name*/
            if (lname == "") {
                document.getElementById("lastName_err").innerHTML = "**Please Enter YourLast  Name";
                return false;
            }

            else if (!(lname.match(/^[A-Za-z]+$/))) {
                document.getElementById("lastName_err").innerHTML = "**Last name must have alphabet character";
                return false;

            }
            else {
                document.getElementById("lastName_err").innerHTML = " ";
                
            }
            if(city=='select'){
              document.getElementById("errcitycity").innerHTML = "**Please select a city!";
              return false;
            }else
            {
              document.getElementById('errcitycity').innerHTML="";
            }
} </script>

