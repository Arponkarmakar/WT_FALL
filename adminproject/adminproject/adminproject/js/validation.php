<?php

include("../control/process.php");


?>



<html>
<head>
  <link rel="stylesheet" type="text/css"  href="../css/mycss.css">

    <title>ADMIN REGISTRATION FORM</title>
</head>
<h1 id="heading">FILL UP REGISTRATION FORM</h1>
<body>

<div class="main">
<div class="registartion">




<form method="post" name="validation" enctype="multipart/form-data" onsubmit="return valid()" >
<table>

<tr>
<td><lable for="name"> NAME:- </lable></td>  
<td><input type="text" name="name" placeholder="enter name"  id="name"  onekeyup="checkname()"></td>
<td><?php echo $nameError;?> <p id="errorn"></p></td>
</tr>

<tr>
<td><lable for="fathername">FATHER NAME:- </lable></td>   
<td><input type="text" name="fathername" placeholder="enter name"  id="fname"  onekeyup="checkfname()"></td>
<td><?php echo $fnameError;?><p id="errorfn"></p></td>
</tr>

<tr>
<td><lable for="mothername">MOTHER NAME:- </lable></td>   
<td><input type="text" name="mothername" placeholder="enter name"  id="mname"  onekeyup="checkmname()"></td>
<td><?php echo $mnameError;?><p id="errormn"></p></td>
</tr>


<tr>
<td><lable for="Gender">GENDER:- </lable></td>   
<td><input type="radio" value="male" name="gender"  >MALE
<input type="radio" value="female" name="gender" >FEMALE</td>
<td><?php echo $genderError;?></td>
</tr>

<tr>
<td><lable for="education">EDUCATION:- </lable></td> 
<td>  
  SSC <input type="text" name="ssc" placeholder="enter cgpa"><?php echo $sscError;?> </br> 
  HSC <input type="text" name="hsc" placeholder="enter cgpa"><?php echo $hscError;?> </br> 
  BSC <input type="text" name="bsc" placeholder="enter cgpa"><?php echo $bscError;?> </br>  
  MSC <input type="text" name="msc" placeholder="enter cgpa"><?php echo $mscError;?></br>   
  <?php echo $educationError; ?>

</td>
</tr>




    

</tr>

<tr>
<td><lable for="address">ADDRESS:- </lable></td>   
<td><textarea  name="address"  rows="5" cols="30" placeholder="enter address"  id="address"  onekeyup="checkaddress()"></textarea></td>
<td><?php echo $addressError;?><p id="errora"></p></td>
</tr> 

<tr>
<td><lable for="nid"> NID NUMBER:- </lable></td>   
<td><input type="text" name="nid"  placeholder="enter number" id="nid" onkeyup="checknid()"></td>
<td><?php echo $nidError;?> <p id="errornid"></p></td>
</tr>


<tr>
<td><lable for="passport">PASSPORT:- </lable></td>   
<td><input type="text" name="passport" placeholder="enter passport number"id="passport"  id="name"  onekeyup="checkpassport()"></td>
<td><?php echo $passportError;?><p id="errorpassport"></p></td>
</tr>

<tr>
<td><lable for="mobilenumber">MOBILE NUMBER:- </lable></td>   
<td><input type="text" name="mobilenumber" placeholder="enter number" id="mobile"  id="name"  onekeyup="checkmobile()"></td>
<td><?php echo $mobileError;?><p id="errornm"></p></td>
</tr>


<tr>
<td><lable for="email">EMAIL:- </lable></td>   
<td><input type="text" name="email" placeholder="enter email" id="email" onekeyup=" checkemail()"></td>
<td><?php echo $emailError;?><p id="erroremail"></p></td>
</tr>

<tr>
<td><lable for="github">GITHUB:- </lable></td>   
<td><input type="text" name="github" placeholder="enter github account" id="github" onekeyup=" checkgit()"></td>
<td><?php echo $githubError;?><p id="errorgithub"></p></td>
</tr>

<tr>
<td><lable for="linkedin">LINKEDIN:- </lable></td>   
<td><input type="text" name="linkedin" placeholder="enter linkedin account" id="linkedin" onekeyup=" checklink()"></td>
<td><?php echo $linkdinError;?><p id="errorlink"></p></td>
</tr>

<tr>
<td><lable for="outlook">OUTLOOK:- </lable></td>   
<td><input type="text" name="outlook" placeholder="enter outlook account" id="outlook" onekeyup=" checkoutlook()"></td>
<td><?php echo $outlookError;?><p id="errorout"></p></td>
</tr>

<tr>
<td><lable for="adminid">ADMIN ID:- </lable></td>   
<td><input type="text" name="adminid" placeholder="enter admin unique id" id="adminid" onekeyup=" checkadminid()"></td>
<td><?php echo $adminidError;?><p id="erroradmin"></p></td>
</tr>

<tr>
<td><lable for="password">PASSWORD:- </lable></td>   
<td><input type="password" name="password" placeholder="enter password" id="password" onekeyup=" checkpassword()"></td>
<td><?php echo $passwordError;?><p id="errorpass"></p></td>
</tr>






<tr>
<td><td><input type="submit" name="enter" value="SUBMIT"></td></td>
</tr>
</form>

<tr><td><td><a href="login.php"> LOGIN </a></td></td></tr>
</table>



</div >
</div >
<script src="../js/validation.js"></script>
</body>
</html>