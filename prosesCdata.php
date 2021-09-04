<?php 
  include 'koneksi.php';
  include 'header.php';
  ?>
  <html>
<body>
<div data-role="page" id="page1" data-theme="C">
    <div data-role="header">
      <h1>Cek Data</h1>
    </div>

    <div data-role="content" >
<?php
if(isset($_GET['submit'])) {
  $nik = $_GET['nik'];
  $q = mysqli_query($koneksi,"select * from kependudukan where nik='$nik'");
  if(mysqli_num_rows($q) > 0) {
 ?>
<table data-role="table" id="table-custom-2" class="ui-body-d ui-shadow table-stripe ui-responsive">
        <thead>
          <tr>
            <th width="25%" align="center">Nama</th>
            <th width="25%" align="center">Jenis Form</th>
            <th width="25%" align="center">Status</th>
            <th width="25%" align="center">Keterangan</th>
          </tr>
        </thead>
      <?php 
        $q = mysqli_query($koneksi,"select * from kependudukan where nik='$nik'");
        while($rows = mysqli_fetch_array($q)) {
        ?>
        <tbody>
          <tr>
            <td>
              <?php echo $rows['nama'] ?>
            </td>
            <td>
              Kependudukan
            </td>
            <td>
              <font color="green"><b>Tercatat</b></font>
            </td>
            <td>
              -
            </td>
          </tr>
        </tbody>

        <?php 

      /*  SELECT nama, status_proses 
         FROM kependudukan, nikah2 
         WHERE kependudukan.nik ='$nik' 
          AND kependudukan.nik <> nikah2.nik_ayah_cs
          AND kependudukan.nik <> nikah2.nik_ibu_cs
          AND kependudukan.nik <> nikah2.nik_ayah_ci
          AND kependudukan.nik <> nikah2.nik_ibu_ci*/
        }

        $q = mysqli_query($koneksi,"SELECT nama,status_proses  
         FROM kependudukan, nikah2 
         WHERE kependudukan.nik=nikah2.nik_cs and nikah2.nik_cs ='$nik' union 
         SELECT nama,status_proses  
         FROM kependudukan, nikah2 
         WHERE kependudukan.nik=nikah2.nik_ci and nikah2.nik_ci ='$nik'");

        while($rows = mysqli_fetch_array($q)) {
        ?>
        <tbody>
          <tr>
            <td>
              <?php echo $rows['nama'] ?>
            </td>
            <td>
              Nikah
            </td>
            <?php
            if ($rows['status_proses']=="Sedang Diproses") {
               ?>
                  <td> 
                    <font color="orange">
                      <b><?php echo $rows['status_proses']?></b>
                     </font>
                    </td>
            <?php
             }
             else{
              ?>
                <td> 
                    <font color="green">
                      <b><?php echo $rows['status_proses']?></b>
                     </font>
                    </td>
            <?php
             } 
             ?>
            <?php
              if($rows['status_proses']=="Oke")
              {
                $ket="Segera serahkan berkas ke kantor";
              }else{
                $ket="-";
              } 
            ?>
            <td>
              <?php echo $ket; ?>
            </td>
          </tr>
        </tbody>

        <?php 
        }

        $q = mysqli_query($koneksi,"select * from kependudukan, surat_ket_domisili where kependudukan.nik = surat_ket_domisili.nik and surat_ket_domisili.nik='$nik'");
        while($rows = mysqli_fetch_array($q)) {
        ?>
        <tbody>
          <tr>
            <td>
              <?php echo $rows['nama'] ?>
            </td>
            <td>
              Surat Domisili
            </td>
            <?php
            if ($rows['status_proses']=="Sedang Diproses") {
               ?>
                  <td> 
                    <font color="orange">
                      <b><?php echo $rows['status_proses']?></b>
                     </font>
                    </td>
            <?php
             }
             else{
              ?>
                <td> 
                    <font color="green">
                      <b><?php echo $rows['status_proses']?></b>
                     </font>
                    </td>
            <?php
             } 
             ?>

            <?php
              if($rows['status_proses']=="Oke")
              {
                $ket="Segera serahkan berkas ke kantor";
              }else{
                $ket="-";
              } 
            ?>
            <td>
              <?php echo $ket; ?>
            </td>
          </tr>
        </tbody>

        <?php 
        }

        $q = mysqli_query($koneksi,"select * from kependudukan, surat_ket_melamar_kerja where kependudukan.nik = surat_ket_melamar_kerja.nik and surat_ket_melamar_kerja.nik='$nik'");
        
        while($rows = mysqli_fetch_array($q)) {
        ?>
        <tbody>
          <tr>
            <td>
              <?php echo $rows['nama'] ?>
            </td>
            <td>
              Surat Lamaran Kerja
            </td>
            <?php
            if ($rows['status_proses']=="Sedang Diproses") {
               ?>
                  <td> 
                    <font color="orange">
                      <b><?php echo $rows['status_proses']?></b>
                     </font>
                    </td>
            <?php
             }
             else{
              ?>
                <td> 
                    <font color="green">
                      <b><?php echo $rows['status_proses']?></b>
                     </font>
                    </td>
            <?php
             } 
             ?>
            <?php
              if($rows['status_proses']=="Oke")
              {
                $ket="Segera serahkan berkas ke kantor"; 
              }else{
                $ket="-";
              } 
            ?>
            <td align="right">
              <?php echo $ket; ?>
            </td>
          </tr>
        </tbody>

        <?php 
        }
        ?>

      </table>
      <p >
      <h3 style="color:red">PERLU DIINGAT:</h3>
          <ol align="justify">
              <li><b>Berkas asli yang dibawa ke kantor desa untuk pengurusan data penduduk : </b></li>
                <ul>
                  <li>KTP asli.</li>
                  <li>Kartu Keluarga asli.</li>
                </ul>   
                    <br>
                <li><b>Berkas asli yang dibawa ke kantor desa untuk pengurusan pendaftaran nikah (berkas calon suami maupun calon istri) :</b></li>
              <ul>
                  <li>Fotocopy Kartu Keluarga kedua belah pihak.</li>
                  <li>Fotocopy KTP kedua belah pihak.</li>
                  <li>Pas foto 2x4 2 lembar.</li>
              </ul>
                    <br>
                <li><b>Berkas asli yang dibawa ke kantor desa untuk pengurusan surat keterangan domisili :</b></li>
              <ul>
                  <li>Membawa surat pengantar dari RT.</li>
                  <li>Fotocopy Kartu Keluarga yang sudah mempunyai Kartu Keluarga Mandiangin.</li>
              </ul>
                  <br>
                  <li><b>Berkas asli yang dibawa ke kantor desa untuk pengurusan surat keterangan melamar kerja :</b></li>
              <ul>
                  <li>Fotocopy Kartu Keluarga Mandiangin.</li>
                  <li>Fotocopy KTP.</li>
              </ul>
      </ol>
       </p>
<?php }
  else { 
        echo "Data belum terdaftar <br> Mohon daftar terlebih dahulu ";
        echo "<a href='Dpenduduk.php'>Klik Disini</a>";  
    }

}

?>
    <a href="Cdata.php" class="ui-btn ui-icon-back ui-btn-icon-right ui-corner-all ui-shadow" data-theme="C">Kembali</a>
  </div>  

    <div data-role="footer" class="uir" data-position="fixed">
      <h4>DESA MANDIANGIN</h4>
    </div>  
</div>
</body>
</html>