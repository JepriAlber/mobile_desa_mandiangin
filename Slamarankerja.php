<?php 
include 'header.php';
?>
<div data-role="page" id="page1" data-theme="C">
<div data-role="header">
			<h1>Surat<br>Lamaran Kerja</h1>
		</div>
<div data-role="content">
	<form action="prosesLamarankerja.php" method="POST" data-ajax="false">

	<input type="hidden" name="nik" id="nik" readonly value="<?php echo $data[0]['nik']; ?>">

	<label for="nama">Nama Lengkap :</label>
	<input type="text" name="nama" id="nama" readonly value="<?php echo $data[0]['nama']; ?>">

	<label for="jenis_kelamin">Jenis Kelamin :</label>
	<input type="text" name="jenis_kelamin" id="jenis_kelamin" readonly value="<?php echo $data[0]['jenis_kelamin']; ?>">

	<label for="ttgl">Tempat Lahir :</label>
	<input type="text" name="tempat_lahir" id="ttgl" readonly value="<?php echo $data[0]['tempat_lahir']; ?>">

	<label for="ttgl">Tanggal Lahir :</label>
	<input type="text"  name="tgl_lahir" id="ttgl" readonly value="<?php echo date('d-M-Y', strtotime($data[0]['tgl_lahir'])); ?>">
					
	<label for="kewarganegaraan">Warga Negara :</label>
	<input type="text" id="kewarganegaraan" name="warga_negara" readonly value="<?php echo $data[0]['warga_negara']; ?>">

	<label for="agama">Agama :</label>
	<input type="text" id="agama" name="agama" readonly value="<?php echo $data[0]['agama']; ?>">

	<label for="status">Status :</label>
	<input type="text" id="status" name="status" readonly value="<?php echo $data[0]['status']; ?>">

	<label for="alamat">Tempat Tinggal :</label>
	<textarea cols="40" rows="8" name="tempat_tinggal" id="alamat" readonly><?php echo $data[0]['tempat_tinggal']; ?></textarea>

	<label for="ket_lain">KETERANGAN LAIN</label>
	<textarea cols="40" rows="8" name="ket_lain" id="ket_lain" placeholder="Keterangan Lain..." required="true"></textarea>

	<table width="100%" height="100%">
		<tr>
			<td>
				<td width="50%"><a href="cariData2.php" class="ui-btn ui-icon-back ui-btn-icon-right ui-corner-all ui-shadow">Kembali</a></td>
				<td width="50%"><button type="submit" name="simpan" id="batal" class="ui-btn ui-icon-navigation ui-btn-icon-right ui-corner-all ui-shadow">Kirim</button></td>
			
			</td>
		</tr>
	</table>
</form>
</div>
	<div data-role="footer" class="uir" data-position="fixed" >
			<h4>DESA MANDIANGIN</h4>
		</div>
</div>
