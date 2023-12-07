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
<?
 header ('Content-type: text/html; charset=windows-874');
require('connect.php');
if($_REQUEST[status]==0){
$sql1="DELETE FROM issue_out WHERE o_id='$_REQUEST[o_id]'";
mysql_query($sql1,$conn) or die ("Unable to connect to the database.").mysql_error() ;
mysql_close($conn);
?>
<script language="javascript">
alert("Delete Done.");
window.location.href="borrow_edit.php?i_id=<?=$_REQUEST[i_id]?>";
</script>
<? }else{ ?>
<script language="javascript">
alert("Cannot be deleted");
window.location.href="borrow_edit.php?i_id=<?=$_REQUEST[i_id]?>";
</script>
<? } ?>

</body>
</html>
