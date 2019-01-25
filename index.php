<?php 
	require_once('koneksi.php');
	require_once('config.php');
	$connection = new Database($host, $user, $pass, $database);
	include "m_proses.php";
	$penduduk = new Penduduk($connection);
 ?>
<html>
<?php 
include 'header.php';
  
?>
<body>
	<div data-role="page" id="page1" data-theme="C">
		<div data-role="header" >
			<h1>DESA<br>MANDIANGIN</h1>
		</div>
		<br><br><br>
		<div data-role="content">
			<div class="ui-grid-b ui-responsive">
				<center>
				<a href="Dpenduduk.php" class="ui-btn ui-btn-index ui-btn-inline ui-shadow ui-responsive">DATA<br>PENDUDUK</a>
				<a href="nik_cs.php" class="ui-btn ui-btn-index ui-btn-inline ui-shadow ui-responsive">DATA<br>NIKAH</a><br>
				<a href="cariData.php" class="ui-btn ui-btn-index ui-btn-inline ui-shadow ui-responsive">SURAT<br>DOMISILI</a>
				<a href="cariData2.php" class="ui-btn ui-btn-index ui-btn-inline ui-shadow ui-responsive">SURAT<br>LAMARAN<br>KERJA</a><br>
				<a href="Cdata.php" class="ui-btn ui-shadow ui-icon-search ui-btn-icon-right ui-corner-all ui-responsive" >Cek Data</a>
				</center>
			</div>
		</div>
		<div data-role="footer" class="uir" data-position="fixed">
			<h1>Copyright &copy; 2019 UIR </h1>
		</div>
	</div>

</body>

</html>