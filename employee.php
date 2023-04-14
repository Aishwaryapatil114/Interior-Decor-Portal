<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("interiordesign",$cn);
$sb=$_POST['sbm'];
if($sb=="Submit")
{
$sql="insert into employee values('$_POST[empid]','$_POST[empname]','$_POST[empaddress]','$_POST[contactnumber]','$_POST[empskill]','$_POST[emptype]','$_POST[empgender]','$_POST[empage]','$_POST[emprate]')";
mysql_query($sql,$cn);
echo "data stored";
}
else
if($sb=="Update")
{
$sql="update employee set employeename='$_POST[empname]', address='$_POST[empaddress]',contactno='$_POST[contactnumber]', skill='$_POST[empskill]', employee='$_POST[emptype]' , gender='$_POST[empgender]',age='$_POST[empage]', rate='$_POST[emprate]' where employeeid='$_POST[empid]'";
mysql_query($sql,$cn);
echo "data updated";
}
else
if($sb=="Delete")
{
$sql="delete from employee where employeeid='$_POST[empid]'";
mysql_query($sql,$cn);
echo "data deleted";
}
else
if($sb=="Display")
{
echo "<center><table border=1>";
echo "<caption>employee allocation form</caption>";
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
echo "</table></center>";
}
else
if($sb=="Search")
{
echo "<center><table border=1>";
echo "<caption>employee allocation form</caption>";
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
$sql="select * from employee where employeeid='$_POST[empid]'";
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
echo "</table></center>";
}
?>