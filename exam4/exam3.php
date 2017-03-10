<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	$sum = 0;
	for ($i=1; $i<=10; $i++){
		$sum += $i;
	}
	echo "计算 1+2+3……+10 的结果是:".$sum;
?>
</body>
</html>