<?php
require_once('koneksi.php');
require_once('config.php');
$connection = new Database($host, $user, $pass, $database);
include "m_proses.php";
$penduduk = new Penduduk($connection);
$nik = $_POST['nik'];
$tampil=$penduduk->tampil($nik);

$data=[];
while ($temp = $tampil->fetch_assoc()) {
	$data[]=$temp;
}

if ($data) {
	include 'Slamarankerja.php';
} else {
echo ' <script>alert("Data Tidak Ada")
   window.location = "cariData2.php";</script> ';
	}

?>