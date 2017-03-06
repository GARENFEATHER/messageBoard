<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
date_default_timezone_set('prc');
$q=mysql_connect("localhost","root","root");
session_start();
if(!$q)
{
	die('数据库连接失败'.mysql_error());
}
else
{

	$name=$_POST['name'];
	$con=$_POST['content'];
	$t=$_POST['title'];
	if($name==NULL)
	{
		echo "<script>alert('作者姓名不为空！');location.href='new.php';</script>";
	}
	if($con==NULL)
	{
		echo "<script>alert('内容不为空！');location.href='new.php';</script>";
	}
	if($t==NULL)
	{
		echo "<script>alert('标题不为空！');location.href='new.php';</script>";
	}
	if(strrpos($name,"<")!==false||strrpos($name,">")!==false||strrpos($name,"/")!==false||strrpos($name,"@")!==false||strrpos($name,"_")!==false)
	{
		echo "<script>alert('非法字符！');location.href='new.php';</script>";
		exit();
	}
	if(!preg_match("/^(\[[\S\-]+\][\S\-]+$)/",$t))//之所以改变为\S是因为utf8有了汉子，而\w不能匹配
	{
		echo "<script>alert('标题格式错误！');location.href='new.php';</script>";
		exit();
	}
	mysql_select_db("registers",$q);
	mysql_query("set names utf8");
	if(isset($_SESSION["use"]))
	{
		$real=$_SESSION["use"];
	}
	else
	{
		$real="游客";
	}
	$sql="insert into topic (author,title,content,senddate,main,realauthor) values ('$name','$_POST[title]','$con',NOW(),'yes','$real')";
	$check=mysql_query($sql);
	if($check)
	{
		echo "<script>alert('发表成功');</script>";//location到话题未写
	}
	else
	{
		echo "<script>alert('系统繁忙，请稍后再试');location.href='new.php'</script>";
	}
	mysql_close($q);
}
	/*$a=mysql_query("SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = 'messages'");
	$s=mysql_fetch_array($a);
	$u=$s[0]+1;
	$sql="CREATE TABLE topic$u
	(
	topicID int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(topicID),
					author text,
					senddate datetime,
					content text,
					title text
				)";
			if(!mysql_query($sql,$q)) 
			{
				die('<br>failed创建新话题失败！'.mysql_error());
			}
			else echo "<br>新话题创建成功！";
			$sqlnew="INSERT INTO topic$u (author,title,content,senddate) VALUES ('$name','$_POST[title]','$con',NOW())";
			if(!mysql_query($sqlnew,$q))
			{
				die('发表失败:'.mysql_error());
			}
			else
			{
				echo "<br>发表成功！";
			}
			$out=mysql_query("SELECT * FROM topic$u");
			$r=mysql_fetch_array($out);
			mysql_close($q);
}*/
?>
</body>
</html>