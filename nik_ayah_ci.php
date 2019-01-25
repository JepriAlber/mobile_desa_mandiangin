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

		<center><h4>Isi Data Ayah Calon Istri</h4></center>

			<form class="form-horizontal" role="search" method="POST" action="">
			
			<div class="col-md-8 col-xs-12">
        		<input type="number" name="nik" class="form-control" placeholder="NIK Ayah Calon Istri" required>
    	   		<button class="btn btn-default" type="submit" name="submit-search">Cari</button>
    		</div>
			</form>
 
			<?php
				if (isset($_POST['submit'])&&$_POST['submit']=='ibu_cs') {
					$_SESSION['nik_ibu_cs']=$_POST['nik'];
				}
				if(isset($_POST['submit-search'])){
				$nik = $_POST['nik'];
				$q = mysqli_query($koneksi,"select * from kependudukan where nik='$nik' and jenis_kelamin='laki-laki'");
				while($rows = mysqli_fetch_array($q))
				{
			?>
				<form class="form-horizontal" role="search" method="POST" action="nik_ibu_ci.php">
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

				<!-- <button class="btn btn-default" type="submit" name="submit" value="ayah_ci">Lanjut</button> -->
				<table width="100%" height="100%">
					<tr>
						<td width="50%"><a href="nik_ibu_cs.php" class="ui-btn ui-icon-back ui-btn-icon-right ui-corner-all ui-shadow">Kembali</a></td>
						<td width="50%"><button type="submit" name="submit" value="ayah_ci" class="ui-btn ui-icon-navigation ui-btn-icon-right ui-corner-all ui-shadow">Lanjut</button></td>
					</tr>
				</table>
				</form>
			<?php
			}}
			?>
<!--dari sini-->

</body>
</html>
					