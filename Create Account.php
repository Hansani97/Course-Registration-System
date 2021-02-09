<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Create Account</title>
    <link rel="icon" type="image/png" sizes="undefinedxundefined" href="assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="undefinedxundefined" href="assets/img/logo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body class="bg-gradient-primary" style="background-image: url(&quot;assets/img/3433515.jpg&quot;);background-color: #001a33;">
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand text-dark js-scroll-trigger" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" href="Home_Page/index.php" style="font-family: Arizonia, cursive;width: 40px;height: 40px;background-image: url(&quot;assets/img/icons8_home_24px.png&quot;);background-position: center;background-size: contain;background-repeat: no-repeat;margin-top: 10px;"></a></div>
    </nav>
    <div class="container" style="margin-top: -60px;padding: 30px;">
        <div class="card shadow-lg o-hidden border-0 my-5" data-aos="fade">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" data-aos="fade-up" style="background-image: url(&quot;assets/img/2853458.jpg&quot;);background-repeat: no-repeat;background-size: contain;"></div>
                    </div>
                    <div class="col-lg-7">
                        <div data-aos="fade-up" class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account</h4>
                            </div>
                            <form action="reg1.php" method="POST" class="user" onsubmit="return validation()">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="First_Name" placeholder="First Name" name="First_Name" autocomplete="off" required style="text-transform: capitalize;"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="Last_Name" placeholder="Last Name" name="Last_Name" autocomplete="off" required style="text-transform: capitalize;"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="Gender" placeholder="Gender" name="Gender" autocomplete="off" required style="text-transform: capitalize;"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="Contact_Number" placeholder="Contact Number" name="Contact_Number" autocomplete="off" required>
                                        <span id="contact" class="text-danger font-weight-bold"> </span></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="Reg_Number" placeholder="Reg-No (AAA/0000/0000/000)" name="Reg_Number" autocomplete="off" required style="text-transform: uppercase;"><span id="reg" class="text-danger font-weight-bold"> </span></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="email" id="Email" aria-describedby="emailHelp" placeholder="Email Address" name="Email" autocomplete="off" required> <span id="email" class="text-danger font-weight-bold"> </span></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="Password" placeholder="Password" name="Password" required><span id="pass" class="text-danger font-weight-bold"> </span></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="Confirm_Password" placeholder="Re-enter Password" name="Confirm_Password" required> <span id="cnfpass" class="text-danger font-weight-bold"> </span></div>
                                </div><button class="btn btn-primary btn-block text-white btn-user" type="submit">Register Account</button>
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="Login.php">Already have an account? Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        

        function validation(){

            var con = document.getElementById('Contact_Number').value;
            var register = document.getElementById('Reg_Number').value;
            var emails = document.getElementById('Email').value;
            var pwd = document.getElementById('Password').value;
            var cnfpwd = document.getElementById('Confirm_Password').value;
            

            
            if(isNaN(con)){
                document.getElementById('contact').innerHTML =" ** user must write digits only not characters";
                return false;
            }
            if(con.length!=10){
                document.getElementById('contact').innerHTML =" ** Mobile Number must be 10 digits only";
                return false;
            }




            if(register.length != 17){
                document.getElementById('reg').innerHTML =" ** Please fill the username field";
                return false;
            }
            


            if(emails.indexOf('@') <= 0 ){
                document.getElementById('email').innerHTML =" ** @ Invalid Position";
                return false;
            }

            if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
                document.getElementById('email').innerHTML =" ** . Invalid Position";
                return false;
            }



            if((pwd.length <= 5) || (pwd.length > 20)) {
                document.getElementById('pass').innerHTML =" ** Passwords lenght must be between  5 and 20";
                return false;   
            }


            if(pwd!=cnfpass){
                document.getElementById('cnfpwd').innerHTML =" ** Password does not match the confirm password";
                return false;
            }



            if(cnfpass == ""){
                document.getElementById('cnfpwd').innerHTML =" ** Please fill the confirmpassword field";
                return false;
            }

        }
</script>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>