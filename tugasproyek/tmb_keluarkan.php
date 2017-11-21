<?php 
include("koneksi.php");
if(isset($_POST['submit']))
{
	$id = $_POST['id_inventaris'];
	$jumlah = $_POST['jumlah'];
	$kondisi = $_POST['kondisi'];
	$tgl = date("Y-m-d");
	
	$qry = mysqli_query($konek, "SELECT*FROM inventaris WHERE id_inventaris='$id'");
	$row = mysqli_fetch_array($qry);
	$jumlah_beli = $row['jumlah_beli'] - $jumlah;
	
	mysqli_query($konek, "UPDATE inventaris SET jumlah_beli='$jumlah_beli' WHERE id_inventaris='$id'");
	
	mysqli_query($konek, "INSERT INTO keluarkan VALUES('', '$id', '$jumlah', '$kondisi', '$tgl')");
	header("location: barang_keluar.php");
}
?>