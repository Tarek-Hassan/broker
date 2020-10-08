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
    header("Location:term.php");
  }
  ?>
 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="home.php">ALAJAL ALNADJIHA</a></h1>


          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="home.php"><?php if($_COOKIE["lang"]=='en'){echo "Home";}else{echo"الصفحة الرئيسيه";}?></a></li>

              <li>
                <select  class="mx-2" data-width="fit" onchange="location = this.value;">
                  <option></option>
                  <option value="home.php?lang=en">English</option>
                  <option value="home.php?lang=ar">عربي</option>
                  
                </select>
              </li>
            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php if($_COOKIE["lang"]=='en'){echo "Terms of service";}else{echo"الشروط والاحكام";}?></h2>
          <ol>
            <li><a href="home.php"><?php if($_COOKIE["lang"]=='en'){echo "Home";}else{echo"الصفحة الرئيسيه";}?></a></li>
            <li><?php if($_COOKIE["lang"]=='en'){echo "Terms of service";}else{echo"الشروط والاحكام";}?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page mt-4">
      <div class="container text-center">
        <form action="home.php">
        <?php if($_COOKIE["lang"]=='en'){?>
        <p>
          The site is not responsible for the source of the money
        </p>
        <p>
          A deposit paid is not refunded
        </p>
        <?php }else{?>
        <p>
          الموقع غير مسؤل عن مصدر الاموال
        </p>
        <p>
          المبلغ المدفوع لا يرد
        </p>
        <?php }?>
        
        <?php if($_COOKIE["lang"]=='en'){echo "I Agree to Terms of service";}else{echo"مواقف علي الشروط والاحكام";}?> <input type="checkbox" required /><br/>

          <button class="btn btn-success" ><?php if($_COOKIE["lang"]=='en'){echo "Agree";}else{echo"موافق";}?></button>
        </form>
      </div>
    </section>

  </main><!-- End #main -->



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>