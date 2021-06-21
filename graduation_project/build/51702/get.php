<?php 
$username=$password=" ";
if(isset($_GET["username"])){
	$username=$_GET["username"];
}else{
	?>
	<script>alert('未传入username值')</script>
<?php
}
if(isset($_GET["password"])){
	$password=$_GET["password"];
}else{
?>
	<script>alert('未传入password值')</script>
<?php
}
echo "姓名:".$username;
echo "<br>";
echo "密码:".$password;


?>