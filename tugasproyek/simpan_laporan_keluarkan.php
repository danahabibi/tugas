<?php include("anonym.php"); ?>
<?php 
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Laporan PCNU Banyuwangi.xls");
?>
<html>
<head>
	<title>CETAK LAPORAN</title>
	<style>
	body{
		font-family: Calibri, Tw Cen MT,Arial, Helvetica, sans-serif;
		margin:0px; 
		padding:0px; 
		width: 850px;
	}
	.kop{
		padding-top:10px;
		padding-bottom:5px;
		margin:bottom:5px;
	}
	.kop img{
		float:left;
		border-right:1px solid #000;
		padding-right:10px;
		padding-left:10px;
	}
	td,tr {
		font:15px Tw Cen MT,Arial, Helvetica, sans-serif;
	}
	.judul{
		padding-left:180px;
		font:22px Tw Cen MT,Arial, Helvetica, sans-serif;
	}
	.judul2{
		padding-left:180px;
		padding-top:5px;
		font:15px Tw Cen MT,Arial, Helvetica, sans-serif;
	}
	.isi{
		font-family:calibri,Arial, Helvetica, sans-serif;
		padding-top:10px;
	}
	.foot{
		padding-top:60px;
	}
	.subfoot{
		width:830px;
		text-align:center;
		margin-top:-10px;
	}
	.footer {
		width:830px;
		font:11px Tw Cen MT,Arial, Helvetica, sans-serif;
		text-align:center;
	}
	</style>
</head>
<body onload="window.print()">
<div class="kop">
	<img src="assets/img/logo.jpg" width="140">
	<div class="judul">PCNU Banyuwangi</div>
	<div class="judul2">Jl. Jend. A Yani No. 59</div>
</div>
<hr style="width: 850px;float:left;margin-top:5px;" color="black">

<table width="100%" border="1" cellspacing="0" cellpadding="4">
<tr bgcolor="silver" style="color:#000;font-weight:bold;">
	<th align="center">ID</th>
	<th align="center">Nama Inventaris</th>
	<th align="center">Kategori</th>
	<th align="center">Kondisi</th>
	<th align="center">Jumlah</th>
	<th align="center">Tanggal</th>
</tr>
<?php
										include("koneksi.php");
										$q = mysqli_query($konek, "SELECT keluarkan.jumlah, keluarkan.kondisi, keluarkan.tgl, inventaris.id_inventaris, inventaris.nama_inventaris, inventaris.kategori FROM keluarkan JOIN inventaris ON keluarkan.id_inventaris=inventaris.id_inventaris");
										while($row = mysqli_fetch_array($q)){
									?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['id_inventaris']; ?></td>
											<td><?php echo $row['nama_inventaris']; ?></td>
											<td><?php echo $row['kategori']; ?></td>
											<td><?php echo $row['kondisi']; ?></td>
											<td><?php echo $row['tgl']; ?></td>
                                        </tr>
										<?php } ?>

</table>
</p>
<br>
<hr>
<div class="subfoot">
<img src="assets/img/foot.jpg" width="270" height="5">
</div>
<div class="footer">Laporan Inventaris PCNU Banyuwangi</div>
</body>
</html>

