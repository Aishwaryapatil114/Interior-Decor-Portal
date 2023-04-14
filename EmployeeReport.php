<html>
<head>
    <script language=javascript>
        function toprint()
        {
            window.print();
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

<body id="main3">   <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Rm<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
     <!-- <img src="/Gp/assets/img/Facebook Post 940x788 px (1).png" alt=""> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="indexadmin.html">Home</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          
          <li class="dropdown"><a href="#"><span>Reports</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="EmployeeReport.php">Employee</a></li>
              <li><a href="PaymentReport.php">Payment</a></li>
              <li><a href="MaterialReport.php">Material</a></li>
              <li><a href="EmpAllocaReport.php">EmployeeAllocation</a></li>
            </ul>
          </li>
        

          <li class="dropdown"><a href="#"><span>Forms</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="Employee1.php">Employee</a></li>
              <li><a href="Payment1.php">Payment</a></li>
              <li><a href="Material1.php">Material</a></li>
              <li><a href="EmpAllocation1.php">EmployeeAllocation</a></li>
            </ul>
          </li>
        </ul>
      </li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/bcaproject/login1.php" class="get-started-btn scrollto">Logout</a>
   
  </header><!-- End Header -->

  
    <br>
    <br>
    <br>
        <form name=frm method=post action="EmployeeReport.php">
            <center>
            <h2><font color='White' size='40px'>Employee report</font></h2>
                <div class="buttons">
                <input name=sbm  type="submit" value="Display">
                <div>
            </center>
        </form>


<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("interiordesign",$cn);
$sb=$_POST['sbm'];
if($sb=="Display")
{
echo "<center><table class='tab2'>";
// echo "<br><h2><font color='White' size='40px'>Employee report</font></h2>";
echo "<tr>";
echo "<th>employeeid</th>";
echo "<th>employeename</th>";
echo "<th>address</th>";
echo "<th>contactno</th>";
echo "<th>skill</th>";
echo "<th>employee</th>";
echo "<th>gender</th>";
echo "<th>age</th>";
echo "<th>rate</th>";
echo "</tr>";
$sql="select * from employee";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "<td>$row[8]</td>";
echo "</tr>";
}
echo "</table>";
echo "<div class='buttons'>";
echo "<input type =button name=btn value=print onclick=toprint()>";
echo "</div>";
echo"</center>";
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
                19 b madhusundar Vaibhav nagar golibar 
                ,tekadi dhule <br>
                <br><br>
                <strong>Phone:</strong> 9422289223<br>
                <strong>Email:</strong> rmpatil669@gmail.com<br>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Office interior</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home interior</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hospital interior</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hotel interior</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>We opening new ideas for your place</p>
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