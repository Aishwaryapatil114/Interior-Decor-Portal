<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("interiordesign",$cn);
$sb=$_POST['sbm'];
if($sb=="Submit")
{
$sql="insert into login values('$_POST[UserName]','$_POST[Password]')";
mysql_query($sql,$cn);
echo "data stored";
}
?>