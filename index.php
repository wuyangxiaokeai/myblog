<!!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		
	</body>
</html>
<?php 
	$conn = mysql_connect('localhost','root','wy6186291');
	if($conn){
		echo '连接成功';
	}else{
		echo '连接失败';
	}
?>