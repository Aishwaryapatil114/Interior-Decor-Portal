<?php
$err1="";
$err2="";
$err3="";
$err4="";
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="Submit" || $_POST['sbm']=="Update")
{
if(empty($_POST['alocno']))
{
$err1="alocno must exist";
$fl=1;
}
if(empty($_POST['alocdate']))
{
$err2="alocdate  must exist";
$fl=1;
}
if(empty($_POST['siteid']))
{
$err3="siteid  must exist";
$fl=1;
}
if(empty($_POST['empid']))
{
$err4="empid must exist";
$fl=1;
}
}
}
?>

<html>
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
    
  
  <center>

  <section id="main1" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up" >

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <form method=post action="EmpAllocation1.php"  > 
      <table class="tab1">
        <center>
      <h2 class="h11">EmployeeAllocation Form</h>
        <!-- Allocation Number -->
        <tr>
          <!-- <div class="box"> -->
          <td><label for="Allocation Number"> Allocation Number</label></td>
          <td><input type="number" name="alocno" placeholder="4567234" onkeypress ="return valid1()"></td>
          <td><?php echo "<font color='red'>".$err1."</font>";?></td>
          <!-- </div> -->
        </tr>

        <!--Allocation Date-->
        <tr>
          <!-- <div class="box"> -->
          <td><label for="Allocation Date">Allocation Date</label> <br></td>
          <td><input type="date" name="alocdate"></td>
          <td><?php echo "<font color='red'>".$err2."</font>";?></td>
          <!-- </div> -->
        </tr>

        <!--Site ID-->
        <tr>
           <td><label name="Siteid">SiteId</label> <br></td>
        <td>
<select name=siteid style="width:180px;">
<option value=select>select</option>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("interiordesign",$cn);
$sql="select distinct siteid from site";
$result=mysql_query($sql,$cn);  
while($row=mysql_fetch_array($result))
{
echo"<option value='$row[0]'>$row[0]</option>";
}
?>
<td><?php echo "<font color='red'>".$err3."</font>";?></td>
</td></tr>
        
<!-- Employee Id -->
        <tr>
           <td><label name="EmployeeId">EmployeeId</label> <br></td>
        <td>
<select name="empid" style="width:180px;">
<option value=select>select</option>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("interiordesign",$cn);
$sql="select distinct employeeid from employee where status='N'";
$result=mysql_query($sql,$cn);  
while($row=mysql_fetch_array($result))
{
echo"<option value='$row[0]'>$row[0]</option>";
}
?>
</td>
<td><?php echo "<font color='red'>".$err4."</font>";?></td>
</tr>

</center>
      </table> 
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
$sql="insert into empalloc values('$_POST[alocno]','$_POST[alocdate]','$_POST[siteid]','$_POST[empid]')";
mysql_query($sql,$cn);
$sql1="update employee set status='Y' where employeeid='$_POST[empid]'";
mysql_query($sql1,$cn);
echo "<center><h2>data stored</h2></center>";
}
}
else
if($sb=="Update")
{
  if($fl==0)
{
$sql="update empalloc set allocationdate='$_POST[alocdate]',siteid='$_POST[siteid]',employeeid='$_POST[empid]' where allocationno='$_POST[alocno]'";
mysql_query($sql,$cn);
echo "<center><h2>data updated</h2></center>";
}
}
else
if($sb=="Delete")
{
$sql="delete from empalloc where allocationno='$_POST[alocno]'";
mysql_query($sql,$cn);
echo "<center><h2>data deleted</h2></center>";
}
else
if($sb=="Display")
{
  echo "<center><table class='tab1'>";
  echo "<br><h2><font color='black' size='30px'>EmployeeAllocation form</font></h2>";
echo "<tr>";
echo "<th>allocationno</th>";
echo "<th>allocationdate</th>";
echo "<th>siteid</th>";
echo "<th>employeeid</th>";
echo "</tr>";
$sql="select * from empalloc";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "</tr>";
}
echo "</table></center>";
}
else
if($sb=="Search")
{
  echo "<center><table class='tab1'>";
  echo "<br><h2><font color='black' size='30px'>EmployeeAllocation form</font></h2>";
echo "<tr>";
echo "<th>allocationno</th>";
echo "<th>allocationdate</th>";
echo "<th>siteid</th>";
echo "<th>employeeid</th>";
echo "</tr>";
$sql="select * from empalloc where allocationno='$_POST[alocno]'";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>"; 
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
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
