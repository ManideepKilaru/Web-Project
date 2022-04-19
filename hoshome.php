<html>
<head>
<title>this is home page</title>
<frameset border="0" framespacing="0" frameborder="0" rows="9%,*">
<frame frameborder="0" src= "mid1.php" frame border="0">
<?php 
session_start();
echo $_SESSION['hname'];
?>
<frame frameborder="0" src="right.php" frame border="0">
</frameset><noframes></noframes>
</head>
</html>
