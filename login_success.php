<?php 
    $connection=mysqli_connect("localhost","root","","vehicle management");

    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>vehicle management system</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    

 
</head> 
<style>
    
.parallax {
    /* The image used */
    background-image: url("bg-desktop.png");
    height: 100%;

    /* Set a specific height */
    min-height: 750px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    }
</style>
<body onload="myFunction()"> 
   
    <div class="parallax foo">
       <?php include 'login_success_navbar.php';?>
    
        <div class="hero-text text-center" style="font-size:50px text-align: center; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color: black;">
           
            <h1>Welcome, <?php echo $_SESSION['username']; ?></h1> 
            <p>You can book vehicle by clicking the button</p>
            
            <?php if(isset($_SESSION['username'])==true) { ?>

            <a class="btn btn-success" style="text-align: center" href="booking.php">Book a Vehicle</a>
            
            <?php } else{  ?>
            <a class="btn btn-primary" style="text-align: center" href="bootstrap.html">Login To Book A Vehicle</a> 
            <?php } ?>
            
          </div>
    </div>              
        
        <footer style="background-color: #2f2f2f;
          color: #fff; padding-top: 18px;" class="container-fluid text-center">
                <p>© 2022 Copyright: Aditya Birla Group</p> 
        </footer>

</body>
</html>