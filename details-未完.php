<?php
$a=mysql_connect("localhost","root","root");
$u=1;//暂时
if(!$a)
{
	die('Cound not connrct'.mysql_error());
}
mysql_select_db("messages",$a);
$out=mysql_query("SELECT * FROM topic$u");
while($r=mysql_fetch_array($out))
{
	echo "主题:" . $r['title'] . "<br>";
	echo "作者:" . $r['author'] . "bsp&nbsp&nbsp&nbsp&nbsp&nbsp时间:" . $r['senddate'];
}