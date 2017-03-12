<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	@$conn = mysql_connect('localhost','root','');
	$select_db = mysql_select_db('db_stu');
	$charset = mysql_query('set names utf8');
	
	$sql = "select * from tb_stuinf";
	$rel = mysql_query($sql);
	echo "<table border='1'>";
	echo "<tr><td>学号</td><td>姓名</td></tr>";
	while($r = mysql_fetch_array($rel)){
		echo "<tr><td>$r[xh]</td><td>$r[xm]</td></tr>";
	}
	echo "</table>";
?>
</body>
</html>