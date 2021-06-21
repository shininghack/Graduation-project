<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<body>
	<script language="javascript">
		//this is a javascript test
		document.write("js test example.")
		x=9999999999999999999999999*999
		alert(x)
		function clickme(){
			str="This is a pig."
			alert(str)
		}
		function check(){
			if(confirm("are you a pig?")==true){
				alert("yes,you are!")
			}else{
				if(confirm("are you a pig?")==true){	
					alert("yes,you are!")
				}else{
					if(confirm("are you a pig?")==true){
					alert("yes,you are!")
					}else{
						if(confirm("are you a pig?")==true){
						alert("yes,you are!")
						}else{
							if(confirm("are you a pig?")==true){
							alert("yes,you are!")
							}else{
								alert("OK SORRY.")
							}
						}
					}
				}
			}
		}
	document.close()
	</script>
	<p><a href="#" onClick="clickme()">Clickthis</a></p>
	<p><a href="#" onClick="check()">Check</a></p>
	
	
</body>
</html>