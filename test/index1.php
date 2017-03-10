<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	$shuzu = array(
	"001" => array("何康健","90"),
	"002" => array("张家辉","30"),
	"003" => array("刘德华","93"),
	"004" => array("成龙","42"),
	);
	
	foreach($shuzu as $key => $val){
		echo $key.": ";
		foreach($val as $k => $v){
			echo "    ".$v;
		}
		echo "<br>";
	}
?>
</body>
</html>