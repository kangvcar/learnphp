<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>求n值</title>
</head>

<body>

<?php
	$a = 0;					//定义$a
	for($n=1;$n>0;$n++){	//无限循环，知道if语句成立则结束循环
		$a += $n;
		if($a>=1000){	//判断$a>=1000时跳出循环
			//echo $n;	//输出结束循环前的n值
			break;		//跳出循环
		}
	}
?>

<p>1+2+3+4+···+n >= 1000</p>
<p>n的最小值为：<?php echo $n; ?></p>
</body>
</html>