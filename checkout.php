<!DOCTYPE html>
<?php
  session_start();
  include("includes/connect.php");
  while(empty($_SESSION['id'])):
    echo "<script type='text/javascript'>window.top.location='index2.php'</script>";
 endwhile;
?>
<html lang="en">

<head>
  <title>MusecaHealing<span style="color: orange;">Pharma</span></title>
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
              <a href="index.html" class="js-logo-clone">MusecaSystem<span style="color: orange;">Managment</span></a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block bg-success">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="shop.php">Store</a></li>
              </ul>
              <form action="logout.php" method="post"><button type="submit" name="logoutbtn" class="btn btn-danger">LOGOUT</button></form>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Checkout</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            
          </div>
        </div>
        <form action="#" method="post">
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Billing Details</h2>
            <div class="p-3 p-lg-5 border">
              <?php
                $sql1  = mysqli_query($conn, "SELECT * FROM system_user WHERE user_id = '".$_SESSION['id']."'");
                $data1 = mysqli_fetch_array($sql1);
              ?>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" readonly="" value="<?php echo $data1['Firstname']; ?>" name="c_fname">
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_lname" readonly="" value="<?php echo $data1['Lastname']; ?>" name="c_lname">
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_email_address" readonly="" value="<?php echo $data1["Email"]; ?>" name="c_email_address">
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" readonly="" name="c_phone" value="<?php echo $data1["Phone"]; ?>" placeholder="Phone Number">
                </div>
              </div>
    
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_companyname" class="text-black">Company Name </label>
                  <input type="text" class="form-control" id="c_companyname" name="c_companyname">
                </div>
              </div>
    
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address">
                </div>
              </div>
    
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)" name="add2">
              </div>
    
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                </div>
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_companyname" class="text-black">Transaction slip code </label>
                  <input type="text" class="form-control" id="c_companyname" name="trans">
                </div>
              </div>
    
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_companyname" class="text-black">Quantity </label>
                  <input type="text" class="form-control" id="c_companyname" name="c_quantiy">
                </div>
              </div>
              
    
            </div>
          </div>
          <div class="col-md-6">
    
              
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                <?php $str_arr = unserialize(urldecode($_GET['data'])); ?>
                <img src="<?php echo $str_arr['image']; ?>" style="width: 60%; height: 35vh;">
                <h2 class="text-black"><?php echo $str_arr['ProductName']; ?></h2>
                <p><?php echo $str_arr['ProductDescription']; ?></p>
                <p>Price: <?php echo $str_arr['ProductPrice']." Frw"; ?></p>
                <p>Purchase date: <?php echo $str_arr['PurchaseDate']; ?></p>
                <p>Manufacture date: <?php echo $str_arr['ManufDate']; ?></p>
                <p>Expire date: <?php echo $str_arr['ExpirationDate']; ?></p>
    
                  
    
                  <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-block" name='save'>Send Order</button>
                  </div>
    
                </div>
              </div>
            </div>
    
          </div>
        
        </form>
        </div>
      </div>
    </div>
    

    
            </a>
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
              <li><a href="#">ABOUT</a></li>
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

  if(isset($_POST['save']))
  {
    $name=$_POST['c_companyname'];
    $add1=$_POST['c_address'];
    $add2=$_POST['add2'];
    $state=$_POST['c_state_country'];
    $zip = $_POST['c_postal_zip'];
    $quantity = $_POST['c_quantiy'];
    $trans = $_POST['trans'];
    //echo $name.', '.$add1.', '.$add2.', '.$state.', '.$zip.', '.$quantinty.', '.$trans;
    if(empty($name) or empty($add1) or empty($state) or empty($zip) or empty($quantity) or empty($zip) or empty($trans)){
      echo "<script>alert('Please fill all fields')</script>";
    }
    else{
      $ins1 = mysqli_query($conn, "INSERT INTO orders VALUES(null, '$name', '$add1', '$add2', '$state', '$zip', '$quantity', '$trans', '".$_SESSION['id']."', '".$_GET['x']."')") or die('erroer');
      if(mysqli_affected_rows($conn) == 1)
      {
        echo "<script>window.top.location='thankyou.php';</script>";
      }
    }
  }

?>