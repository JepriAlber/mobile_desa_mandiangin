<html>
<?php
session_start();
	include "koneksi.php";
	include "header.php";
?>

	
	<body>
		<div data-role="page" id="main" data-theme="C">
		<div data-role="header"> 
			<h1>DATA DIRI</h1>
		</div>

	<div data-role="content">
		
<?php	
	$nik_suami_x = $_SESSION['nik_suami'];
	$nik_istri_x = $_SESSION['nik_istri'];

	$q = mysqli_query($koneksi,
"SELECT * from v_nikah");

	while($rows = mysqli_fetch_array($q))
		{
			$jics = $rows['jumlah_istri_cs'];
			?>
			
			<form class="form-horizontal" method="POST" action="">

				<label><center><bold>DATA DIRI CALON PENGANTIN PRIA</bold></center></label>
					
					<label>Nama</label>
					<input type="text" readonly="true" value="<?php echo $rows['nama_calon_suami'] ?>">

					<label>Jenis Kelamin</label>
					<input type="text"  readonly="true" readonly="true" value="<?php echo $rows['jenis_kelamin_calon_suami'] ?>">

					<label>Tempat / Tanggal Lahir</label>
					<input type="text"  readonly="true" value="<?php echo $rows['tempat_lahir_calon_suami'] . " / " . date('d M Y', strtotime($rows['tgl_lahir_calon_suami'])) ?>">

					<label>Warga Negara</label>
					<input type="text"  readonly="true" value="<?php echo $rows['warga_negara_calon_suami'] ?>">

					<label>Agama</label>
					<input type="text"  readonly="true" value="<?php echo $rows['agama_calon_suami'] ?>">
					
					<label>Pekerjaan</label>
					<input type="text"  readonly="true" value="<?php echo $rows['pekerjaan_calon_suami'] ?>">

					<label>Alamat</label>
					<input type="text"  readonly="true" value="<?php echo $rows['alamat_calon_suami'] ?>">

					<label>Status Perkawinan</label>
					<input type="text"  readonly="true" value="<?php echo $rows['status_cs'] ?>">

					<?php
					if($rows['status_cs']=='Beristri') { 
					$b = mysqli_query($koneksi, "SELECT * from istri_dahulu where nik_cs='$nik_suami_x'");
						$array = array();
						$no = 1;
						while ($row = mysqli_fetch_array($b)) { ?>
							<label>Nama Istri <?php echo $no ?></label>
							<input type="text" readonly="true" value="<?php echo $row['nama_istri_dahulu'] ?>">
						    <?php 
						    $no++;
						}
					}

					elseif($rows['status_cs']=='Duda') { 
					$b = mysqli_query($koneksi, "SELECT * from istri_dahulu where nik_cs='$nik_suami_x'");
						$array = array();
						while ($row = mysqli_fetch_array($b)) { ?>
							<label>Nama Istri Terdahulu</label>
							<input type="text" readonly="true" value="<?php echo $row['nama_istri_dahulu'] ?>">
						    <?php 
						}
					}
					elseif($rows['status_cs']=='Jejaka') { ?>
						<label>Nama Penjamin 1</label>
						<input type="text"  readonly="true" value="<?php echo $rows['penjamin_cs_1'] ?>">
						<label>Nama Penjamin 2</label>
						<input type="text"  readonly="true" value="<?php echo $rows['penjamin_cs_2'] ?>">
					<?php }

					?>

					<br>

					<label><center><bold>DATA DIRI CALON PENGANTIN WANITA</bold></center></label>
					
					<label>Nama</label>
					<input type="text" readonly="true" value="<?php echo $rows['nama_calon_istri'] ?>">

					<label>Jenis Kelamin</label>
					<input type="text" readonly="true" value="<?php echo $rows['jenis_kelamin_calon_istri'] ?>">

					<label>Tempat / Tanggal Lahir</label>
					<input type="text" readonly="true" value="<?php echo $rows['tempat_lahir_calon_istri'] . " / " . date('d M Y', strtotime($rows['tgl_lahir_calon_istri'])) ?>">

					<label>Warga Negara</label>
					<input type="text" readonly="true" value="<?php echo $rows['warga_negara_calon_istri'] ?>">

					<label>Agama</label>
					<input type="text" readonly="true" value="<?php echo $rows['agama_calon_istri'] ?>">
					
					<label>Pekerjaan</label>
					<input type="text" readonly="true" value="<?php echo $rows['pekerjaan_calon_istri'] ?>">

					<label>Alamat</label>
					<input type="text" readonly="true" value="<?php echo $rows['alamat_calon_istri'] ?>">

					<label>Status Perkawinan</label>
					<input type="text"  readonly="true" value="<?php echo $rows['status_ci'] ?>">

					<?php
					if($rows['status_ci']=='Janda') { 
					$b = mysqli_query($koneksi, "SELECT * from suami_dahulu where nik_ci='$nik_istri_x'");
						$array = array();
						while ($row = mysqli_fetch_array($b)) { ?>
							<label>Nama Suami Terdahulu</label>
							<input type="text" readonly="true" value="<?php echo $row['nama_suami_dahulu'] ?>">
						    <?php 
						}
					}
					elseif($rows['status_ci']=='Perawan') { ?>
						<label>Nama Penjamin 1</label>
						<input type="text"  readonly="true" value="<?php echo $rows['penjamin_ci_1'] ?>">
						<label>Nama Penjamin 2</label>
						<input type="text"  readonly="true" value="<?php echo $rows['penjamin_ci_2'] ?>">
					<?php }
					?>

					<br>
					<label><center><bold>DATA DIRI AYAH CALON PENGANTIN PRIA</bold></center></label>
					
					<label>Nama</label>
					<input type="text" readonly="true" value="<?php echo $rows['nama_ayah_calon_suami'] ?>">

					<label>Jenis Kelamin</label>
					<input type="text" readonly="true" value="<?php echo $rows['jenis_kelamin_ayah_calon_suami'] ?>">

					<label>Tempat / Tanggal Lahir</label>
					<input type="text" readonly="true" value="<?php echo $rows['tempat_lahir_ayah_calon_suami'] . " / " . date('d M Y', strtotime($rows['tgl_lahir_ayah_calon_suami'])) ?>">

					<label>Warga Negara</label>
					<input type="text" readonly="true" value="<?php echo $rows['warga_negara_ayah_calon_suami'] ?>">

					<label>Agama</label>
					<input type="text" readonly="true" value="<?php echo $rows['agama_ayah_calon_suami'] ?>">
					
					<label>Pekerjaan</label>
					<input type="text" readonly="true" value="<?php echo $rows['pekerjaan_ayah_calon_suami'] ?>">

					<label>Alamat</label>
					<input type="text" readonly="true" value="<?php echo $rows['alamat_ayah_calon_suami'] ?>">

					<br>
					<label><center><bold>DATA DIRI IBU CALON PENGANTIN PRIA</bold></center></label>
					
					<label>Nama</label>
					<input type="text" readonly="true" value="<?php echo $rows['nama_ibu_calon_suami'] ?>">

					<label>Jenis Kelamin</label>
					<input type="text" readonly="true" value="<?php echo $rows['jenis_kelamin_ibu_calon_suami'] ?>">

					<label>Tempat / Tanggal Lahir</label>
					<input type="text" readonly="true" value="<?php echo $rows['tempat_lahir_ibu_calon_suami'] . " / " . date('d M Y', strtotime($rows['tgl_lahir_ibu_calon_suami'])) ?>">

					<label>Warga Negara</label>
					<input type="text" readonly="true" value="<?php echo $rows['warga_negara_ibu_calon_suami'] ?>">

					<label>Agama</label>
					<input type="text" readonly="true" value="<?php echo $rows['agama_ibu_calon_suami'] ?>">
					
					<label>Pekerjaan</label>
					<input type="text" readonly="true" value="<?php echo $rows['pekerjaan_ibu_calon_suami'] ?>">

					<label>Alamat</label>
					<input type="text" readonly="true" value="<?php echo $rows['alamat_ibu_calon_suami'] ?>">

					<br>
					<label><center><bold>DATA DIRI AYAH CALON PENGANTIN WANITA</bold></center></label>
					
					<label>Nama</label>
					<input type="text" readonly="true" value="<?php echo $rows['nama_ayah_calon_istri'] ?>">

					<label>Jenis Kelamin</label>
					<input type="text" readonly="true" value="<?php echo $rows['jenis_kelamin_ayah_calon_istri'] ?>">

					<label>Tempat / Tanggal Lahir</label>
					<input type="text" readonly="true" value="<?php echo $rows['tempat_lahir_ayah_calon_istri'] . " / " . date('d M Y', strtotime($rows['tgl_lahir_ayah_calon_istri'])) ?>">

					<label>Warga Negara</label>
					<input type="text" readonly="true" value="<?php echo $rows['warga_negara_ayah_calon_istri'] ?>">

					<label>Agama</label>
					<input type="text" readonly="true" value="<?php echo $rows['agama_ayah_calon_istri'] ?>">
					
					<label>Pekerjaan</label>
					<input type="text" readonly="true" value="<?php echo $rows['pekerjaan_ayah_calon_istri'] ?>">

					<label>Alamat</label>
					<input type="text" readonly="true" value="<?php echo $rows['alamat_ayah_calon_istri'] ?>">

					<br>
					<label><center><bold>DATA DIRI IBU CALON PENGANTIN WANITA</bold></center></label>
					
					<label>Nama</label>
					<input type="text" readonly="true" value="<?php echo $rows['nama_ibu_calon_istri'] ?>">

					<label>Jenis Kelamin</label>
					<input type="text" readonly="true" value="<?php echo $rows['jenis_kelamin_ibu_calon_istri'] ?>">

					<label>Tempat / Tanggal Lahir</label>
					<input type="text" readonly="true" value="<?php echo $rows['tempat_lahir_ibu_calon_istri'] . " / " . date('d M Y', strtotime($rows['tgl_lahir_ibu_calon_istri'])) ?>">

					<label>Warga Negara</label>
					<input type="text" readonly="true" value="<?php echo $rows['warga_negara_ibu_calon_istri'] ?>">

					<label>Agama</label>
					<input type="text" readonly="true" value="<?php echo $rows['agama_ibu_calon_istri'] ?>">
					
					<label>Pekerjaan</label>
					<input type="text" readonly="true" value="<?php echo $rows['pekerjaan_ibu_calon_istri'] ?>">

					<label>Alamat</label>
					<input type="text" readonly="true" value="<?php echo $rows['alamat_ibu_calon_istri'] ?>">

					<br>
					<label><center><bold>DATA DIRI WALI CALON PENGANTIN WANITA</bold></center></label>
					
					<label>Nama</label>
					<input type="text" readonly="true" value="<?php echo $rows['nama_wali_calon_istri'] ?>">

					<label>Jenis Kelamin</label>
					<input type="text" readonly="true" value="<?php echo $rows['jenis_kelamin_wali_calon_istri'] ?>">

					<label>Tempat / Tanggal Lahir</label>
					<input type="text" readonly="true" value="<?php echo $rows['tempat_lahir_ibu_calon_istri'] . " / " . date('d M Y', strtotime($rows['tgl_lahir_wali_calon_istri'])) ?>">

					<label>Warga Negara</label>
					<input type="text" readonly="true" value="<?php echo $rows['warga_negara_wali_calon_istri'] ?>">

					<label>Agama</label>
					<input type="text" readonly="true" value="<?php echo $rows['agama_wali_calon_istri'] ?>">
					
					<label>Pekerjaan</label>
					<input type="text" readonly="true" value="<?php echo $rows['pekerjaan_wali_calon_istri'] ?>">

					<label>Alamat</label>
					<input type="text" readonly="true" value="<?php echo $rows['alamat_wali_calon_istri'] ?>">

					<label>Hubungan Calon Istri dengan Wali</label>
					<input type="text" readonly="true" value="<?php echo $rows['hubungan_wali_ci'] ?>">
						
			</form>
			
			<?php
		$nik_cs=$rows['nik_cs'];
		$nik_ci=$rows['nik_ci'];
		$nik_ayah_cs=$rows['nik_ayah_cs'];
		$nik_ibu_cs=$rows['nik_ibu_cs'];
		$nik_ayah_ci=$rows['nik_ayah_ci'];
		$nik_ibu_ci=$rows['nik_ibu_ci'];
		$nik_wali_ci=$rows['nik_wali_ci'];
		$status_cs=$rows['status_cs'];
		$jumlah_istri_cs=$rows['jumlah_istri_cs'];
		$status_ci=$rows['status_ci'];
		$hubungan_wali_ci=$rows['hubungan_wali_ci'];
		$status_proses=$rows['status_proses'];
		$penjamin_cs_1=$rows['penjamin_cs_1'];
		$penjamin_cs_2=$rows['penjamin_cs_2'];
		$penjamin_ci_1=$rows['penjamin_ci_1'];
		$penjamin_ci_2=$rows['penjamin_ci_2'];

	mysqli_query($koneksi,"insert into nikah2
		(
		nik_cs, 
		nik_ci, 
		nik_ayah_cs, 
		nik_ibu_cs, 
		nik_ayah_ci, 
		nik_ibu_ci,
		nik_wali_ci,
		status_cs,
		jumlah_istri_cs, 
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
		'$nik_cs',
		'$nik_ci',
		'$nik_ayah_cs',
		'$nik_ibu_cs',
		'$nik_ayah_ci',
		'$nik_ibu_ci',
		'$nik_wali_ci',
		'$status_cs',
		'$jumlah_istri_cs',
		'$status_ci',
		'$hubungan_wali_ci',
		'$status_proses',
		'$penjamin_ci_1',
		'$penjamin_ci_2',
		'$penjamin_cs_1',
		'$penjamin_cs_2'
		)
		");

			mysqli_query($koneksi,"delete from nikah");

			}
			?>

			<a href="index.php" class="ui-btn ui-icon-home ui-btn-icon-right ui-corner-all ui-shadow">Selesai</a>
	
	</div>

	</body>
</html>