<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<?php
session_start();
if(empty($_SESSION["name"])){
	$_SESSION["name"]=date("Y-m-d H:i:s");
	echo "first";
}else{
	$_SESSION["name"]=date("Y-m-d H:i:s");
	echo $_SESSION["name"];
}
		echo "now".date("Y-m-d H:i:s");
	<body>
</body>
</html>