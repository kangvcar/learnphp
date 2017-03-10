<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$test=0;
if($test==''){	//0 数值等于 ''
 echo '<br />1在php中，0即为空'; //被输出
}
if($test===''){	//0 类型不等于 ''
 echo '<br />2在php中，0即为空'; //不被输出
}
if($test==NULL){ //0 数值等于 NULL
 echo '<br />3在php中，0即为空'; //被输出
}
if($test===NULL){ //0 类型不等于 NULL
 echo '<br />4在php中，0即为空'; //不被输出
}
if($test==false){ //0 数值等于 false
 echo '<br />5在php中，0即为空'; //被输出
}
if($test===false){ //0 类型不等于 false
 echo '<br />6在php中，0即为空'; //不被输出
}
?>
</body>
</html>