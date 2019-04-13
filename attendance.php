<?php
$host = "localhost";
$user = "root";
$pass = "";
$db="attendance";
$a=$_POST['a1'];
$b=$_POST['a2'];
$conn=new mysqli($host,$user,$pass,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
$q1="insert into atttable values('$a','$b');";
$result=$conn->query($q1);
if($conn)
header('Location:http://localhost/college/attenter.html');
else
echo"failed";
?>