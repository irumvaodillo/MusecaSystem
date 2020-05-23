<?php
 session_start();
 include("includes/connect.php"); 
 while(empty($_SESSION['id'])):
    echo "<script type='text/javascript'>window.top.location='index2.php'</script>";
 endwhile;
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
              <a href="index.php " class="js-logo-clone">MusecaSystem<span style="color: orange;">Managment</span></a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <!-- <li class="active"><a href="">Orders</a></li>
                <li><a href="addproduct.php">Store</a></li>
                <li><a href="register.php">register new employee</a></li> -->
              </ul>
              <!-- <form action="logout.php" method="post"><button type="submit" name="logoutbtn" class="btn btn-danger">LOGOUT</button></form> -->
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong
              class="text-black">Orders</strong></div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            
                <table class="order_table">
                    <tr><th>NIMERO</th><th><a href="amafoto.php">UBWOKO</a></th><th>UMUBARE W'AYAKOZWE</th><th>IGICIRO</th><th>TOTAL</th><th>COMMENT</th>
                    <?php
                        $sel1 = mysqli_query($conn, "SELECT * FROM amafoto");
                        while($data = mysqli_fetch_array($sel1)){
                        // $sel2 = mysqli_query($conn, "SELECT * FROM system_user WHERE user_id='".$data['customer']."'");
                            // $data2 = mysqli_fetch_array($sel2);

                            // $sel3 = mysqli_query($conn, "SELECT * FROM amafoto WHERE prod_id='".$data['product']."'");
                            // $data3 = mysqli_fetch_array($sel3);
                    ?>
                     <tr><td><?php echo $data['id']; ?></td><td><?php echo $data['ubwoko']; ?></td>
                      <td><?php echo $data['umubare_wayakozwe']; ?></td><td><?php echo $data['igiciro']; ?></td><td><?php echo $data['igiciro'] * $data['umubare_wayakozwe']; ?></td>
                 
                      <td><?php echo $data['comment']; ?>
                    <?php
                        }
                    ?>
                </table>           

          </div>
        </div>
      </div>
    </div>
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p>this is museca managment system where all activity done in MUSECA recorded here<br><br> Fell free to join us and WELCOME.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="#">HOME</a></li>
              <!-- <li><a href="#">ABOUT</a></li> -->
              <li><a href="#">CONTACT &amp; </a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address"> Gikonko,Gisagara,Amajyepfo,Rwanda</li>
                <li class="phone"><a href="tel://23923929210">+250 783 097 565</a></li>
                <li class="email">ipatienceodillo@gmail.com</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              Copyrightodillo &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | 
            </p>
          </div>

        </div>
      </div>
    </footer>
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