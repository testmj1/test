
<?php if(isset($_GET['otp'])) {?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>

<div class="login-form">
           
    <form  onsubmit="return validateForm()"  action="index.php?page=conpassphp"  method="post">
        <h2 class="text-center">Enter new password</h2>
       <h6> <span style="color: red;" id="firstName_err"></span></h6>
        <div class="form-group">

            <h3 style="color: red;">

        </div>   

        <div class="form-group">
            
            <input type="hidden" name="password" id="password" value="<?php echo $_GET['otp'] ?>" class="form-control" placeholder="re enter OTP" >
       <input type="text" name="conpass" id="conpass" class="form-control" placeholder="password" >
        </div>
        <div class="form-group">
            <button type="submit"  name="login" class="btn btn-primary btn-block">ok</button>
        </div>
          
    </form>

</div>
</body>
</html> 

<script> function validateForm(){
            var password = document.getElementById("conpass").value;
            status=true
          if(password==""){
                document.getElementById("firstName_err").innerHTML = "**Please Enter Your password";
                return false;
            }else {document.getElementById("firstName_err").innerHTML = "" ;return 0;
            }


       
} </script>
<?php } else header("location:index.php?page=login")?>