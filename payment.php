<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("interiordesign",$cn);
$sb=$_POST['sbm'];
if($sb=="Submit")
{
$sql="insert into payment values('$_POST[Paymentid]','$_POST[paymentdate]','$_POST[employeeid]','$_POST[amount]')";
mysql_query($sql,$cn);
echo "data stored";
}
else
if($sb=="Update")
{
$sql="update payment set paydate='$_POST[paymentdate]',empid='$_POST[employeeid]',amt='$_POST[amount]' where payid='$_POST[Paymentid]'";
mysql_query($sql,$cn);
echo "data updated";
}
else
if($sb=="Delete")
{
$sql="delete from payment where payid='$_POST[Paymentid]'";
mysql_query($sql,$cn);
echo "data deleted";
}
else
if($sb=="Display")
{
echo "<center><table border=1>";
echo "<caption>employee allocation form</caption>";
echo "<tr>";
echo "<th>payid</th>";
echo "<th>paydate</th>";
echo "<th>empid</th>";
echo "<th>amt</th>";
echo "</tr>";
$sql="select * from payment";
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
echo "<center><table border=1>";
echo "<caption>employee allocation form</caption>";
echo "<tr>";
echo "<th>payid</th>";
echo "<th>paydate</th>";
echo "<th>empid</th>";
echo "<th>amt</th>";
echo "</tr>";
$sql="select * from payment where payid='$_POST[Paymentid]'";
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
?>