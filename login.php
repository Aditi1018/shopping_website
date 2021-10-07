<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="regis.css">
    </head>
<body>
    <div class="loginbox">
        <img src="login.png" alt="" class="pict">
        <h1 align="center">LOGIN HERE</h1>
        <form action="" method="post">
            <table align="center">
                <tr>
                    <td>Username</td>
                   <td><input type="text" name="unm" placeholder="Enter username" required="true"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="psd" id=""placeholder="Enter password"required="true"></td>
                </tr>
<tr>
<td colspan="2" align="center"> <input type="submit" value="LOGIN" name="sbtn"></td>
</tr>
<tr>
<td colspan="2" align="center"> <a href="#">Forgot Password?</a></td>
</tr>
<tr>
<td colspan="2" align="center"><a href="signin.php">Don't have an account?</a></td>
</tr>


<?php
extract($_REQUEST);
if(isset($sbtn)){
    $link= mysqli_connect("localhost","root","","user");
    $qry="select * from details where u_name='$unm' and u_pass='$psd'";
   $resultset= mysqli_query($link,$qry);
   $n= mysqli_num_rows($resultset);
   $r= mysqli_fetch_assoc($resultset);
   if($n){
       session_start();
       $_SESSION['name']= $r['u_name'];
       $_SESSION['id']= $r['u_id'];
       $_SESSION['login_time']= time();
       $_SESSION['cart']= array();
       
       mysqli_close($link);
       header("location:shop.php");
   }
   else
{
    echo "<font color='red'>**Invalid Username or Password. Try Again**</font>";
}
}
?>

</table>
        </form>
    </div>
    
</body>
</html>

