<?php 
include "lib/inc.koneksidb.php";

// ========================================================
// 	KUNCI DARI SISTEM PAKAR ADA DI HALAMAN INI
//  Jika Rumus/Metode Konsultasinya tidak sesuai dengan Keinginan Anda, maka Kami persilahkan Anda untuk mengembangkannya
//  Semoga hal kecil ini bisa menjadi Penyebab awal Kesuksessan Proyek Anda, salam belajar
// ========================================================

# Baca variabel Form (If Register Global ON)
$basa = $_POST['basa'];
$tanah = $_POST['tanah'];
$suhu = $_POST['suhu'];
$air = $_POST['air'];
$ph = $_POST['ph'];

# Mendapatkan No IP
$NOIP 		= $_SERVER['REMOTE_ADDR'];

# Fungsi untuk mendapat nilai cf
function GetBobot($kd_kriteria,$koneksi){
	$sql = "SELECT * FROM kriteria where kd_kriteria='$kd_kriteria'";
	$qry = mysqli_query($koneksi, $sql);
	$data = mysqli_fetch_array($qry);
	
	$bobot = $data['bobot'];
	return $bobot;
}



# Fungsi input tabel tmp kriteria
function AddTmpKriteria($kdkriteria, $IP) {
    mysqli_query("DELETE FROM tmp_kriteria");
	$sql_kriteria = "INSERT INTO tmp_kriteria (noip,kd_kriteria) VALUES ('$IP','$kdkriteria')";
	mysqli_query($sql_kriteria) or die ("Query error :".mysqli_error());
}

function AddTmpTanaman($kdkriteria, $IP){

	$sql_tanaman = "SELECT * FROM relasi WHERE kd_kriteria = '$kdkriteria'";
	$kueri_tanaman = mysqli_query($sql_tanaman);
	$hit = mysqli_num_rows($kueri_tanaman);
	
	while($isi_tanaman = mysqli_fetch_array($kueri_tanaman)){
		$sql_tmp_tanaman = "INSERT INTO tmp_tanaman VALUES('$IP','$isi_tanaman[kd_tanaman]')";
		$kueri_tmp_tanaman = mysqli_query($sql_tmp_tanaman);
	}
}

function AddTmpAnalisa($kdkriteria, $IP, $koneksi){
	//mysqli_query($koneksi,"DELETE FROM tmp_analisa WHERE noip='$IP'");
	$sql_analisa = "SELECT * FROM relasi WHERE kd_kriteria = '$kdkriteria'";
	$kueri_analisa = mysqli_query($koneksi, $sql_analisa);
	$hit = mysqli_num_rows($kueri_analisa);
	
	while($isi_analisa = mysqli_fetch_array($kueri_analisa)){
		$sql_tmp_analisa = "INSERT INTO tmp_analisa VALUES('$IP','$isi_analisa[kd_tanaman]','$kdkriteria')";
		$kueri_tmp_analisa = mysqli_query($koneksi,$sql_tmp_analisa);
	}
}

function DelTmpAnalisa($NOIP){
	$sql_del = "DELETE FROM tmp_analisa WHERE noip='$NOIP'";
	$kueri_del = mysqli_query($sql_del);
}

function DelTmpPasien($NOIP){
	$sql_del = "DELETE FROM tmp_pasien WHERE noip='$NOIP'";
	$kueri_del = mysqli_query($sql_del);
}

function EmptyTmpAnalisa(){
	#mysqli_query("TRUNCATE tmp_analisa");
}

function MoveFromTmpAnalisa($NOIP,$koneksi){
	$sql_pasien = "SELECT * FROM tmp_pasien where noip='$NOIP'";
	$kueri_pasien = mysqli_query($koneksi,$sql_pasien);
	$data_pasien = mysqli_fetch_array($kueri_pasien);
	
	$nama = $data_pasien['nama'];
	$kelamin = $data_pasien['kelamin'];
	$alamat = $data_pasien['alamat'];
	$pekerjaan = $data_pasien['pekerjaan'];
	$noip = $data_pasien['noip'];
	$tanggal = $data_pasien['tanggal'];
	
	$sql_analisa = "SELECT count(kd_tanaman) as jml, kd_tanaman FROM tmp_analisa where noip='$NOIP' group by kd_tanaman order by jml desc";
	$kueri_analisa = mysqli_query($koneksi,$sql_analisa);
	$data_analisa = mysqli_fetch_array($kueri_analisa);
	
	$tanaman = $data_analisa['kd_tanaman'];
	
	$sql_hasil = "INSERT INTO analisa_hasil VALUES('','$nama','$kelamin','$alamat','$pekerjaan','$tanaman','$noip','$tanggal','')";
	$kueri_hasil = mysqli_query($koneksi,$sql_hasil);
}

function rumus($k1, $k2, $k3, $k4, $k5){
	
	$old1 = $k1 + $k2 * (1-$k1);
	$old2 = $old1 + $k3 * (1-$old1);
	$old3 = $old2 + $k4 * (1-$old2);
	$old4 = $old3 + $k5 * (1-$old3);
	
	return $old4;
}

function old1($k1, $k2){
	$old1 = $k1 + $k2 * (1-$k1);
	return $old1;
}

function old2($old1, $k3){
	$old2 = $old1 + $k3 * (1-$old1);
	return $old2;
}

function old3($old2, $k4){
	$old3 = $old2 + $k4 * (1-$old2);
	return $old3;
}

function old4($old3, $k5){
	$old4 = $old3 + $k5 * (1-$old3);
	return $old4;
}


function old($k1, $k2){
	$old1 = $k1 + $k2 * (1-$k1);
	return $old1;
}

function UpdateCF($nilai_cf,$NOIP,$koneksi){
	mysqli_query($koneksi,"update analisa_hasil set nilai_cf='$nilai_cf' where noip = '$NOIP' order by id_konsul desc limit 1");
}
	//AddTmpKriteria($basa, $NOIP);
	//EmptyTmpAnalisa();
	
	$cfbasa = GetBobot($basa,$koneksi);
	$cftanah = GetBobot($tanah,$koneksi);
	$cfsuhu = GetBobot($suhu,$koneksi);
	$cfair = GetBobot($air,$koneksi);
	$cfph = GetBobot($ph,$koneksi);
	
	$o1 = old($cfbasa, $cftanah);
	$o2 = old($o1, $cfsuhu);
	$o3 = old($o2, $cfair);
	$o4 = old($o3, $cfph);
	
	
	AddTmpAnalisa($basa, $NOIP,$koneksi);
	AddTmpAnalisa($tanah, $NOIP,$koneksi);
	AddTmpAnalisa($suhu, $NOIP,$koneksi);
	AddTmpAnalisa($air, $NOIP,$koneksi);
	AddTmpAnalisa($ph, $NOIP,$koneksi);
	MoveFromTmpAnalisa($NOIP,$koneksi);
	#DelTmpAnalisa($NOIP);
	#DelTmpPasien($NOIP);
	UpdateCF($o4,$NOIP,$koneksi);

	/*echo"
	basa = $cfbasa<br>
	tanah = $cftanah<br>
	suhu = $cfsuhu<br>
	air = $cfair<br>
	ph =$cfph<br>

	nilai cf = $o1, $o2, $o3, $o4
	";*/
?>
<script>location='hasil.php';</script>
