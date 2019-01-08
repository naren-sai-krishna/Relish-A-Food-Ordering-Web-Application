<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Dashboard</p>
<p>This is another secured page.</p>
<p><a href="index.php">Home</a></p>
<a href="insert.php">insert data into dbms</a></p>
<a href="delete.php">delete data from dbms</a><br>
<a href="details.php">get details</a><br>
<a href="logout.php">Logout</a>
<br>
</div>
</body>
</html>