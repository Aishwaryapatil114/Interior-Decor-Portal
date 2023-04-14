<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("interiordesign",$cn);
$sb=$_POST['sbm'];
if($sb=="Submit")
{
$sql="insert into site values('$_POST[Siteid]','$_POST[Sitename]','$_POST[Address]','$_POST[City]','$_POST[PIN]','$_POST[Supervisor]','$_POST[Type]','$_POST[Subtype]')";
mysql_query($sql,$cn);
echo "data stored";
}
else
if($sb=="Update")
{
$sql="update site set sitename='$_POST[Sitename]', address='$_POST[Address]',city='$_POST[City]',  pin='$_POST[PIN]',  superior='$_POST[Supervisor]' , type='$_POST[Type]', subtype='$_POST[Subtype]' where siteid='$_POST[Siteid]'";
mysql_query($sql,$cn);
echo "data updated";
}
else
if($sb=="Delete")
{
$sql="delete from site where siteid='$_POST[Siteid]'";
mysql_query($sql,$cn);
echo "data deleted";
}
else
if($sb=="Display")
{
echo "<center><table border=1>";
echo "<caption>site allocation form</caption>";
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
echo "<center><table border=1>";
echo "<caption>site allocation form</caption>";
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
?>