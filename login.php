<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['phcheck'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['phcheck']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['pscheck']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM user_data WHERE phone='$username' and pass='$password'";
        $firstnamequery = "SELECT firstname FROM user_data WHERE phone='$username' and pass='$password'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $result1 = mysqli_query($con,$firstnamequery) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    
        if($rows==1){
        $_SESSION['phcheck'] = $username;
        $row=mysqli_fetch_array($result);
        $_SESSION['fsname']=$row["firstname"];
            // Redirect user to index.php
	    header("Location: homepage_after_login.php");
         }else{
	echo "<h3>Phone Number/password is incorrect.</h3>";
    }
}
?>







<!DOCTYPE html>
<html>
    <head>
        <meta name="author" content="Naren">
        <meta charset="UTF-8">
        <meta name="description" content="Relish Restaurant Homepage">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" href="images/Logo.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <title>Welcome to RELISH</title>
        <style>
            *{
                
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            }
            body{
                font-size: 20px;
                display:flow-root;
                overflow: auto;
                color:white; 
                font-family: 'Flamenco', cursive;
                background-color: black;
                
            }
            header{
                background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0,0,0,0.7)), url('images/img.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                height: 100vh;
            }
            .clearfix:after{
                content: ".";
                visibility: hidden;
                display: block;
                height: 0px;
                clear: both;
            }
            .row{
                max-width: 1180px;
                margin: 0 auto;
            }
            .Logo{
                height: 130px;
                width: auto;
                float: left;
                margin-top: 20px;
            }
            .main-nav{
                float: right;
                margin-top: 60px;
                margin-right:2%;
            }
            .main-nav li{
                display: inline-block;
                list-style: none;
                margin-left: 40px;
            }
            .main-nav li a{
                padding: 5px 0;
                color: white;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 90%;
                font-weight: 100;
            }
            .main-nav li a:hover{
                border-bottom: 2px solid #bf55ec;
                
            } 
            .main-nav li a:hover{
                background-color: black;
            }
            
            .main-nav ul li a{
                color: #bf55ec;
            }
            .main-nav ul li a:hover{
                border-bottom: 2px solid white;
            }
            .main-nav ul{
                display: none;
                position: absolute;
                
            }
            .main-nav li:hover ul{
                display: block;
                float: left;
                
            }
            .main-nav li:hover ul li{
                display: block;
                margin-top: 7%;
                padding: 0px;
                margin-left: 0px;
                
                
                
            }
            .main-content-header{
                width: 1180px;
                font-size:140%;
                position: relative;
                top: 30%;
                left:50%;
                transform: translate(-50%,-50%);
                
            }
            h1{
                color: white;
                font-size: 250%;
                word-spacing: 5px;
                letter-spacing: 3px;
                margin-bottom: 20px;
                text-transform: uppercase;
                font-weight: lighter;
            }
            .btn{
                display: inline-block;
                padding: 10px 30px;
                font-weight: lighter;
                text-decoration: none;
                text-transform: uppercase;
                border-radius: 200px;
                transition: background-color 0.2s, border 0.2s, color 0.2s;
            }
            .btn-one{
                background-color: black;
                color: white;
                margin-right:15px;
                border: 1px solid white;
            }
            .btn-one:hover{
                animation: colorchangerelish1 1s infinite;
            }
            .btn-two{
                background-color: black;
                color: white;
                margin-right:15px;
                border: 1px solid white;
                
            }
            .btn-two:hover{
                animation: colorchangerelish1 1s infinite;
            }
            .color-change{
                animation: colorchangerelish 1s infinite;
            }
            .color-change1{
                
            }
            .mobile-icon{display: none;}
            @keyframes colorchangerelish1{
                0%{background-color:red;}
                25%{background-color:purple;}
                50%{background-color: black;}
                100%{background-color: purple;}
            }
            @keyframes colorchangerelish{
                0%{color:red;}
                25%{color:purple;}
                50%{color: white;}
                100%{color: purple;}
            }
            @media only screen and (max-width: 1180px){
                .main-content-header{
                    width: 100%;
                    padding: 0 2%;
                }
            }
            @media only screen and (max-width:998px){
                h1{font-size: 200%;}
            }
            @media only screen and (max-width:768px){
                h1{font-size: 180%;}
                .main-nav{display: none;}
                .mobile-icon{
                    display: inline-block;
                    float: right;
                    color: white;
                    margin-top: 30px;
                    margin-right: 20px;
                }
                .main-nav{
                    float: left;
                    
                }
                .main-nav li{
                    display: block;
                    margin-top: 10px;
                    
                }

            }
            @media only screen and (max-width:480px){
                .btn-one{
                    margin-bottom: 20px;
                }
                h1{font-size: 160%;}
                .btn-two{
                    margin-bottom: 20px;
                }
                h1{font-size: 160%;}

            }
            .aboutus ul li{
                padding: 5px 0;
                
                background-color: black;
                display: block;
                list-style: none;
                margin-left: 20px;
            }
            .aboutus ul li a{
                color: white;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 90%;
                font-weight: 100;
            }
            .aboutus ul li a:hover{
                color: purple;
        
                font-size: 100%;
            }
            .soc{
                margin-right: 1%;
                float: bottom;
            }
            footer{
                background-color:black;
                
                margin-right: 0 auto;
            }
            .appstore{
                margin-top:3%;
                float:right;
            }
            .social{
                margin-left: 45%;
                margin-bottom: 3%;
                position: relative;
                color: purple;
                float: center;
                align-content: center;
            }
            .corp{
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                text-align: center;
                
            }


            input[type=text], input[type=password] {
  width: 100%;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  padding: 12px 20px;
  margin: 2px 0;
  display: inline-block;
  border: 2px solid #ccc;
  box-sizing: border-box;
}
checkbox{
    color: black;
    
}

/* Set a style for all buttons */
button {
  background-color: #bf55ec;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}
button:hover {
  opacity: 0.8;
}

.b1{
    float: right;
    color: white;
    text-decoration: none;
    padding: 0px 0%;
    text-transform: uppercase;
    font-size: 90%;
    font-weight: 100;
    background-color: transparent;
    
    font-family: 'Flamenco', cursive;
}
.b1 a:hover{
   
    border-bottom: #bf55ec;
    border-top: #bf55ec;
}



/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  font-family: 'Flamenco', cursive;
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  right: 0;
  top: 0;
  height: 100%; /* Full height */
  width: auto; /* Full width */
  overflow: hidden; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-image: linear-gradient(rgba(0, 0, 0, 0.8),rgba(0,0,0,0.8)), url('images/Login.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    margin-right: 10%;
    width: auto; /* Could be more or less, depending on screen size */
  
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 2%;
  top: 0;
  color: white;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 5%;
  }
}

@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label { margin: 0; padding: 0; }

h1 { font-size: 1.5em; margin: 10px; }
h2 { font-size: 1.5em; margin: 10px;color:white;float:left; }
/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 

.rating-ul li{
display:flex;
}
            
        </style>
    </head>
    <body>
    
    

        <script>

        var modal = document.getElementById('id01');

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }


        function slideshow(){
            var x=document.getElementById('check-bars');
            if(x.style.display === "none"){
                x.style.display="block";
            }
            else{
                x.style.display="none";
            }
        }
        
          

        </script>


        <div class="part1">
        <header>
            <nav>
                <div class="row clearfix">
                    <img src="images/Logo.png" class="Logo" alt="LOGO">
                </div>
            </nav>



                    <!-- Button to open the modal login form -->


<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" method="POST">
    <div class="imgcontainer">
      <img src="images/avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <input type="text" placeholder="Enter Phone Number" name="phcheck" required>
      <input type="password" placeholder="Enter Password" name="pscheck" required>
      <button type="submit">Login</button><br>
      <label style="color: whitesmoke">
        <input type="checkbox" checked="checked" name="remember" ><b>Remember me</b> 
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#"> Forgot password?</a></span>
    </div>
  </form>
</div>

<div id="id02" class="modal">
        <span onclick="document.getElementById('id02').style.display='none'" 
      class="close" title="Close Modal">&times;</span>
      
        <!-- Modal Content -->
        <form class="modal-content animate" action="/action_page.php">
      
          <div class="container">
            <input type="text" placeholder="Enter First Name" name="uname" required>
            <input type="text" placeholder="Enter Last Name" name="uname" required>
            <input type="text" placeholder="Enter Phone Number" name="uname" required>
            <input type="text" placeholder="Enter Email ID" name="uname" required>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <button type="submit" style="text-align:center">Submit</button><br>
            <label style="color: whitesmoke">
              <input type="checkbox"  name="remember" required><b>Agree T&amp;C</b> 
            </label>
          </div>
      
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw"><a href="#"> Forgot password?</a></span>
          </div>
        </form>
      </div>
        </header>
    
   
    
    </body>
</html>