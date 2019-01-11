<?php 
require('php/db.php');

if(isset($_POST['submit']))
{
	//print_r($_POST);exit;
	$name=$_POST['name'];  //$_POST['<name of input tag>']
	$date=$_POST['date'];
	$time=$_POST['time'];
	$no_of_table=$_POST['no_of_tables'];
	$no_of_person=$_POST['no_of_person'];
	$insert=mysqli_query($con,"INSERT INTO table_booking(username,date_of_booking,time_, no_tables, no_of_persons) VALUES('$name','$date','$time','$no_of_table','$no_of_person')");
	if($insert)
	{ ?>
		<script> 
		alert("Your table has been sucessfully booked!. Thank You");
		</script>
	<?php }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
		<link rel="icon" href="images/Logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		*{
                
				margin: 0px;
				padding: 0px;
				box-sizing: border-box;
				font-family: 'Flamenco';
				font-weight:bold;
				}
		body{
			background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0,0,0,0.5)), url('images/i.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                height: 100vh;
				overflow: hidden;
		}
		.section {
	position: relative;
	height: 100vh;
}

.section .section-center {
	position: absolute;
	top: 50%;
	left: 0;
	right: 0;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
}



.booking-form {
	position: relative;
	max-width: 642px;
	width: 100%;
	margin: 0px auto;
	padding: 15px;
	overflow: hidden;
	background-color: purple;
	opacity:1;
	background-size: cover;
	border-radius: 12px;
	z-index: 20;
}

.booking-form::before {
	content: '';
	position: absolute;
	left: 0;
	right: 0;
	bottom: 0;
	top: 0;
	background: rgba(0, 0, 0, 0.7);
	z-index: -1;
}

.booking-form .form-header {
	text-align: center;
	position: relative;
	margin-bottom: 30px;
}

.booking-form .form-header h1 {
	font-weight: 700;
	text-transform: capitalize;
	font-size: 42px;
	margin: 0px;
	color: #fff;
	
}

.booking-form .form-group {
	position: relative;
	margin-bottom: 30px;
}

.booking-form .form-control {
	background-color: white;
	height: 60px;
	padding: 0px 25px;
	border: none;
	border-radius: 40px;
	color: black;
	-webkit-box-shadow: 0px 0px 0px 2px transparent;
	box-shadow: 0px 0px 0px 2px transparent;
	-webkit-transition: 0.2s;
	transition: 0.2s;
}

.booking-form .form-control::-webkit-input-placeholder {
	color: black;
}

.booking-form .form-control:-ms-input-placeholder {
	color: black;
}

.booking-form .form-control::placeholder {
	color: black;
}
input:focus,
select:focus,
textarea:focus,
button:focus {
    outline: none;
}
.booking-form .form-control:focus {
	-webkit-box-shadow: 0px 0px 0px 2px #ff8846;
	box-shadow: 0px 0px 0px 2px #ff8846;
}

.booking-form input[type="date"].form-control {
	padding-top: 16px;
}

.booking-form input[type="date"].form-control:invalid {
	color: black;
}

.booking-form input[type="date"].form-control+.form-label {
	opacity: 1;
	top: 10px;
}

.booking-form select.form-control {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}

.booking-form select.form-control:invalid {
	color: black;
}

.booking-form select.form-control+.select-arrow {
	position: absolute;
	right: 15px;
	top: 50%;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
	width: 32px;
	line-height: 32px;
	height: 32px;
	text-align: center;
	pointer-events: none;
	color: rgba(255, 255, 255, 0.5);
	
	font-size: 14px;
	text-decoration: none;
}
.btn {
  border-radius: 12px;
  background-color: purple;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: .8%;
  position: absolute;
  opacity: 1;
  transition: 0.3s;
  z-index:2;
  
}
.booking-form select.form-control+.select-arrow:after {
	content: '\279C';
	display: block;
	-webkit-transform: rotate(90deg);
	transform: rotate(90deg);
}

.booking-form select.form-control option {
	color: #000;
	font-size:20px;
	
}

.booking-form .form-label {
	position: absolute;
	top: -10px;
	left: 25px;
	opacity: 0;
	color: #ff8846;
	
	font-size: 13px;
	text-decoration: none;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 1.3px;
	height: 15px;
	line-height: 15px;
	-webkit-transition: 0.2s all;
	transition: 0.2s all;
	opacity: 1;
	top: 10px;
	
	
}

.booking-form .form-group.input-not-empty .form-control {
	padding-top: 0px;
	
}

.booking-form .form-group.input-not-empty .form-label {
	opacity: 1;
	top: 10px;
}

.booking-form .submit-btn {
	color: #fff;
	background-color: #e35e0a;
	font-weight: 700;
	height: 60px;
	padding: 10px 30px;
	width: 100%;
	border-radius: 40px;
	border: none;
	text-transform: uppercase;
	font-size: 16px;
	letter-spacing: 1.3px;
	-webkit-transition: 0.2s all;
	transition: 0.2s all;
}

.booking-form .submit-btn:hover,
.booking-form .submit-btn:focus {
	opacity: 0.9;
	
}
	</style>
<?php



 ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<button class="btn" style="position:absolute" onclick="goBack()">Back</button>
	<div id="booking" class="section">
		<div class="section-center">
			
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Make your Table reservation</h1>
						</div>
						<form method="post">
							<div class="form-group">
								<input style="font-size:110%;padding-top:20px;" class="form-control" type="text" name="name" id="name"  required>
								<span class="form-label">Name</span>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input style="font-size:110%;padding-top:20px;" class="form-control" name="date" id="date" type="date" required>
										<span class="form-label">Date</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										
									</div>
								
								</div>
							</div>
							<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										<input type="time" style="font-size:110%;padding-top:20px;"name="time" id="time" class="form-control" required>
											<span class="form-label">Time</span>
										</div>
									
									</div>
								</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group" >
										<select style="font-size:110%;padding-top:20px;" class="form-control" name="no_of_tables" required>
											<option value="" selected hidden>No of 	Tables</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
										</select>
										
										<span class="form-label">Tables</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" style="font-size:110%;padding-top:20px;" name="no_of_person" id="no_of_person" required>
											<option value="" selected hidden>No of persons</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>

										</select>
										

										<span class="form-label">Persons</span>
									</div>
								
								</div>
							</div>
							
							<div class="form-btn">
								<input type="submit" name="submit" value="Book Now" class="submit-btn">
							<!--	<button class="submit-btn">Book Now</button>-->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script>
		function goBack() {
            window.history.back();
        }  
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body>

</html>