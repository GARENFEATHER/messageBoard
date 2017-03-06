<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style type="text/css">
	.show
	{
		margin: 0 auto;
		border-style: dashed;
		border-width: 2px;
		border-color: #EE8262;
		width: 960px;
		height: auto;
		text-align: center;
		font-size: 22px;
		font-family: 微软雅黑;
	}
	</style>
</head>
<body>
<?php 
session_start();
mysql_connect("localhost","root","root");
mysql_select_db("registers");
mysql_query("set names utf8");
$sql="select * from topic where main='yes'";
$result=mysql_query("$sql");
echo "<table class='show'>
	<tr>
		<th style='width:20%'>作者</th>
		<th style='width:40%'>标题</th>
		<th style='width:30%'>发布日期</th>
	</tr>";
while($out=mysql_fetch_array($result))
{
	echo"<tr>s
		<td>" . $out['author'] . "</td>
		<td style='text-align:left;align:top'>" . $out['title'] . "</td>
		<td>" . $out['senddate'] . "</td>
	</tr>";
}

 ?>
</body>
</html>
