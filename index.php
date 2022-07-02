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
    background-image: url("why-kei-8e2gal_GIE8-unsplash.jpg");
    height: 100%;

    /* Set a specific height */
    min-height: 700px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    }
    
.parallax1 {
    /* The image used */
    background-image: url("mitchell-johnson-nd5oU1Duhf0-unsplash.jpg");
    height: 100%;

    /* Set a specific height */
    min-height: 600px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    } 
    
    .navbar-fixed-top.scrolled {
       background-color: ghostwhite;
      transition: background-color 200ms linear;
    }

</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()"> 
   
    <div class="parallax foo">
       <?php include 'navbar.php';?>
    
        <div class="hero-text text-center" style="font-size:50px text-align: center; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color: white;">
            
            <?php if(isset($_SESSION['username'])==true) { ?>

            <h1>Welcome, <?php echo $_SESSION['username']; ?></h1> 
            <p>You can book vehicle by clicking the button</p>

            <a class="btn btn-success" style="text-align: center" href="booking.php">Book a Vehicle</a>
            
            <?php } else{  ?>
            <h1>Vehicle Management System</h1>
            <p>A management system where you can easily manage vehicles</p>
            <a class="btn btn-primary" style="text-align: center" href="login.php">Login To Book A Vehicle</a> 
            <?php } ?>
            
          </div>
    </div>                 
    
    <div>
       <br><br>
        <div id="bus_route" class="container">
          <div class="page-header">
            <h1 style="text-align: center">Grasim Industries</h1>      
          </div> 
          <div class="row">
              <div class="col-md-6 foo">
              <br>
                <!-- <p><b>The ruet bus goes around the rajshahi city in different interval. this is the route of the ruet bus.</b></p> -->
                <img src="rayon-thum.jpeg" width="500" height="350" img-responsive" >  
              </div>
              <div class="col-md-6">
                  <br>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3620.1065929709252!2d70.356505085767!3d20.917719447172058!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bfd323406295f5b%3A0xd220c32443d0564f!2sIndian%20Rayon%20Industries%2C%20Rayon%20Factory%20Area%2C%20Veraval%2C%20Gujarat%20362266!5e1!3m2!1sen!2sin!4v1655982200773!5m2!1sen!2sin" width="500" height="350" style="border:0;" allowfullscreen></iframe>
                    <p>Indian Rayon</p>
              </div>
          </div>       
        </div>
        
        <br>
        <div class="page-header">
            <h1 style="text-align: center">Our Services</h1>      
        </div>
        <div class="parallax1"></div>
        <div id="driver" class="container">
          
          <!-- <div class="row">
              <div class="col-md-12">
                  <p style="font-size: 20px;">The driver are very punctual and they provides great service. Every one of them is professional and great at their jobs</p>
                  
              </div>
          </div> -->
               
        </div>
        
        
        <div id="bus" class="container">
          <div class="page-header">
            <h1 style="text-align: center">Cars </h1>      
          </div> 
          <div class="row">
              <div class="col-md-6">
                <img src="pexels-pok-rie-1004409.jpg" height = "350" width = "500" class="img-responsive" >  
              </div>

              <div class="col-md-6 foo1 text-center">
                  <p style="font-size:20px;"><b>In Indian Rayon we have around 20-30 luxury cars and each one of it is well maintained. These cars goes in different direction of the city and can also be hired.</b></p>
              </div>
          </div>       
        </div>
        
        
          
          <p></p>      
                
        </div>  
        
        <footer style="background-color: #2f2f2f;
          color: #fff; padding-top: 18px;" class="container-fluid text-center">
                <p>© 2022 Copyright: Aditya Birla Group</p> 
        </footer>
        
        
        
        
    
    
    
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".parallax");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
    </script>    
  
  
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>
    
</body>
</html>