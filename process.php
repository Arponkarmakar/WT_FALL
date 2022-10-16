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

if(isset($_REQUEST["submit"])){


    if(empty($_REQUEST["name"]>5)){
        $nameError="NAME BOX IS EMPTY";

    }
    else{
        
        $nameError="NAME IS:".$_REQUEST["name"];
    }

    if(empty($_REQUEST["fathername"]>5)){
        $fnameError="NAME BOX IS EMPTY";

    }
    else{
        $fnameError="NAME IS:".$_REQUEST["fathername"];
    }

    if(empty($_REQUEST["mothername"]>5)){
        $mnameError="NAME BOX IS EMPTY";

    }
    else{
        $mnameError="NAME IS:".$_REQUEST["mothername"];
    }

    if(empty($_REQUEST["address"]>10)){
        $addressError="ADDRESS BOX IS EMPTY";

    }
    else{
        $addressError="ADDRESS IS:".$_REQUEST["address"];
    }


    if(empty($_REQUEST["nid"]>11)){
        $nidError="NID BOX IS EMPTY";

    }
    else{
        $nidError="NID IS:".$_REQUEST["nid"];
    }

    if(empty($_REQUEST["passport"])){
        $passportError="PASSPORT NUMBER IS EMPTY";

    }
    else{
        $passportError="PASSPORT NUMBER IS:".$_REQUEST["passport"];
    }


    if(empty($_REQUEST["mobile"])){
        $mobileError="MOBILE NUMBER BOX IS EMPTY";

    }
    else{
        $mobileError="MOBILE NUMBER IS:".$_REQUEST["mobile"];
    }



    if(empty($_REQUEST["email"])){
        $emailError="EMAIL IS EMPTY";

    }
    else{
        $emailError="EMAIL IS:".$_REQUEST["email"];
    }



    if(empty($_REQUEST["github"])){
        $githubError="GITHUB IS EMPTY";

    }
    else{
        $githubError="GITHUB IS:".$_REQUEST["github"];
    }



    if(empty($_REQUEST["linkedin"])){
        $linkdinError="LINKEDIN IS EMPTY";

    }
    else{
        $linkdinError="LINKEDIN IS:".$_REQUEST["linkedin"];
    }

    if(empty($_REQUEST["outlook"])){
        $outlookError="OUTLOOK IS EMPTY";

    }
    else{
        $outlookError="OUTLOOK IS:".$_REQUEST["outlook"];
    }

    if(empty($_REQUEST["adminid"])){
        $adminidError="ADMINID IS EMPTY";

    }
    else{
        $adminidError="ADMINID IS:".$_REQUEST["admin"];
    }



   



}



?>