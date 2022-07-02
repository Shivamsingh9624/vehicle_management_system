<?php
    if(!isset($_SESSION)) 
    {   
        
        session_start(); 
    } 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    
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
       <?php include 'navbar_admin.php';?>
    
        <div class="hero-text text-center" style="font-size:50px text-align: center; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color: black;">
            <h1 class="animated rubberBand" >Welcome, Admin</h1> 
            <p>You can control Website from here.</p>
          </div>
    </div>              
        
        <footer style="background-color: #2f2f2f;
          color: #fff; padding-top: 10px;" class="container-fluid text-center">
                <p>© 2022 Copyright: Aditya Birla Group</p> 
        </footer>

</body>
</html>