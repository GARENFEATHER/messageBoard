<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
	.res{
		margin: 23%;
		font-size: 28px;
		font-family: 微软雅黑,helvetica,verdana;
		width: 720px;
	}
	input[type="password"],input[type="mail"],input[type="logname"]
	{
		background-color: #CCCCCC;
		border:1px  solid #ADADAD;
		width: 360px;
		height: 35px;
		font-size: 30px;	
	}
	#rebu
	{
		height: 160px;
		background: #D3D3D3;
		font-size: 20px;
		padding: 8px 40px 8px 40px;
		text-align: center;
	}

</style>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.regis-cancel').click(function(){
			history.go(-1);
		});
		$('.regi-sub').click(function(){
			$('#register').submit();
		});
	});
</script>
</head>
<body>
<fieldset class="res" style="margin-top:1%;">
<legend>message</legend>
	<form id="register" action="regischeck.php" method="post">
	  <li>用户名：<input type="logname" name="use"></li><br>
	  <li>邮箱：<input type="mail" name="mail"></li><br>
	  <li>密码：<input type="password" name="passw"></li><br>
	  <li>验证密码：<input type="password" name="passw2"></li><br>
	  <li>性别：<input type="radio" value="female" name="sex">female&nbsp&nbsp&nbsp<input type="radio" value="male" name="sex">male</li><br>
	  <li>是否遵从大雾条例？：<input type="radio" value="yes" name="dawu">我遵从&nbsp&nbsp&nbsp<input type="radio" value="no" name="dawu">我拒绝</li><br>
	  	<a id="rebu" class="regi-sub" name="Submit">注册</a>&nbsp&nbsp&nbsp<a id="rebu" class="regis-cancel">取消</a>
	</form>
</fieldset>
</form>
</body>
</html>