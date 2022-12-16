<?php
include("../control/logincontrol.php")
?>

<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/myCss.css">

    <title>Admin Login Form</title>
</head>
<body>

<div class="main">
<div class="registartion">
<div id="container">
<div class="form-wrap">
<h1>Admin Login</h1>



<form action="" method="post" name="login" onsubmit="return  validlogin()">
<table>


<div class="form-group">    
<label for="adminid">ADMIN ID:- </label> 
<input type="text" name="adminid" placeholder="enter admin unique id" id="adminidlog" onkeyup="checkadminidlog()"></div>
<p  id="erroradminidlog"></p>



<div class="form-group">    
<label for="password">PASSWORD:- </label>
<input type="password" name="password" placeholder="enter password" id="passwordlog" onkeyup="checkpasswordlog()"></div>
<p  id="errorpasswordlog"></p>



<button type="submit" name="submit" >Login</button>


</table>
</form>


<footer>
    <p>Don't Have an Account? <a href="validation.php">Signup Here</a></p>
</footer>


<script src="../js/login.js"></script>
</div>
</div>
</body>
</html>
