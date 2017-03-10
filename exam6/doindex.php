<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$n3 = $_POST['n3'];
	
	function lifang($num){
		$sum = 0;
		$sum = $num * $num * $num;
		return $sum;
	}
	
	if(is_numeric($n1) and is_numeric($n2) and is_numeric($n3)){
		echo "第一个数的立方是：".lifang($n1)."<br>";
		echo "第二个数的立方是：".lifang($n2)."<br>";
		echo "第三个数的立方是：".lifang($n3)."<br>";
	}else{
		echo "请输入三个数字";
	}
?>
</body>
</html>