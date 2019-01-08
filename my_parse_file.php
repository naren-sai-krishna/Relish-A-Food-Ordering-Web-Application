
<?php

require('php/db.php');

session_start();
$lphone=$_SESSION['lphone'];


    $parm1=$_POST['parm1'];
    $parm2=$_POST['parm2'];
    $parm3=$_POST['parm3'];
    $parm4=$_POST['parm4'];
    
    $query = "INSERT INTO rating(phone,taste,foodquality,intimedelivery,customerservice) VALUES('$lphone','$parm1','$parm2','$parm3','$parm4') ON DUPLICATE KEY UPDATE taste='$parm1', foodquality='$parm2', intimedelivery='$parm3', customerservice='$parm4'";
    $result = mysqli_query($con,$query) or die(mysqli_error($con));

?>
