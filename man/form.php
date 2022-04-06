<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Login Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">forget password</h2>       
        <div class="form-group">
            <input type="email" class="form-control" placeholder="email id" name="email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="pass" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="conform Password" name="con" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
           
    </form>
    <p class="text-center"><a href="ragistration.php">Create an Account</a></p>
</div>
<?php
include"conn.php";
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pass=md5($_POST['pass']);
    $cfpass=md5($_POST['con']);
  //  $pass="444";
   // $cfpass="444";
    $query="select id from ragistration where email='$email'";

    
    
   

       //$query="update ragistration set password='$pass' && conpass='$cfpass' where id='";
  $result=  mysqli_query($conn,$query);
   $res=mysqli_fetch_array($result);
       $re= $res['id'];
       if($re)
       {
       if($pass==$cfpass)
       {
      $qu="update ragistration set `password`='$pass', conpass='$cfpass' where id='$re'";
      $res=mysqli_query($conn,$qu);
     echo"add ho gya";
       }
       else
       {
           echo "write currect password ";
       }
    }
    else{
        echo"wrong email";
    }
    



}
?>
<!-- hi this is me -->
</body>
</html








<?php
session_start();
require_once('config.php');

if(isset($_POST['submit']))
{
	if(isset($_POST['email'],$_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
	{
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);

		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$sql = "select * from members where email = :email ";
			$handle = $pdo->prepare($sql);
			$params = ['email'=>$email];
			$handle->execute($params);
			if($handle->rowCount() > 0)
			{
				$getRow = $handle->fetch(PDO::FETCH_ASSOC);
				if(password_verify($password, $getRow['password']))
				{
					unset($getRow['password']);
					$_SESSION = $getRow;
					header('location:dashbord.php');
					exit();
				}
				else
				{
					$errors[] = "Wrong Email or Password";
				}
			}
			else
			{
				$errors[] = "Wrong Email or Password";
			}
			
		}
		else
		{
			$errors[] = "Email address is not valid";	
		}

	}
	else
	{
		$errors[] = "Email and Password are required";	
	}

}
?>

<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body class="bg-dark">

<div class="container h-100">
	<div class="row h-100 mt-5 justify-content-center align-items-center">
		<div class="col-md-5 mt-5 pt-2 pb-5 align-self-center border bg-light">
			<h1 class="mx-auto w-25" >Login</h1>
			<?php 
				if(isset($errors) && count($errors) > 0)
				{
					foreach($errors as $error_msg)
					{
						echo '<div class="alert alert-danger">'.$error_msg.'</div>';
					}
				}
			?>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="text" name="email" placeholder="Enter Email" class="form-control">
				</div>
				<div class="form-group">
				<label for="email">Password:</label>
					<input type="password" name="password" placeholder="Enter Password" class="form-control">
				</div>

				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				
				<a href="register.php" class="btn btn-primary">Register</a>
			</form>
		</div>
	</div>
</div>
</body>
</html>
