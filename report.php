<?php
$err1="";
$err2="";
$err3="";
$err4="";
$err5="";
$err6="";
$err7="";
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="Submit" || $_POST['sbm']=="Update")
{
if(empty($_POST['rn']))
{
$err1="report no. must exist";
$fl=1;
}
if(empty($_POST['rd']))
{
$err2="report date must exist";
$fl=1;
}
if(empty($_POST['pi']))
{
$err3="patient must exist";
$fl=1;
}
if(empty($_POST['di']))
{
$err4="doctorid must exist";
$fl=1;
}
if(empty($_POST['rt']))
{
$err5="report type must exist";
$fl=1;
}
if(empty($_POST['r']))
{
$err6="remark must exist";
$fl=1;
}
if(empty($_POST['rm']))
{
$err7="report image must exist";
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

        </script>
    </head>
    <body>
        <form name=frm method=post action=report.php>
    <center>  
    </br>
        <caption><h2>REPORT INFORMATION </h2></caption> </br>     
        <table>
        <tr>
                 <!--Treatement Number-->
                 <td><label for="Report Number">Report Number</label></td>
                 <?php
                 $cn=mysql_connect("localhost","root");
                 mysql_select_db("healthcard",$cn);
                 $query="select count(*) from report";
                 $result=mysql_query($query,$cn);   
                 $row=mysql_fetch_array($result);
                 $rn=$row[0]+1;
                 ?>
                 <td><input type="text" name=rn value=<?php echo $rn; ?>><?php echo $err1; ?> <br></td>
            </tr>

            <tr>
                 <!--Report date-->
                 <td><label for="Report Date">Report Date</label></td>
                 <td><input type="date" name=rd style="width: 170px"><?php echo $err2; ?></br> </td>
            </tr>

            
            <tr>
                <!--Patient ID-->
               
                <td><label for="Patient ID">Patient Id</label></td>
                <td> <select name=pi style="width: 170px"><?php echo $err3; ?>
                    <?php
                $cn=mysql_connect("localhost","root");
                mysql_select_db("healthcard",$cn);
                $query="select patient_id from patient";
                $result=mysql_query($query);
                while($row=mysql_fetch_array($result))
                {
                    echo "<option value=$row[0]>$row[0]</option> ";
                }
                ?>
   
                </select>
            </td>
                        </br>
                </tr>
                     
            <tr>
                 <!--Doctor ID-->
                 <td><label for="Doctor ID">Doctor Id</label></td>
                 <td><input type="text" name=di onkeypress="return valid1()"><?php echo $err4; ?></br></td>
            </tr>

            <tr>
                 <!--Report Type-->
                 <td><label for="Report Type">Report Type</label></td>
                 <td><input type="text" name=rt ><?php echo $err5; ?></br></td>
            </tr>

            <tr>
                 <!--Remark-->
                 <td><label for="Remark">Remark</label></td>
                 <td><input type="text" name=r ><?php echo $err6; ?></br></td>
            </tr>

            <tr>
                <!--Report Image-->
                <td><label for="Report Image">Report Image</label></td>
                <td><input type="text" name=rm ><?php echo $err7; ?></br></td>
           </tr>
                </table>
            </br>
        <input type=submit name=sbm value=Submit>
        <input type=submit name=sbm value=Update>  
        <input type=submit name=sbm value=Delete> 
        <input type=submit name=sbm value=Display>  
        <input type=submit name=sbm value=Search>
</center>
</form>
</body>
</html>

<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("healthcard",$cn);
$sb=$_POST['sbm'];
if($sb=="Submit")
{
if($fl==0)
{
$sql="insert into report values('$_POST[rn]','$_POST[rd]','$_POST[pi]','$_POST[di]','$_POST[rt]','$_POST[r]','$_POST[rm]')";
mysql_query($sql,$cn);
echo "data stored";
}
}
else
if($sb=="Update")
{
if($fl==0)
{
$sql="Update report set report_date='$_POST[rd]',patient_id='$_POST[pi]',doctor_id='$_POST[di]',report_type='$_POST[rt]',remark='$_POST[r]',report_number='$_POST[rn]' where report_image='$_POST[rm]'";
mysql_query($sql,$cn);
echo "data updated";
}
}
else
if($sb=="Delete")
{
$sql="Delete from report where report_number='$_POST[rn]'";
mysql_query($sql,$cn);
echo "data deleted";
}
else
if($sb=="Display")
{
echo "<center><table border=1>";
echo "<caption>REPORT INFORMATION</caption>";
echo "<tr>";
echo "<th>report_number</th>";
echo "<th>report_date</th>";
echo "<th>patient_id</th>";
echo "<th>doctor_id</th>";
echo "<th>report_type</th>";
echo "<th>remark</th>";
echo "<th>report_image</th>";
echo "</tr>";
$sql="select * from report";
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
echo "</tr>";
}
echo "</table></center>";
}
else
if($sb=="Search")
{
echo "<center><table border=1>";
echo "<caption>REPORT INFORMATION</caption>";
echo "<tr>";
echo "<th>report_number</th>";
echo "<th>report_date</th>";
echo "<th>patient_id</th>";
echo "<th>doctor_id</th>";
echo "<th>report_type</th>";
echo "<th>remark</th>";
echo "<th>report_image</th>";
echo "</tr>";
$sql="select * from report where report_number='$_POST[rn]'";
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
echo "</tr>";
}
echo "</table></center>";
}
}
?>