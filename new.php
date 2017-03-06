<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
	form.all{
		margin-left: 25%;
		margin-top: 5%;
		font-size: 28px;
	}
	input[type="poster"]
	{
		background-color: #CCCCCC;
		border:1px  solid #ADADAD;
		width: 200px;
		height: 30px;
		font-size: 20px;
	}
	input[type="title"]
	{
		background-color: #CCCCCC;
		border:1px  solid #ADADAD;
		width: 450px;
		height: 35px;
		font-size: 30px;	}
	input[type="submit"]
	{
		width:17%;
		height:7%;
		font-size: 16px;
	}
	#getnew
	{
		background-color: #A2B5CD;
		padding: 10px 40px 10px 40px;
		font-size: 20px;
	}
</style>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.up').click(function(){
		$('.all').submit();
	});
	$('.cancel').click(function(){
		alert("话题已取消！");
		location.href="main.php";
	});
});
</script>
</head>
<body>
<form class="all" action="newtopic.php" method="post">
	主题：<br><input type="title" name="title" value="[]"><br><br>
	作者：<br><input type="poster" name="name" ><br><br>
	内容：<br><textarea name="content" rows="15" cols="80"></textarea><br><br>
	<a class="up" id="getnew">发表新主题</a>
	<a class="cancel" id="getnew">取消</a>
</form>

</body>
</html>