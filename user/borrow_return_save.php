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
header ('Content-type: text/html; charset=windows-874');
			 
			 
 if($_POST["date"] != ""){ 
	require ('connect.php');
	
		$sql=" update issue set i_date_return='".$_POST["date"]."' ,i_return_remark='".$_POST["remark"]."' 
		where i_id='".$_POST["i_id"]."' " ;
		mysql_query($sql,$conn) or die ("Unable to connect to the database.").mysql_error() ;
		mysql_close($conn);
											
					?>
<script language="javascript">
alert("Successfully registered.");
window.location.href="borrow.php";
</script>
		
<?
			
 	}else{ ?>
<script language="javascript">
alert("Sorry, please complete the information.")
window.location.href="borrow_return.php?i_id=<?=$_POST[i_id]?>";
</script>
<?  }  ?>

</font>
	</body>
</html>
