<?php
$host = "localhost";
$user = "root";
$pass = "";
$db="attendance";
$a=$_POST['s1'];

$conn=new mysqli($host,$user,$pass,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
$q1="select sper from atttable where sid='$a';";
$result=$conn->query($q1);
if($result->num_rows >0)
{
while($row = $result->fetch_assoc())
{
	echo "<!DOCTYPE html>
<html>
<title>SBIT</title>
<script type='text/javascript'>

</script>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<!--<link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>-->
<link rel='stylesheet' href='css/w3.css'>
<!--<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>-->
<link rel='stylesheet' href='css/gw3.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<!--<link rel='stylesheet' href='css/faw3.css'>-->

<style>
blink {
    -webkit-animation: 1.5s linear infinite condemned_blink_effect; // for android
    animation: 1.5s linear infinite condemned_blink_effect;
}
@-webkit-keyframes condemned_blink_effect { // for android
    0% {
        visibility: hidden;
    }
    50% {
        visibility: visible;
    }
    100% {
        visibility: visible;
    }
}
@keyframes condemned_blink_effect {
    0% {
        visibility: hidden;
    }
    50% {
        visibility: hidden;
    }
    100% {
        visibility: visible;
    }
}
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
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
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
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
     width: 100%;
  }
}

body, h1,h2,h3,h4,h5,h6 {font-family: 'Montserrat', sans-serif}
.w3-row-padding img {margin-bottom: 5px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the 'page content' that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from 'page content' on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class='w3-black' >

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class='w3-sidebar w3-bar-block w3-small w3-hide-small w3-center'>
  <!-- Avatar image in top left corner -->
  <a href='http://localhost/college/home.html'> <img src='logo.png' style='width:100%' >
  <a href='adminlogin12.html' class='w3-bar-item w3-button w3-padding-large w3-hover-black'>
    <i class='fa fa-address-card w3-xxlarge'></i>
    <p>Sbit Faculty</p>
  </a>
  <a href='nboard.html' class='w3-bar-item w3-button w3-padding-large w3-hover-black'>
    <i class='fa fa-pencil-square-o w3-xxlarge'></i>
    <p>Notice board</p>
  </a>
  <a href='slogin.html' class='w3-bar-item w3-button w3-padding-large w3-hover-black'>
    <i class='fa fa-user w3-xxlarge'></i>
    <p>Student</p>
  </a>
  <a href='http://www.sbit.ac.in/contact_us_sbit.html' class='w3-bar-item w3-button w3-padding-large w3-hover-black'>
    <i class='fa fa-volume-control-phone w3-xxlarge'></i>
    <p>CONTACT</p>
  </a>
  <a href='https://www.google.co.in/maps/place/Swarna+Bharathi+Institute+of+Science+and+Technology/@17.2323702,80.1605549,17z/data=!3m1!4b1!4m5!3m4!1s0x3a345760d4485731:0xbd6efd5c0b30441!8m2!3d17.2323702!4d80.1627436?hl=en' class='w3-bar-item w3-button w3-padding-large w3-hover-black'>
    <i class='fa fa-map-marker w3-xxlarge'></i>
    <p>Locate</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class='w3-top w3-hide-large w3-hide-medium' id='myNavbar'>
  <div class='w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small'>
    <a href='nboard.html' class='w3-bar-item w3-button' style='width:25% !important'>NOTICE BOARD</a>
    <a href='slogin.html' class='w3-bar-item w3-button' style='width:25% !important'>STUDENT</a>
    <a href='https://www.google.co.in/maps/place/Swarna+Bharathi+Institute+of+Science+and+Technology/@17.2323702,80.1605549,17z/data=!3m1!4b1!4m5!3m4!1s0x3a345760d4485731:0xbd6efd5c0b30441!8m2!3d17.2323702!4d80.1627436?hl=en' class='w3-bar-item w3-button' style='width:25% !important'>LOCATE</a>
    <a href='http://www.sbit.ac.in/contact_us_sbit.html' class='w3-bar-item w3-button'style='width:25% !important'>CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class='w3-padding-large' id='main'>
  <!-- Header/Home -->
  <header class='w3-container w3-padding-32 w3-center w3-black' id='home'>
   <h1 class='w3-jumbo'><span class='w3-hide-small'><img src='main.jpg' alt='boy' class='w3-image' height='250px' width='1150' ></img></span> </h1>
   <p><u><marquee>Welcome to Swarna Bharathi Institue of Science and Technology</marquee></u></p>

<h1>your percentage is</h1>";
 echo "$row['sper']";


  echo " <div class='w3-padding-64 w3-content w3-text-grey' id='contact'>
    <h2 class='w3-text-light-grey'>Contact us</h2>


    <div class='w3-section'>
      <p><i class='fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right'></i> H.no.5-7-200/12, Pakabanda Street,Khammam-507002,Telangana</p>
      <p><i class='fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right'></i> Phone: +91-8712712331,
+91-8712112331.</p>
      <p><i class='fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right'> </i> Email: sbitengg@gmail.com</p>
    </div><br>

  </div>


  <footer class='w3-content w3-padding-64 w3-text-grey w3-xlarge'>
    <i class='fa fa-facebook-official w3-hover-opacity'></i>
    <i class='fa fa-instagram w3-hover-opacity'></i>
    <i class='fa fa-snapchat w3-hover-opacity'></i>
    <i class='fa fa-pinterest-p w3-hover-opacity'></i>
    <i class='fa fa-twitter w3-hover-opacity'></i>
    <i class='fa fa-linkedin w3-hover-opacity'></i>
    <p class='w3-medium'>Maintained by <a href='adminlogin.html' target='_blank' class='w3-hover-text-green'>WEB-TEAM,CSE department</a></p>
  </footer>

</div>";
}
}
$conn->close();
?>
