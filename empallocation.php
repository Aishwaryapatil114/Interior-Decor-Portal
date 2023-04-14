<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("interiordesign",$cn);
$sb=$_POST['sbm'];
if($sb=="Submit")
{
$sql="insert into empalloc values('$_POST[alocno]','$_POST[alocdate]','$_POST[siteid]','$_POST[empid]')";
mysql_query($sql,$cn);
echo "data stored";
}
else
if($sb=="Update")
{
$sql="update empalloc set allocationdate='$_POST[alocdate]',siteid='$_POST[siteid]',employeeid='$_POST[empid]' where allocationno='$_POST[alocno]'";
mysql_query($sql,$cn);
echo "data updated";
}
else
if($sb=="Delete")
{
$sql="delete from empalloc where allocationno='$_POST[alocno]'";
mysql_query($sql,$cn);
echo "data deleted";
}
else
if($sb=="Display")
{
echo "<center><table border=1>";
echo "<caption>employee allocation form</caption>";
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
echo "<center><table border=1>";
echo "<caption>employee allocation form</caption>";
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
?>