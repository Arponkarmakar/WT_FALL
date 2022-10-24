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
$hasError=0;
$myphpdata="";
$NAME=0;
$EMAIL=0;
$MOBILE=0;
$myjsondata="";









if (((isset($_REQUEST["submit"])))){


    if(empty($_REQUEST["name"]) || ! preg_match(("/[a-z\s]/i"), $_REQUEST["name"]))  
    {
        $nameError=" START NAME WITH CAPITAL OR SAMLL LETTER";
    }
    else{
        
        $nameError="NAME IS:".$_REQUEST["name"];
    }

    if(empty($_REQUEST["fathername"]) || ! preg_match(("/[a-z\s]/i"), $_REQUEST["fathername"]))  
    {
        $fnameError=" START NAME WITH CAPITAL OR SAMLL LETTER";
    }
    else{
        
        $fnameError="FATHER NAME IS:".$_REQUEST["fathername"];
    }


    if(empty($_REQUEST["mothername"]) || ! preg_match(("/[a-z\s]/i"), $_REQUEST["mothername"]))  
    {
        $mnameError=" START NAME WITH CAPITAL OR SAMLL LETTER";
    }
    else{
        
        $mnameError="MOTHER NAME IS:".$_REQUEST["mothername"];
    }



    if(empty($_REQUEST["address"]) || ! preg_match(("/[a-z\s]/i"),$_REQUEST["address"]))  
    {
        $addressError=" START  WITH CAPITAL OR SAMLL LETTER";
    }
    else{
        
        $addressError="ADDRESS IS:".$_REQUEST["address"];
    }


  
    if(empty($_REQUEST["nid"]) || ! preg_match(("/[0-9\s]/i"), $_REQUEST["nid"])||(strlen($_REQUEST["nid"])>10))  
    {
        $nidError=" ALLOW ONLY 10 DIGIT";
    }
    else{
        
        $nidError="NID NUMBER IS:".$_REQUEST["nid"];
    }

    if((empty($_REQUEST["passport"]) ||(strlen($_REQUEST["passport"])>11)))
    {
        $passportError="ALLOW ONLY 11 digit ";
    }
    else{
        
        $passportError="PASSPORT NUMBER IS:".$_REQUEST["passport"];
    }


    if(empty($_REQUEST["mobile"]) || ! preg_match(("/[0-9\s]/i"), $_REQUEST["mobile"])||(strlen($_REQUEST["mobile"])>11))  
    {
        $mobileError=" ALLOW ONLY 11 DIGIT";
    }
    else{
        
        $mobileError="MOBILE NUMBER IS:".$_REQUEST["mobile"];
    }


    if(empty($_REQUEST["email"]) || ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_REQUEST["email"])){
        $emailError="EMAIL ADDRESS IS NOT VALID";

    }
    else{
        $emailError="EMAIL IS:".$_REQUEST["email"];
    }



    if(empty($_REQUEST["github"])|| ! preg_match("/[0-9a-z]/", $_REQUEST["github"])){
        $githubError="GITHUB ADDRESS IS NOT VALID";

    }
    else{
        $githubError="GITHUB IS:".$_REQUEST["github"];
    }



    if(empty($_REQUEST["linkedin"])|| ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_REQUEST["linkedin"])){
        $linkdinError="LINKEDIN ADDRESS IS NOT VALID";

    }
    else{
        $linkdinError="LINKEDIN IS:".$_REQUEST["linkedin"];
    }

    if(empty($_REQUEST["outlook"]) || ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_REQUEST["outlook"])){
        $outlookError="OUTLOOK ADDRESS IS NOT VALID";

    }
    else{
        $outlookError="OUTLOOK ADDRESS IS:".$_REQUEST["outlook"];
    }



    


    if(empty($_REQUEST["adminid"])|| !preg_match("/[0-9a-z]/", $_REQUEST["adminid"])||(strlen($_REQUEST["adminid"])>8)){
        $adminidError="START WITH ANY LETTER";

    }
    else{
        $adminidError="ADMINID IS:".$_REQUEST["adminid"];
    }


    if(empty($_REQUEST["ssc"])|| !preg_match("/[0-9]/",$_REQUEST["ssc"])||(strlen($_REQUEST["ssc"])>4)){
        $sscError="ENTER CGPA";
      

    }
    else{
        $sscError="SSC CGPA IS:".$_REQUEST["ssc"];
       
    }
   
    if(empty($_REQUEST["hsc"])|| !preg_match("/[0-9]/", $_REQUEST["hsc"])||(strlen($_REQUEST["hsc"])>4)){
        
        $hscError="ENTER CGPA";
      

    }
    else{
        
        $hscError="HSC CGPA IS:".$_REQUEST["hsc"];
       
    }
   
    if(empty($_REQUEST["bsc"])|| !preg_match("/[0-9]/", $_REQUEST["bsc"])||(strlen($_REQUEST["bsc"])>4)){
        
        $bscError="ENTER CGPA";
      

    }
    else{
        
        $bscError="BSC CGPA IS:".$_REQUEST["bsc"];
       
    }


    if(empty($_REQUEST["msc"])|| !preg_match("/[0-9]/", $_REQUEST["msc"])||(strlen($_REQUEST["msc"])>4)){
        
        $mscError="ENTER CGPA";
      

    }
    else{
        
        $mscError="BSC CGPA IS:".$_REQUEST["msc"];
       
    }


    if(isset($_REQUEST["gender"]))
    {
        
       $genderError="GENDER IS" . $_REQUEST["gender"];
           
        }
        else
        {
            $genderError="CHOOSE GENDER";
        }






}



?>



