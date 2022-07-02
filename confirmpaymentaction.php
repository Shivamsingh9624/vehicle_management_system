<?php
    $connection= mysqli_connect('localhost','root','','vehicle management');
    session_start();

    $id= $_GET['id'];

    $sql= "UPDATE `tripcost` SET `paid`='1' WHERE booking_id='$id'";
    $result= mysqli_query($connection,$sql);

    if($result){
        header ('Location: bookinglist.php');
    }

    
    $msg="";
    
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $department=$_POST['department'];
        $type=$_POST['type'];
        $req_date=$_POST['req_date'];
        $req_time=$_POST['req_time'];
        $return_date=$_POST['return_date'];
        $return_time=$_POST['return_time'];
        $destination=$_POST['destination'];
        $pickup=$_POST['pickup'];
        $reason=$_POST['reason'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $username= $_POST['username'];
        
        $insert_query="INSERT INTO `booking`(`booking_id`, `name`,`username` , `department`, `type`, `req_date`, `req_time`, `ret_date`, `ret_time`, `destination`, `pickup_point`, `resons`, `email`, `mobile`, `confirmation`, `veh_reg`, `driverid`, `finished`) 
        VALUES ('','$name','$username','$department','$type','$req_date','$req_time','$return_date','$return_time','$destination','$pickup','$reason','$email','$mobile','','','','')"; 
        // echo $name;
        
        
        
        
        $res= mysqli_query($connection,$insert_query);
        
         if($res==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
				          </script>";
            
        }
        else{
            die('unsuccessful' .mysqli_error($connection));
        }
        
        
    }
?>