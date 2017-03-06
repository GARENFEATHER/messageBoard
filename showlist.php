<?php
$a=mysql_connect("localhost","root","root");
if(!$a)
{
	die('Cound not connrct'.mysql_error());
}
mysql_select_db("messages",$a);
$b=mysql_query("SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = 'messages'");
$s=mysql_fetch_array($b);
echo "<table border='1'style=margin-left:20%;>
	<tr>
	<th>作者</th>
	<th style=width:400px;>标题</th>
	<th style=width:200px;>发表日期</th>
	</tr>";

for($i=0;$i<$s[0];$i++)
{
	$u=$i+1;
	$out=mysql_query("SELECT * FROM topic$u WHERE topicID=1");
	while($r=mysql_fetch_array($out))
	{
		echo "<tr>";
		echo "<td>" . $r['author'] . "</td>";
		echo "<td><a href='details.php'>" . $r['title'] . "</a></td>";
		echo "<td style=text-align:center>" . $r['senddate'] . "</td>";
		echo "</tr>";
	}
}
?>