<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	<p>第一种效果</p>
<?php
	//第一种效果
	$str = "初识PHP@#PHP环境搭建与开发工具@#PHP开发基础@#哈哈，我是来打酱油的";
	
	$myArray = explode('@#', $str);
	foreach($myArray as $key=>$values){
		echo "第".$key."章"."&nbsp;&nbsp;".$values."<br>";
	}	
?>
	<p>第二种效果</p>
<?php
	//第二种效果
	$str = "初识PHP@#PHP环境搭建与开发工具@#PHP开发基础@#哈哈，我是来打酱油的";
	
	$myArray = explode('@#', $str);
	foreach($myArray as $key=>$values){
		if($key<3){
			echo "第".$key."章"."&nbsp;&nbsp;".$values."<br>";
		}
	}	
?>

	<p>第三种效果</p>
<?php
	//第三种效果
	$str = "初识PHP@#PHP环境搭建与开发工具@#PHP开发基础@#哈哈，我是来打酱油的";
	
	$myArray = explode('@#', $str);
	foreach($myArray as $key=>$values){
		if($key<3){
			$num = $key + 1;
			echo "第".$num."章"."&nbsp;&nbsp;".$values."<br>";
		}
	}	
?>
</body>
</html>