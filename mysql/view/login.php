<?php
include("../control/logincontrol.php")
?>

<html>
<head>
<link rel="stylesheet" type="text/css" herf="../css/login.css">
    <title>ADMIN LOGIN FORM</title>
</head>

<body>

  

<h1>ADMIN LOGIN</h1>

<form action="" method="post" name="login" >
<table>

<tr>
<td><p id="label">ADMIN ID:- </p></td>   
<td><input type="text" name="adminid" placeholder="enter admin unique id"></td>

</tr>

<tr>
<td><p id="label">PASSWORD:- </p></td>  
<td><input type="password" name="password" placeholder="enter password"></td>

</tr>
<tr>
<td><td><input type="submit" name="submit" ></td></td>
</tr>
<tr><td><td><a href="validation.php"> REGISTRATION  </a></td></td></tr>
</table>
</form>
</body>
</html>
