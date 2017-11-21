<?php
include'koneksi.php';
$nama_inventaris=$_POST['nama_inventaris'];
$kategori=$_POST['kategori'];
$kondisi=$_POST['kondisi'];
$jumlah_beli=$_POST['jumlah_beli'];
$harga=$_POST['harga'];
$total=$jumlah_beli*$harga;
$tgl = date("Y-m-d");

$query=mysqli_query($konek, "INSERT INTO inventaris VALUES('', '$nama_inventaris', '$kategori', '$kondisi', '$jumlah_beli', '$harga', '$total', '$tgl')") or die(mysqli_error());
if($query)
{
	header("location:inventaris.php?pesan=berhasilsimpan");
}
else
{
	header("location:inventaris.php?pesan=gagalsimpan");
}
?>
