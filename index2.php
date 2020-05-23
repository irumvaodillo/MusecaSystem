<?php
session_start();
 include("includes/connect.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Musecasystem<span style="color: orange;">Managment</span></title>
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
              <a href="index.php " class="js-logo-clone">Musecasystem<span style="color: orange;">Managment</span></a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
              <li class="active"><a href="index.php">Home</a></li>
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

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong
              class="text-black">Login</strong></div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            

        <div class="modal-header">
          <h4 class="">Login</h4>
        </div>
        <div class="modal-body">

          <div class="login-box-body">
            <p class="" style="float: left;">Login to start your session</p>
            <div class="form-group col-md-4">
              <form action="#" method="post" id="loginForm">
                <div class="form-group has-feedback">
                  <input class="form-control" placeholder="Username" name="uname" id="loginid" type="text" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input class="form-control" placeholder="Password" name="pass" id="loginpsw" type="password" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                  <div class="col-xs-12" style="margin-left: 20px;">
                    <input type="submit" name="login" class="btn btn-success" value="Login">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

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
<?php
  if(isset($_POST['login'])){
    //echo "tyyyuu";
    $a = mysqli_real_escape_string($conn,$_POST['uname']);
    $b = mysqli_real_escape_string($conn,$_POST['pass']);
    $sql1 = mysqli_query($conn, "SELECT * FROM system_user WHERE User_name = '$a' and Password = '$b'") or die('login fail');
    //$exe = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    // var_dump($exe);
    // die();
    $row = mysqli_fetch_array($sql1);
    if(mysqli_affected_rows($conn) == 1){      
      $_SESSION['id'] = $row['user_id'];
      $_SESSION['cart'] = [];
      if($row['type'] == "employee"):
        echo "<script type='text/javascript'>window.top.location='shop.php'</script>";
      elseif($row['type'] == "admin"):
        echo "<script type='text/javascript'>window.top.location='orders.php'</script>";
      else:
        echo "<script type='text/javascript'>window.top.location='studio.php'</script>";
      endif;
    }
    else{
      echo "<script>alert('Invalid credintials')</script>";
    }
  }
?>



