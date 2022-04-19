<?php
$con=mysqli_connect('localhost','root','','ats') or die("error at connection");
$first=$_POST['fn'];
$last=$_POST['ln'];
$mail=$_POST['e'];
$user=$_POST['un'];
$pass=$_POST['p'];
$query="insert into sig values('$first','$last','$mail','$user','$pass')";
$res=mysqli_query($con,$query) or die("error at execution");
if($res)
{
echo"signup successfull";
header("Location:login.html");
}
else
{
echo "Please enter all the info";
}
?>