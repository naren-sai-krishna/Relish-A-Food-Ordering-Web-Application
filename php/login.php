<?php
require('db.php');
session_start();
if (isset($_POST['lsubmit'])){
	$lphone = stripslashes($_REQUEST['lphone']);
	$lphone = mysqli_real_escape_string($con,$lphone);
    
    $lpass = stripslashes($_REQUEST['lpass']);
    $lpass = mysqli_real_escape_string($con,$lpass);
    
	
    $query = "SELECT * FROM user_data WHERE phone='$lphone'";
    $result = mysqli_query($con,$query) or die(mysqli_error());
    
    $rows = mysqli_num_rows($result);
        if($rows==1){
            if( $row=mysqli_fetch_assoc($result)){
                $hash_check= password_verify($lpass,$row['pass']);
                if($hash_check==true){
                    $_SESSION['lphone'] = $lphone;
                    $_SESSION['sfirstname']=$row['firstname'];
                    header("Location: homepage_after_login.php");
                }
                else{
                    echo "<script>alert('Password is incorrect')</script>";

                }
            }
            
        }
        else{
            echo "<script>alert('Phone Number is incorrect')</script>";
        }
}
?>