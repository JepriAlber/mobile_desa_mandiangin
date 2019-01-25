<?php 
	include('koneksi.php');
	include('config.php');
	$connection = new Database($host, $user, $pass, $database);
	include "m_proses.php";
	$SlamaranKerja = new Penduduk($connection);

	$nik= $_POST['nik'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tgl_lahir = date('Y-m-d', strtotime($_POST['tgl_lahir']));
	$warga_negara = $_POST['warga_negara'];
	$agama = $_POST['agama'];
	$status = $_POST['status'];
	$tempat_tinggal = $_POST['tempat_tinggal'];
	$ket_lain = $_POST['ket_lain'];
	$status_proses="Sedang Diproses";

   $SlamaranKerja->inputlamarankerja($nik,$nama,$jenis_kelamin,$tempat_lahir,$tgl_lahir,$warga_negara,$agama,$status,$tempat_tinggal,$ket_lain,$status_proses);

	echo ' <script>alert("Sukses")
   window.location = "cariData2.php";</script> ';

?>