<?php
include("../control/logincontrol.php")
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/loginpage.css">
    <title>ADMIN LOGIN FORM</title>
</head>
<h1 id="heading">ADMIN LOGIN</h1>
<body>

  


<div class="main">
<div class="registartion">



<form action="" method="post" name="login" onsubmit="return  validlogin()">
<table>

<tr>
<td><p id="label">ADMIN ID:- </p></td>   
<td><input type="text" name="adminid" placeholder="enter admin unique id" id="adminidlog" onkeyup="checkadminidlog()"></td>
<td> <p  id="erroradminidlog"></p></td>

</tr>

<tr>
<td><p id="label">PASSWORD:- </p></td>  
<td><input type="password" name="password" placeholder="enter password" id="passwordlog" onkeyup="checkpasswordlog()"></td>
<td> <p  id="errorpasswordlog"></p></td>
</tr>
<tr>
<td><td><input type="submit" name="submit" ></td></td>
</tr>
<tr><td><td><a href="validation.php"> REGISTRATION  </a></td></td></tr>
</table>
</form>
<script src="../js/login.js"></script>
</div>
</div>
</body>
</html>
