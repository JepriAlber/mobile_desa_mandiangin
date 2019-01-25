
<html>
<?php
	include "koneksi.php";
	include "header.php";
	session_start();
?>


<body onload='search()'>
	<div data-role="page" id="main" data-theme="C">
		<div data-role="header"> 
			<h1>DATA <br> NIKAH</h1>
		</div>

	<div data-role="content">

		<center><h4>Isi Data Wali Calon Istri</h4></center>

			<form class="form-horizontal" role="search" method="POST" action="">
			
			<div class="col-md-8 col-xs-12">
        		<input type="number" name="nik" class="form-control" placeholder="NIK Wali Calon Istri" required>
    	   		<button class="btn btn-default" type="submit" name="submit-search">Cari</button>
    		</div>
			</form>
 
			<?php

				if(isset($_POST['submit-search'])){
				$nik = $_POST['nik'];
				$q = mysqli_query($koneksi,"select * from kependudukan where nik='$nik' and jenis_kelamin='laki-laki'");
				while($rows = mysqli_fetch_array($q))
				{
			?>
				<form class="form-horizontal" role="search" method="POST" action="proses.php">
					<label>NIK</label>
					<input type="number" name="nik" readonly="true" value="<?php echo $rows['nik'] ?>">

					<label>Nama</label>
					<input type="text" readonly="true" value="<?php echo $rows['nama'] ?>">

					<label>Tempat / Tanggal Lahir</label>
					<input type="text" readonly="true" value="<?php echo $rows['tempat_lahir'] . " / " . date('d M Y', strtotime($rows['tgl_lahir'])) ?>">

					<label>Warga Negara</label>
					<input type="text" readonly="true" value="<?php echo $rows['warga_negara'] ?>">

					<label>Agama</label>
					<input type="text" readonly="true" value="<?php echo $rows['agama'] ?>">
					
					<label>Pekerjaan</label>
					<input type="text" readonly="true" value="<?php echo $rows['pekerjaan'] ?>">

					<label>Tempat Tinggal</label>
					<input type="text" readonly="true" value="<?php echo $rows['tempat_tinggal'] ?>">

					<fieldset data-role="content">
					<label for="hubungan_wali_ci">Hubungan Wali dengan Calon Istri</label>
					<select name="hubungan_wali_ci" id="hubungan_wali_ci" required="true">
						<option value="">Pilih</option>
						<option value="Kakek Dari Ayah Kandung">Kakek Dari Ayah Kandung</option>
						<option value="Saudara Kandung Laki-laki">Saudara Kandung Laki-laki</option>
						<option value="Saudara Kandung Laki-laki se-Ayah">Saudara Kandung Laki-laki se-Ayah</option>
						<option value="Anak Laki-laki Dari Saudara Kandung Laki-laki">Anak Laki-laki Dari Saudara Kandung Laki-laki</option>
						<option value="Anak Laki-laki Dari Saudara Laki-laki se-Ayah">Anak Laki-laki Dari Saudara Laki-laki se-Ayah</option>
						<option value="Saudara Laki-laki Dari Ayah">Saudara Laki-laki Dari Ayah</option>
						<option value="Wali Hakim">Wali Hakim</option>
					</select>
					</fieldset>
					<!-- <label>Hubungan dengan Wali</label>
					<input type="text" required="true" name="hubungan_wali_ci"> -->

				<button class="btn btn-default" type="submit" name="submit" value="wali_ci">Lanjut</button>
				</form>
			<?php
			}}
			?>
<!--dari sini-->

</body>
</html>
					