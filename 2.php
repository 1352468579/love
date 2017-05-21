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

$sql="select * from ailianlove_sso_admin";
$row=mysql_query($sql);
print_r(mysql_fetch_array($row));



$result = mysql_query("SHOW TABLES");
while($row = mysql_fetch_array($result))
{
echo $row[0]."<br />";
}
mysql_free_result($result);
?>
</body>
</html>