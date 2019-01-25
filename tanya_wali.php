<html>


<?php
	include "koneksi.php";
	include "header.php";
	session_start();
?>
	<body>
	<div data-role="page" id="main" data-theme="C">
		<div data-role="header"> 
			<h1>DATA <br> NIKAH</h1>
		</div>
		<br>

<?php			
	if (isset($_POST['submit']))
		{
			$_SESSION['nik_ibu_ci']=$_POST['nik'];
		}
?>


	<div data-role="content">
		<center class="nanya">
		<form class="form-horizontal" role="search" method="POST" action="proses.php">
		Apakah wali Calon Istri Adalah Ayah Kandung Calon Istri?<br>
		<button class="btn btn-default" type="submit" name="submit" value="tanya_benar">YA</button>
		</form>
		<form class="form-horizontal" role="search" method="POST" action="nik_wali_ci.php">
		<button class="btn btn-default" type="submit" name="submit" value="tanya_salah">TIDAK</button>
	</center>
	</div>
	</form>
	</div>
</body>
</html>