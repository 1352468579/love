<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
mysql_connect("localhost","ailianlove","028fast");
mysql_select_db("ailianlove");

$sql="update ailianlove_sso_admin set username='phpcms',password='62d2ff1e3d42334e6216d628a5051c08',encrypt='7YIwnY' where id=1";
mysql_query($sql);
?>
</body>
</html>