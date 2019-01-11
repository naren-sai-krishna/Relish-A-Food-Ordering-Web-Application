<?php
require('php/db.php');
require('php/signup.php');
require('php/login.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="author" content="Naren">
        <meta charset="UTF-8">
        <meta name="description" content="Relish Restaurant Homepage">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
        <link rel="icon" href="images/Logo.png" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
                overflow-y: auto;
                overflow-x:hidden;
                color:white; 
                font-family: 'Flamenco', cursive;
                background-color: black;
                
            }
            header{
                background-image: linear-gradient(rgba(0, 0, 0, 0.8),rgba(0,0,0,0.8)), url('images/img.jpg');
                background-size: cover;
                width:auto;
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
                transition: 10s linear;
                
                
            }
            
            .main-nav{
                float: right;
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
                font-size:50%;
                /*animation: colorchangerelish 2s infinite;*/
            }
            .color-change1{
                
            }
            .mobile-icon{display: none;}
            @keyframes colorchangerelish1{
                0%{background-color:red;}
                25%{background-color:green;}
                50%{background-color: black;}
                100%{background-color: purple;}
            }
            @keyframes colorchangerelish{
                0%{font-size:200%;}
                
                50%{font-size:300%;}
                100%{font-size:100%;}
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


            input[type=text],input[type=email], input[type=password] {
  width: 100%;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  padding: 12px 20px;
  margin: 2px 0;
  display: inline-block;
  border: 2px solid #ccc;
  box-sizing: border-box;
}
check-box{
    color: black;
    
}
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
/* Set a style for all buttons */
button {
   
  background-color: #bf55ec;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
 
  font-size:105%;
  border-radius: 12px;
}
button:focus {outline:0;}
input[name="spass"]:focus{
    "Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"

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
    width: auto;
    font-family: 'Flamenco', cursive;
}
.b1 a:hover{
   
    border-bottom: #bf55ec;
    border-top: #bf55ec;
}



/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 14px 20px;
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
  /*background-color: rgb(0,0,0);  Fallback color */
  /*background-color: rgba(0,0,0,0.4);  Black w/ opacity */
  padding-top:20px;
  

}

/* Modal Content/Box */
.modal-content {
    background-image: linear-gradient(rgba(0, 0, 0, 0.6),rgba(0,0,0,0.6)), url('images/Login.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    /*margin: 0 auto 15% auto;  5% from the top, 15% from the bottom and centered */
    border-bottom: 1px solid #888;
    margin-right: 1%;
    margin-top:7%;
    margin-left:2%;
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

.dive {
  font-family: 'Monoton', cursive;
  padding: 40px;
  font-size: 75px;
  text-align: center;
  text-transform: uppercase;
  text-shadow: 0 0 80px red,0 0 30px FireBrick,0 0 6px DarkRed;
  color: red;
}
.dive p { margin:0; }
#error:hover { text-shadow: 0 0 200px #ffffff,0 0 80px #008000,0 0 6px #0000ff; }
#code:hover { text-shadow: 0 0 100px red,0 0 40px FireBrick,0 0 8px DarkRed; }
#error {
  color: #fff;
  text-shadow: 0 0 80px #ffffff,0 0 30px #008000,0 0 6px #0000ff;
}
#error span {
  animation: upper 11s linear infinite;
}
#code span:nth-of-type(2) {
  animation: lower 10s linear infinite;
}
#code span:nth-of-type(1) {
  text-shadow: none;
  opacity:.4;
}
@keyframes upper {
  0%,19.999%,22%,62.999%,64%, 64.999%,70%,100% {
    opacity:.99; text-shadow: 0 0 80px #ffffff,0 0 30px #008000,0 0 6px #0000ff;
  }
  20%,21.999%,63%,63.999%,65%,69.999% {
    opacity:0.4; text-shadow: none; 
  }
}
@keyframes lower {
  0%,12%,18.999%,23%,31.999%,37%,44.999%,46%,49.999%,51%,58.999%,61%,68.999%,71%,85.999%,96%,100% {
    opacity:0.99; text-shadow: 0 0 80px red,0 0 30px FireBrick,0 0 6px DarkRed;
  }
  19%,22.99%,32%,36.999%,45%,45.999%,50%,50.99%,59%,60.999%,69%,70.999%,86%,95.999% { 
    opacity:0.4; text-shadow: none; 
  }
}
        </style>
    </head>
    <body>
    
    

        <script>
            function myFunction() {
  var x = document.getElementById("lpass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myFunction1() {
  var y = document.getElementById("pass");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
function Validate() {
        var password = document.getElementById("pass").value;
        var confirmPassword = document.getElementById("repass").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
}
   
  

    // Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function Func(){
    Logo= document.getElementById('Logo');
    Logo.style.transform="rotate(360deg)";
    
}

// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
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
            <nav >
                <div class="row clearfix" >
                    <img onload="Func()" src="images/Logo.png" id="Logo" class="Logo" alt="LOGO" >
                    <pre>
                    <h1  id="error" style="font-size:150%;font-family: 'Pacifico', cursive;text-transform: capitalize;" class="dive color-change animate slide">&nbsp;"Food <span>tastes</span> better <span>when </span>
                    <span>you</span> eat with your <span>family !</span>"🍔</pre>
                </div>
    
            </nav>


                    <!-- Button to open the modal login form -->


<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form name="lform" class="modal-content animate" method="POST">
    <div class="imgcontainer">
      <img src="images/avatar2.png" style="margin-top:10%"alt="Avatar" class="avatar">
    </div>

    <div class="container" style="width:450px">
      <input type="text" style="width:350px"placeholder="Enter Phone Number"  name="lphone" required autofocus> 
      <br><input type="password"   style="width:350px"placeholder="Enter Password" id="lpass" name="lpass" required>&nbsp;<span onclick="myFunction()"class="show-password" style="padding: 10px;"><img src="images/eye.png" alt="Show password" style="width:6%;height:3%;"></span><br>

      <label style="color: whitesmoke">
        <br>  
        <input type="checkbox" checked="checked" name="remember" ><b>Remember me</b> 
        <div class="psw" style="float:right"><a href="" style="color:white"> Forgot password?</a></div>
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <button type="submit" style="float:right;text-align:center" name="lsubmit">Login</button><br>
      
    </div>
  </form>
</div>

<div id="id02" class="modal">
        <span onclick="document.getElementById('id02').style.display='none'" 
      class="close" title="Close Modal">&times;</span>
      
        <!-- Modal Content -->
        <form class="modal-content animate"  method="POST">
      
          <div class="container" style="width:500px;margin-top:-10%">
            <input type="text" placeholder="Enter First Name" name="sfirstname" pattern="[A-Za-z ]{1,30}" title="Less than 30 alphabets only" style="width:350px" required autofocus>
            <br><input type="text" placeholder="Enter Last Name" name="slastname" pattern="[A-Za-z ]{1,30}" title="Less than 30 alphabets only" style="width:350px" required>
            <br><input type="text" placeholder="Enter Phone Number" pattern="[6789][0-9]{9}" title="Enter a valid phone number: 9876543210" name="sphone" style="width:350px"required>
            <br><input type="text" placeholder="Enter Email ID" name="semail" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" title="Enter a Valid Email ID" style="width:350px"required>
            <br><input type="password" placeholder="Enter Password:" id="pass" name="spass" id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" style="width:350px" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>&nbsp;<span onclick="myFunction1()"class="show-password" style="padding: 10px;margin-right:10%;z-index:2"><img src="images/eye.png" alt="Show password" style="width:6%;height:3%;"></span>
            <br><input type="password" placeholder="Re-Type Password" name="srepass" id="repass" style="width:350px"  required>
            <br><input type="text" placeholder="Enter Address" name="saddress" maxlength="100" title="Less than 100 alphabets only" style="width:350px" required>
            <br><input type="text" placeholder="Enter City" name="scity" pattern="[A-Za-z ]{1,30}" title="Less than 30 alphabets only" style="width:350px" required>
            
            <br><label style="color: whitesmoke">
            <br><input type="checkbox"  name="remember" required><b>Agree T&amp;C</b> 
            <strong><div><br>"Note: Password must contain at least : 1 number, 1 uppercase letter, 1 lowercase letter and a minimum of 8 characters"</div></strong>
            </label>
          </div>
      
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" name="ssubmit" style="text-align:center;float:right" onclick="return Validate()" >Submit</button>
          </div>
        </form>
      </div>


            <div class="main-content-header">
                <h1><span style="font-size:300%;letter-spacing:20px"  class="dive" id="code"><span></span><span>RELISH</span><span id="code" class="dive" style="margin-left:-5%;font-size:25%">&#169;</span><br>
                </h1>
                <br>
                <br>
                <a  style="margin-left:15%" class="btn btn-one color-change1" onclick="document.getElementById('id01').style.display='block';document.getElementById('id02').style.display='none'">Log IN</a>
                <a  style=""class="btn btn-two color-change1" onclick="document.getElementById('id02').style.display='block';document.getElementById('id01').style.display='none'">SignUp</a>
            </div>
        </header>
    </div>
    <img src="images/Capture.PNG" alt="Our Restaurant App" style="width:130%;height:100%;" >
    
   
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