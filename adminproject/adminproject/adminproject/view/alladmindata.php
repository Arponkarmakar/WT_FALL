<?php
/* include("../control/alladmindatacontrol.php"); */

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiles</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body style="margin: 50px;">
    <h1>List of Admins</h1>
    <br>
    <table class="table">
    

        <thead>
        <tr>
            <th>name</th>
 <th>fathername</th>
 <th>mothername</th>
 <th>gender</th>
 <th>ssc</th>
 <th>hsc</th>
 <th>bsc</th>
 <th>msc</th>
 <th>address</th>
 <th>nid</th>
 <th>passport</th>
 <th>mobilenumber</th>
 <th>email</th>
 <th>github</th>
 <th>linkedin</th>
 <th>outlook</th>
 <th>adminid</th>
 <th>password</th>
</tr>
</threat>

<tbody>
            <?php
            $servername = "localhost";
			$username = "root";
			$password = "";
			$database = "admin";

			// Create connection
			$connection = new mysqli($servername, $username, $password, $database);

            // Check connection
			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}

            // read all row from database table
			$sql = "SELECT * FROM registration";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

            // read data of each row
			while($row = $result->fetch_assoc()) {
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

            $connection->close();
            ?>
        </tbody>
    </table>
</body>
</html>

