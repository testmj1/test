

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
<?php if(!isset($_SESSION['username']) ){?>
<div class="login-form">
    
    <form  onsubmit="return validateForm()"  action="index.php?phpcode=login"  method="post">
        <h2 class="text-center">Log in</h2>
       <h6> <span style="color: red;" id="firstName_err"></span></h6>
        <div class="form-group">

            <h3 style="color: red;">

            <!-- <input type="text" name="name" class="form-control" placeholder="name"> -->
        </div>       
        <div class="form-group">
            <input type="email" name="email" id="email" class="form-control" placeholder="email">
        </div>
        <div class="form-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" >
        </div>
        <div class="form-group">
            <button type="submit"  name="login" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="index.php?page=forget" class="float-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="index.php?page=home">Create an Account</a></p>
</div>
</body>
</html><?php }else include './view/container.php;';?>
<script> function validateForm(){
     var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            status=true
            if(email==""&&password=="")
            {    
                    
                document.getElementById("firstName_err").innerHTML = "**Please Enter Your email or password";
                return false;

            }else if(email=='')
            {
                document.getElementById("firstName_err").innerHTML = "**Please Enter Your Email";
                return false;
            }else if(password==""){
                document.getElementById("firstName_err").innerHTML = "**Please Enter Your password";
                return false;
            }else {document.getElementById("firstName_err").innerHTML = "" ;return 0;
            }


       
} </script>