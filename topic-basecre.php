<?php
$db=mysql_connect("localhost","root","root");
mysql_select_db("registers",$db);
$sql="CREATE TABLE topic
(
	topicID int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(topicID),
	author text,
	senddate datetime,
	content text,
	title text,
	main varchar(3),
	realauthor text
)ENGINE=InnoDB DEFAULT CHARSET=utf8";
if(mysql_query($sql,$db)) echo "success";
else echo "fail";
mysql_close($db);
?>

