
<?php

$con = mysql_connect("localhost","root","");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db" ,$con);
$sql="INSERT INTO users (username, password)
VALUES
('$_POST[name]','$_POST[password]')";
?>


<?php

mysql_query($sql,$con);
mysql_close($con);
echo "You have successfully registed!";
echo "</br>";

?>
</br>
<a href="logout.php">logout</a>


