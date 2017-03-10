<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<p>&nbsp;&nbsp;&nbsp;明星班学员名单</p>
<table border='1' cellpadding='10' cellspacing='0'>
<tr>
	<td>学号</td>
	<td>姓名</td>
</tr>
<?php
	$xueyuan = array("07110701"=>"赵本山","07110702"=>"孔卡","07110703"=>"黎明","07110704"=>"成龙","07110705"=>"张曼玉","07110706"=>"陆毅","07110707"=>"高洪波",);
	
	foreach($xueyuan as $key=>$val){
		echo "<tr><td>".$key."</td><td>".$val."</td></tr>";
	}
?>
</table>
</body>
</html>