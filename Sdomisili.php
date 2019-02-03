
<?php 
include 'header.php';
?>
<div data-role="page" id="page1" data-theme="C">
		<div data-role="header" >
			<h1>Surat Domisili</h1>
		</div>
	<div data-role="content" >
	<form action="prosesDomisili.php" method="POST" data-ajax="false">

	<input type="hidden" name="nik" id="nik" readonly value="<?php echo $data[0]['nik']; ?>">

	<label for="nama">Nama Lengkap :</label>
	<input type="text" name="nama" id="nama" readonly value="<?php echo $data[0]['nama']; ?>">

	<label for="jenis_kelamin">Jenis Kelamin :</label>
	<input type="text" name="jenis_kelamin" id="jenis_kelamin" readonly value="<?php echo $data[0]['jenis_kelamin']; ?>">
	
	<label for="umur">Umur :</label>
	<input type="text" name="umur" id="umur" readonly value="<?php echo date('Y') -date('Y', strtotime($data[0]['tgl_lahir'])); ?>" required="true">

	<label for="pekerjaan">Pekerjaan :</label>
	<input type="text" name="pekerjaan" id="pekerjaan" readonly value="<?php echo $data[0]['pekerjaan']; ?>"">

	<label for="alamat">Tempat Tinggal :</label>
	<textarea cols="40" rows="8" name="alamat" id="alamat" readonly><?php echo $data[0]['tempat_tinggal']; ?></textarea>

	<table width="100%" height="100%">
		<tr>
			<td width="50%"><a href="cariData.php" class="ui-btn ui-icon-back ui-btn-icon-right ui-corner-all ui-shadow">Kembali</a></td>
			<td width="50%"><button type="submit" name="simpan" id="simpan" class="ui-btn ui-icon-navigation ui-btn-icon-right ui-corner-all ui-shadow">Kirim</button></td>
		</tr>
	</table>
</div>
</form>
		<div data-role="footer" class="uir" data-position="fixed" data-theme="C">
			<h4>DESA MANDIANGIN</h4>
		</div>
</div>
