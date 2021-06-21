<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<?php
//setcookie("Cookie","www.baidu.com");
//setcookie("Cookie","www.baidu.com",time()+60);
$a=0;
if(!isset($_COOKIE["visittime"])){
	setcookie("visittime",date("y-m-d H:i:s"));
	setcookie("visitcount");
	echo "welcome first join this.";
		//$a=$a+1;
}else{
	setcookie("visittime",date("y-m-d H:i:s"));
		
		echo "<br>";
	$a=$_COOKIE["visitcount"]+1;
	setcookie("visitcount",$a);
	echo "Last visit time:".$_COOKIE["visittime"]."cishu".$_COOKIE["visitcount"];
}	
	echo "Current visit time:".date("y-m-d H:i:s");
	
?>
<body>
</body>
</html>