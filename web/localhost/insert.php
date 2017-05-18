<?php
$con = mysql_connect("localhost","root","11111111");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("test", $con);

$sql="INSERT INTO user (username, pw)
VALUES
('$_POST[my_name]','$_POST[my_password]')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>