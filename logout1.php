<?php
session_start();
unset($_SESSION['hsname']);
session_destroy();
header("Location: index.html");
exit;
?>