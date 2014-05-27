<?php
$username = $_POST["name"];
$password = $_POST["password"];
$con = mysql_connect("localhost","root","");

mysql_select_db("my_db", $con);

$result = mysql_query("SELECT * FROM users");


echo "<table border='1'>
<tr>
<th>username</th>

</tr>";



while($row = mysql_fetch_array($result))
{
	
	if ($username== $row['username'] &&$password== $row['password'])
	{
		echo "Welcome to this website!";
	}
	if ($username=="       ")
	{
		echo "you should input your usernme first!";
	}

  echo "</br>";
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "</tr>";
 }

echo "</table>";

mysql_close($con);

?>
<html>

<head>
</head>
<body>
<a href="logout.php">logout</a>
</body>
</html>

