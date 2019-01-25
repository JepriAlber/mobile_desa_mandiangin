<?php 
  include 'koneksi.php';
  include 'header.php';
  ?>
<html>
<body>
<div data-role="page" id="page1" data-theme="C">
		<div data-role="header">
			<h1>CEK DATA</h1>
		</div>

		<div data-role="content" >
			<form action="prosesCdata.php" method="GET" class="form-horizontal" id="search" data-ajax="false">
        <div class="col-md-8 col-xs-12">
				<label for="nik">NIK :</label>
				<input type="number" name="nik" id="nik" required>
        <button class="btn btn-default" type="submit" name="submit">Cari</button>
        </div>			
			</form>
		<a href="index.php" class="ui-btn ui-icon-home ui-btn-icon-right ui-corner-all ui-shadow">Home</a>
    </div>	
		<div data-role="footer" class="uir" data-position="fixed">
			<h4>DESA MANDIANGIN</h4>
		</div>	
</div>

</body>

</html>