<?php 
include "lib/inc.koneksidb.php";
	
# Baca variabel Form (If Register Global ON)
$TxtNama 		= $_POST['TxtNama'];
$RbKelamin 		= $_POST['RbKelamin'];
$TxtAlamat 		= $_POST['TxtAlamat'];
$TxtPekerjaan	= $_POST['TxtPekerjaan'];

# Validasi Form
if (trim($TxtNama)=="") {
	
	echo '<div class="isi col-md-5 col-md-offset-7 alert alert-danger role=alert">
	Nama belum diisi, ulangi kembali
	</div></br>';
	include "konsultasi.php";
}
elseif (trim($TxtAlamat)=="") {
	include "pasienaddfm.php";
	echo '<div class="isi col-md-5 col-md-offset-7 alert alert-danger role=alert">
	Alamat masih kosong, ulangi kembali
	</div></br>';
	include "konsultasi.php";

}
elseif (trim($TxtPekerjaan)=="") {
	include "pasienaddfm.php";
	echo '<div class="isi col-md-5 col-md-offset-7 alert alert-danger role=alert">
	Pekerjaan masih kosong, ulangi kembali
	</div></br>';
	include "konsultasi.php";

}
elseif (trim($RbKelamin)=="") {
	include "pasienaddfm.php";
	echo '<div class="isi col-md-5 col-md-offset-7 alert alert-danger role=alert">
	Jenis Kelamin masih kosong, ulangi kembali
	</div></br>';
	include "konsultasi.php";

}
else {
    $NOIP = $_SERVER['REMOTE_ADDR'];
	$sqldel = "DELETE FROM tmp_pasien WHERE noip='$NOIP'";
	mysqli_query($koneksi, $sqldel);
	
	$sql  = " INSERT INTO tmp_pasien (nama,kelamin,alamat,pekerjaan,noip,tanggal) 
		 	  VALUES ('$TxtNama','$RbKelamin','$TxtAlamat','$TxtPekerjaan','$NOIP',NOW())";
	mysqli_query($koneksi, $sql) 
		  or die ("SQL Error 2".mysqli_error());
	
	
	$sqlhapus2 = "DELETE FROM tmp_analisa WHERE noip='$NOIP'";
	mysqli_query($koneksi, $sqlhapus2) 
			or die ("SQL Error 2".mysqli_error());
	echo "<meta http-equiv='refresh' content='0; url=konsultasifm.php'>";
	//echo"<script>window.location='ss';</script>";
}
?>
