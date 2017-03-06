<?php session_start(); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
	p.banben{
		text-align: center;
		font-size: 24px;
		font-family: "fantasy","Verdana";
	}
	h1{
		color: #CD3333;
	}
	p.thr
	{
		text-align: center;
		font-size: 22px;
	}
	.welcome
	{
		text-align: center;
	}
</style>
<script type="text/javascript">
	function language(lan)
	{
		var x=lan.innerHTML;
		if(x=="中文")
		{
			document.getElementById("title").innerHTML="大雾留言系统";
			document.getElementById("new to").innerHTML="发表新话题";
			document.getElementById("my").innerHTML="查看我的发言";
			document.getElementById("present").innerHTML="查看当前话题";
		}
		else
		{
			document.getElementById("title").innerHTML="DAWU' COMMENTS SYSTEM";
			document.getElementById("new to").innerHTML="NEW TOPIC";
			document.getElementById("my").innerHTML="MY MESSAGES";
			document.getElementById("present").innerHTML="PRESENT TOPICS";
		}
	}
	function over(obj)
	{

	}
</script>
</style>
</head>
<body >
<p class="banben"><a onclick="language(this)" style="
		text-decoration: underline;">中文</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a onclick="language(this)" style="
		text-decoration: underline;">English</a></p>
<p class="banben"><a href="login.php">Login</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="register.php">Register</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="Logout.php">Logout</a></p>
<h1 style="text-align:center;font-family: "fantasy";" id="title">大雾留言系统</h1>
<p style="text-align: center;"><img src="web.jpg" width="720px" height="405px"/></p>

<p class="thr" style="font-family:"Verdana";">
<a href="checknow.php" id="present">查看当前话题</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="new.php" id="new to">发表新话题</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="checkmymessages.php" id="my">查看我的发言</a></p>
<?php 
if(isset($_SESSION["use"]))
{
	echo "<p class=welcome>欢迎你，$_SESSION[use]</p>";
}
else
{
	echo"<p class=welcome>欢迎你，游客</p>";
}

 ?>
<br/>
</body>
</html>