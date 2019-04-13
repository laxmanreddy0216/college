<?php
$host = "localhost";
$user = "root";
$pass = "";
$db="message";
$a=$_POST['n'];
$b=$_POST['e'];
$c=$_POST['s'];
$d=$_POST['m'];
$conn=new mysqli($host,$user,$pass,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
$q1="insert into messagetable values('$a','$b','$c','$d');";
$result=$conn->query($q1);
if($conn)
header('Location:http://localhost/college/home.html');
else
echo"failed";
?>