<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page</title>
    <link rel="stylesheet" type="text/css" href="sign.css">
    </head>
<body>
    <div class="loginbox">
        <img src="login.png" alt="" class="pict">
        <h1 align="center">SIGN IN HERE</h1>
        <form action="" method="post">
            <table align="center">
                <tr>
                    <td>Name</td>
                   <td><input type="text" name="unm" placeholder="Enter username" required="true"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="psd" id=""placeholder="Enter password"required="true"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="eml" placeholder="Enter email"id=""></td>
                </tr>
               
                <tr>
                    <td>Phone No</td>
                    <td><input type="tel" name="tel" id=""placeholder="##########" ></td>
                </tr>
<tr>
<td colspan="2" align="center"> <input type="submit" value="JOIN NOW" name="sbtn"></td>
</tr>
<!-- <tr><td colspan="2" align="center">OR SIGN IN USING</td></tr>
<tr>
<td><a href="https://accounts.google.com/signin/v2/identifier?service=mail&lp=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><img src="glogo.png" class="logo" alt="" width="100px"></a></td>
<td>     <a href="https://www.facebook.com/login/"><img src="fb.png"class="logo" alt="" width="50px"></a></td>
</tr> -->

            </table>
        </form>
    </div>
    <?php
extract($_REQUEST);
if(isset($sbtn)){
    $link= mysqli_connect("localhost","root","","user");
    $qry="insert into details (u_name, u_pass, u_mail , u_num) values('$unm','$psd','$eml','$tel')";
    $r= mysqli_query($link,$qry);
// $n= mysqli_num_rows($r);
mysqli_close($link);
header("location:login.php");
if($r)  
{
      echo "record inserted ....";
}
else
{
       echo " error";
}
}
?>  
</body>
</html>
