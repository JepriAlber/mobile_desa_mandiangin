<?php 
	include('koneksi.php');
	include('config.php');
	$connection = new Database($host, $user, $pass, $database);
	include "m_proses.php";
	$penduduk = new Penduduk($connection);

	$nik= $_POST['nik'];
	$nama = $_POST['nama'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$warga_negara = $_POST['warga_negara'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$tempat_tinggal = $_POST['tempat_tinggal'];
	$pekerjaan = $_POST['pekerjaan'];
	$status = $_POST['status'];

		$cek=$penduduk->cekNik($nik);
	if(mysqli_fetch_assoc($cek)){
								echo ' <script>alert("NIK anda sudah terdata..")
   									window.location = "Dpenduduk.php";</script> ';
	}else{
		
		$penduduk->inputPenduduk($nik,$nama,$tempat_lahir,$tgl_lahir,$warga_negara,$jenis_kelamin,$agama,$tempat_tinggal,$pekerjaan,$status);

	echo ' <script>alert("Sukses")
   			window.location = "index.php";</script> ';

	}
?>