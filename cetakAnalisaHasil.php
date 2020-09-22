    <?php 
include "lib/inc.koneksidb.php";

$NOIP = $_SERVER['REMOTE_ADDR'];
$sql = "SELECT analisa_hasil.*, tanaman.* 
		FROM analisa_hasil,tanaman 
		WHERE tanaman.kd_tanaman=analisa_hasil.kd_tanaman
		AND analisa_hasil.noip='$NOIP'
		ORDER BY analisa_hasil.id_konsul DESC LIMIT 1";
$qry = mysqli_query($koneksi, $sql);
$data= mysqli_fetch_array($qry);
if ($data['kelamin']=="L") {
	$kelamin = "Pria";
}
else {
	$kelamin = "Wanita";
}
?>
<html>
<head>
<title>Hasil Analisa</title>
</head>
<body>
<div class="isi">
<table class="table table-striped">
  <tr> 
    <td colspan="2" align="center"><h4>HASIL KEMUNGKINAN KESESUAIAN LAHAN TANAM</h4></td>
  </tr>
  <tr> 
    <th colspan="2" class="success"><b>DATA PENGGUNA:</b></th>
  </tr>
  <tr> 
    <td width="100">Nama</td>
    <td width="689"><?php echo $data['nama']; ?></td>
  </tr>
  <tr> 
    <td>Jenis Kelamin</td>
    <td><?php echo $kelamin; ?></td>
  </tr>
  <tr> 
    <td>Alamat</td>
    <td><?php echo $data['alamat']; ?></td>
  </tr>
  <tr> 
    <td>Pekerjaan</td>
    <td><?php echo $data['pekerjaan']; ?></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <br>

  <tr> 
    <th class="success" colspan="2"><b>HASIL ANALISA TERAKHIR :</b></th>
  </tr>
<td>&nbsp;</td>
  <tr> 
    <td>tanaman</td>
    <td><?php echo $data['kd_tanaman']." | ".$data['nm_tanaman']; ?></td>
  </tr>
<td>&nbsp;</td>
  <tr> 
    <td valign="top">kriteria</td>
    <td>
      <?php 
	  	// Menampilkan daftar kriteria
		$sql_kriteria = "SELECT kriteria.* FROM kriteria,relasi
						WHERE kriteria.kd_kriteria=relasi.kd_kriteria
						AND relasi.kd_tanaman='$data[kd_tanaman]'";
		$qry_kriteria = mysqli_query($koneksi,$sql_kriteria);
		$i	= 0;
		while ($hsl_kriteria=mysqli_fetch_array($qry_kriteria)) {
		$i++;
			echo "$i . $hsl_kriteria[nm_kriteria] <br>";
		}
		?>    </td>
  </tr>
<td>&nbsp;</td>
  <tr> 
    <td valign="top">Keterangan</td>
    <td ><div align="justify"><?php echo $data['info_tanaman']; ?></div></td>
  </tr>
<td>&nbsp;</td>
  <tr> 
    <td valign="top">Solusi</td>
    <td><div align="justify"><?php echo $data['detail']; ?></div></td>
  </tr>

</table>
</br>
</div>
</body>
</html>
