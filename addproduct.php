<?php
 session_start();
 include("includes/connect.php"); 
 while(empty($_SESSION['id']) or $_SESSION['id'] == ""):
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
  <script src="js/FormValidation.js"></script>

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
<style>
    .border{
        margin: 0px 25%;
    }
</style>
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
                <li><a href="orders.php">Orders</a></li>
                <li class="active"><a href="">Store</a></li>
                <li><a href="register.php">register new employee</a></li>
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
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong
              class="text-black">Orders</strong></div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="p-3 p-lg-5 border">
                <form action="" method="post" enctype="multipart/form-data">
            <!--ProductId	ProductName	image	ProductDescription	ProductPrice	ManufDate	ExpirationDate	PurchaseDate-->
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Product Name <span class="text-danger">*</span></label><label class="validations" id="Product-name"></label>
                  <input type="text" class="form-control" id="c_fname" name="pname" onFocusOut="emptyField(this, 'Product-name')">
                </div>
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Product Image<span class="text-danger">*</span></label><label class="validations" id="Image"></label>
                  <input type="file" class="form-control" accept="image/*" name="image" onFocusOut="emptyField(this, 'Image')">
                </div>
                <div class="col-md-12">
                  <label for="c_fname" class="text-black"> Product Description<span class="text-danger">*</span></label><label class="validations" id="Description"></label>
                  <input type="text" class="form-control" id="c_fname" name="desc" onFocusOut="emptyField(this, 'Description')">
                </div>
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Product Price<span class="text-danger">*</span></label><label class="validations" id="Price"></label>
                  <input type="text" class="form-control" id="c_fname" name="price" onFocusOut="emptyField(this, 'Price')">
                </div>
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Manufactured date<span class="text-danger">*</span></label><label class="validations" id="Manufacture-date"></label>
                  <input type="text" class="form-control" id="c_fname" name="mdate" onFocusOut="emptyField(this, 'Manufacture-date')">
                </div>
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Expired date<span class="text-danger">*</span></label><label class="validations" id="Expired-date"></label>
                  <input type="text" class="form-control" id="c_fname" name="edate" onFocusOut="emptyField(this, 'Expired-date')">
                </div>

                <div class="col-md-4" style="margin-top: 10px; ">
                    <input type="submit" name="save" class="btn btn-primary btn-lg btn-block" value="Save">
                </div>
                </form>

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
    echo date("Y-m-d H:i:s");
    if(isset($_POST['save'])):
        if(isset($_FILES['image'])){
            $errors= array();
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            @$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
            
            $extensions= array("jpeg","jpg","png");
            
            if(in_array($file_ext,$extensions)=== false){
                $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }
            
            /*if($file_size > 2097152){
                $errors[]='File size must be excately 2 MB';
            }*/
            
            if(empty($errors)==true){
                move_uploaded_file($file_tmp,"uploaded/".$file_name);
                $photo = "uploaded/".$file_name;
                //echo "Success ". $photo;
            }
        }

        $name = $_POST['pname'];
        $image = $_FILES['image'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $mdate = $_POST['mdate'];
        $edate = $_POST['edate'];
        //$pdate = $_POST['pdate'];
        if(empty($name) or empty($image) or empty($desc) or empty($price) or empty($mdate) or empty($edate))
        {
            echo "<script>alert('Please fill all fields')</script>";
        }
        else{
            $ins1 = mysqli_query($conn, "INSERT INTO products VALUES(null, '$name', '$photo', '$desc', '$price', '$mdate', '$edate', '".date("Y-m-d")."')");
            if(mysqli_affected_rows($conn))
            {
                echo "<script>alert('New product has been added!')</script>";
            }
        }
    endif;  
?>