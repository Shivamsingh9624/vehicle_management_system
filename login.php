<?php 
    session_start();
    $connection=mysqli_connect("localhost","root","","vehicle management"); 
    
    $msg="";
    if(isset($_POST['submit'])){
        $username=mysqli_real_escape_string($connection,strtolower($_POST['username']));
        
        $password=mysqli_real_escape_string($connection,$_POST['password']); 
        
        $login_query="SELECT * FROM `user` WHERE username='$username' and password='$password'";
        
        $login_res=mysqli_query($connection,$login_query);
        if(mysqli_num_rows($login_res)>0){ 
            $_SESSION['username']=$username;
            header('Location:login_success.php');
        } 
        else{
             $msg= '<div class="alert alert-danger alert-dismissable" style="margin-top:30px";>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                    <strong>Unsuccessful!</strong> Login Unsuccessful.
                  </div>';
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />

    <link rel="stylesheet" href="js/mdb.min.js" />
  </head>
  <body>
    <section class="vh-100" style="background-color: #eee">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem"> <!--for white box -->
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img src="undraw_remotely_2j6y.svg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem"/>
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-10 text-black">
                    <form action="" method="post">
                      <div class="text-center mb-4">
                        <img src="aditya_birla_group.png" width="80%" />
                      </div>
                      <?php echo $msg; ?>
                      <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px">
                        Sign into your account
                      </h5>
                      <!-- Email input-->
                      <div class="form-outline mb-4">
                        <input type="text" id="emailaddress" name="username" class="form-control form-control-lg"/>
                        <label class="form-label" for="emailaddress">Username</label>
                      </div>
                      <!-- Password input-->
                      <div class="form-outline mb-4">
                        <input type="password" id="password1" name="password" class="form-control form-control-lg"/>
                        <label class="form-label" for="password1">Password</label>
                      </div>

                      <div class="pt-1 mb-4">
                        <button class="btn btn-dark btn-lg btn-block" type="submit" name="submit">Login</button>
                      </div>
                    </form>
                    
                    <a class="small text-muted" href="#!">Forgot password?</a>
                      <p class="mb-5 pb-lg-2" style="color: #393f81">
                        Don't have an account?
                        <a href="#!" style="color: #393f81">Register here</a>
                      </p>
                    <!-- Register buttons -->
                    <div class="text-center">
                        
                        <p>or sign up with:</p>
                      <a href="https://www.facebook.com/login/" >
                        <button type="button" class="btn btn-link btn-floating mx-4">
                        <i class="fab fa-facebook-f fa-2x me-3"></i>
                        </button>
                      </a>

                      <a href="https://myaccount.google.com" >
                        <button type="button" class="btn btn-link btn-floating mx-4">
                          <i class="fab fa-google fa-2x me-3"></i>
                        </button>
                      </a>

                      <a href="https://twitter.com/i/flow/login" >
                        <button type="button" class="btn btn-link btn-floating mx-4">
                          <i class="fab fa-twitter fa-2x me-3"></i>
                        </button>
                      </a>

                      <a href="https://github.com/" >
                        <button type="button" class="btn btn-link btn-floating mx-4">
                          <i class="fab fa-github fa-2x me-3"></i>
                        </button>
                      </a>
                      <p>or</p>
                      </div>
                    <div class="text-center">
                        <a href="login_admin.php"> <button type="button" class="btn btn-primary">Admin Login</button></a>
                      </div>
                  </div>
                </div>
              </div>
            <!-- </div> -->
          </div>
        </div>
      </div>
    </section>
    <!-- End your project here-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
