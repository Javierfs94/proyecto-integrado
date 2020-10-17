<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo TITULO ?></title>
  <meta content="Pagina web para fomentar el turismo de la Ciudad de Cordoba, Andalucia" name="descriptison">
  <meta content="cordoba, turismo, monumentos, restaurantes, ofertas, descuentos" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css" />

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <?php $this->load->view('admin/template/header', NULL); ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="hero-container">
      <a href="index.php" class="hero-logo" data-aos="zoom-in"><img src="<?php base_url() ?>assets/img/logo.png" alt="Imagen de logo"></a>
      <h1 data-aos="zoom-in">Turismo Córdoba</h1>
      <h2 data-aos="fade-up">Donde disfrutará de una visita mágica</h2>
      <a data-aos="fade-up" href="#about" class="btn-get-started scrollto">Comenzar</a>
    </div>
  </section><!-- End Hero -->


  <main id="main">
    {body}
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php $this->load->view('admin/template/footer', NULL); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>