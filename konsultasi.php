<?php 
include "lib/inc.koneksidb.php";

# Baca variabel Form (If Register Global ON)
$TxtNama    = isset($_POST['TxtNama']) ? $_POST['TxtNama'] : '';
$RbKelamin    = isset($_POST['RbKelamin']) ? $_POST['RbKelamin'] : '';
$TxtAlamat    = isset($_POST['TxtAlamat']) ? $_POST['TxtAlamat'] : '';
$TxtPekerjaan = isset($_POST['TxtPekerjaan']) ? $_POST['TxtPekerjaan'] : '';
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
      <div class="site-section-cover overlay" style="background-image: url('images/slide1.jpg'); ">
     <form action="simpandaftar.php" method="post" name="form1" target="_self">
  
        <div class="container">
          <div class="row align-items-center justify-content-center text-center" >
            <div class="col-md-4" >
              <h2 style="color: white">Silahkan masukkan data anda</h2>
             
          <input name="TxtNama" type="text" value="<?php echo $TxtNama; ?>" placeholder ="Masukkan nama" class="form-control w-100"><br>
           <input type="text" name="RbKelamin"  value="<?php echo $RbKelamin; ?>" id="" placeholder="Jenis Kelamin" class="form-control w-100"><br>
           <textarea name="TxtAlamat" value="<?php echo $TxtAlamat;?>" id="" placeholder="Alamat" class="form-control w-100"></textarea> <br>
          <input name="TxtPekerjaan" type="text" value="<?php echo $TxtPekerjaan; ?>" id="" placeholder="Pekerjaan" class="form-control w-100"><br>
           <input type="submit" class="btn btn-primary py-3 btn-block" value="Lanjut">
               
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

