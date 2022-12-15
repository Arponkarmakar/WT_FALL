<?php
session_start();
include("../model/database.php");
$database=new database();
$conobj=$database->openCon();
$result=$database->showUser($conobj,"registration",$_SESSION["adminid"]);
if($result->num_rows>0)
{
foreach($result as $row)
{
   
$name=$row["name"];
$fathername=$row["fathername"];
$mothername=$row["mothername"];
$ssc=$row["ssc"];
$hsc=$row["hsc"];
$bsc=$row["bsc"];
$msc=$row["msc"];
$address=$row["address"];
$nid=$row["nid"];
$passport=$row["passport"];
$mobilenumber=$row["mobilenumber"];
$email=$row["email"];
$github=$row["github"];
$linkedin=$row["linkedin"];
$outlook=$row["outlook"];
$adminid=$row["adminid"];
$password=$row["password"];

}


if(isset($_REQUEST["enter"]))
{
    $connection=new database();
    $conobj= $connection->openCon();
    $result= $connection-> deleteUser($conobj,"registration",$_REQUEST["name"],$_REQUEST["fathername"],$_REQUEST["mothername"],$_REQUEST["gender"],$_REQUEST["ssc"],$_REQUEST["hsc"],$_REQUEST["bsc"],$_REQUEST["msc"],$_REQUEST["address"],$_REQUEST["nid"],$_REQUEST["passport"],$_REQUEST["mobilenumber"],$_REQUEST["email"],$_REQUEST["github"],$_REQUEST["linkedin"],$_REQUEST["outlook"],$_REQUEST["adminid"],$_REQUEST["password"]);

if($result==true){
  echo "DATA DELETE";
}
else{
    echo "DATA NOT DELETE";
}
}

}
?>