<html>
<?php
	session_start();
	session_unset();
	session_destroy();
	include "koneksi.php";
	include "header.php";
?>


<body onload='search()'>
	<div data-role="page" id="main" data-theme="C" >
		<div data-role="header"> 
			<h1>DATA <br> NIKAH</h1>
		</div>

	<div data-role="content">

		<center><h4>Isi Data Calon Suami</h4></center>

			<form class="form-horizontal" role="search" method="POST" action="">
			
			<div class="col-md-8 col-xs-12">
        		<input type="number" name="nik" class="form-control" placeholder="NIK Calon Suami" required>
    	   		<button class="btn btn-default" type="submit" name="submit-search">Cari</button>
    		</div>
			</form>
 
			<?php
				if(isset($_POST['submit-search'])){
				$nik = $_POST['nik'];
				$q = mysqli_query($koneksi,"select * from kependudukan where nik='$nik' and jenis_kelamin='Laki-laki'");
				while($rows = mysqli_fetch_array($q))
				{
			?>
				<form class="form-horizontal" role="search" method="POST" action="nik_ci.php">
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
						<select required name="status" id="status"">
							<option value="" selected disabled>Pilih</option>
							<option value="Jejaka">Jejaka</option>
							<option value="Beristri">Beristri</option>
							<option value="Duda">Duda</option>
						</select>
				</fieldset>

	<div class="tampil"></div>			
	<div class="tampil2"></div>	
				
	<table  width="100%" height="100%">
		<tr>
			<td width="50%"><a href="index.php" class="ui-btn ui-icon-back ui-btn-icon-right ui-corner-all ui-shadow">Kembali</a></td>
			<td width="50%"><button type="submit" name="submit" value="suami" class="ui-btn ui-icon-navigation ui-btn-icon-right ui-corner-all ui-shadow">Lanjut</button></td>
		</tr>
	</table>

				</form>

			<?php
			}
		}else
		{ ?>
			<a href="index.php" class="ui-btn ui-icon-home ui-btn-icon-right ui-corner-all ui-shadow">Home</a>
			<?php
		}
			?>
<!--dari sini-->
<script type="text/javascript">
	
	
        $('#status').change(function() {
			var status=$(this).val();

			if (status=="Beristri") {
				$('.tampil').load('proses1.php?id=status&status=Beristri'); 
			}
			else if (status=="Duda") {
				$('.tampil').load('proses1.php?id=status&status=Duda');
				$('.tampil2').load('proses1.php');
			}
			else if (status=="Jejaka"){
				$('.tampil').load('proses1.php?id=status&status=Jejaka');
				$('.tampil2').load('proses1.php');
			}

		})
	</script>

</body>
</html>
							