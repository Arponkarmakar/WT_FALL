<?php
include("../control/adminprofilecontrol.php");

?>

</html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/mycss.css">

<div class="form-wrap">


    <title>Admin Profile </title>

</head>
<body>

    <h1>Welcome To Admin Profile</h1>

<tr><a href="../control/logout.php">
<button class="btn btn-primary btn-lg" > Log Out </button></a> </div>

<a href="../view/alladmindata.php">
<button class="btn btn-primary btn-lg"> Show All Profile </button></a></div>


<a href="../view/updateprofile.php">
<button class="btn btn-primary btn-lg" > Update Your Profile </button></a> </div>


<a href="../view/deleteprofile.php"> 
<button class="btn btn-primary btn-lg" > Delete Profile </button></a> </div>
</tr>

</body>
<br>
<input type="text" name="search" id="search" onkeyup="searchUser()">
<p id="print"></p>
<script src="../js/validation.js"></script>

</html>
