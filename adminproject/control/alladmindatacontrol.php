<?php
include("../model/database.php");
$database=new database();
$conobj=$database->openCon();
$result=$database->showAll($conobj,"registration");
if($result->num_rows>0)
{
    echo "<table>";

 echo"<tr><td>name</td><td>fathername</td><td>mothername</td><td>gender</td><td>ssc</td><td>hsc</td><td>bsc</td><td>msc</td><td>address</td><td>nid</td><td>passport</td><td>mobilenumber</td><td>email</td><td>github</td><td>linkedin</td><td>outlook</td><td>adminid</td><td>password</td></tr>";
 
foreach($result as $row)
{
    echo"<tr>";

 echo"<td>" .$row["name"]. "</td>";
 echo "<td>".$row["fathername"]."</td>";
 echo "<td>".$row["mothername"]."</td>";
 echo "<td>".$row["gender"]."</td>";
 echo "<td>".$row["ssc"]."</td>";
 echo "<td>".$row["hsc"]."</td>";
 echo "<td>".$row["bsc"]."</td>";
 echo "<td>".$row["msc"]."</td>";
 echo "<td>".$row["address"]."</td>";
 echo "<td>".$row["nid"]."</td>";
 echo "<td>".$row["passport"]."</td>";
 echo "<td>".$row["mobilenumber"]."</td>";
 echo "<td>".$row["email"]."</td>";
 echo "<td>".$row["github"]."</td>";
 echo "<td>".$row["linkedin"]."</td>";
 echo "<td>".$row["outlook"]."</td>";
 echo "<td>".$row["adminid"]."</td>";
 echo "<td>".$row["password"]."</td>";

 echo"</tr>";


}

}

?>