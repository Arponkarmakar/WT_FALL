<?php
class database{


function openCon(){
$conn = new mysqli("localhost", "root", "","admin");

return $conn ;
}
function insertUser($conn,$tablename,$name,$fathername,$mothername,$gender,$ssc,$hsc,$bsc,$msc,$address,$nid,$passport,$mobilenumber,$email,$github,$linkedin,$outlook,$adminid,$password){
$sqlstr="INSERT INTO $tablename(name,fathername,mothername,gender,ssc,hsc,bsc,msc,address,nid,passport,mobilenumber,email,github,linkedin,outlook,adminid,password) VALUES ('$name','$fathername','$mothername','$gender','$ssc','$hsc','$bsc','$msc','$address','$nid','$passport','$mobilenumber','$email','$github','$linkedin','$outlook','$adminid','$password')";
return $conn->query($sqlstr);
}

function checklogin($conn,$tablename,$adminid,$password){
  $sql="SELECT * FROM $tablename WHERE adminid='$adminid' AND password='$password'";
  return $conn->query($sql);
}

function showUser($conn,$tablename,$adminid){
  $sql="SELECT * FROM $tablename WHERE adminid='$adminid'";
  return $conn->query($sql);
}

function showAll($conn,$tablename){
  $sql="SELECT * FROM $tablename";
  return $conn->query($sql);
}

function updateUser($conn,$tablename,$name,$fathername,$mothername,$gender,$ssc,$hsc,$bsc,$msc,$address,$nid,$passport,$mobilenumber,$email,$github,$linkedin,$outlook,$adminid,$password){
  $sql="UPDATE $tablename SET name='$name', fathername='$fathername', mothername='$mobilenumber' , gender='$gender' ,ssc='$ssc', hsc='$hsc' ,bsc='$bsc', msc='$msc', address='$address' , nid='$nid', passport='$passport', mobilenumber='$mobilenumber', email='$email' , github='$github' , linkedin='$linkedin', outlook='$outlook', adminid='$adminid', password='$password'  WHERE adminid='$adminid'";                                                                                                                                                                        
  return $conn->query($sql);
}



function closeCon($conn)
{
    $conn->close;
}


}
?>