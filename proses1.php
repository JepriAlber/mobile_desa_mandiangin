<style type="text/css">
	.coba label{
		transition: 0.2s, color:0.2s, top:0.2s, bottom:0.2s, right:0.2s, left:0.2s;
		padding: 7px 6px;
	}
	.coba input{
		width: 100%;
		border: 0.1px solid gray;
		box-shadow: 0 0 2px gray;
		border-radius: 5px;
		background: white;
		position: relative;
		top: 0;
		left: 0;
		z-index: 1;
		padding: 8px 12px;
		outline: 0;
	}
	@media screen and (max-width: 768px){
		.coba input{
			width: 100%;
		}
	}
	@media screen and (max-width: 425px){
		.coba input{
			width: 100%;
		}
	}
	@media screen and (max-width: 375px){
		.coba input{
			width: 100%;
		}
	}
	@media screen and (max-width: 320px){
		.coba input{
			width: 100%;
		}
	}	

</style>

<?php

	include "koneksi.php";
	// include "header.php";
	if (isset($_GET['id'])) {
		//status
		if ($_GET['id']=='status') {
			if($_GET['status']=='Beristri') {
				?>
					<!-- <fieldset data-role="controlgroup" class="coba">			
						<label for="jumlah_istri">Jumlah Istri</label>
						<input required type="number" name="jumlah_istri" id="jumlah_istri" placeholder="Masukkan Jumlah Istri" onkeyup="jumlah()">
					</fieldset> -->

					<fieldset data-role="controlgroup" onclick="jumlah()">
					<label for="jumlah_istri">Jumlah Istri :</label>
					<select name="jumlah_istri" style="width: 100%; text-align:center !important; " class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow" id="jumlah_istri" required="true">
						<option value="" selected disabled>Pilih</option>
						<option value="1">1</option >
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
					</fieldset>

				<?php
			}
			elseif ($_GET['status']=='Duda') {
				?>
					<fieldset data-role="controlgroup" class="coba">			
						<label for="istri_dahulu">Nama Istri Terdahulu</label>
						<input required type="text" name="istri_dahulu" id="istri_dahulu" placeholder="Masukkan Nama Istri Terdahulu">
					</fieldset>
				<?php
			}
			elseif ($_GET['status']=='Jejaka') {
				?>
					<fieldset data-role="controlgroup" class="coba">			
						<label for="penjamin_cs_1">Nama Penjamin 1</label>
						<input required type="text" name="penjamin_cs_1" id="penjamin_cs_1" placeholder="Masukkan Nama Penjamin 1">
						<label for="penjamin_cs_2">Nama Penjamin 2</label>
						<input required type="text" name="penjamin_cs_2" id="penjamin_cs_2" placeholder="Masukkan Nama Penjamin 2">
					</fieldset>
				<?php
			}
		}

		//jumlah_istri
		if ($_GET['id']=='jumlah_istri' && $_GET['status']=='Beristri') {
			for ($i=1; $i<=$_GET['jumlah_istri'] ; $i++) { 
				$nama="nama".$i;
				?>
					<fieldset data-role="controlgroup" class="coba">
					<label for="nama_istri">Nama Istri ke <?=$i; ?></label>
					<input required type="text" name="<?=$nama;?>" id="<?=$nama;?>" placeholder="Masukkan Nama Istri ke <?=$i; ?>">
					</fieldset>
				<?php 
			}
			
		}
	}
?>