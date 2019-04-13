<?php
$host = "localhost";
$user = "root";
$pass = "";
$db="college";
$a=$_POST['a1'];
$conn=new mysqli($host,$user,$pass,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
$q1="delete from faculty where fname='$a';";
$result=$conn->query($q1);
if($conn)
header('Location:http://localhost/college/delfaculty.html');
else
echo"failed";
?>