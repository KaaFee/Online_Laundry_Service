<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
include("../control/CustomerLogin_Control.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<h1>Login</h1><hr>
<center>
<form action="" method="POST">
    <br>
    <br>
    <br>
    <br>
    <br>
<table>
    <tr><td><b>Username</td> 
    <td><input type="text" name="uname" placeholder="Enter username or email"></td>
    <td> <?php
            echo $usernameError;
       ?>
       </td></tr>
       <tr><td><br><b>Password</td>
       <td><br><input type="password"name="password"></td>
       <td> <?php
            echo $userPass_Error;
       ?>
       </td></tr>
</table>
<br>
<input type="submit" name="submitlogin" value="Login">
<input type="Reset" name="Reset" value="Reset"><br>
<p><a href="customer_registration.php"><p>Don't Have an Account? Register now!</p></a>
</form>
</center>
</body>
</html>