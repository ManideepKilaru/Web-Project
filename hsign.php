<?php
$con=mysqli_connect('localhost','root','','ats') or die("error at connection");

$mail=$_POST['e'];
$user=$_POST['un'];
$pass=$_POST['p'];
$query="insert into hosp values('$mail','$user','$pass')";
$res=mysqli_query($con,$query) or die("error at execution");
if($res)
{
echo"signup successfull";
header("Location:hospitallogin.html");
}
else
echo"";
?>