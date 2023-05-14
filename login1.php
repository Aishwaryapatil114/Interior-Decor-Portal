<!DOCTYPE html>
<html lang="en">
<head>
    <script language=javascript>
        function toprint()
        {
            window.print();
        }

        function valid1()
            {
                var x;
                x=event.keyCode;
                if(x>=48 && x<=57)
                {
                event.keyCode=x;
                return true;
                }
                else 
                {
                event.keyCode=0;
                return false;
                }
            }

            function valid2()
            {
                var x;
                x=event.keyCode;
                if((x>=65 && x<=90) || (x>=97 && x<=122))
                {
                event.keyCode=x;
                return true;
                }
                else 
                {    
                event.keyCode=0;    
                return false;
                }
            }

            function valid3()
            {
                var x;
                x=event.keyCode;
                if((x>=65 && x<=90) || (x>=97 && x<=122) || (x=32))
                {
                event.keyCode=x;
                return true;
                }
                else 
                {    
                event.keyCode=0;    
                return false;
                }
               
          }
            function valid4()
            {
                var x;
                x=event.keyCode;
                if((x>=97 && x<=122) || (x>=48 && x<=57) || (x==95))
                {
                event.keyCode=x;
                return true;
                }
                else 
                {    
                event.keyCode=0;    
                return false;
                }
            }

    </script>
</head>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="app.js"></script>
  <title>Document</title>
  <!-- <link rel="stylesheet" href="style1.css"> -->

  
<!-- Favicons -->
<link href="assets/img/favicon-32x32.png" rel="icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
</head> 


<body id="main4"> 
<!-- ======= Header ======= -->
<header  class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index1.html">Rm<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

      <nav id="navbar"  class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/bcaproject/login1.php" class="get-started-btn scrollto">Logout</a>
   
  </header><!-- End Header -->
      
    <form method=post action="login1.php"> 
    <center>
    <table class="tab1">
      <br>
      <br>
    <h2><font color='White' size='40px'>Login</font></h2>
        <tr>
          <br>
          <br>
            <!-- User name -->
            <td><label  id="space" for="User Name">User Name</label></td>
            <td><input type="text" name="Userid" placeholder="aish114"></td>
        </tr>
        <tr>
            <!-- Password -->
            <td><label   id="space" for="Password">Password</label></td>
            <td><input type="password" name="Password"></td>
        </tr>
    </table>
    <br>
    <br>
    <br>
        <div class="buttons">
        <td><input name=sbm  type="submit" value="Submit"></td>
        </div>
    </center>
    </form>



<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("interiordesign",$cn);
if($_POST['Userid']=="admin" && $_POST['Password']=="admin")
header("location:http://localhost/bcaproject/indexadmin.html");
else
{
    $sql="select count(*) from employee where employeeid='$_POST[Userid]' and password='$_POST[Password]'";
    $result=mysql_query($sql,$cn);
    $row=mysql_fetch_array($result);
    if($row[0]>0)
    {
        session_start();
        $_SESSION['employeeid']=$_POST['Userid'];
        header("location:http://localhost/bcaproject/indexuser.html");

    }
    else
    echo "invalid username and or password";
    }
}
?>

<!-- ======= Footer ======= -->
<br>
<br>
<br>
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Rm<span>.</span></h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Interior Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Bathroom</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Floor</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Work Place</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">living room</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Rm</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href=>Aishwarya Patil</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>


