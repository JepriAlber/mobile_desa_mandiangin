<html>
<?php 
  include('koneksi.php');
  include('config.php');
  $connection = new Database($host, $user, $pass, $database);
  include "m_proses.php";
  $penduduk = new Penduduk($connection);
  include 'header.php';
 ?>
<body>

<div data-role="page" id="page1" data-theme="C">
    <div data-role="header">
      <h1>SURAT<br>LAMARAN KERJA</h1>
    </div>

    <div data-role="content">
        <form action="proses_cari2.php" method="POST" id="search" data-ajax="false">
          <label for="nik">NIK :</label>
          <input type="number" name="nik" id="nik" required>
          <input type="submit" name="cari" value="Cari">      
        </form>

        <div id="result"></div> 

      <a href="index.php" class="ui-btn ui-icon-home ui-btn-icon-right ui-corner-all ui-shadow">Home</a>
    </div>
    <div data-role="footer" class="uir" data-position="fixed">
     <h4>DESA MANDIANGIN</h4>
    </div>  
</div>

</body>

<script type="text/javascript">
      $(document).ready(function(){
        $().ajaxStart(function(){
          $('#result').hide();
        }).ajaxStop(function(){
          $('#result').fadeIn(slow);
        });

        $('#search').submit(function(){
          $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data){
              $('#result').html(data);
              $('#search').hide();
            }
          });
          return false;
        });
      });
    </script>

</html>