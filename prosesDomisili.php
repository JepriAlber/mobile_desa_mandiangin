<?php 
	include('koneksi.php');
	include('config.php');
	$connection = new Database($host, $user, $pass, $database);
	include "m_proses.php";
	$domisili = new Penduduk($connection);

	$nik= $_POST['nik'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$umur = $_POST['umur'];
	$pekerjaan = $_POST['pekerjaan'];
	$tempat_tinggal = $_POST['alamat'];
	$status_proses="Sedang Diproses";

   $domisili->inputdomisili($nik,$nama,$jenis_kelamin,$umur,$pekerjaan,$tempat_tinggal,$status_proses);
	echo ' <script>alert("Sukses")
   window.location = "index.php";</script> ';
   // header ('location:index.php');
?>
