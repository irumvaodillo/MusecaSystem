<?php
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
  <script src="js/FormValidation.js"></script>


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
              <li><a href="index.php">Home</a></li>
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
              class="text-black">Sign Up</strong></div>
        </div>
      </div>
    </div>



 <form action="#" method="post" onSubmit="return validateForm()">
 	
      <p style="font-size: 20px;">if you selected as worker in MUSECA COMPANY FILL THIS FORM TO BE REGISTERED IN SYSTEM</p>
    
              <div class="p-3 p-lg-5 border">
                

                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label><label class="validations" id="First-name"></label>
                    <input type="text" class="form-control" id="c_fname" name="fname" onFocusOut="emptyField(this, 'First-name')">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label><label class="validations" id="Last-name"></label>
                    <input type="text" class="form-control" id="c_lname" name="lname" onFocusOut="emptyField(this, 'Last-name')">
                  </div>
                
                
                  <div class="col-md-6">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label><label class="validations" id="E-mail"></label>
                    <input type="email" class="form-control" id="c_email" name="email" placeholder="Email" onFocusOut="emptyField(this, 'E-mail')">
                  </div>

                  <div class="col-md-6">
                    <label for="c_email" class="text-black">Phone <span class="text-danger">*</span></label><label class="validations" id="Phone"></label>
                    <input type="text" class="form-control" id="c_email" name="phone" placeholder="Phone" onFocusOut="emptyField(this, 'Phone')">
                  </div>
                 
                  <div class="col-md-6">
                    <label for="c_email" class="text-black">Password<span class="text-danger">*</span></label><label class="validations" id="Password"></label>
                    <input type="password" class="form-control" id="c_pass" name="pass" placeholder="Password" onFocusOut="emptyField(this, 'Password')">
                  </div>

                  <div class="col-md-6">
                    <label for="c_email" class="text-black">Confirm Password<span class="text-danger">*</span></label><label class="validations" id="Confirmation"></label>
                    <input type="password" class="form-control" id="c_email" name="cpass" placeholder="Password" onFocusOut="emptyField(this, 'Confirmation'); confirm(this, 'c_pass', 'Confirmation');">
                  </div>

                   
                  <div class="col-md-6">
                    <label for="c_email" class="text-black">Username<span class="text-danger">*</span></label><label class="validations" id="User-name"></label>
                    <input type="text" class="form-control" id="c_email" name="uname" placeholder="Enter your username" onFocusOut="emptyField(this, 'User-name')">
                  </div><br>
                  <div class="col-md-4">
                    <input type="submit" name="save" class="btn btn-primary btn-lg btn-block" value="Register">
                  </div>
                </div>
              </div>
               </div>
              </form>
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
if(isset($_POST['save'])){
 $a = mysqli_real_escape_string($conn,$_POST['fname']);
 $b = mysqli_real_escape_string($conn,$_POST['lname']);
 $c = mysqli_real_escape_string($conn,$_POST['email']);
 $d = mysqli_real_escape_string($conn,$_POST['pass']);
 $p = mysqli_real_escape_string($conn,$_POST['phone']);
 $e = mysqli_real_escape_string($conn,$_POST['uname']);
 $confirm = mysqli_real_escape_string($conn,$_POST['cpass']);
if((!empty($a) and !empty($b) and !empty($c) and !empty($e) and !empty($d) and !empty($p)) and ($d == $confirm)):

  $count = mysqli_num_rows(mysqli_query($conn, "SELECT user_id FROM system_user")) +1;
  // echo "<script>alert('".$a."')</script>";
  $sql = mysqli_query($conn,"INSERT INTO system_user VALUES ('$count','$a','$b','$c','$p','$d','$e', 'employee')") or die('error please');
  if(mysqli_affected_rows($conn) == 1){
    echo "<script type='text/javascript'>alert('Registration successfull!!!');window.top.location='shop.php'</script>";
    //$user = mysqli_fetch_array($sql));
    $_SESSION["id"] = $count;
  }
  else{
  echo "<script>alert('it does not inserted try again')</script>";
  }
else:
  echo "<script>alert('Registration fail, try again')</script>";
endif;
}
?>