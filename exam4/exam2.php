<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	$sum = 0;
	for ($i=0; $i<=100; $i++){
		if ($i%2 !== 0){
			$sum += $i;
		}
	}
	echo "计算1—100所有奇数的和结果是：".$sum;
?>
</body>
</html>