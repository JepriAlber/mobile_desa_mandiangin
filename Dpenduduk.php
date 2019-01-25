
<html>
<?php 
include 'header.php';
?>
<body>

<div data-role="page" id="page1" data-theme="C">
		<div data-role="header">
			<h1>DATA PENDUDUK</h1>
		</div>

		<div data-role="content">
			<form action="prosesPenduduk.php" method="POST" data-ajax="false">
				<label for="nik">NIK</label>
				<input type="number" name="nik" id="nik" required="true">

				<label for="nama">Nama Lengkap :</label>
				<input type="text" data-clear-btn="true" name="nama" id="nama" required="true">

				<label for="tempat_lahir">Tempat Lahir :</label>
				<input type="text" data-clear-btn="true" name="tempat_lahir" id="tempat_lahir" required="true">

				<label for="tgl_lahir">Tanggal Lahir :</label>
				<input type="date" name ="tgl_lahir" id="tgl_lahir" data-role="date" required="true">

				<fieldset data-role="content">
					<label for="jenis_kelamin">Jenis Kelamin :</label>
					<select name="jenis_kelamin" id="jenis_kelamin" required="true">
						<option value="">Pilih</option>
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</fieldset>

				<fieldset data-role="content">
					<label for="agama">Agama :</label>
					<select name="agama" id="agama" required="true">
						<option value="">Pilih</option>
						<option value="Islam">Islam</option>
						<option value="Kristen Katolik">Kristen Katolik</option>
						<option value="Kristen Protestan">Kristen Protestan</option>
						<option value="Buddha">Buddha</option>
						<option value="Hindu">Hindu</option>
					</select>
				</fieldset>

				<fieldset data-role="content">
					<label for="status">Status :</label>
					<select name="status" id="status" required="true">
						<option value="">Pilih</option>
						<option value="Menikah">Menikah</option>
						<option value="Belum Menikah">Belum Menikah</option>
					</select>
				</fieldset>

				<fieldset data-role="content">
					<label for="warga_negara">Warga Negara :</label>
					<select name="warga_negara" id="warga_negara" required="true">
						<option value="">Pilih</option>
						<option value="Indonesia">Indonesia</option>
						<option value="Asing">Asing</option>
					</select>
				</fieldset>

				<label for="pekerjaan">Pekerjaan :</label>
				<input type="text" data-clear-btn="true" name="pekerjaan" id="pekerjaan" required="true">

				<label for="tempat_tinggal">Tempat Tinggal :</label>
				<textarea cols="40" rows="8" name="tempat_tinggal" id="tempat_tinggal" required="true"></textarea>

				
				<table width="100%" height="100%">
					<tr> 
						<td width="50%"><a href="index.php" class="ui-btn ui-icon-home ui-btn-icon-right ui-corner-all ui-shadow">Home</a></td>
						
						<td width="50%"><button type="submit" name="simpan" id="simpan" class="ui-btn ui-icon-navigation ui-btn-icon-right ui-corner-all ui-shadow">Kirim</button></td>
					</tr>
				</table>

			</form>
		</div>
		<div data-role="footer" class="uir" data-position="fixed">
			<h4>DESA MANDIANGIN</h4>
		</div>

		
	
</div>

</body>
</html>