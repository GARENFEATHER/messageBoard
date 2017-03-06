<?php 
session_start();
if(isset($_SESSION["use"]))
{
	session_destroy();
	echo"<script>alert('退出成功！');location.href='main.php';</script>";
}
else echo"<script>alert('你还未登录！');location.href='main.php';</script>";

 ?>