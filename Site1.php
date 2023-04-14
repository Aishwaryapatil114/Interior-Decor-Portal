<?php
$err1="";
$err2="";
$err3="";
$err4="";
$err5="";
$err6="";
$err7="";
$err8="";
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="Submit" || $_POST['sbm']=="Update")
{
if(empty($_POST['Siteid']))
{
$err1="Siteid must exist";
$fl=1;
}
if(empty($_POST['Sitename']))
{
$err2="Sitename must exist";
$fl=1;
}
if(empty($_POST['Address']))
{
$err3="Address must exist";
$fl=1;
}
if(empty($_POST['City']))
{
$err4="City must exist";
$fl=1;
}
if(empty($_POST['PIN']))
{
$err5="PIN must exist";
$fl=1;
}
if(empty($_POST['Supervisor']))
{
$err6="Supervisor must exist";
$fl=1;
}
if(empty($_POST['Type']))
{
$err7="Type must exist";
$fl=1;
}
if(empty($_POST['Subtype']))
{
$err8="Subtype must exist";
$fl=1;
}
}
}
?><html>
<head>
    <script language=javascript>
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
</script>
</head>



<html lang="en">

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







<body style="background:white"> 

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Rm<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
     <!-- <img src="/Gp/assets/img/Facebook Post 940x788 px (1).png" alt=""> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="indexuser.html">Home</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          
          <li class="dropdown"><a href="#"><span>Reports</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="SiteReport.php">Site</a></li>
              <li><a href="SitematerialReport.php">Sitematerial</a></li>
            </ul>
          </li>
        

          <li class="dropdown"><a href="#"><span>Forms</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="site1.php">Site</a></li>
              <li><a href="sitematerial1.php">SiteMaterial</a></li>
            </ul>
          </li>
        </ul>
      </li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/bcaproject/login1.php" class="get-started-btn scrollto">Logout</a>
   
  </header><!-- End Header -->


<center>

<section id="main1" class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up" >

  <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
    <div class="col-xl-6 col-lg-8">
      <form method=post action="site1.php"  > 
  <table class="tab1">
    <center>
    <br>
    <br>

  <h2 class="h11">Site Form</h>

        <!-- Site Id -->
        <tr>
          
          <td><label for="Site ID"> Site ID</label></td>
          <td><input type="text"  name="Siteid" placeholder="4567234" onkeypress="return valid1()"></td>
          <td><?php echo "<font color='red'>".$err1."</font>";?></td>
        </tr>

        <!-- Site Name-->
        <tr>
          
          <td><label for="Site Name">Site Name</label> <br></td>
          <td><input type="text" name="Sitename" ></td>
          <td><?php echo "<font color='red'>".$err2."</font>";?></td>
         </tr>
        <!--Address-->
        <tr>
          
          <td> <label for="Address">Address</label></td>
          <td> <input type="text" name="Address"></td>
          <td><?php echo "<font color='red'>".$err3."</font>";?></td>
        </tr>

        <!-- city-->
        <tr>
          
          <td> <label for="City">City</label></td>
          <td><input type="text" name="City"></td>
          <td><?php echo "<font color='red'>".$err4."</font>";?></td>
        </tr>


        <!--Pin -->
        <tr>
          
          <td> <label for="PIN Code">PIN code</label></td>
          <td> <input type="text" name="PIN"></td>
          <td><?php echo "<font color='red'>".$err5."</font>";?></td>
        </tr>

        <!--Supervisor-->
        <tr>
          
          <td> <label for="supervisor">Supervisor</label></td>
          <td> <input type="text" name="Supervisor" ></td>
          <td><?php echo "<font color='red'>".$err6."</font>";?></td>
        </tr>

          <!--Type -->
        <tr>
          
          <td> <label for="Type">Type</label></td>
          <td> <input type="text" name="Type" ></td>
          <td><?php echo "<font color='red'>".$err7."</font>";?></td>
        </tr>
        <!-- Subtype-->
        <tr>
          
          <td> <label for="Subtype">Subtype</label></td>
          <td> <input type="number" name="Subtype" ></td>
          <td><?php echo "<font color='red'>".$err8."</font>";?></td>
        </tr>
        
      </table>

      <!-- Input submit -->

      
      <br>
      <div class="buttons">
        <td><input name=sbm  type="submit" value="Submit"></td>
        <td><input name=sbm  type="submit" value="Update"></td>
        <td><input name=sbm  type="submit" value="Delete"></td>
        <td><input name=sbm  type="submit" value="Display"></td>
        <td><input name=sbm  type="submit" value="Search"></td>
      </div>
  </form>
  </div>
</div>
</div>
</section>
</center>

<br>
<br>
<br>

<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("interiordesign",$cn);
$sb=$_POST['sbm'];
if($sb=="Submit")
{
if($fl==0)
{
$sql="insert into site values('$_POST[Siteid]','$_POST[Sitename]','$_POST[Address]','$_POST[City]','$_POST[PIN]','$_POST[Supervisor]','$_POST[Type]','$_POST[Subtype]')";
mysql_query($sql,$cn);
echo "<center><h2>data stored</h2></center>";
}
}
else
if($sb=="Update")
{
if($fl==0)
{
$sql="update site set sitename='$_POST[Sitename]', address='$_POST[Address]',city='$_POST[City]',  pin='$_POST[PIN]',  superior='$_POST[Supervisor]' , type='$_POST[Type]', subtype='$_POST[Subtype]' where siteid='$_POST[Siteid]'";
mysql_query($sql,$cn);
echo "<center><h2>data updated</h2></center>";
}
}
else
if($sb=="Delete")
{
$sql="delete from site where siteid='$_POST[Siteid]'";
mysql_query($sql,$cn);
echo "<center><h2>data deleted</h2></center>";
}
else
if($sb=="Display")
{
  echo "<center><table class='tab1'>";
  echo "<br><h2><font color='black' size='30px'>Site form</font></h2>";
echo "<tr>";
echo "<th>siteid</th>";
echo "<th>sitename</th>";
echo "<th>address</th>";
echo "<th>city</th>";
echo "<th>pin</th>";
echo "<th>superior</th>";
echo "<th>type</th>";
echo "<th>subtype</th>";
echo "</tr>";
$sql="select * from site";
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

echo "</tr>";
}
echo "</table></center>";
}
else
if($sb=="Search")
{
  echo "<center><table class='tab1'>";
  echo "<br><h2><font color='black' size='30px'>Site form</font></h2>";
echo "<tr>";
echo "<th>siteid</th>";
echo "<th>sitename</th>";
echo "<th>address</th>";
echo "<th>city</th>";
echo "<th>pin</th>";
echo "<th>superior</th>";
echo "<th>type</th>";
echo "<th>subtype</th>";
echo "</tr>";

$sql="select * from site where siteid='$_POST[Siteid]'";
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
echo "</tr>";
}
echo "</table></center>";
}
}
?>

<!-- ======= Footer ======= -->
<br>
<br>
<br>

  <!-- ======= Footer ======= -->
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