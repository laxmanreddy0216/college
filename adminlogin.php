<?php
$host = "localhost";
$user = "root";
$pass = "";
$db="admin";
$a=$_POST['a1'];
$b=$_POST['a2'];
$conn=new mysqli($host,$user,$pass,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
$q1="select adminid,adminpass from admintable;";
$result=$conn->query($q1);
if($result->num_rows >0)
{
while($row = $result->fetch_assoc())
{
	
if($a==$row["adminid"] and $b==$row["adminpass"])
	{
		header('Location:http://localhost/college/admin.html');
	}
	
}
}

else 
 echo "failed";

$conn->close();
?>