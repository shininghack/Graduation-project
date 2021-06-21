<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<?php
$username=$_POST["username"];
$password=$_POST["password"];
$confirmpassword=$_POST["confirmpassword"];
if($password==$confirmpassword){
	echo "register success!";
}else{
	?>
	<script>alert("password does not match!")
	window.close()
	window.open("post.php")
	</script>
	<?php
}
?>
<body>
</body>
</html>