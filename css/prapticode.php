<html>
<head>
<title>Categories Form</title>
<link rel="icon" href="img/logo4.jpg" type="image/x-icon">
</head>
<body>
<a class="navbar-brand d-flex align-items-center text-white" href="/">
<br><h2 class="font-weight-bolder mb-0" style="font-size:20px;"><font color="white";>Library Management System</h2></a>
<div class="navbar" style="text-align:right";>
<a href="index.php"><font size=4; color="white";>Home </a> &nbsp &nbsp &nbsp 
<a href="services.php"><font color="white";>Services </a> &nbsp &nbsp &nbsp 
<a href="reports.php"><font color="white";>Reports </a> &nbsp &nbsp &nbsp 
<a href="about.php"><font color="white";>About </a> &nbsp &nbsp &nbsp
<a href="contact.php"><font color="white";>Contact </a> &nbsp &nbsp &nbsp 
<a href="Login.php"><font color="white";>Logout </a> &nbsp &nbsp &nbsp
</div>
<div class="slide-right">
<form action="categories.php" method="post" autocomplete="off">
<br><center><h1><b><u>Rajwade Library Dhule</u></b></h1>
<h2><b>Categories Form</b></h2>
<link rel="stylesheet" href= "css/formcss.css"/>
<link rel="stylesheet" href= "css/navbarcss.css"/>
<table style="font-size:18px;">
<tr>
<td>Category No.:</td><td><input type="text" name="catno" id="catno">
<span id="Message"></td></tr><tr>
<td>Category Name:</td> <td><input type="text" name="catname" id="catname">
<span id="Message1"></td></tr></table><br><br>
<button type="submit" name="submit" onClick="return validation()">Submit</button>
<button type="submit" name="update">Update</button>
<button type="submit" name="delete" onClick="return validation1()">Delete</button>
<button type="submit" name="display">Display</button>
<button type="submit" name="search" onClick="return validation1()">Search</button>
</form></center>
<script>
function validation()
   {
	   var a = document.getElementById("catno").value;
	   var b = document.getElementById("catname").value;
	   var correct = /^[0-9]+$/;
	   var correct1 = /^[A-Za-z ]+$/;
	   if(a == ""){
			document.getElementById("Message").innerHTML="*Required";
			return false;
		 }
		 if(a.match(correct))
			 true;
		 else{
			document.getElementById("Message").innerHTML="*Only Numbers Are Allowed";
            return false;			
		 }
	   if(b == ""){
			document.getElementById("Message1").innerHTML="*Required";
			return false;
		 }
		 if(b.match(correct1))
			 true;
		 else{
			document.getElementById("Message1").innerHTML="*Only Characters Are Allowed";
            return false; 
			}
   }
   
   function validation1()
   {
	   var a = document.getElementById("catno").value;
	    if(a == ""){
			document.getElementById("Message").innerHTML="*Required";
			return false;
		 }
   }
</script></div>
</body>
</html>

<html>
<head></head>
<body><br>
<form action="categories.php" method="post" autocomplete="off"><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<label style="color:black; font-size:18px">
Category Books: &nbsp <input type="text" name="catbook"> &nbsp
<button type="submit" name="search1">Search</button>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
Search category of book : &nbsp &nbsp <input type="text" name="bookcateg"> &nbsp
<button type="submit" name="search2">Search</button>
</form>
</body>
</html>

<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","library");
    $catno = $_POST['catno'];
	$catname = $_POST['catname'];
	
	$catbook = $_POST['catbook'];
	$bookcateg = $_POST['bookcateg'];
if(isset($_POST['submit'])){
    $query = "insert into categories(categoryno,categoryname)values('$catno','$catname')";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	if($run){   echo "<center>";
		echo "Data enterd Successfully";  echo "</center>";
	}
	else
	{
		echo "Data can not enter";
	}
}

if(isset($_POST['update'])){
    $query = "update categories set categoryname='$catname' where categoryno='$catno'";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	if($run){   echo "<center>";
		echo "Data updated Successfully";  echo "</center>";
	}
	else
	{
		echo "Data can not update data";
	}
}

if(isset($_POST['delete'])){
    $query = "delete from categories where categoryno='$catno'";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	if($run){   echo "<center>";
		echo "Data deleted Successfully";     echo "</center>";
	}
	else
	{
		echo "Can no delete data";
	}
}

if(isset($_POST['display'])){
		echo "<center><table border=1>";
        echo "<caption>Categories Form</caption><br>";
        echo "<tr>";
        echo "<th>Category No.</th>";
        echo "<th>Category Name</th>";
        echo "</tr>";
    $query = "select * from categories";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	while($row=mysqli_fetch_array($run))
		{
	      echo "<tr>";
		  echo "<td>$row[0]</td>";
		  echo "<td>$row[1]</td>";
		  echo "</tr>";
		}
	echo "</table></center>";
	}

if(isset($_POST['search'])){
		echo "<center><table border=1>";
        echo "<caption>Categories Form</caption><br>";
        echo "<tr>";
        echo "<th>Category No.</th>";
        echo "<th>Category Name</th>";
        echo "</tr>";
    $query = "select * from categories where categoryno='$catno'";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	while($row=mysqli_fetch_array($run))
		{
	      echo "<tr>";
		  echo "<td>$row[0]</td>";
		  echo "<td>$row[1]</td>";
		  echo "</tr>";
		}
	echo "</table></center>";
	}

if(isset($_POST['search1'])){
echo"<center>"; echo "<h3>Book Category = $catbook</h3>";  echo"</center>";
		echo "<center><table border=1>";
        echo "<tr>";
        echo "<th>Book Name</th>";
        echo "</tr>";
    $query = "select bookname from books where bookcat='$catbook'";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	while($row=mysqli_fetch_array($run))
		{
	      echo "<tr>";
		  echo "<td>$row[0]</td>";
		  echo "</tr>";
		}
	echo "</table></center>";
	}
	
if(isset($_POST['search2'])){
	  echo"<center>"; echo "<h3>Book Name = $bookcateg</h3>";  echo"</center>";
		echo "<center><table border=1>";
        echo "<tr>";
        echo "<th>Book Category</th>";
        echo "</tr>";
    $query = "select bookcat from books where bookname='$bookcateg'";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	while($row=mysqli_fetch_array($run))
		{
	      echo "<tr>";
		  echo "<td>$row[0]</td>";
		  echo "</tr>";
		}
	echo "</table></center>";
	}
?>

<br><br><center><div class="footer">
<font color="black";><p>&copy; <b>Rajwade Sanshodhan Mandal Library</b><br>Designed by <b>Prapti Shukla</b></p>
</div></center>
