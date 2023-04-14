<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form method=post action="login2.php"> 
    <center>
    <table class="tab1">
      <br>
      <br>
    <h2><font color='White' size='40px'>Login</font></h2>
        <tr>
          <br>
          <br>
            <!-- User name -->
            <td><label  id="space" for="User Name">User Name</label></td>
            <td><input type="text" name="Userid" placeholder="aish114"></td>
        </tr>
        <tr>
            <!-- Password -->
            <td><label   id="space" for="Password">Password</label></td>
            <td><input type="password" name="Password"></td>
        </tr>
    </table>
    <br>
    <br>
    <br>
        <div class="buttons">
        <td><input name=sbm  type="submit" value="Submit"></td>
        </div>
    </center>
    </form>

    <?php
     session_start();
     $cn=mysqli_connect("localhost","root","","artstudio");

     if(isset($_POST['sbm']))
     {
    $sql="select * from login where user_id='$_POST[Userid]' && pass='$_POST[Password]'";
    $result=mysqli_query($cn,$sql);
    $row=mysqli_fetch_array($result);
     
    if(is_array($row))
    {
      $user_id= $_POST['Userid'];
      $pass=$_POST['password'];
     header("location:http://localhost/bcaproject/login3.html");
    }
     else
     echo "Invalid username and or password";
}
?>
    
</body>
</html>