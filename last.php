<?php
session_start();
$name=$_SESSION["n"];

$m="0";
$a=$_COOKIE["one"];
$b=$_COOKIE["two"];
$c=$_COOKIE["three"];
$d=$_COOKIE["four"];
$e=$_COOKIE["five"];
$f=$_COOKIE["six"];
$g=$_COOKIE["seven"];
$h=$_COOKIE["eight"];
$i=$_COOKIE["nine"];
$txt=$_POST["j"];
if($a=='write once run anywhere')
{
$m++;
}
if($b=='JDBC Driver is a software component that enables java application to interact with the database')
{
	$m++;
}
if($c=='Java Development Kit')
{
	$m++;
}
if($d=='A package is a collection of related classes and interfaces')
{
	$m++;
}
if($e=='compiler error')
{
	$m++;
}
if($f=='Array')
{
	$m++;
}
if($g=='heap space')
{
	$m++;
}
if($h=='Sequential')
{
	$m++;
}
if($i=='Both Integers and floating  point numbers')
{
	$m++;
}
if($txt=='none of the mentioned')
{
	$m++;
}
if($m=='10')
{
echo "<html><head><title>Result</title></head><body bgcolor='green'><center><font size='50' color='white'>Hurrayyyyy...!:-)<br> Your score is <u>100%</u></font></body></html>";
}
elseif($m=='9')
{
echo "<html><head><title>Result</title></head><body bgcolor='green'><center><font size='50' color='white'>All Good..!<br> Your score is <u>90%</u></font></body></html>";
}
elseif($m=='8')
{
echo "<html><head><title>Result</title></head><body bgcolor='green'><center><font size='50' color='white'>Good..!<br> Your score is <u>80%</u></font></body></html>";
}
elseif($m=='7')
{
echo "<html><head><title>Result</title></head><body bgcolor='green'><center><font size='50' color='white'>Its ok <br>Your score is <u>70%</u></font></body></html>";
}
elseif($m=='6')
{
echo "<html><head><title>Result</title></head><body bgcolor='green'><center><font size='50' color='white'>Ok! you are better than 60% people<br>Your score is <u>60%</u></font></body></html>";
}
elseif($m=='5')
{
echo "<html><head><title>Result</title></head><body bgcolor='green'><center><font size='50' color='white'>Practise well<br>Your score is <u>50%</u></font></body></html>";
}
elseif($m=='4')
{
echo "<html><head><title>Result</title></head><body bgcolor='green'><center><font size='50' color='white'> Prepare well <br>Your score is <u>40%</u></font></body></html>";
}
elseif($m=='3')
{
echo "<html><head><title>Result</title></head><body bgcolor='green'><center><font size='50' color='white'>Be Prepared for next time <br>Your score is<u> 30%</u></font></body></html>";
}
elseif($m=='2')
{
echo "<html><head><title>Result</title></head><body bgcolor='green'><center><font size='50' color='white'>Poor Performance <br> Your score is <u>20%</u></font></body></html>";
}
elseif($m=='1')
{
echo "<html><head><title>Result</title></head><body bgcolor='green'><center><font size='50' color='white'>Better Luck Next Time <br> Your score is <u>10%</u></font></body></html>";
}
elseif($m=='0')
{
echo "<html><head><title>Result</title></head><body bgcolor='green'><center><font size='50' color='white'>Very Poor...! <br>Your score is <u>0%</u></font></body></html>";
}


?>