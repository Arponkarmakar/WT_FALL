<?php
include("../control/adminprofilecontrol.php");

?>

</html>
<head>
<link rel="stylesheet" type="text/css"  href="../css/adminprofile.css">

    <title>ADMIN PROFILE </title>

</head>
<body>

    <h1>WELCOME ADMIN PAGE</h1>

<tr><a href="../control/logout.php"><p> LOGOUT</p> </a>
<a href="../view/alladmindata.php"><p> SHOW ALL DATA </p></a>
<a href="../view/updateprofile.php"><p> UPDATE DATA </p> </a> 
<a href="../view/deleteprofile.php"> <p>DELETE DATA</p> </a>
</tr>

</body>
<input type="text" name="search" id="search" onkeyup="searchUser()">
<p id="print"></p>
<script src="../js/validation.js"></script>

</html>
