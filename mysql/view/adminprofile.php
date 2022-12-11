<?php
include("../control/adminprofilecontrol.php");

?>

</html>
<head>

    <title>ADMIN PROFILE </title>

</head>
<body>

    <h1>WELCOME ADMIN PAGE</h1>

    <?php 
    echo $_SESSION["adminid"];
    ?>
<br>
<a href="../control/logout.php"> LOGOUT </a>
<a href="../view/alladmindata.php"> SHOW ALL DATA </a>
<a href="../view/updateprofile.php"> UPDATE DATA </a>



</body>
</html>
