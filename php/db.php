<?php

$con = mysqli_connect("localhost","root","naren","food-ordering");//All communication between PHP and the MySQL database server takes place through this connection.
// Check connection
if (mysqli_connect_errno())//The mysqli_connect_errno() function returns the error code from the last connection error, if any.
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>