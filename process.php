<?php

$nameError="";
$fnameError="";
$mnameError="";
$addressError="";
$nidError="";
$passportError="";
$mobileError="";
$emailError="";
$githubError="";
$linkdinError="";
$outlookError="";
$adminidError="";

$genderError="";

$sscError="";
$hscError="";
$bscError="";
$mscError="";
$educationError="";
$s="";
$h="";
$b="";
$m="";






if (($_SERVER["REQUEST_METHOD"] == "POST")&&(isset($_POST["submit"]))){


    if(empty($_POST["name"]) || ! preg_match(("/[a-z\s]/i"), $_POST["name"]))  
    {
        $nameError=" START NAME WITH CAPITAL OR SAMLL LETTER";
    }
    else{
        
        $nameError="NAME IS:".$_POST["name"];
    }

    if(empty($_POST["fathername"]) || ! preg_match(("/[a-z\s]/i"), $_POST["fathername"]))  
    {
        $fnameError=" START NAME WITH CAPITAL OR SAMLL LETTER";
    }
    else{
        
        $fnameError="FATHER NAME IS:".$_POST["fathername"];
    }


    if(empty($_POST["mothername"]) || ! preg_match(("/[a-z\s]/i"), $_POST["mothername"]))  
    {
        $mnameError=" START NAME WITH CAPITAL OR SAMLL LETTER";
    }
    else{
        
        $mnameError="MOTHER NAME IS:".$_POST["mothername"];
    }



    if(empty($_POST["address"]) || ! preg_match(("/[a-z\s]/i"), $_POST["address"]))  
    {
        $addressError=" START  WITH CAPITAL OR SAMLL LETTER";
    }
    else{
        
        $addressError="ADDRESS IS:".$_POST["address"];
    }


  
    if(empty($_POST["nid"]) || ! preg_match(("/[0-9\s]/i"), $_POST["nid"])||(strlen($_POST["nid"])>10))  
    {
        $nidError=" ALLOW ONLY 10 DIGIT";
    }
    else{
        
        $nidError="NID NUMBER IS:".$_POST["nid"];
    }

    if((empty($_POST["passport"]) ||(strlen($_POST["passport"])>11)))
    {
        $passportError="ALLOW ONLY 11 digit ";
    }
    else{
        
        $passportError="PASSPORT NUMBER IS:".$_POST["passport"];
    }


    if(empty($_POST["mobile"]) || ! preg_match(("/[0-9\s]/i"), $_POST["mobile"])||(strlen($_POST["mobile"])>11))  
    {
        $mobileError=" ALLOW ONLY 11 DIGIT";
    }
    else{
        
        $mobileError="MOBILE NUMBER IS:".$_POST["mobile"];
    }


    if(empty($_POST["email"]) || ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST["email"])){
        $emailError="EMAIL ADDRESS IS NOT VALID";

    }
    else{
        $emailError="EMAIL IS:".$_POST["email"];
    }



    if(empty($_POST["github"])|| ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST["github"])){
        $githubError="GITHUB ADDRESS IS NOT VALID";

    }
    else{
        $githubError="GITHUB IS:".$_POST["github"];
    }



    if(empty($_POST["linkedin"])|| ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST["linkedin"])){
        $linkdinError="LINKEDIN ADDRESS IS NOT VALID";

    }
    else{
        $linkdinError="LINKEDIN IS:".$_POST["linkedin"];
    }

    if(empty($_POST["outlook"]) || ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST["outlook"])){
        $outlookError="OUTLOOK ADDRESS IS NOT VALID";

    }
    else{
        $outlookError="OUTLOOK ADDRESS IS:".$_POST["outlook"];
    }



    


    if(empty($_POST["adminid"])|| !preg_match("/[0-9a-z]/", $_POST["adminid"])||(strlen($_POST["adminid"])>8)){
        $adminidError="START WITH ANY LETTER";

    }
    else{
        $adminidError="ADMINID IS:".$_POST["adminid"];
    }


    if(empty($_POST["ssc"])|| !preg_match("/[0-9]/", $_POST["ssc"])||(strlen($_POST["ssc"])>3)){
        $sscError="ENTER CGPA";
      

    }
    else{
        $sscError="SSC CGPA IS:".$_POST["ssc"];
       
    }
   
    if(empty($_POST["hsc"])|| !preg_match("/[0-9]/", $_POST["hsc"])||(strlen($_POST["hsc"])>3)){
        
        $hscError="ENTER CGPA";
      

    }
    else{
        
        $hscError="HSC CGPA IS:".$_POST["hsc"];
       
    }
   
    if(empty($_POST["bsc"])|| !preg_match("/[0-9]/", $_POST["bsc"])||(strlen($_POST["bsc"])>3)){
        
        $bscError="ENTER CGPA";
      

    }
    else{
        
        $bscError="BSC CGPA IS:".$_POST["bsc"];
       
    }


    if(empty($_POST["msc"])|| !preg_match("/[0-9]/", $_POST["msc"])||(strlen($_POST["msc"])>3)){
        
        $mscError="ENTER CGPA";
      

    }
    else{
        
        $mscError="BSC CGPA IS:".$_POST["msc"];
       
    }


    if(isset($_POST["gender"]))
{
    $genderError= $_POST["gender"];
}
else{
    $genderError= "CHOOSE ONE";
    
}


if(!isset($_POST["ssc"])&&!isset($_POST["hsc"])&&!isset($_POST["bsc"])&&!isset($_POST["msc"]))
{
    $educationError= "CHOOSE AT LEAST ANY ONE";
    
}
else{
   if(isset($_POST["ssc"]))
   {
       $s= $_POST["ssc"];
   }
   if(isset($_POST["hsc"]))
   { 
       $h= $_POST["hsc"];
   }
   if(isset($_POST["bsc"]))
   {
    $b= $_POST["bsc"];
   }
   if(isset($_POST["msc"]))
   {
    $m= $_POST["msc"];
   }
}


}



?>