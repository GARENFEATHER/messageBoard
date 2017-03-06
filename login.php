<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
	.res{
		margin: 20%;
		font-size: 30px;
		font-family: helvetica,verdana;
	}
	input[type="logname"]
	{
		background-color: #CCCCCC;
		border:1px  solid #ADADAD;
		width: 250px;
		height: 35px;
		font-size: 20px;
	}
	input[type="password"]
	{
		background-color: #CCCCCC;
		border:1px  solid #ADADAD;
		width: 360px;
		height: 35px;
		font-size: 30px;	}
	input[type="submit"]
	{
		width:16%;
		font-size: 20px;
	}
	.sub
	{
		width:16%;
		font-size: 20px;
	}
	#logbu
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
		$('.cancel').click(function(){
			history.go(-1);
		});
		$('.loginnow').click(function(){
			$('#login').submit();
		});
	});
</script>
</head>
<body>
<fieldset class="res" style="margin-top:12%;">
<legend>message</legend>
	<form id="login" class="login" action="logcheck.php" method="post">
	<br>
	  <li>用户名：<input type="logname" name="use"></li><br>
	  <li>密码：<input type="password" name="passw"></li><br>
	  <li>
	  <a class="loginnow" id="logbu">登陆</a>
	  <a class="cancel" id="logbu">取消</a>
	  </li>
	  <br>
	</form>
</fieldset>
</form>
</body>
</html>