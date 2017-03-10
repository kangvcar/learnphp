<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	$card = $_POST['id'];
	$long = strlen($card);
	if($long == 18){
		echo "<script>alert('身份证长度正确！');history.back();</script>";
	}else{
		echo "<script>alert('身份证长度不正确！');history.back();</script>";
	}
?>
</body>
</html>