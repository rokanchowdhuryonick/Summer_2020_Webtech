<?php
session_start();
unset($_SESSION['status']);
header("location:home.php");
exit();

?>