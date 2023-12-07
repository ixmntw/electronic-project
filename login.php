<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>ระบบยืมอุปกรณ์อิเล็คทรอนิกส์</title>
<head>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=description>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=Keywords>
</head>
<body>

<?php
 if( $_POST['username']!='' &&  $_POST['password']!='' ){
 require('connect.php');  //�����Ź�����Ҩҡ�͹�Դ���������������
 $username = isset($_POST['username']) ? $_POST['username'] : '';
 $password = isset($_POST['password']) ? $_POST['password'] : '';
 $sql= "SELECT * FROM user  WHERE username = '".mysql_real_escape_string($username)."'  AND password = '".mysql_real_escape_string($password)."'";
 $result = mysql_query($sql) or die('Unable to connect to the database  Error : '. mysql_error());
 $row = mysql_fetch_assoc($result);
 if(!$row)
 {
 
?>
		<script language="JavaScript">
        alert("Sorry !! Password  incorrect ")
        window.location.href = "index.php";
       </script>
<?
 }
 else
 {
   //���ҧ SESSION �������˹����� ����ͧ��õ�Ǩ�ͺ�����ż����㹢�й��
   $_SESSION["username"]  = $row["username"];
   $_SESSION["password"]  = $row["password"];
   session_write_close();//����ش��÷ӧҹ�ͧ SESSION �˹�ҹ��
      if($row[status]==1){
  ?>
 <script>alert('LOGIN Completed');window.location='admin/index.php';</script>
  <?
}

  if($row[status]==2){
  ?>
  <script>alert('LOGIN Completed');window.location='user/index.php';</script>
  <?
}

   if($row[status]==0){
unset ( $_SESSION["username"] );
unset ( $_SESSION["password"] );
session_destroy();
  ?>
 <script>alert('Please wait for the HR officer to check.');window.location='index.php';</script>
  <?
}
 }	
 mysql_close();//�Դ����������Ͱҹ������
?>
  <?
}else{ ?>
 <script>alert('Go back and fill out the information first.');window.location='form_login_player.php';</script>
  <?
}
?>

</body>
</html>
