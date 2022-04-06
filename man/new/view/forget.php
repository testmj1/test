

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
    
    <form  onsubmit="return validateForm()"  action="index.php?page=forphp"  method="post">
        <h2 class="text-center">forget password</h2>
       <h6> <span style="color: red;" id="firstName_err"></span></h6>
        <div class="form-group">

            <h3 style="color: red;">

            <!-- <input type="text" name="name" class="form-control" placeholder="name"> -->
        </div>       
        <div class="form-group">
            <input type="email" name="email" id="email" class="form-control" placeholder="email">
        </div>
      
        <div class="form-group">
            <button type="submit"  name="login" class="btn btn-primary btn-block">reset</button>
        </div>
    </form>
</div>              
 
</body>
</html>
<script> function validateForm(){
     var email = document.getElementById("email").value;
           
            if(email=="")
            {    
                    
                document.getElementById("firstName_err").innerHTML = "**Please Enter Your email";
                return false;

            }
            
            else {document.getElementById("firstName_err").innerHTML = "" ;return 0;
            }


       
} </script>