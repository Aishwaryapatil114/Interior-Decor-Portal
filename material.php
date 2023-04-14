<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("interiordesign",$cn);
$sb=$_POST['sbm'];
if($sb=="Submit")
{
$sql="insert into material values('$_POST[Materialid]','$_POST[Message]','$_POST[Type]','$_POST[Size]','$_POST[Mtype]','$_POST[Make]','$_POST[Stock]','$_POST[UOM]')";
mysql_query($sql,$cn);
echo "data stored";
}
else
if($sb=="Update")
{
$sql="update material set description='$_POST[Message]', type='$_POST[Type]',size='$_POST[Size]', mtype='$_POST[Mtype]', make='$_POST[Make]' , stock='$_POST[Stock]',uom='$_POST[UOM]' where mid='$_POST[Materialid]'";
mysql_query($sql,$cn);
echo "data updated";
}
else
if($sb=="Delete")
{
$sql="delete from material where mid='$_POST[Materialid]'";
mysql_query($sql,$cn);
echo "data deleted";
}
else
if($sb=="Display")
{
echo "<center><table border=1>";
echo "<caption>material allocation form</caption>";
echo "<tr>";
echo "<th>mid</th>";
echo "<th>description</th>";
echo "<th>type</th>";
echo "<th>size</th>";
echo "<th>mtype</th>";
echo "<th>make</th>";
echo "<th>stock</th>";
echo "<th>uom</th>";
echo "</tr>";
$sql="select * from material";
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
echo "<caption>material allocation form</caption>";
echo "<tr>";
echo "<th>mid</th>";
echo "<th>description</th>";
echo "<th>type</th>";
echo "<th>size</th>";
echo "<th>mtype</th>";
echo "<th>make</th>";
echo "<th>stock</th>";
echo "<th>uom</th>";

echo "</tr>";
$sql="select * from material where mid='$_POST[Materialid]'";
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