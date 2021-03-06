<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ALAJAL ALNADJIHA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <?php
  if($_GET['lang']){
    setcookie("lang",$_GET['lang'],time()+(60*60*24));
    header("Location:home.php");
  }
  
  ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="home.php">ALAJAL ALNADJIHA</a></h1>


          <nav class="nav-menu d-none d-lg-block">

            <ul>
              <li><a href="term.php"><?php if($_COOKIE["lang"]=='en'){echo "Terms of service";}else{echo"الشروط والاحكام";}?></a>
              </li>
              <div>

              
                <select  class="form-control mx-4"  onchange="location = this.value;">
                  <option value="home.php?lang=en" <?php if($_COOKIE['lang']=='en'){ echo "Selected";} ?> >English</option>
                  <option value="home.php?lang=ar" <?php if($_COOKIE['lang']=='ar'){ echo "Selected";} ?> >عربي</option>
                </select>
                </div>
              

            </ul>

          </nav><!-- .nav-menu -->

        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner text-center" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/intro-carousel/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <?php if($_COOKIE["lang"]=='en'){?>
                <h2 class="animate__animated animate__fadeInDown">Rent an apartment</h2>
                <?php }else{?>
                <h2 class="animate__animated animate__fadeInDown">ايجار شقة</h2>
                <?php }?>
                <!-- <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                <!-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> -->
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <?php if($_COOKIE["lang"]=='en'){?>
                <h2 class="animate__animated animate__fadeInDown">Buy an apartment</h2>
                <?php }else{?>
                <h2 class="animate__animated animate__fadeInDown">شراء شقة</h2>
                <?php }?>
                <!-- <p class="animate__animated animate__fadeInUp">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p> -->
                <!-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> -->
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <?php if($_COOKIE["lang"]=='en'){?>
                <h2 class="animate__animated animate__fadeInDown">Buying a villa</h2>
                <?php }else{?>
                <h2 class="animate__animated animate__fadeInDown">شراء فيلا </h2>
                <?php }?>
                <!-- <p class="animate__animated animate__fadeInUp">Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p> -->
                <!-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> -->
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <?php if($_COOKIE["lang"]=='en'){?>
                <h2 class="animate__animated animate__fadeInDown">Buying Agricultura <br/>Residential land</h2>
                <?php }else{?>
                <h2 class="animate__animated animate__fadeInDown">شراء اراضي زراعية وسكنية</h2>
                <?php }?>
                <!-- <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                <!-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> -->
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <?php if($_COOKIE["lang"]=='en'){?>
                <h2 class="animate__animated animate__fadeInDown">Purchase of goods</h2>
                <?php }else{?>
                <h2 class="animate__animated animate__fadeInDown">شراء بضاعة</h2>
                <?php }?>
                <!-- <p class="animate__animated animate__fadeInUp">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p> -->
                <!-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> -->
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Intro Section -->
  <main id="main">

<!-- ======= Featured Services Section Section ======= -->
<section id="featured-services">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 box">
        <i class="ion-ios-bookmarks-outline"></i>
        <h4 class="title"><a href="">Contact Us</a></h4>
        <p>
              Ukraine-kiev <br>
              Street: Ernsta 16<br>
              <!-- <strong>Phone:</strong> +1 5589 55488 55<br> -->
              <strong>Email:</strong>ALAJAL_ALNADJIHA@hotmail.com<br>
        </p>
      </div>



    </div>
  </div>
</section><!-- End Featured Services Section -->
  </main>




  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

    

</body>

</html>