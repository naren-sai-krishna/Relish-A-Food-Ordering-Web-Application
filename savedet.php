<?php
require('db.php');
include("auth.php");
$nam=$_POST["name"];
$rno=$_POST["rollno"];

$sql="insert into students (studname,rollnumber)values ('$nam','$rno')";
$mysqlresult=mysqli_query($con, $sql);
echo "details entered successfully.";
?>

<html>
<body>
	<a href="insert.php">click here</a> to enter the details of another student
	<a href="index.php">click here</a> to go to home page
</body>
</html>