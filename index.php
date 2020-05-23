<?php
// session_start();
// if(!$_SESSION['customers']){
//   echo "<script type='text/javascript'>window.top.location='index.php'</script>";
// }
 include("includes/connect.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>MusecaSystem<span style="color: orange;">Managment</span></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">
    <div class="site-navbar py-2 bg-success">
    <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index2.php " class="js-logo-clone">MusecaSystem<span style="color: orange;">Managment</span></a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="shop.php">Store</a></li>
                <!-- <li><a href="about.php">About</a></li> -->
                <li><a href="contact.php">Contact</a></li>
                  <!-- <li><a href="Register.php">Register</a></li>this links must be in session of admin -->
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover" style="background-image: url('images/123.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">
              <h2 class="sub-title" style="color: Green">Good Managment always better profit</h2>
              <h1 style="color: Green">Welcome To MusecaSystem Managment</h1>
              <p style="color: Green">this system is well constructed no cheat all data must be recorded correctly !
                <a href="shop.php" class="btn btn-primary px-5 py-3">Continue</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- <div class="site-section" style="background-image: url(images/hBZWPi.png); background-attachment: fixed;">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase" style="color: orange">New Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">

              <div class="text-center item mb-4" style="color: orange">
                <a href="shop-single.php"> <img src="images/product_03.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.php" style="color: orange">Umcka Cold Care</a></h3>
                <p class="price" style="color: orange">1200.00 Rwf</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single.php"> <img src="images/product_01.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.php" style="color: orange">Umcka Cold Care</a></h3>
                <p class="price" style="color: orange">11200.00 Rwf</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single.php"> <img src="images/product_02.png" alt="Image"></a>
                 <h3 class="text-dark"><a href="shop-single.php" style="color: orange">Umcka Cold Care</a></h3>
                <p class="price" style="color: orange">12500.00 Rwf</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single.php"> <img src="images/product_04.png" alt="Image"></a>
                 <h3 class="text-dark"><a href="shop-single.php" style="color: orange">Umcka Cold Care</a></h3>
                <p class="price" style="color: orange">14000.00 Rwf</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div> -->

    <div class="site-section" style="background-image: url(images/fabb.jpg); background-attachment: fixed;">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase" style="color: orange; font-size: 40px">Global Testimonials</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 no-direction owl-carousel">
        
              <div class="testimony">
                <blockquote>
                  <img src="images/doctorodd.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <b><p style="color: orange;font-size: 30px;">&ldquo;bar managment and depot,lets fings be better than what we think&rdquo;</p></b>
                </blockquote>

                <p style="color: green;">&mdash; bar chessers</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <b><p style="color: orange;font-size: 30px;">&ldquo;quick link to Museca : irembo bank of kigali and other sevices&rdquo;</p></b>
                </blockquote>
              
                <p style="color: green;">&mdash; Nyandwi jean</p>
              </div>
        <!-- IF H= TO FIRST HEADER AND REPLAY TO OR GO TO LINE NUMBER FIVE -->
              <!-- <div class="testimony">
                <blockquote>
                  <img src="images/codydoc.jpg" alt="Image"  class="img-fluid w-25 mb-4 rounded-circle">
                  <b><p style="color: orange;font-size: 30px;">&ldquo;I wonder where were you.&rdquo;</p></b>
                </blockquote>/*this is the first numbewr i have created */
              
                <p style="color: green;">&mdash; Beaty mukamana</p>
              </div> -->
        
              <div class="testimony">
                <blockquote>
                  <img src="images/rene.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <b><p style="color: orange;font-size: 30px;">&ldquo;disk jockey all services related with sonorization photo shoot and ather device .&rdquo;</p></b>
                </blockquote>
              
                <p style="color: green;">&mdash; Bazou dj</p>
              </div>
        
            </div>
          </div>
        </div>
      </div>
    </div>

    
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>