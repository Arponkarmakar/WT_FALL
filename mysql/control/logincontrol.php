<?php
include("../model/database.php"); 
session_start();

setcookie("user","visited",time()+3600*2);

$loginerror=0;

if(isset($_COOKIE["user"]))

{

    

}

else

{

    echo "Welcome to our website";

}



if(isset($_REQUEST["submit"]))

{
    $adminid=$_REQUEST["adminid"];
$password=$_REQUEST["password"];
  
    $database=new database();
    $conobj=$database->openCon();
    $result =$database->checklogin($conobj,"registration",$adminid,$password);


    if($result->num_rows>0){
        $_SESSION["adminid"]=$adminid;

        header("Location:../view/adminprofile.php");

    }
    else{

        echo "Not a valid user - SO PLEASE TRY AGAIN" ;
    }

/*$adminid=$_REQUEST["adminid"];
$password=$_REQUEST["password"];
  

   $myjsondata=file_get_contents("../data/data.json");

    $myphpdata=json_decode($myjsondata);



    foreach($myphpdata as $myobject)

    {

        if($adminid==$myobject->Adminid && $password==$myobject-> Password)

        {

            $_SESSION["adminid"]=$adminid;

            header("Location:../view/adminprofile.php");

        }

        else

        {
            
            $loginerror=1;

           

        }
        if($loginerror==1){
            echo "Not a valid user";
        }
    }*/

    

}

?>