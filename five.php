<?php
$a=$_POST["e"];
setcookie("five","$a");
?>
<html>
<head>
<title>Online Exam</title>
</head>
<style>
.bg-image {
  /* The image used */
  background-image: url("sam2.jpg");
  
  /* Add the blur effect */
  filter: blur(3px);
  -webkit-filter: blur(3px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: orange;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
button {
    background-color: cyan;
    border: none;
    color: black;
    padding: 10px 20px;
    text-align: center;
    text-decoration: underline;
    display: inline-block;
    font-size: 14px;
    margin: 3px 4px;
    cursor: pointer;
	}

}
</style>
<body bgcolor="black">
<form action="six.php" method="post">
<div class="bg-image"></div>
<div class="bg-text">
<p><h2>Q6. Generics does not work with?</h2></p>
<h3><input type="radio" name="f" >Set</h3>
<h3><input type="radio" name="f">List<br></h3>
<h3><input type="radio" name="f">Tree<br></h3>
<h3><input type="radio" name="f" value="Array">Array<br></h3>
<button type="submit" value="Next">Next</button>
</form>
</body>
</html>



