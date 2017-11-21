<?php
session_start();
if(!empty($_SESSION['username']))
{
	header("location: dashboard.php");
}
include"koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> INVENTARIS BARANG PCNU BANYUWANGI | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       <?php
	   if(isset($_GET['pesan'])){
		   if($_GET['pesan'] == "gagal"){
			   echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'> Login Gagal !! Username atau Password Salah !!</div>";
		   }
	   }
	   
	   ?>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="assets/img/head.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Silahkan Masuk</h3>
                    </div>
                    <div class="panel-body">
                        <form method = "POST" action="prosesloh.php" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nama Pengguna" name="usr" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Kata Sandi" name="psw" type="password" value="" required>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                               	<input type="submit" name="save" class="btn btn-lg btn-success btn-block" value="Masuk"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
