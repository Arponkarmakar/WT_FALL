<?php

include("process.php");


?>



<html>
<head>
    <title>ADMIN REGISTRATION FORM</title>

<body>

<h1>FILL UP REGISTRATION FORM</h1>

<form method="post" name="validation">
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
<td><input type="radio" value="male" name="gender" >MALE
<input type="radio" value="female" name="gender">FEMALE</td>
<td><?php echo $genderError;?></td>
</tr>

<tr>
<td><lable for="education">EDUCATION:- </lable></td> 
<td>  
  SSC<input type="text" name="ssc" placeholder="enter cgpa"><?php echo $sscError;?> </br> 
  HSC <input type="text" name="hsc" placeholder="enter cgpa"><?php echo $hscError;?> </br> 
  BSC<input type="text" name="bsc" placeholder="enter cgpa"><?php echo $bscError;?> </br>  
  MSC<input type="text" name="msc" placeholder="enter cgpa"><?php echo $mscError;?></br>   
  <?php echo $educationError; ?>

</td>
</tr>




    

</tr>

<tr>
<td><lable for="address">ADDRESS:- </lable></td>   
<td><textarea  name="address"  rows="5" cols="50" placeholder="enter address"></textarea></td>
<td><?php echo $addressError;?></td>
</tr> 

<tr>
<td><lable for="nid">NID:- </lable></td>   
<td><input type="text" name="nid" placeholder="enter nid number"></td>
<td><?php echo $nidError;?></td>
</tr>


<tr>
<td><lable for="passport">PASSPORT:- </lable></td>   
<td><input type="text" name="passport" placeholder="enter passport number"></td>
<td><?php echo $passportError;?></td>
</tr>

<tr>
<td><lable for="mobile">MOBILE NUMBER:- </lable></td>   
<td><input type="text" name="mobile" placeholder="enter number"></td>
<td><?php echo $mobileError;?></td>
</tr>


<tr>
<td><lable for="email">EMAIL:- </lable></td>   
<td><input type="text" name="email" placeholder="enter email"></td>
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
<td><input type="submit" name="submit"></td>
</tr>



</table>
</form>
</body>
</html>
