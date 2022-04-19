<?php
$con=mysqli_connect('localhost','root','','ats') or die("error at connection");
$userid=$_POST['t1'];
$password=$_POST['t2'];
$query="select user,pass from sig where user='$userid' and pass='$password'";
$res=mysqli_query($con,$query) or die("error at execution");
$r=mysqli_fetch_row($res);
if($r[0]==$userid && $r[1]==$password)
{
echo"login successfull";
header("Location:home.html");
}
else
echo"<script type='text/javascript'>alert('check your username and password')</script>";

?>