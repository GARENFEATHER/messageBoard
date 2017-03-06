<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php 
    session_start();
    if(isset($_POST["use"]))
    {
    	$user=$_POST["use"];
    	$pass=$_POST["passw"];
    	if($user=="" || $pass=="")
    	{
    		echo"<script>alert('请输入用户名及密码');history.go(-1);</script>";
    	}
    	else
    	{
    		mysql_connect("localhost","root","root");
    		$tmp=mysql_select_db("registers");
    		mysql_query("set names utf8");
    		$sql="select username,password from users where username='$_POST[use]' and password='$_POST[passw]'";
    		$result=mysql_query($sql);
    		$num=mysql_num_rows($result);
    		if($num)
    		{
    			$_SESSION["use"]=$_POST["use"];
               /* $userrelate=mysql_fetch_array($result);
                $_SESSION["ID"]=$userrelate["usersID"];
                if(isset($_SESSION["ID"])) echo "IDget";*/
    			echo"<script>alert('登陆成功');location.href='main.php';</script>";
    		}
    		else
    		{
    			echo"<script>alert('用户名或密码不正确');history.go(-1)</script>;";
    		}
    	}
    }
    else echo"<script>alert('提交失败');</script>";
 ?>
</body>
</html>
