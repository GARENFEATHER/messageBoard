<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

if (mysql_query("CREATE DATABASE registers",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }
mysql_select_db("registers", $con);
if(mysql_query("alter database registers character set utf8;")) echo"</br>yes";
$sql = "CREATE TABLE users 
(
usersID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(usersID),
username varchar(8),
password varchar(16),
mail text,
sex varchar(7)
)ENGINE=InnoDB DEFAULT CHARSET=utf8";
mysql_query($sql,$con);
mysql_close($con);
?>