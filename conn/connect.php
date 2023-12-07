<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<title>Sport Smile</title>
</head>

<body>

<?php
$host="localhost";
$user="programm_electronic";
$pass="Wi21042531";
$dbname="programm_electronic";		
$conn=mysql_connect($host,$user,$pass);
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
	if(!$conn)
	die("ไม่สามารถติดต่อ My SQL ได้");
	mysql_select_db($dbname,$conn)
	or die("ไม่สามารถเลือกฐานข้อมูลได้");
?>
</body>
</html>
