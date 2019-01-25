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

		<center><h4>Isi Data Calon Istri</h4></center>

			<form class="form-horizontal" role="search" method="POST" action="">
			
			<div class="col-md-8 col-xs-12">
        		<input type="number" name="nik" class="form-control" placeholder="NIK Calon Istri" required>
    	   		<button class="btn btn-default" type="submit" name="submit-search">Cari</button>
    		</div>
			</form>
 
			<?php
				if (isset($_POST['submit'])&&$_POST['submit']=='suami') {
					$_SESSION['nik_suami']=$_POST['nik'];
					$_SESSION['status_suami']=$_POST['status'];
					if ($_POST['status']=="Beristri") {
						$_SESSION['jumlah_istri']=$_POST['jumlah_istri'];
						for ($i=1; $i<=$_POST['jumlah_istri']; $i++) { 
							$nama_lama="nama".$i;
							$nama_baru="nama_istri".$i;
							$_SESSION[$nama_baru]=$_POST[$nama_lama];
						}
					}
					elseif ($_POST['status']=="Duda") {
						$_SESSION["istri_terdahulu"]=$_POST["istri_dahulu"];
					}
					elseif ($_POST['status']=="Jejaka") {
						$_SESSION["penjamin_cs_1"]=$_POST["penjamin_cs_1"];
						$_SESSION["penjamin_cs_2"]=$_POST["penjamin_cs_2"];
					}
				}
				
				if(isset($_POST['submit-search'])){
				$nik = $_POST['nik'];
				$q = mysqli_query($koneksi,"select * from kependudukan where nik='$nik' and jenis_kelamin='Perempuan'");
				while($rows = mysqli_fetch_array($q))
				{
			?>
				<form class="form-horizontal" role="search" method="POST" action="nik_ayah_cs.php">
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


				<fieldset data-role="controlgroup">			
					<legend>Status Perkawinan</legend>
						<select required name="status" id="status" onclick="ClickStatus()">
							<option value="" selected disabled> Pilih</option>
							<option value="Perawan">Perawan</option>
							<option value="Janda">Janda</option>
						</select>
				</fieldset>

	<div class="tampil"></div>			 
				
	<script type="text/javascript">
		function ClickStatus() {
			var status=$("#status").val();
			if (status=="Janda") {
				$('.tampil').load('proses2.php?id=status&status=Janda'); 
			}
			else if (status=="Perawan") {
				$('.tampil').load('proses2.php?id=status&status=Perawan'); 
			}
		}

	</script>

	<table width="100%" height="100%">
		<tr>
			<td width="50%"><a href="nik_cs.php" class="ui-btn ui-icon-back ui-btn-icon-right ui-corner-all ui-shadow">Kembali</a></td>
			<td width="50%"><button type="submit" name="submit" value="istri" class="ui-btn ui-icon-navigation ui-btn-icon-right ui-corner-all ui-shadow">Lanjut</button></td>
		</tr>
	</table>
				</form>

			<?php
			}}
			?>
<!--dari sini-->

</body>
</html>