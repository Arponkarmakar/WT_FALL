<?php

include("../control/process.php");


?>



<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/myCss.css">

    <title>Admin Registration Form</title>
</head>
<body>

<div class="main">
<div class="registartion">
<div id="container">
<div class="form-wrap">
<h1>Admin Registration</h1>




<form method="post" name="validation" enctype="multipart/form-data" onsubmit="return valid()" >
<table>

<tr>
<td>
<div class="form-group">  
<lable for="name"> NAME:- </lable>
<input type="text" name="name" placeholder="enter name"  id="name"  onekeyup="checkname()"></div>
<?php echo $nameError;?> <p id="errorn"></p>
</tr>

<tr>
<td>
<div class="form-group">  
<lable for="fathername">FATHER NAME:- </lable>  
<input type="text" name="fathername" placeholder="enter name"  id="fname"  onekeyup="checkfname()"></div>
<?php echo $fnameError;?><p id="errorfn"></p>
</tr>

<tr>
<td>
<div class="form-group">  
<lable for="mothername">MOTHER NAME:- </lable>  
<input type="text" name="mothername" placeholder="enter name"  id="mname"  onekeyup="checkmname()"></div>
<?php echo $mnameError;?><p id="errormn"></p>
</tr>


<tr>
<td>
<div class="form-group">  
<lable for="Gender">GENDER:- </lable></div> </td></tr>
<tr><td><input type="radio" value="male" name="gender"  >MALE
<input type="radio" value="female" name="gender" >FEMALE</td>
<?php echo $genderError;?>
</tr>

<tr>
<td>
<div class="form-group">  
<lable for="education">EDUCATION:- </lable></div>
  
<div class="form-group">
  SSC <input type="text" name="ssc" placeholder="enter cgpa"><?php echo $sscError;?>
  HSC <input type="text" name="hsc" placeholder="enter cgpa"><?php echo $hscError;?>  
  BSC <input type="text" name="bsc" placeholder="enter cgpa"><?php echo $bscError;?>   
  MSC <input type="text" name="msc" placeholder="enter cgpa"><?php echo $mscError;?>  
  <?php echo $educationError; ?> </div>

</td>
</tr>


<tr>
<td>
<div class="form-group">  
<lable for="address">ADDRESS:- </lable>   
<input  name="address" placeholder="enter address"  id="address"  onekeyup="checkaddress()"></div></td>
<?php echo $addressError;?><p id="errora"></p>
</tr> 

<tr>
<td>
<div class="form-group">  
<lable for="nid"> NID NUMBER:- </lable> 
<input type="text" name="nid"  placeholder="enter number" id="nid" onkeyup="checknid()"></div></td>
<?php echo $nidError;?> <p id="errornid"></p>
</tr>


<tr>
<td>
<div class="form-group">  
<lable for="passport">PASSPORT:- </lable>
<input type="text" name="passport" placeholder="enter passport number" id="passport"    onekeyup="checkpassport()"></div></td>
<?php echo $passportError;?><p id="errorpassport"></p>
</tr>

<tr>
<td>
<div class="form-group">  
<lable for="mobilenumber">MOBILE NUMBER:- </lable>  
<input type="text" name="mobilenumber" placeholder="enter number" id="mobile"  onekeyup="checkmobile()"></div></td>
<?php echo $mobileError;?><p id="errornm"></p>
</tr>


<tr>
<td>
<div class="form-group">  
<lable for="email">EMAIL:- </lable>  
<input type="text" name="email" placeholder="enter email" id="email" onekeyup=" checkemail()"></div></td>
<?php echo $emailError;?><p id="erroremail"></p>
</tr>

<tr>
<td>
<div class="form-group">  
<lable for="github">GITHUB:- </lable>  
<input type="text" name="github" placeholder="enter github account" id="github" onekeyup=" checkgit()"></div></td>
<?php echo $githubError;?><p id="errorgithub"></p></td>
</tr>

<tr>
<td>
<div class="form-group">
<lable for="linkedin">LINKEDIN:- </lable>   
<input type="text" name="linkedin" placeholder="enter linkedin account" id="linkedin" onekeyup="checklink()"></div></td>
<?php echo $linkdinError;?><p id="errorlink"></p>
</tr>

<tr>
<td>
<div class="form-group">  
<lable for="outlook">OUTLOOK:- </lable> 
<input type="text" name="outlook" placeholder="enter outlook account" id="outlook" onekeyup="checkoutlook()"></div></td>
<?php echo $outlookError;?><p id="errorout"></p></td>
</tr>

<tr>
<td>
<div class="form-group">  
<lable for="adminid">ADMIN ID:- </lable>   
<input type="text" name="adminid" placeholder="enter admin unique id" id="adminid" onekeyup="checkadminid()"></div></td>
<?php echo $adminidError;?><p id="erroradmin"></p>
</tr>

<tr>
<td>
<div class="form-group">  
<lable for="password">PASSWORD:- </lable>  
<input type="password" name="password" placeholder="enter password" id="password" onekeyup=" checkpassword()"></div></td>
<?php echo $passwordError;?><p id="errorpass"></p>
</tr>



<tr><td> <button type="submit" name="enter" value="SUBMIT">Sign Up</button> </td></te>


</table>
</form>



<footer>
    <p>Already Have an Account? <a href="login.php">Login Here</a></p>
</footer>


<script src="../js/validation.js"></script>
</body>
</html>