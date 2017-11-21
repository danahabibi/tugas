<?php
session_start();
include 'koneksi.php';
$username=$_POST['usr'];
$password=$_POST['psw'];
$query=mysqli_query($konek, "select * FROM admin WHERE username = '$username' and password='$password'") or die (mysql_error());
if (mysqli_num_rows($query)==1)
	{
		$_SESSION['username']=$username;
		header ("location:dashboard.php");
	}
	else
	{
		header("location:index.php?pesan=gagal")or die (mysqli_error());
	}
?>