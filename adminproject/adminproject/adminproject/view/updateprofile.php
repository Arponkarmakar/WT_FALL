<?php

include("../control/updateprofilecontrol.php");
?>
<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/mycss.css">

    <title>Update</title>
</head>
<body>

<div class="main">
<div class="registartion">
<div id="container">
<div class="form-wrap">
<h1>Update Profile</h1>



<form method="post" name="validation" enctype="multipart/form-data">
<table>
<tr><td>ADMIN ID:-<?php echo $adminid;?></td></tr>


<tr>
<td>
<div class="form-group">  
<lable for="name"> NAME:- </lable>
<input type="text" name="name" id="name" value="<?php echo $name;?>" placeholder="enter name"></div>

</tr>

<tr>
<td>
<div class="form-group">  
<lable for="fathername">FATHER NAME:- </lable>  
<input type="text" name="fathername" id="fathername" value="<?php echo $fathername;?>" placeholder="enter name"></div>

</tr>

<tr>
<td>
<div class="form-group">  
<lable for="mothername">MOTHER NAME:- </lable>  
<input type="text" name="mothername" id="mothername" value="<?php echo $mothername;?>" placeholder="enter name"></div>

</tr>


<tr><td>
<div class="form-group">
<lable for="Gender">Gender</lable>
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

?> </div> 
</td> </tr>


<tr>
<td>Male<input type="radio" value="male" name="gender" <?php echo $male;?>></td>
<td>Female<input type="radio" value="female" name="gender" <?php echo $female;?>></td> 
</tr>


<tr>
<td>
<div class="form-group">  
<lable for="education">EDUCATION:- </lable></div>
  
<div class="form-group">
  SSC <input type="text" name="ssc" id="ssc"  value="<?php echo $ssc;?>" placeholder="enter cgpa">
  HSC <input type="text" name="hsc" id="hsc"  value="<?php echo $hsc;?>" placeholder="enter cgpa"> 
  BSC <input type="text" name="bsc" id="bsc"  value="<?php echo $bsc;?>" placeholder="enter cgpa">   
  MSC <input type="text" name="msc" id="msc"  value="<?php echo $msc;?>" placeholder="enter cgpa">
   </div>

</td>
</tr>

<tr>
<td>
<div class="form-group">  
<lable for="address">ADDRESS:- </lable>   
<input type="text" name="address"  id="address" value="<?php echo $address;?>" placeholder="enter address"   ></div></td>
</tr> 

<tr>
<td>
<div class="form-group">  
<lable for="nid"> NID NUMBER:- </lable> 
<input type="text" name="nid" id="nid" value="<?php echo $nid;?>"  placeholder="enter number"  ></div></td>

</tr>


<tr>
<td>
<div class="form-group">  
<lable for="passport">PASSPORT:- </lable>
<input type="text" name="passport" id="passport" value="<?php echo $passport;?>" placeholder="enter passport number"  ></div></td>
</tr>

<tr>
<td>
<div class="form-group">  
<lable for="mobilenumber">MOBILE NUMBER:- </lable>  
<input type="text" name="mobilenumber" id="mobile"  value="<?php echo $mobilenumber;?>"  placeholder="enter number" ></div></td>
</tr>


<tr>
<td>
<div class="form-group">  
<lable for="email">EMAIL:- </lable>  
<input type="text" name="email" id="email" value="<?php echo $email;?>" placeholder="enter email"  ></div></td>
</tr>

<tr>
<td>
<div class="form-group">  
<lable for="github">GITHUB:- </lable>  
<input type="text" name="github" id="github" value="<?php echo $github;?>" placeholder="enter github account" ></div></td>

</tr>

<tr>
<td>
<div class="form-group">
<lable for="linkedin">LINKEDIN:- </lable>   
<input type="text" name="linkedin" id="linkedin" value="<?php echo $linkedin;?>" placeholder="enter linkedin account"  ></div></td>

</tr>

<tr>
<td>
<div class="form-group">  
<lable for="outlook">OUTLOOK:- </lable> 
<input type="text" name="outlook" id="outlook" value="<?php echo $outlook;?>" placeholder="enter outlook account"  ></div></td>

</tr>

<tr>
<td>
<div class="form-group">  
<lable for="adminid">ADMIN ID:- </lable>   
<input type="text" name="adminid" id="adminid"  value="<?php echo $adminid;?>" placeholder="enter admin unique id"  ></div></td>
</tr>

<tr>
<td>
<div class="form-group">  
<lable for="password">PASSWORD:- </lable>  
<input type="password" name="password" id="password" value="<?php echo $password;?>" placeholder="enter password" ></div></td>

</tr>

<tr>
<td><button type="submit" name="enter" value="update">Update</button></td>
</tr>

</table>

</form>
</body>
</html>