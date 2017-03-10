<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>dohkj</title>
</head>

<body>
<?php
	if (empty($_POST['n1'])){
		echo "第一个操作数没有填写<br>";
	}elseif(is_numeric($_POST['n1'])){
		if(is_int($_POST['n1'] + 0)){
			;
		}else{
			echo "第一个操作数不是整数<br>";
		}
	}else{
		echo "第一个操作数不是整数<br>";
	}
	
	if (empty($_POST['n2'])){
		echo "第二个操作数没有填写<br>";
	}elseif(is_numeric($_POST['n1'])){
		;
	}else{
		echo "第二个操作数不是数字<br>";
	}
	
	if (!empty($_POST['n1']) && !empty($_POST['n2'])){
		echo "两个文本框的填写了东西";
	}
?>
</body>
</html>