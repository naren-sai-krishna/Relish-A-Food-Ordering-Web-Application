<?php
require('php/db.php');
//require('a.php');
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="author" content="Naren">
        <meta charset="UTF-8">
        <meta name="description" content="Relish Restaurant Homepage">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" href="images/Logo.png">
        <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <title>Welcome to RELISH</title>
        <style>
            *{
            margin: 0px auto;
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
                background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0,0,0,0.7)), url('images/Header.jpg');
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
            .usname{
                font-family: 'Bitter', serif;
                padding: 3px;
                position:absolute;
                top:2%;
                right:2%;
                color:white;
                margin-left: 32px;
                text-transform: uppercase;
                
                font size: 40px;
            }
            .Logo{
                height: 130px;
                width: auto;
                float: left;
                margin-top: 20px;
            }
            .main-nav{
                
                float: right;
                margin-top: 80px;
                
            }
            .main-nav li{
                display: inline-block;
                list-style: none;
                margin-left: 20px;
                margin-right:20px;
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
                position: relative;
                top: 30%;
                left:50%;
                font-size:130%;
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
                background-color: transparent;
                color: #bf55ec;
                margin-right:15px;
                border: 1px solid #bf55ec;
            }
            .btn-one:hover{
                background-color: white;
            }
            .btn-two{
                background-color: transparent;
                color: white;
                margin-right:15px;
                border: 1px solid white;
            }
            .btn-two:hover{
                background-color: #bf55ec;
            }
            .color-change{
                animation: colorchangerelish 1s infinite;
            }
            .mobile-icon{display: none;}
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
                    margin-top: 60px;
                    margin-right: 20px;
                }
                .main-nav{
                    float: left;
                    
                }
                .main-nav li{
                    display: block;
                    margin-top: 13px;
                    
                }

            }
            @media only screen and (max-width:510px){
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
  border-radius: 12px;
  font-size:105%;
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


button:focus {outline:0;}
/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
  width: auto;
  font-size:105%;
  
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
  margin-top:3%;
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
    margin-right: 3%;
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
.logout{
    background-color:white;
    
    border: 2px solid;
    
}
.logout:hover{
    background-color:transparent;
    color:white;
    border-color:purple;
}
            
        </style>
    </head>
    <body>
        
        <script>
            $(function () {
        $("#ssubmit").click(function () {
            var password = $("#txtPassword").val();
            var confirmPassword = $("#txtConfirmPassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });

        var modal = document.getElementById('id01');

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        function starrating(){
        
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "my_parse_file.php";
    var parm1=parseFloat(document.querySelector('input[name="1rating"]:checked').value);
    var parm2=parseFloat(document.querySelector('input[name="2rating"]:checked').value);
    var parm3=parseFloat(document.querySelector('input[name="3rating"]:checked').value);
    var parm4=parseFloat(document.querySelector('input[name="4rating"]:checked').value);
    
    var vars = "parm1="+parm1+"&parm2="+parm2+"&parm3="+parm3+"&parm4="+parm4;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("status").innerHTML = return_data;
	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
               
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
                    <!-- Button to open the modal login form -->


<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <img src="images/avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <input type="text" placeholder="Enter Phone Number" name="uname" required>
      <input type="password" placeholder="Enter Password" name="psw" required>
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

<div id="id03" class="modal">
  <span onclick="document.getElementById('id03').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="#" method="POST">


    <h1>Rate Us for the Services Provided</h1>
<ul class="rating-ul">
<li>
<h2>Taste</h2>
<fieldset class="rating" onclick="starrating()" id="hello">
    <input type="radio" id="1star5" name="1rating" value="5" /><label class = "full" for="1star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="1star4half" name="1rating" value="4.5" /><label class="half" for="1star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="1star4" name="1rating" value="4" /><label class = "full" for="1star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="1star3half" name="1rating" value="3.5" /><label class="half" for="1star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="1star3" name="1rating" value="3" /><label class = "full" for="1star3" title="Meh - 3 stars"></label>
    <input type="radio" id="1star2half" name="1rating" value="2.5" /><label class="half" for="1star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="1star2" name="1rating" value="2" /><label class = "full" for="1star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="1star1half" name="1rating" value="1.5" /><label class="half" for="1star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="1star1" name="1rating" value="1" /><label class = "full" for="1star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="1starhalf" name="1rating" value="0.5" /><label class="half" for="1starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
</li>
<li>
<h2>Food Quality</h2>
<fieldset class="rating">
    <input type="radio" id="2star5" name="2rating" value="5" /><label class = "full" for="2star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="2star4half" name="2rating" value="4.5" /><label class="half" for="2star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="2star4" name="2rating" value="4" /><label class = "full" for="2star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="2star3half" name="2rating" value="3.5" /><label class="half" for="2star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="2star3" name="2rating" value="3" /><label class = "full" for="2star3" title="Meh - 3 stars"></label>
    <input type="radio" id="2star2half" name="2rating" value="2.5" /><label class="half" for="2star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="2star2" name="2rating" value="2" /><label class = "full" for="2star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="2star1half" name="2rating" value="1.5" /><label class="half" for="2star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="2star1" name="2rating" value="1" /><label class = "full" for="2star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="2starhalf" name="2rating" value="0.5" /><label class="half" for="2starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
</li>
<li>
<h2>In-Time Delivery</h2>
<fieldset class="rating">
    <input type="radio" id="3star5" name="3rating" value="5" /><label class = "full" for="3star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="3star4half" name="3rating" value="4.5" /><label class="half" for="3star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="3star4" name="3rating" value="4" /><label class = "full" for="3star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="3star3half" name="3rating" value="3.5" /><label class="half" for="3star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="3star3" name="3rating" value="3" /><label class = "full" for="3star3" title="Meh - 3 stars"></label>
    <input type="radio" id="3star2half" name="3rating" value="2.5" /><label class="half" for="3star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="3star2" name="3rating" value="2" /><label class = "full" for="3star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="3star1half" name="3rating" value="1.5" /><label class="half" for="3star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="3star1" name="3rating" value="1" /><label class = "full" for="3star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="3starhalf" name="3rating" value="0.5" /><label class="half" for="3starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
</li>
<li>
<h2>Customer Service</h2>
<fieldset class="rating" onclick="starrating()">
    <input type="radio" id="4star5" name="4rating" value="5" /><label class = "full" for="4star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="4star4half" name="4rating" value="4.5" /><label class="half" for="4star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="4star4" name="4rating" value="4" /><label class = "full" for="4star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="4star3half" name="4rating" value="3.5" /><label class="half" for="4star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="4star3" name="4rating" value="3" /><label class = "full" for="4star3" title="Meh - 3 stars"></label>
    <input type="radio" id="4star2half" name="4rating" value="2.5" /><label class="half" for="4star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="4star2" name="4rating" value="2" /><label class = "full" for="4star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="4star1half" name="4rating" value="1.5" /><label class="half" for="4star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="4star1" name="4rating" value="1" /><label class = "full" for="4star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="4starhalf" name="4rating" value="0.5" /><label class="half" for="4starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
</li>	
<ul>    

      <button type="submit" name="ratesubmit" style="float:right" onclick="document.getElementById('id03').style.display='block'" class="cancelbtn">Submit</button>
  </form>
</div>


                    <ul class="main-nav animated bounce"  id="check-bars">
                    
                        
                        <li><a>Cuisines</a>
                        <ul class="cuisinesdropdown">
                            <li><a href="IndianMainCourse.html" >Indian</a></li>
                            <li><a href="chinese.html" >Chinese</a></li>
                            <li><a href="Italian.html" >Italian</a></li>
                            <li><a href="dessert.html" >Desserts</a></li>
                        </ul></li>
                        <li><a href="tablereservation.php">Table Reservation</a></li>
                        <li><a href="#" onclick="document.getElementById('id03').style.display='block'">Rate Us</a></li>
                        <a href="php/logout.php" class="btn btn-one logout" >Logout</a>
                        
                        
                    </ul>
                    <a href="#" class="mobile-icon" onclick="slideshow()"><i class="fa fa-bars"></i></a>
                </div>
            </nav>
            <label href="#" class="usname" style="border:2px solid tomato">Welcome &nbsp; <?php echo $_SESSION['sfirstname'];?>&nbsp;!</label>
            <div class="main-content-header">
                <h1>WELCOME TO <span class="color-change">RELISH.</span><br>
                HOUSE OF FOOD LOVERS.</h1>

                <a href="payment.html" class="btn btn-one">Click to Pay</a>
                <a href="#" class="btn btn-two">Show My Orders</a>
            </div>
        </header>
    </div>
    <img class="img_sw" src="images/Capture.PNG" alt="Our Restaurant App" style="width:100%;height:100%;" >
    
   
    <div class="part2">
        <footer>
                <div class="footer1">
                        <div class="appstore">
                                <a href="https://itunes.apple.com/in/" rel="nofollow noopener" alt="" target="_blank" class="itunes">
                                <img class="" src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto/icon-AppStore_lg30tv" width="200" height="65" alt=""></a>
                                <br><br><a href="https://play.google.com/store/apps/" rel="nofollow noopener" alt="" target="_blank" class="android">
                                <img class="" src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto/icon-GooglePlay_1_zixjxl" width="200" height="65" alt=""></a>
                            </div>



        <div class="aboutus">
            <ul>
                <li><a class="aboutus1" href="/about" alt="" target="_blank">About us</a></li>
                <li><a class="aboutus2" href="/team" alt="" target="_blank">Team</a></li>
                <li><a class="aboutus3" href="/support" alt="">Help &amp; Support</a></li>
                <li><a class="aboutus4" href="/terms-and-conditions" alt="" target="_blank">Terms &amp; Conditions</a></li>
                <li><a class="aboutus5" href="/refund-policy" alt="" target="_blank">Refund &amp; Cancellation</a></li>
                <li><a class="aboutus6" href="/privacy-policy" alt="" target="_blank">Privacy Policy</a></li>
            </ul>
        </div>

        <div class="social">
        <a class="soc fb" href="https://www.facebook.com/" rel="nofollow noopener" alt="facebook" target="_blank"><img class="" src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_48,h_48/icon-facebook_tfqsuc" width="24" height="24" alt=""></a>
        <a class="soc pin" href="https://pinterest.com/" rel="nofollow noopener" alt="pintrest" target="_blank"><img class="" src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_48,h_48/icon-pinterest_kmz2wd" width="24" height="24" alt=""></a>
        <a class="soc insta" href="https://instagram.com/" rel="nofollow noopener" alt="instagram" target="_blank"><img class="" src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_48,h_48/icon-instagram_b7nubh" width="24" height="24" alt=""></a>
        <a class="soc twit" href="https://twitter.com/" rel="nofollow noopener" alt="twitter" target="_blank"><img class="" src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_48,h_48/icon-twitter_gtq8dv" width="24" height="24" alt=""></a>
        </div>
        <hr>
        <div class="corp"><b>© 2019 Relish Inc.</b></div>
            
                
        </footer>
    </div>
    </body>
</html>