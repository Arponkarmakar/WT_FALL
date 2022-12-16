function checkname(){
    var n=document.getElementById("name").value;
if(n.value=="" || n.value==null && n.length<4){
document.getElementById("errorn").innerHTML="PLEASE FILL UP THE NAME BOX";
return false;
}
else{
    document.getElementById("errorn").innerHTML=n;
    return true;
}
}

function checkfname(){
    var n=document.getElementById("fname").value;
if(n.value=="" || n.value==null && n.length<4){
document.getElementById("errorfn").innerHTML="PLEASE FILL UP THE NAME BOX";
return false;
}
else{
    document.getElementById("errorfn").innerHTML=n;
    return true;
}
}


function checkmname(){
    var n=document.getElementById("mname").value;
if(n.value=="" || n.value==null && n.length<4){
document.getElementById("errormn").innerHTML="PLEASE FILL UP THE NAME BOX";
return false;
}
else{
    document.getElementById("errormn").innerHTML=n;
    return true;
}
}


function checkaddress(){
    var n=document.getElementById("address").value;
if(n.value=="" ){
document.getElementById("errora").innerHTML="PLEASE FILL UP THE ADDRESS BOX";
return false;
}
else{
    document.getElementById("errora").innerHTML=n;
    return true;
}
}

function checknid(){
    var n=document.getElementById("nid").value;
if(n.length<10 && (isNaN(n))){
document.getElementById("errornid").innerHTML="ALLOW 10 DIGIT NID NUMBER";
return false;
}
else{
    document.getElementById("errornid").innerHTML=n;
    return true;
}
}


function checkpassport(){
    var n=document.getElementById("passport").value;
if(n.value=="" || n.value==null && n.length<10){
document.getElementById("errorpassport").innerHTML="PLEASE FILL UP PASSPORT ID";
return false;
}
else{
    document.getElementById("errorpassport").innerHTML=n;
    return true;
}
}



function checkmobile(){
    var n=document.getElementById("mobile").value;
if(n.length<11){
document.getElementById("errornm").innerHTML="ALLOW 11 DIGIT MOBILE NUMBER";
return false;
}
else{
    document.getElementById("errornm").innerHTML=n;
    return true;
}
}






function checkemail()
{
    var n=document.getElementById("email").value;
    var em = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var ev = em.test(n);
if(!ev){
document.getElementById("erroremail").innerHTML="PLEASE ENTER CORRECT EMAIL ADDRESS";
return false;
}
else{
    document.getElementById("erroremail").innerHTML=n;
    return true;
}
}


function checkgit()
{
    var n=document.getElementById("github").value;
    var em = /^([a-z0-9\+_\-]+)/;
    var ev = em.test(n);
if(!ev){
document.getElementById("errorgithub").innerHTML="PLEASE ENTER CORRECT GITHUB ADDRESS";
return false;
}
else{
    document.getElementById("errorgithub").innerHTML=n;
    return true;
}
}


function checklink()
{
    var n=document.getElementById("linkedin").value;
    var em = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var ev = em.test(n);
if(!ev){
document.getElementById("errorlink").innerHTML="PLEASE ENTER CORRECT LINKEDIN ADDRESS";
return false;
}
else{
    document.getElementById("errorlink").innerHTML=n;
    return true;
}
}


function checkoutlook()
{
    var n=document.getElementById("outlook").value;
    var em = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var ev = em.test(n);
if(!ev){
document.getElementById("errorout").innerHTML="PLEASE ENTER CORRECT OUTLOOK ADDRESS";
return false;
}
else{
    document.getElementById("errorout").innerHTML=n;
    return true;
}
}



function checkadminid(){
    var n=document.getElementById("adminid").value;
if(n.value=="" || n.value==null && n.length>8){
document.getElementById("erroradmin").innerHTML="PLEASE FILL UP THE ADMINID";
return false;
}
else{
    document.getElementById("erroradmin").innerHTML=n;
    return true;
}
}

function checkpasswordlog(){
    var n=document.getElementById("passwordlog").value;
if( isNaN(n) && n.length>6){
document.getElementById("errorpass").innerHTML="ALLOW 6 DIGIT PASSWORD";
return false;
}
else{
    document.getElementById("errorpass").innerHTML=n;
    return true;
}
}

function valid()
{
if(checkname()==true &&checkfname()==true && checkmname()==true &&  checkaddress()==true && checknid()==true && checkpassport()==true && checkmobile()==true &&  checkemail()==true  && checkgit()==true && checklink()==true &&   checkoutlook()==true && checkadminid()==true && checkpassword()==true  ){

return true;
}

else{
    return false;

}
  
}



function searchUser()
{
    var s=document.getElementById("search").value;

    var myobj= new XMLHttpRequest();

    myobj.onreadystatechange = function ()
    {
        if(this.readyState==4 && this.status==200)
        {
            document.getElementById("print").innerHTML=  this.responseText;
        }

    }

    myobj.open("GET", "http://localhost/adminproject/control/search.php?searchdata="+s,true);
    myobj.send();



}