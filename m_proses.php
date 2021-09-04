<?php 

class Penduduk {

	private $mysqli;

	function __construct($conn)
	{
		$this->mysqli = $conn;
	}

	public function tampil ($nik = null)
	{
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM kependudukan ";
		if ($nik != null) {
			$sql .="WHERE nik=$nik" ;
		}

		$query = $db->query($sql) or die ($db->error);
		return $query;

	}

	public function cekData ($nik = null)
	{
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM status ";
		if ($nik != null) {
			$sql .="WHERE nik=$nik" ;
		}

		$query = $db->query($sql) or die ($db->error);
		return $query;

	}

	public function cekNik($nik = null){
		$db = $this->mysqli->conn;
		$sql = "SELECT nik FROM kependudukan ";
		if ($nik != null) {
			$sql .= "WHERE nik=$nik";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function nikCS($nik=null)
	{
		$db =$this->mysqli->conn;
		$sql="SELECT * FROM kependudukan ";
		if($nik!= null){
			$sql.="WHERE nik=$nik and jenis_kelamin='Laki-laki'";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function nikCI($nik=null)
	{
		$db =$this->mysqli->conn;
		$sql="SELECT * FROM kependudukan ";
		if($nik!= null){
			$sql.="WHERE nik=$nik and jenis_kelamin='Perempuan'";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function inputPenduduk($nik,$nama,$tempat_lahir,$tgl_lahir,$warga_negara,$jenis_kelamin,$agama,$tempat_tinggal,$pekerjaan,$status)
	{
		$db = $this->mysqli->conn;
		$db->query("INSERT INTO kependudukan (nik,nama,tempat_lahir,tgl_lahir,warga_negara,jenis_kelamin,agama,tempat_tinggal,pekerjaan,status)
			VALUES ('$nik','$nama','$tempat_lahir','$tgl_lahir','$warga_negara','$jenis_kelamin','$agama','$tempat_tinggal','$pekerjaan','$status')") or die($db->error); 
	}

	public function inputdomisili($nik,$nama,$jenis_kelamin,$umur,$pekerjaan,$tempat_tinggal,$status_proses)
	{
		$db = $this->mysqli->conn;
		$db->query("INSERT INTO surat_ket_domisili (nik,nama,jenis_kelamin,umur,pekerjaan,alamat,status_proses)
			VALUES 
			('$nik','$nama','$jenis_kelamin','$umur','$pekerjaan','$tempat_tinggal','$status_proses')") or die($db->error); 
	}

	public function inputlamarankerja($nik,$nama,$jenis_kelamin,$tempat_lahir,$tgl_lahir,$warga_negara,$agama,$status,$tempat_tinggal,$ket_lain,$status_proses)
	{
		$db = $this->mysqli->conn;
		$db->query("INSERT INTO surat_ket_melamar_kerja (nik,nama,jenis_kelamin,tempat_lahir,tgl_lahir,kewarganegaraan,agama,status_kawin,alamat,ket_lain,status_proses)
			VALUES ('$nik','$nama','$jenis_kelamin','$tempat_lahir','$tgl_lahir','$warga_negara','$agama','$status','$tempat_tinggal','$ket_lain','$status_proses')") or die($db->error); 
	}

	public function inputNikah($nik_suami,$nik_istri,$nik_ayah_cs,$nik_ibu_cs,$nik_ayah_ci,$nik_ibu_ci,$jumlah_istri,$status_suami,$status_istri,$status_proses)
	{
		$db = $this->mysqli->conn;
		$db->query("INSERT INTO nikah (
		nik_cs, nik_ci, nik_ayah_cs, nik_ibu_cs, nik_ayah_ci, nik_ibu_ci, 
		jumlah_istri_cs,status_cs, status_ci, status_proses) VALUES 
		($nik_suami,$nik_istri,$nik_ayah_cs,$nik_ibu_cs,$nik_ayah_ci,$nik_ibu_ci,$jumlah_istri,$status_suami,$status_istri,$status_proses)") or die($db->error); 
	}

	public function inputSuamiDahulu($nik_istri,$nama_suami_terdahulu)
	{
		$db = $this->mysqli->conn;
		$db->query("INSERT INTO suami_dahulu VALUES ('$nik_istri','$nama_suami_terdahulu')") or die($db->error); 
	}

	public function inputIstriDahulu($nik_suami,$istri_terdahulu)
	{
		$db = $this->mysqli->conn;
		$db->query("INSERT INTO istri_dahulu VALUES ('$nik_suami','$istri_terdahulu')") or die($db->error); 
	}

}
 ?>