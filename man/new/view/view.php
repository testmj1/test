
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 
<div class="container">
 <?php session_start(); if(isset($_SESSION['username'])){?>
  <h2> user profile</h2>
  
     
<div class="container center border border-primary " style="height: 400px; background-color: rgba(255,0,0,0.1);"> 
  <div class="row">
    <div class="col col-sm-6 p-5 m-0   ">
<br>
      <img src="./<?php echo $_SESSION['img'];?>" height="270px" width="100%" alt=""> <br>
      <br><br>
   
    </div>
    <div class="col col-sm-6 p-5">
      <br>
    <h3>Name : <?php echo $_SESSION['username'];?> </h3> 
    <h3 class="card-text"> Email: <?php  echo $_SESSION['email'];?></h3>
      <h3> Gender:<?php echo $_SESSION['gender'];?></h3><br>
      <h3> Address :<?php echo $_SESSION['address']; ?></h3>

      <h3> city:<?php echo$_SESSION['city']; ?> </h6>
      <a href="index.php?page=edit" class="btn btn-primary">eddit profile</a> 
      <a class="btn btn-danger" href="index.php?page=logout"> logout</a>
      <?php if($_SESSION['admin'] ){?>
        <a   href="index.php?admin=admin" class="btn btn-info"> ADMIN EDIT</a>
        <?php } ?>
        
    </div>

</div>
</div>
<br>
<?php } else header('location:index.php');?>


    </div>
  </div>
</div>
</body>
</html>

