<?php
$host = "localhost";
$user = "root";
$pass = "";
$db="college";
$a=$_POST['a1'];
$b=$_POST['a2'];
$conn=new mysqli($host,$user,$pass,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
$q1="insert into faculty values('$a','$b');";
$result=$conn->query($q1);
if($conn)
header('Location:http://localhost/college/addfaculty.html');
else
echo"failed";
?>