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

<form method="post" name="validation" enctype="multipart/form-data">
<table>

<tr>
<td><lable for="name"> NAME:- </lable></td>  
<td><input type="text" name="name" placeholder="enter name"></td>
<td><?php echo $nameError;?></td>
</tr>

<tr>
<td><lable for="fathername">FATHER NAME:- </lable></td>   
<td><input type="text" name="fathername" placeholder="enter name"></td>
<td><?php echo $fnameError;?></td>
</tr>

<tr>
<td><lable for="mothername">MOTHER NAME:- </lable></td>   
<td><input type="text" name="mothername" placeholder="enter name"></td>
<td><?php echo $mnameError;?></td>
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
<td><textarea  name="address"  rows="5" cols="30" placeholder="enter address"></textarea></td>
<td><?php echo $addressError;?></td>
</tr> 

<tr>
<td><lable for="nid"> NID NUMBER:- </lable></td>   
<td><input type="text" name="nid"  placeholder="enter number"></td>
<td><?php echo $nidError;?></td>
</tr>


<tr>
<td><lable for="passport">PASSPORT:- </lable></td>   
<td><input type="text" name="passport" placeholder="enter passport number"></td>
<td><?php echo $passportError;?></td>
</tr>

<tr>
<td><lable for="mobilenumber">MOBILE NUMBER:- </lable></td>   
<td><input type="text" name="mobilenumber" placeholder="enter number"></td>
<td><?php echo $mobileError;?></td>
</tr>


<tr>
<td><lable for="email">EMAIL:- </lable></td>   
<td><input type="email" name="email" placeholder="enter email"></td>
<td><?php echo $emailError;?></td>
</tr>

<tr>
<td><lable for="github">GITHUB:- </lable></td>   
<td><input type="text" name="github" placeholder="enter github account"></td>
<td><?php echo $githubError;?></td>
</tr>

<tr>
<td><lable for="linkedin">LINKEDIN:- </lable></td>   
<td><input type="text" name="linkedin" placeholder="enter linkedin account"></td>
<td><?php echo $linkdinError;?></td>
</tr>

<tr>
<td><lable for="outlook">OUTLOOK:- </lable></td>   
<td><input type="text" name="outlook" placeholder="enter outlook account"></td>
<td><?php echo $outlookError;?></td>
</tr>

<tr>
<td><lable for="adminid">ADMIN ID:- </lable></td>   
<td><input type="text" name="adminid" placeholder="enter admin unique id"></td>
<td><?php echo $adminidError;?></td>
</tr>

<tr>
<td><lable for="password">PASSWORD:- </lable></td>   
<td><input type="password" name="password" placeholder="enter password"></td>
<td><?php echo $passwordError;?></td>
</tr>






<tr>
<td><td><input type="submit" name="enter" value="SUBMIT"></td></td>
</tr>


<tr><td><td><a href="login.php"> LOGIN </a></td></td></tr>
</table>

</form>

</div >
</div >

</body>
</html>