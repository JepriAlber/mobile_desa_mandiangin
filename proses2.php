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
	if (isset($_GET['id'])) {
		//status
		if ($_GET['id']=='status') {
			if($_GET['status']=='Janda') {
			
				?>
					<fieldset data-role="controlgroup" class="coba">			
						<label for="suami_dahulu">Nama Suami Terdahulu</label>
						<input required type="text" name="suami_dahulu" id="suami_dahulu" placeholder="Masukkan Nama Suami Terdahulu">
					</fieldset>
				<?php
			}
			else{
				?>
					<fieldset data-role="controlgroup" class="coba">			
						<label for="penjamin_ci_1">Nama Penjamin 1</label>
						<input required type="text" name="penjamin_ci_1" id="penjamin_ci_1" placeholder="Masukkan Nama Penjamin 1">

						<label for="penjamin_ci_2">Nama Penjamin 2</label>
						<input required type="text" name="penjamin_ci_2" id="penjamin_ci_2" placeholder="Masukkan Nama Penjamin 2">
					</fieldset>
				<?php
			}
		}
	}
?>