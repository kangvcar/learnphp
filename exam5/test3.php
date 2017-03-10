<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<table border='1' cellpadding='0' cellspacing='0'><tr>
<?php
/*$arr=array(
"web"=>array(
"weburl"=>"http://www.baidu.com",
"webname"=>"百度一下",
"webconfig"=>"xml"
),
"users"=>array(
"username"=>"用户名",
"password"=>"密码",
"Email"=>"伊妹儿",
)*/
);
 echo "<tr bgcolor='#33ff33'><td>网站</td><td>用户</td></tr>"; 
foreach ($arr as $temp){
   echo "<td>";
   echo "<table >";
      foreach ($temp as $tp){
         echo "<tr bgcolor='#ccff33'><td>".$tp."<tr></td>"; 
   }
echo "</table></td>";
}
?></tr></table>
</body>
</html>