<?php 
include "lib/inc.koneksidb.php";

$NOIP = $_SERVER['REMOTE_ADDR'];
$sql = "SELECT analisa_hasil.*, tanaman.* 
    FROM analisa_hasil,tanaman 
    WHERE tanaman.kd_tanaman=analisa_hasil.kd_tanaman
    AND analisa_hasil.noip='$NOIP'
    ORDER BY analisa_hasil.id_konsul DESC LIMIT 1";
$qry = mysqli_query($koneksi, $sql) or die ("Query Hasil salah".mysqli_error());
$data= mysqli_fetch_array($qry);
if ($data['kelamin']=="L") {
  $kelamin = "Pria";
}
else {
  $kelamin = "Wanita";
}
?>

<!doctype html>
<html lang="en">

  <head>
    <title>Sistem Pakar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

<style type="text/css">
  .site-section-cover {
  position: relative;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center; }
  .site-section-cover,
  .site-section-cover .container {
    position: relative;
    z-index: 2; }
  .site-section-cover,
  .site-section-cover .container > .row {
    height: calc(100vh - 196px);
    min-height: 177px; }
    @media (max-width: 991.98px) {
      .site-section-cover,
      .site-section-cover .container > .row {
        height: calc(70vh - 196px);
        min-height: 150px; } }
  .site-section-cover.overlay {
    position: relative; }
    .site-section-cover.overlay:before {
      position: absolute;
      content: "";
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.6);
      z-index: 1; }
  .site-section-cover.inner-page,
  .site-section-cover.inner-page .container > .row {
    height: auto;
    min-height: auto;
    padding: 2em 0; }
  .site-section-cover.img-bg-section {
    background-size: cover;
    background-repeat: no-repeat; }
  .site-section-cover h1 {
    font-size: 3rem;
    color: #fff;
    line-height: 1; }
    @media (max-width: 991.98px) {
      .site-section-cover h1 {
        font-size: 2rem; } }
  .site-section-cover p {
    font-size: 18px;
    color: #fff; }

</style>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.php"><img src="images/logo.png" width="45%"></a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="index.php" class="nav-link">Halaman Utama</a></li>
                  <li class="active"><a href="konsultasi.php" class="nav-link">Konsultasi</a></li>
                  <li><a href="tanaman.php" class="nav-link">Tanaman</a></li>
                  <li><a href="tentang.php" class="nav-link">Tentang</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('images/slide3.jpg'); height: 19%" style="height: : 19%">
      </div>
    </div>
  <div class="site-section bg-light" id="contact-section">
      <div class="container">
        
        <div class="row" style="margin-top: -9%">
<table class="table table-striped">
  <tr> 
    <td colspan="2"><h4>HASIL KEMUNGKINAN KESESUAIAN LAHAN TANAM</h4></td>
  </tr>
  <tr> 
    <th colspan="2" class="success fontc"><b>DATA PENGGUNA :</b></th>
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
  <tr> 
    <th class="success fontc" colspan="2"><b>HASIL ANALISA TERAKHIR :</b></th>
  </tr>
  <tr> 
    <td>Nilai CF</td>
    <td><?php echo number_format($data['nilai_cf'],3); ?></td>
  </tr>
  <tr> 
    <td>Tanaman</td>
    <td><?php echo $data['kd_tanaman']." | ".$data['nm_tanaman']; ?></td>
  </tr>
  <tr> 
    <td valign="top">kriteria</td>
    <td>
      <?php 
      // Menampilkan daftar kriteria
    $sql_kriteria = "SELECT kriteria.* FROM kriteria,relasi
            WHERE kriteria.kd_kriteria=relasi.kd_kriteria
            AND relasi.kd_tanaman='$data[kd_tanaman]'";
    $qry_kriteria = mysqli_query($koneksi, $sql_kriteria);
    $i  = 0;
    while ($hsl_kriteria=mysqli_fetch_array($qry_kriteria)) {
    $i++;
      echo "$i . $hsl_kriteria[nm_kriteria] <br>";
    }
    ?>    </td>
  </tr>
  <tr> 
    <td valign="top">Informasi</td>
    <td><?php echo $data['info_tanaman']; ?></td>
  </tr>
  <tr> 
    <td valign="top">Detail</td>
    <td><?php echo $data['detail']; ?></td>
  </tr>
</table>
<div align="right"><a class="btn btn-warning btn-sm raised" href="konsultasi.php">Konsultasi Ulang</a> <a class="btn btn-warning btn-sm raised" href="cetakAnalisaHasil.php">Cetak</a></div>
            </div>
          </div>
        </div>
      </div>

      </div>
    </div>


    
    

 
    <!--

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-6 text-center">
         
            
            <p class="mb-5">Selamat Datang di web Sistem Pakar Kesesuaian Lahan Pangan dan Holtikultura</p>
          </div>
        </div>
      </div>
    </div>



    -->

      <div class="container">
        <div class="text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script></a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

