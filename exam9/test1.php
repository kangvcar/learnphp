<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	header("Content-type:text/html; charset=utf8");
	//判断是否有对应的参数传过来
	if(isset($_GET['p'])){			
		$page = $_GET['p'];
	}else{
		$page = 1;
	}
	//读入文本文件到变量 $file
	$file = file_get_contents('f1-utf8.txt');
	//统计字符串长度
	$sum = mb_strlen($file,'utf-8');	
	//计算总页数
	$page_count = ceil($sum/200);
	//截取每页所输出的字符
	$content = mb_substr($file,($page-1)*200,200,'utf-8');	
	//输出内容
	echo "<p>{$content}</p>";
?>	
	
<form action="" method="get">
	<!--输出当前页状态-->
	当前：页次
	<input type="text" name="p" value="<?php echo $page; ?>" style="width: 20px;">
	/
	<?php echo $page_count;?>
	<input type="submit" name="submit" value="转到">
	&nbsp;&nbsp;
	<!--输出跳转链接-->
	<?php
		if($page!=1){
			echo "<a href=test1.php?p=1>首页</a>&nbsp;";
			echo "<a href=test1.php?p=".($page-1).">上一页</a>&nbsp;";
		}
		if($page!=$page_count){
			echo "<a href=test1.php?p=".($page+1).">下一页</a>&nbsp;";
			echo "<a href=test1.php?p={$page_count}>尾页</a>&nbsp;";
		}
	?>
</form>
</body>
</html>