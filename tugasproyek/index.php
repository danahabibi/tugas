<?php
session_start();
if(!empty($_SESSION['username']))
{
	header("location:dashboard.php");
}else{
	header("location:login.php");
}
?>