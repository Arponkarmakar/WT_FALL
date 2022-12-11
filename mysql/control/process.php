<?php
include("../model/database.php"); 
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
$passwordError="";

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











if (((isset($_REQUEST["enter"])))){


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


  
    if(empty($_REQUEST["nid"]) || ! preg_match(("/[0-9\s]/i"), $_REQUEST["nid"])||(strlen($_REQUEST["nid"])>12))  
    {
        $nidError=" ENTER ONLY NID NUMBER";
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


    if(empty($_REQUEST["mobilenumber"]) || ! preg_match(("/[0-9\s]/i"), $_REQUEST["mobilenumber"])||(strlen($_REQUEST["mobilenumber"])>12))  
    {
        $mobileError=" ALLOW ONLY 11 DIGIT";
    }
    else{
        
        $mobileError="MOBILE NUMBER IS:".$_REQUEST["mobilenumber"];
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


    if(empty($_REQUEST["password"]) || ! preg_match(("/[0-9\s]/i"), $_REQUEST["password"])||(strlen($_REQUEST["password"])>6))  
    {
        $passwordError=" ALLOW ONLY 6 DIGIT";
    }
    else{
        
        $passwordError="PASSWORD IS:".$_REQUEST["password"];
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
    









if($hasError==0){

    
    $connection=new database();
    $conobj= $connection->openCon();
    $result= $connection->insertUser($conobj,"registration",$_REQUEST["name"],$_REQUEST["fathername"],$_REQUEST["mothername"],$_REQUEST["gender"],$_REQUEST["ssc"],$_REQUEST["hsc"],$_REQUEST["bsc"],$_REQUEST["msc"],$_REQUEST["address"],$_REQUEST["nid"],$_REQUEST["passport"],$_REQUEST["mobilenumber"],$_REQUEST["email"],$_REQUEST["github"],$_REQUEST["linkedin"],$_REQUEST["outlook"],$_REQUEST["adminid"],$_REQUEST["password"]);
    if($result==true){  
        echo"Data inserted";
    }
    else{
        echo "Error".$conobj->error;
    }

    /*$existingdata = file_get_contents("../data/data.json");
    $existingdatainphp = json_decode($existingdata);

    $myarray=array(
    "Name"=> $_REQUEST["name"],
    "Fathername"=> $_REQUEST["fathername"],
    "Mothername"=> $_REQUEST["mothername"],
    "Gender"=> $_REQUEST["gender"],
    "SSC"=> $_REQUEST["ssc"],
    "HSC"=> $_REQUEST["hsc"],
    "BSC"=> $_REQUEST["bsc"],
    "MSC"=> $_REQUEST["msc"],
    "Address"=> $_REQUEST["address"],
    "Passport"=> $_REQUEST["passport"],
    "Email"=>$_REQUEST["email"],
    "Mobile number"=> $_REQUEST["mobile"],
    "Github"=> $_REQUEST["github"],
    "Linkedin"=> $_REQUEST["linkedin"],
    "Outlook"=> $_REQUEST["outlook"],
    "Adminid"=> $_REQUEST["adminid"],
    "Password"=>$_REQUEST["password"],

);
$existingdatainphp[]=$myarray;
    $myjsondata = json_encode( $existingdatainphp, JSON_PRETTY_PRINT);
    file_put_contents("../data/data.json", $myjsondata);
   $mydata=file_get_contents("../data/data.json", $myjsondata);
   $myphpdata=json_decode($mydata);
   echo "<br>";*/

}

 }

?>


