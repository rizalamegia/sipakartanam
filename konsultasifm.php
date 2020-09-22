
<?php 
include "lib/inc.koneksidb.php";
function DelTmpAnalisa($NOIP,$koneksi){
  $sql_del = "DELETE FROM tmp_analisa WHERE noip='$NOIP'";
  $kueri_del = mysqli_query($koneksi, $sql_del);
}

$NOIP = $_SERVER['REMOTE_ADDR'];

function pilihan($klp,$koneksi){     
  $no = 0;
  $kueri_konsul = "select * from kriteria where kel_kriteria = '$klp'";
  $sql = mysqli_query($koneksi,$kueri_konsul);
  while($isi = mysqli_fetch_array($sql)){
    $no++;
  if($no==1){
    echo"<input type='radio' name='$klp' value='$isi[kd_kriteria]' checked='checked'>&nbsp;$isi[ket]&nbsp;&nbsp;&nbsp;
  <br>";
  }else{
    echo"<input type='radio' name='$klp' value='$isi[kd_kriteria]' >&nbsp;$isi[ket]&nbsp;&nbsp;&nbsp;
  <br>";
  }
  }
}   

DelTmpAnalisa($NOIP,$koneksi);
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
    <form action="konsulcek.php" method="post" name="form1" target="_self">
  <table class="table table-striped table-hover" width="100%"><br>
    <tr>
      <th colspan="2" class="fontc"><b>JAWABLAH PERTANYAAN BERIKUT :</b></th> 
      </tr>
    <tr>
      <td width="1%">1.</td> 
      <td width="99%">Kadar Kejenuhan Basa?
      <br>Kejenuhan basa adalah kadar PH pada tanah, kejenuhan basa >35 berarti PH tanah cendrung asam, dan kejenuhan basa >50 berarti PH tanah cendrung Basa
        </td>
    </tr>
    <tr>
      <td>&nbsp;</td> 
      <td> 
        <?php
          pilihan("basa",$koneksi);
    ?>
      </td>
    </tr>
    
    <tr>
      <td>2.</td> 
      <td>Kedalaman Tanan?
      <br>Satuan kedalaman tanah adalah centi meter (CM)</td>
    </tr>
    <tr>
      <td>&nbsp;</td> 
      <td> 
        <?php
          pilihan("tanah",$koneksi);
    ?>    
      </td>
    </tr>
    
    <tr>
      <td>3.</td> 
      <td>Temperatur Suhu (0C)?
      <br>Temperatur suhu ditentukan berdasarkan rentan suhu disekitar lahan</td>
    </tr>
    <tr>
      <td>&nbsp;</td> 
      <td> 
        <?php
          pilihan("suhu",$koneksi);
    ?>    
      </td>
    </tr>
    
    <tr>
      <td>4.</td> 
      <td>Ketersediaan Air?</td>
    </tr>
    <tr>
      <td>&nbsp;</td> 
      <td> 
        <?php
          pilihan("air",$koneksi);
    ?>     </td>
    </tr>
    
    <tr>
      <td>5.</td> 
      <td>PH H2O?
      <br>Kadar PH air (H2O) ditentukan berdasarkan rentan kadar air yang mengaliri lahan</td>
    </tr>
    <tr>
      <td>&nbsp;</td> 
      <td> 
        <?php
          pilihan("ph",$koneksi);
    ?>     </td>
    </tr>
    
    <tr>
      <td>&nbsp;</td> 
      <td> <input class="btn btn-success raised" type="submit" name="Submit" value="PROSES"></td>
    </tr>
    
    
    
    
    
  </table>
</br>
</form>
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

