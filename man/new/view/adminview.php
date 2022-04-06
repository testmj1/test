<?php   if(isset($_SESSION['admin'])) {?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<form action=""></form>
</head>
<body>
    <div class="container">
    <table class="table caption-top bg- text-dark">
  <caption>user data</caption>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">gender</th>
      <th scope="col">city</th>
      <th scope="col">Images</th>
      <th scope="col">delete</th>
      <!-- <th scope="col">update</th> -->
      
    </tr>
  </thead>
  <?php
  include './model/config.php';
  $qu="SELECT * FROM ragistration";
  $result=$o->adminedit($qu);
  echo "<pre>"; 
  foreach($result as $res){
  

  
  ?>
  
  <tbody>
    <tr>
      <?php if(!$res['admin']=='1'){ ?>
      <td><?php echo $res['id'] ?> <input type="hidden" value="<?php echo $res['id'] ?>" name="id">  </td>
      <td><?php echo $res['fname'] ?></td>
      <td><?php echo $res['lname'] ?></td>
      <th><?php echo $res['gender'] ?></th>
      <th><?php echo $res['city']?></th>
      <th><img src="<?php echo $res['img']?>" alt="" height="50px"></th>
      <td><a href="index.php?admin=admindelet&id= <?php echo $res['id']?>"> <input type="button" class="btn btn-danger" value="delete"></a></td>
      <!-- <td><a href="update.php?id=<?php echo $res['id']?>"> <input type="button" class="btn btn-primary" value="update"></a></td> -->
    </tr>
    <tr>
        <?php }} } ?>
  </tbody>

  
 
 
</table>
    </div>
</body>
</html>