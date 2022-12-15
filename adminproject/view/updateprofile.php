<?php

include("../control/updateprofilecontrol.php");
?>
<html>
<head>
<link rel="stylesheet" type="text/css"  href="../css/updateprofile.css">
    <title>UPDATE DATA</title>
</head>
<h1>UPDATE ALL DATA</h1>
<body>



<form method="post" name="validation" enctype="multipart/form-data">
<table>
<tr><td>ADMIN ID:-<?php echo $adminid;?></td></tr>
<tr>
<td><lable for="name"> NAME:- </lable></td>  
<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="enter name"></td>

</tr>

<tr>
<td><lable for="fathername">FATHER NAME:- </lable></td>   
<td><input type="text" name="fathername"value="<?php echo $fathername;?>"  placeholder="enter name"></td>

</tr>

<tr>
<td><lable for="mothername">MOTHER NAME:- </lable></td>   
<td><input type="text" name="mothername" value="<?php echo $mothername;?>" placeholder="enter name"></td>

</tr>


<tr>
<td><lable for="Gender">GENDER:- </lable></td> 
<?php
$gender="";
$male="";
$female="";
if($gender=="male")
{
  $male="checked";
}
  else{
    $female="checked";
  }

?>  
<td>MALE<input type="radio" value="male" name="gender" <?php echo $male;?>></td>
<td>FEMALE<input type="radio" value="female" name="gender" <?php echo $female;?> ></td>

</tr>

<tr>
<td><lable for="education">EDUCATION:- </lable></td> 
<td>  
  SSC <input type="text" name="ssc" value="<?php echo $ssc;?>" placeholder="enter cgpa"><br>
  HSC <input type="text" name="hsc" value="<?php echo $hsc;?>" placeholder="enter cgpa"><br>
  BSC <input type="text" name="bsc" value="<?php echo $bsc;?>" placeholder="enter cgpa"> <br>
  MSC <input type="text" name="msc" value="<?php echo $msc;?>" placeholder="enter cgpa"> <br>
 
</td>
</tr>

</tr>

<tr>
<td><lable for="address">ADDRESS:- </lable></td>   
<td><textarea type="text" name="address"  value="<?php echo $address;?>" placeholder="enter address"></textarea></td>
</tr> 

<tr>
<td><lable for="nid"> NID NUMBER:- </lable></td>   
<td><input type="text" name="nidnumber"value="<?php echo $nid;?>"  placeholder="enter number"></td>

</tr>


<tr>
<td><lable for="passport">PASSPORT:- </lable></td>   
<td><input type="text" name="passport" value="<?php echo $passport;?>" placeholder="enter passport number"></td>

</tr>

<tr>
<td><lable for="mobilenumber">MOBILE NUMBER:- </lable></td>   
<td><input type="number" name="mobilenumber"value="<?php echo $mobilenumber;?>"  placeholder="enter number"></td>

</tr>


<tr>
<td><lable for="email">EMAIL:- </lable></td>   
<td><input type="email" name="email"value="<?php echo $email;?>" placeholder="enter email"></td>

</tr>

<tr>
<td><lable for="github">GITHUB:- </lable></td>   
<td><input type="text" name="github" value="<?php echo $github;?>" placeholder="enter github account"></td>

</tr>

<tr>
<td><lable for="linkedin">LINKEDIN:- </lable></td>   
<td><input type="text" name="linkedin" value="<?php echo $linkedin;?>" placeholder="enter linkedin account"></td>

</tr>

<tr>
<td><lable for="outlook">OUTLOOK:- </lable></td>   
<td><input type="text" name="outlook" value="<?php echo $outlook;?>"placeholder="enter outlook account"></td>

</tr>

<tr>
<td><lable for="adminid">ADMIN ID:- </lable></td>   
<td><input type="text" name="adminid" value="<?php echo $adminid;?>"placeholder="enter admin unique id"></td>

</tr>

<tr>
<td><lable for="password">PASSWORD:- </lable></td>   
<td><input type="password" name="password" value="<?php echo $password;?>"placeholder="enter password"></td>

</tr>

<tr>
<td><td><input type="submit" name="enter" value="update"></td></td>
</tr>

</table>

</form>
</body>
</html>