<?php
$host = "localhost";
$user = "root";
$pass = "";
$db="student";
$a=$_POST['s1'];
$b=$_POST['s2'];
echo $a;
$conn=new mysqli($host,$user,$pass,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
$q1="select sid,spass from studentlog;";
$result=$conn->query($q1);
if($result->num_rows >0)
{
while($row = $result->fetch_assoc())
{
	
if($a==$row["sid"] and $b==$row["spass"])
	{
		header('Location:http://localhost/college/sall.html');
	}
	
}
}

else 
 echo "failed";

$conn->close();
?>