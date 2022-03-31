<?php  
include 'koneksi.php'; 

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>aroma kopi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">
 
  <!-- Google Fonts -->
 <!--  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 -->
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

<body>

  <!-- ======= Top Bar ======= -->
  <!-- <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">cahyaniputri6293@gmail</a>
        <i class="icofont-phone"></i> +085767040685
      </div>
    </div>
  </div>
 -->
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo mr-auto"><a href="index.html">Aejuy</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.html" class="logo mr-auto"><img src="assets/img/logo_2.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#Tentang">Tentang</a></li>
          <!-- <li><a href="#services">Services</a></li> -->
          <li><a href="#Galeri">Galeri</a></li>
          <li class="drop-down"><a href="">Kopi</a>
            <ul>
             <li><a href="#Arabica">Arabica</a></li>
                  <li><a href="#Robusta">Robusta</a></li>
                  <li><a href="#Liberika">Liberika</a></li>
                  <li><a href="#Exselsa">Exselsa</a></li>
                  <li><a href="#Luwak">Luwak</a></li>
              </li>
            </ul>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>SERBA SERBI TENTANG KOPI</h1>
      <h2>Sesempurna apapun kopi yang kamu buat, kopi tetap kopi, punya sisi pahit yang tak mungkin kamu sembunyikan</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="Tentang" class="Tentang">
      <div class="container">
          <?php 
            include 'koneksi.php';
            $query=$conn->query("SELECT * FROM about ORDER BY tittle DESC");
              while ($row=$query->fetch_assoc()) {
          ?>
      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="assets/img/kopi1.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3><?php echo $row['tittle'] ?></h3></a>
            <p class="font-italic">
              <?php echo $row['about'] ?>
            </p>
          <?php } ?>  
      </div>
    </section><! End Cta Section
        <!-- ======= Portfolio Section ======= -->
    <section id="Galeri" class="Gale">
      <div class="container">
        <div class="section-title">
          <span>Galeri</span>
          <h2>Galeri</h2>
          <p>Macam macam kopi</p>
        </div>
        <?php 
            include 'koneksi.php';
            $query=$conn->query("SELECT * FROM tb_galery ORDER BY id_galery DESC");
              while ($row=$query->fetch_assoc()) {
          ?>
            <a href="galery.php?id=<?php echo $row['id_galery'] ?>"><img src="gambar/<?php echo $row['gambar'] ?>" style="width: 360px; padding:10px" alt=""></a>
          <?php } ?>

      </div>
    </section><!-- End Portfolio Section -->

<?php 
            include 'koneksi.php';
            $query=$conn->query("SELECT * FROM tb_kopi ORDER BY id_kopi DESC");
              while ($row=$query->fetch_assoc()) {
          ?>
    <!-- ======= Pricing Section ======= -->
    <section id="<?php echo $row['id'] ?>" class="<?php echo $row['class'] ?>">
      <div class="container">
        
        <div class="section-title">
          <a href="index.php?id=<?php echo $row['id_kopi'] ?>"><span><?php echo $row['nama_kopi'] ?></span></a>
          <a href="index.php?id=<?php echo $row['id_kopi'] ?>"><h2><?php echo $row['nama_kopi'] ?></h2></a>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-left">
            <div class="member">
              <img src="gambar/<?php echo $row['gambar'] ?>" class="img-fluid" style="height: 100%; width: 100%;" alt=""></a>
          </div>
        </div>
          <div class="col-lg-4 col-md-9" data-aos="fade-right"><p><?php echo $row['keterangan'] ?></p>
        </div>
      </div>
    </div>

      </div>
    </section><!-- End Pricing Section -->
<?php } ?>

    <!-- ======= Team Section ======= -->
   <!--  <section id="Robusta" class="Robusta">
      <div class="container">

        <div class="section-title">
          <span>Robusta</span>
          <h2>Robusta</h2>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-left">
            <div class="member">
              <img src="assets/img/Robusta.jpeg" class="img-fluid" style="height: 100%; width: 100%;" alt="">
          </div>
        </div>
           <div class="col-lg-4 col-md-6" data-aos="fade-right">Biji kopi Robusta digunakan untuk sebagian besar kopi instan, dan mengandung kafein sekitar dua kali lebih banyak dari biji kopi aarabica.

        </div>

      </div>
    </section> --><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <!-- <section id="Liberika" class="Liberika">
      <div class="container">

        <div class="section-title">
          <span>Liberica</span>
          <h2>Liberica</h2>
           <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-left">
            <div class="member">
              <img src="assets/img/liberica.jpg" class="img-fluid" style="height: 100%; width: 100%;" alt="">
          </div>
        </div>
           <div class="col-lg-4 col-md-6" data-aos="fade-right">
            Spesies tanaman kopi(coffe Liberica) yang menempati urutan ketiga di antara kopi yang diproduksi secara kemersial di belakang Arabica (coffea arabica termasuk kopi bourbon Heirloom varietal dan kopi Tyica) dan Robusta (Coffea cenephora var. Robusta), tetapi lebih dari Exselsa.

            Pohon kopi Liberica tumbuh hingga 18 meter dan memiliki daun besar dengan permukaan kasar serta biji besar(biji kopi) 
          </div>
         </div>
        </div> -->


     <!-- ======= Contact Section ======= -->
   <!--  <section id="Exselsa" class="Exselsa">
      <div class="container">

        <div class="section-title">
          <span>Exselsa</span>
          <h2>Exselsa</h2>
          <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-left">
            <div class="member">
              <img src="assets/img/Exselsaa.jpg" class="img-fluid" style="height: 100%; width: 100%;" alt="">
          </div>
        </div>
           <div class="col-lg-4 col-md-6" data-aos="fade-right">
            August Chevalier, seorang ahli botanis dan taksonomi dari Perancis, pada tahun 1905 menemukan tanaman kopi excelsa disekitar aliran Sungai Chari, dekat dengan Danau Chad di Afrika Barat. Tanaman kopi ini memiliki nama ilmiah Coffea excelsa dan terkadang disebut juga Coffea dewevrei.

            Excelsa seringkali tidak dianggap sebagai spesies tanaman kopi tersendiri, karena dikelompokkan sebagai varietas kopi liberika atau Coffea liberica var. dewevrei.
          </div>
         </div>
        </div>
        </div> -->
        <!-- ======= Contact Section ======= -->
<!--     <section id="Luwak" class="Luwak">
      <div class="container">

        <div class="section-title">
          <span>Luwak</span>
          <h2>Luwak</h2>
           <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-left">
            <div class="member">
              <img src="assets/img/bijiluwak.jpg" class="img-fluid" style="height: 100%; width: 100%;" alt="">
          </div>
        </div>
           <div class="col-lg-4 col-md-6" data-aos="fade-right">
            kopi inilah yang berasal dari indonesia, kopi luwak diolah dengan mengambil bagian yang tidak direncana oleh luwak dan keluar bersama kotorannya setelah memakan biji kopi(Arabika/Robusta)
          </div>
         </div>
        </div> -->
  </footer><!-- End Footer -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>