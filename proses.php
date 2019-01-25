<?php
	include "koneksi.php";
	session_start();

	$status_proses="Sedang Diproses";
	if (isset($_POST['submit'])&&$_POST['submit']=='tanya_benar') 
	{

	mysqli_query($koneksi,"insert into nikah 
		(
		nik_cs, 
		nik_ci, 
		nik_ayah_cs, 
		nik_ibu_cs, 
		nik_ayah_ci, 
		nik_ibu_ci, 
		jumlah_istri_cs,
		status_cs, 
		status_ci, 
		status_proses,
		penjamin_ci_1,
		penjamin_ci_2,
		penjamin_cs_1,
		penjamin_cs_2
		)
		values
		(
		'".$_SESSION['nik_suami']."',
		'".$_SESSION['nik_istri']."',
		'".$_SESSION['nik_ayah_cs']."',
		'".$_SESSION['nik_ibu_cs']."',
		'".$_SESSION['nik_ayah_ci']."',
		'".$_SESSION['nik_ibu_ci']."',
		'".$_SESSION['jumlah_istri']."',
		'".$_SESSION['status_suami']."',
		'".$_SESSION['status_istri']."',
		'$status_proses',
		'".$_SESSION['penjamin_ci_1']."',
		'".$_SESSION['penjamin_ci_2']."',
		'".$_SESSION['penjamin_cs_1']."',
		'".$_SESSION['penjamin_cs_2']."')");

	if($_SESSION['status_istri']=='Janda'){
	mysqli_query($koneksi,"insert into suami_dahulu 
		values
		(
		'".$_SESSION['nik_istri']."',
		'".$_SESSION['nama_suami_terdahulu']."'
		)");
	}

	if($_SESSION['status_suami']=='Duda' ){
	mysqli_query($koneksi,"insert into istri_dahulu 
		values
		(
		'".$_SESSION['nik_suami']."',
		'".$_SESSION['istri_terdahulu']."'
		)");
	}
	elseif ($_SESSION['status_suami']=='Beristri') {
		for($x=1;$x<=$_SESSION['jumlah_istri'];$x++){
			mysqli_query($koneksi,"insert into istri_dahulu 
			values
			(
			'".$_SESSION['nik_suami']."',
			'".$_SESSION['nama_istri'.$x]."'
			)");
		}
	}

		header ('location:data.php');
	}


	elseif (isset($_POST['submit'])&&$_POST['submit']=='wali_ci')
	{
		$_SESSION['nik_wali_ci']=$_POST['nik'];
		$_SESSION['hubungan_wali_ci']=$_POST['hubungan_wali_ci'];


	mysqli_query($koneksi,"insert into nikah 
		(
		nik_cs, 
		nik_ci, 
		nik_ayah_cs, 
		nik_ibu_cs, 
		nik_ayah_ci, 
		nik_ibu_ci, 
		nik_wali_ci,
		jumlah_istri_cs,
		status_cs, 
		status_ci,
		hubungan_wali_ci, 
		status_proses,
		penjamin_ci_1,
		penjamin_ci_2,
		penjamin_cs_1,
		penjamin_cs_2
		)
		values
		(
		'".$_SESSION['nik_suami']."',
		'".$_SESSION['nik_istri']."',
		'".$_SESSION['nik_ayah_cs']."',
		'".$_SESSION['nik_ibu_cs']."',
		'".$_SESSION['nik_ayah_ci']."',
		'".$_SESSION['nik_ibu_ci']."',
		'".$_SESSION['nik_wali_ci']."',
		'".$_SESSION['jumlah_istri']."',
		'".$_SESSION['status_suami']."',
		'".$_SESSION['status_istri']."',
		'".$_SESSION['hubungan_wali_ci']."',
		'$status_proses',
		'".$_SESSION['penjamin_ci_1']."',
		'".$_SESSION['penjamin_ci_2']."',
		'".$_SESSION['penjamin_cs_1']."',
		'".$_SESSION['penjamin_cs_2']."')");

	if($_SESSION['status_istri']=='Janda'){
	mysqli_query($koneksi,"insert into suami_dahulu 
		values
		(
		'".$_SESSION['nik_istri']."',
		'".$_SESSION['nama_suami_terdahulu']."'
		)");
	}

	if($_SESSION['status_suami']=='Duda' ){
	mysqli_query($koneksi,"insert into istri_dahulu 
		values
		(
		'".$_SESSION['nik_suami']."',
		'".$_SESSION['istri_terdahulu']."'
		)");
	}
	elseif ($_SESSION['status_suami']=='Beristri') {
		for($x=1;$x<=$_SESSION['jumlah_istri'];$x++){
			mysqli_query($koneksi,"insert into istri_dahulu 
			values
			(
			'".$_SESSION['nik_suami']."',
			'".$_SESSION['nama_istri'.$x]."'
			)");
		}
	}
	header ('location:data2.php');
	}
	

//print_r("<pre>");print_r($_SESSION);
		
		
?>