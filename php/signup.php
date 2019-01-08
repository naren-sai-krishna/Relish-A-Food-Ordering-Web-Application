<?php
require('db.php');
//session_start();
if (isset($_POST['ssubmit'])){
    $sfirstname=mysqli_real_escape_string($con,$_POST['sfirstname']);
    $slastname=mysqli_real_escape_string($con,$_POST['slastname']);
    $sphone=mysqli_real_escape_string($con,$_POST['sphone']);
    $semail=mysqli_real_escape_string($con,$_POST['semail']);
    $spass=mysqli_real_escape_string($con,$_POST['spass']);
    $shashed=password_hash($spass,PASSWORD_DEFAULT);
    $saddress=mysqli_real_escape_string($con,$_POST['saddress']);
    $scity=mysqli_real_escape_string($con,$_POST['scity']);
    
    $query = "SELECT * FROM user_data WHERE phone='$sphone'";
    $result = mysqli_query($con,$query) or die(mysqli_error());
    $rows = mysqli_num_rows($result);
        if($rows==1){
            echo "<script>alert('Data Exists! Try Login')</script>";
         }else{
            $query1 = "INSERT INTO user_data(firstname,lastname,phone,email,pass,address_,city) VALUES('$sfirstname','$slastname','$sphone','$semail','$shashed','$saddress','$scity')";
            $result1 = mysqli_query($con,$query1) or die(mysqli_error());

            if(!$result1){
                die("Query Failed!" . mysqli_error($con));
                echo "<script>alert('Data Entry Failed')</script>";
            }
            else{
               // echo "<h3>Data Entry Successfull.</h3>";
               echo "<script>alert('Data Entry Successfull')</script>";
               
            }
    }
    

}
?>
