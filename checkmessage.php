<?php
$host = "localhost";
$user = "root";
$pass = "";
$db="message";

$conn=new mysqli($host,$user,$pass,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
$q1="select * from messagetable;";
$result=$conn->query($q1);
if($result->num_rows >0)
{
while($row = $result->fetch_assoc())
{
	echo "<html><body bgcolor='cyan'>";
	//echo "<font size='15px'>";
	echo "<u>NAME</u>:&nbsp;&nbsp;&nbsp;". $row["name"];
	echo "<br>";
	echo "<br>";
	echo "<br>";

	echo "<u>EMAIL</u>:&nbsp;&nbsp;&nbsp;".$row["email"];
	echo "<br>";
	echo "<br>";
	echo "<br>";

	echo "<u>SUBJECT</u>:&nbsp;&nbsp;&nbsp;".$row["subject"];
	echo "<br>";
	echo "<br>";
	echo "<br>";

	echo "<u>MESSAGE</u>:&nbsp;&nbsp;&nbsp;".$row["message"];
	echo "<br>";
	echo "<br>";

	echo "---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
	echo "<br>";
	echo "</body></html>";

	
}
}

else 
 echo "failed";

$conn->close();
?>