<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
/*Before using data received through get (or post), is indicated to check if they were set /sent (using the "isset()"
function*/


if (isset($_REQUEST['username'])){
        // removes backslashes
    $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string.The function adds an escape character, the backslash, \, before certain potentially dangerous characters in a string passed in to the function. The characters escaped are \x00, \n, \r, \, ', " and \x1a.This can help prevent SQL injection attacks which are often performed by using the ' character to append malicious code to an SQL query.
    $username = mysqli_real_escape_string($con,$username); 
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        /*The mysqli_query function is used to execute SQL queries.

The function can be used to execute the following query types;

Insert
Select
Update
delete
        */
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>