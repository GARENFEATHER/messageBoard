<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style type="text/css">
	.table
	{
		border-style: dashed;
		border-width:2px;
		border-color:#9AC0CD;
		width:800px;
		height: auto;
		margin: 0 auto;
		padding: 4px 12px 2px 12px;
	}
	</style>
</head>
<body>
<?php 
    session_start();
    mysql_connect("localhost","root","root");
    mysql_select_db("registers");
    mysql_query("set names utf8");
    if(isset($_SESSION["use"]))
    {
    	$sql="select * from topic where realauthor='$_SESSION[use]'";
    	$check=mysql_query($sql);
    	$num=mysql_num_rows($check);
    	if($num)
    	{
    		while($out=mysql_fetch_array($check))
    		{
    			echo"<table class='table'>
    			<tr>
    			<td>
    			<p><strong>标题：</strong>" . $out['title'] . "</p>
    			<p><strong>内容：</strong>" . $out['content'] . "</p><br>
    			<p style=text-align:right><strong>作者：</strong>" . $out['author'] . "&nbsp&nbsp&nbsp<strong>时间：</strong>" . $out['senddate'] . "</p>
    			</td>
    			</tr>
    			</table>
    			<br>";
    		}
    	}
    	else
    	{
    		echo"<script>alert('当前没有你的发言记录');history.go(-1);</script>";
    	}

    }
    else
    {
    	echo "<script>alert('当前为游客状态，无法查询');location.href='main.php';</script>";
    }

 ?>
</body>
</html>
