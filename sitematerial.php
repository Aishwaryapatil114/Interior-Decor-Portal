<?php

$cn=mysql_connect("localhost","root");
mysql_select_db("interiordesign",$cn);
$sb=$_POST['sbm'];
if($sb=="Submit")
{
$sql="insert into sitematerial values('$_POST[sitematerialnumber]','$_POST[sitedate]','$_POST[materialid]','$_POST[quantity]','$_POST[transp]')";
mysql_query($sql,$cn);
echo "data stored";
}
else
if($sb=="Update")
{
$sql="update sitematerial set smdate='$_POST[sitedate]',materialid='$_POST[materialid]',qty='$_POST[quantity]',transport='$_POST[transp]' where sitematerialid='$_POST[sitematerialnumber]'";
mysql_query($sql,$cn);
echo "data updated";
}
else
if($sb=="Delete")
{
$sql="delete from sitematerial where sitematerialid='$_POST[sitematerialnumber]'";
mysql_query($sql,$cn);
echo "data deleted";
}
else
if($sb=="Display")
{
echo "<center><table border=1>";
echo "<caption>siteMaterial form</caption>";
echo "<tr>";
echo "<th>sitematerialid</th>";
echo "<th>smdate</th>";
echo "<th>materialid</th>";
echo "<th>qty</th>";
echo "<th>transport</th>";
echo "</tr>";
$sql="select * from sitematerial";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "</tr>";
}
echo "</table></center>";
}
else
if($sb=="Search")
{
echo "<center><table border=1>";
echo "<caption>siteMaterial form</caption>";
echo "<tr>";
echo "<th>sitematerialid</th>";
echo "<th>smdate</th>";
echo "<th>materialid</th>";
echo "<th>qty</th>";
echo "<th>transport</th>";
echo "</tr>";
$sql="select * from sitematerial where sitematerialid='$_POST[sitematerialnumber]'";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";

echo "</tr>";
}
echo "</table></center>";
}

?>