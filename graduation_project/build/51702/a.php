<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
	<body>
		<?php
		$a = 0;
		$b=2;
		$c="Whatever is worth doing well";
			if ($a){
				echo "nice!";
			}else{
				echo "sb!";
					}
		function aaa($a,$b=5){
			$a=10;
			$a+=5;
		}
			if($a==null && $a===null){
				echo "yes";
			}else{
				echo "no";
			}
		function sub($c){
			$c1=substr($c,0,17);
			return $c1;
		}
		aaa($a);
		echo "<br>";
		echo $a;
		echo "<br>";
		$c1=sub($c);
		echo $c1;
		echo "<br>";
		echo "you are a pig!";
		echo "<br>";
		echo date("Y-m-d H:i:s",strtotime("-7 days"));
		echo "<br>";
		echo time();
		echo "<br>";
		echo strtotime("now");
		echo "<br>";
		//var_dump(getdate());
		echo "<br>";
		?>
	<script>
		document.write("this is a javascript test!");
		function Click(){
			alert("check your name,please reset your pass!");
		}
		function Choose(){
			if(confirm("Are you sure delete the data?")==true){
				alert("delete complete!")
			}
		}
	</script>
		<p><a href=# onclick="Click()">click me</a></p>
		<b href="a" onclick="Choose()">choose</b>
	</body>
</html>