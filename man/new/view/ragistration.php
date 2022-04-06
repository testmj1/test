

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



   
</head>


    <section class="lvh-10">
        <div class="view">
            <?php if(isset($_GET['msg'])){
                echo"your registratin is successfully";
            }?>
            <div class="container py-3 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-6">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5"> Student Registration</h3>
                                <small>
                           
                                </small>
                                <form name="myForm" action="index.php?page=submit" enctype="multipart/form-data" onsubmit="return validateForm()" method="post">
 
                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <label>First Name</label>
                                                <input type="text" id="firstName" name="name"
                                                    class="form-control form-control-lg" /><span id="firstName_err"style="color: red;"></span>

                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <label>Last Name</label>
                                                <input type="text" id="lastName" name="lname"
                                                    class="form-control form-control-lg" /><span id="lastName_err"
                                                    style="color: red;"></span>

                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <label>Password</label>
                                                <input type="password" id="pass" name="password"
                                                    class="form-control form-control-lg" /><span id="pass_err"
                                                    style="color: red;"></span>

                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <label>Confirm password</label>
                                                <input type="password" id="conpass" name="conpassword"
                                                    class="form-control form-control-lg" /><span id="cpass_err"
                                                    style="color: red;"></span>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-outline">
                                                <label>Email</label>
                                                <input type="text" id="emailAddress" name="email"
                                                    class="form-control form-control-lg" /><span id="email_err"
                                                    style="color: red;"></span>

                                            </div>

                                        </div>

                                        <div class="col-md-6 mb-4">

                                            <h6 class="mb-2 pb-1">Gender: </h6>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="g"
                                                    id="maleGender" value="Male" checked />
                                                <label>Male</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="g"
                                                    id="femaleGender" value="Female" />
                                                <label>Female</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="g"
                                                    id="otherGender" value="Other" />
                                                <label>Other</label>
                                            </div>

                                        </div>
                                    </div>
                                     <div class="row">
                                         <div class="col-sm-6"> <label for=""> Address </label>
                                             <input class="text-area" type="text-area" name="address">
                                         </div>

                                     
                                 
                                        <div class="col-sm-6">
                                            <input name="img" type="file">
                                        </div>
                                    </div>
                                    <br><br>
                                        <div class="row">
                                        <div class="col-12">
                                            <label for="">City
                                                <select name="city" id="city" >
                                                    <option  value="City"> SELECTE CITY</option>
                                                    <option value="indore">Indore</option>
                                                    <option value="bhopal">Bhopal</option>
                                                    <option value="mumbai">Mumbai</option>
                                                    
                                                </select>

                                            </label>
                                            <small id="CITYerh" style="color: red;"></small>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="mt-4 pt-2">
                                        <input class="form-check-input me-2" type="checkbox" value="1"
                                            onclick="termchanged(this)" id="box" />
                                        <label>
                                            I agree all Terms and Conditions</a>
                                        </label>
                                    </div>


                                    <div class="mt-4 pt-2">
                                        <button class="btn btn-primary btn-lg" name="submit" type="submit" id="submit"
                                            disabled>Submit</button> 
                                    <a class="btn btn-primary btn-lg" href="index.php?page=login"> login</a> </div>




                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script type="text/javascript">
        function validateForm() {

            var fname = document.getElementById("firstName").value;
            var lname = document.getElementById("lastName").value;
            var pass = document.getElementById("pass").value;
            var cpass = document.getElementById("conpass").value;
            var email = document.getElementById("emailAddress").value;
            var city=document.getElementById('city').value;
            var status=true;
            /*For First Name*/
            if (fname == "") {
                document.getElementById("firstName_err").innerHTML = "**Please Enter Your Name";
                status= false;
            }
            else if (!(fname.match(/^[A-Za-z]+$/))) {
                document.getElementById("firstName_err").innerHTML = "**First name must have alphabet characters";
                status= false;
            }
            else {
                document.getElementById("firstName_err").innerHTML = "";
            
            }

            /*For Last Name*/
            if (lname == "") {
                document.getElementById("lastName_err").innerHTML = "**Please Enter Your Name";
                status= false;
            }

            else if (!(lname.match(/^[A-Za-z]+$/))) {
                document.getElementById("lastName_err").innerHTML = "**Last name must have alphabet character";
                status= false;

            }
            else {
                document.getElementById("lastName_err").innerHTML = " ";
                
            }


            /*For password*/
            if (pass == "") {
                document.getElementById("pass_err").innerHTML = "**Please fill the password";
                status= false;
            }
            else if ((pass.length <= 5) || (pass.length > 20)) {
                document.getElementById("pass_err").innerHTML = "**Password length must be 6 or more than 6";
                status= false;
            }
            else {
                document.getElementById("pass_err").innerHTML = "";
            
            }

            /*For Confirm Password*/
            if (cpass == "") {
                document.getElementById("cpass_err").innerHTML = "**Password must be filled out";
                status= false;
            }
            else if (pass != cpass) {
                document.getElementById("cpass_err").innerHTML = "**Password Does Not Same";
                status= false;
            }
            else {
                document.getElementById("cpass_err").innerHTML = "";

            }

            /*For email*/
            if (email == "") {
                document.getElementById("email_err").innerHTML = "**Please Enter The Email";
                status= false;
            }

            else if (!(email.match(/^[^ ]+@[^ ]+\.[a-z]{2,3}$/))) {
                document.getElementById("email_err").innerHTML = "**Please Enter Valid Email";
                status= false;
            }
            else {
                document.getElementById("email_err").innerHTML = "";
            }
            if (city == "City") {
                document.getElementById("CITYerh").innerHTML = "**Please select a city!";
              
                status = false;
            }
            else{
                document.getElementById("CITYerh").innerHTML = "";
                
            }
            return status;
        }
        function termchanged(box) {
            if (box.checked) {
                document.getElementById("submit").disabled = false;
            }
            else
                document.getElementById("submit").disabled = true;
        }
    </script>

