<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php 
        session_start();
        if($_POST["dawu"]=="yes")
        {
        	$user=$_POST["use"];
        	$psw=$_POST["passw"];
        	$psw_again=$_POST["passw2"];
        	$email=$_POST["mail"];
        	$sex=$_POST["sex"];
        	if($user=="")
        	{
        		echo"<script>alert('请填写用户名');</script>";
        	}
        	else if($psw=="" || $psw_again=="")
        	{
        		echo"<script>alert('请输入并确认密码！');</script>";
        	}
        	else if($email=="" || $sex=="")
        	{
        		echo"<script>alert('请补完注册信息');</script>;";
        	}
        	else
        	{
        		if($psw==$psw_again)
        		{
        			mysql_connect("localhost","root","root");
        			$tmp=mysql_select_db("registers");
        			mysql_query("set names utf8");
        			$sql="select * from users where username='$_POST[use]'";
        			$result=mysql_query($sql);
        			$check=mysql_num_rows($result);
        			if($check)
        			{
        				echo"<script>alert('用户已存在'); history.go(-1);</script>";
        			}
        			else
        			{
        				$sql_regis="insert into users(username,password,mail,sex) values('$_POST[use]','$_POST[passw]','$_POST[mail]','$_POST[sex]')";
        				$res_insert=mysql_query($sql_regis);
        				if($res_insert)
        				{
        					$_SESSION["use"]=$_POST["use"];
        				/*	$sql="select username,password from users where username='$_POST[use]' and password='$_POST[passw]'";
        					$result=mysql_query($sql);
        					$userrelate=mysql_fetch_array($result);
        					$_SESSION["ID"]=$userrelate[0];
        					if(isset($_SESSION["ID"])) echo "IDget";*/
        					echo"<script>alert('恭喜你成为一只新会员！');location.href='main.php';</script>";//回到主页没写
        				}
        				else echo"<script>alert('意外失败请重来');</script>";
        			}
        		}
        		else echo"<script>alert('两次输入密码不一致'); history.go(-1);</script>";
        	}
        }
        else echo"<script>alert('不听大雾的不给注册');history.go(-1);</script>";

 ?>
</body>
</html>
