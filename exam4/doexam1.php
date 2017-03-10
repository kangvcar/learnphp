<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style type="text/css">
body,td,th {
	font-family: Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size: 12px;
}
</style>
</head>

<body>
<?php
	$n1 = $_POST['n1'];
	$sub = $_POST['submit'];

	function jc($num){		//定义一个计算阶乘的函数jc()
		$sum = 1;
		for($i=$num; $i>0; $i--){
			$sum *= $i;		//定义阶乘算法
		}
		return $num."的阶乘结果是：".$sum;		//结果返回
	}
	
	if ($n1 != null){				//判断是否为空
		if(is_numeric($n1)){		//判断是否为数字
			if (is_int($n1 + 0)){	//判断是否为整数
				if ($n1 > 0){			//判断整数是否大于0
					echo jc($n1);		//调用函数jc()计算阶乘结果
				}elseif ($n1 == '0'){		//判断数字是否等于0
					echo $n1."的阶乘结果是：1";			//输出结果1
				}else{					//判断数字是否小于0
					echo "<script>alert('请输入一个正整数');history.back();</script>";
				}
			}else{
				echo "<script>alert('请输入一个整数');history.back();</script>";	
			}
		}else{						//判断输入的是否为数字
			echo "<script>alert('请输入一个整数');history.back();</script>";
		}
	}else{
		echo "<script>alert('请输入一个整数');history.back();</script>";
	}
?>
</body>
</html>