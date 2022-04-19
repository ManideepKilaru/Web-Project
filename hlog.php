<?php
session_start();
$con=mysqli_connect('localhost','root','','ats') or die("error at connection");
$userid=$_POST['ht'];
$password=$_POST['hp'];
$query="select user,pass from hosp where user='$userid' and pass='$password'";
$res=mysqli_query($con,$query) or die("error at execution");
$r=mysqli_fetch_row($res);
if($r[0]==$userid && $r[1]==$password)
{
echo"login successfull";
$_SESSION['hname']=$userid;
header("Location:hoshome.php");
}
else
echo"<script type='text/javascript'>alert('check your username and password')</script>";
?>