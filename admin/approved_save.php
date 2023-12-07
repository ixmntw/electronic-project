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
			 
			 
	require ('connect.php');
	
	$strSQL3 = "SELECT * FROM user WHERE id='$_POST[id]' ";
	$objQuery3 = mysql_query($strSQL3) or die ("Error Query [".$strSQL3."]");
	$info3 = mysql_fetch_array( $objQuery3 );
	
	if($_POST[app]==1){
		$sql=" update issue set i_status='1' , i_remark='$_POST[remark]'
		where i_id='".$_POST["i_id"]."' " ;
		mysql_query($sql,$conn) or die ("Unable to connect to the database.").mysql_error() ;
		
		$strTo = "$info3[u_email]";
		$strSubject = "Approval for borrowing equipment";
		$strHeader = "From: ระบบยืมอุปกรณ์อิเล็กทรอนิกส์";
		$strMessage = "Hi K.$info3[name]. Your request to borrow equipment has been approved. ";
		$flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader);  // @ = No Show Error //
		if($flgSend)
		{ 
			echo "Email Sending.";
		}
		else
		{
			echo "Email Can Not Send.";
		}
	
	}
	if($_POST[app]==2){
		if($_POST[remark]!=""){
		$sql=" update issue set i_status='2' , i_remark='$_POST[remark]'
		where i_id='".$_POST["i_id"]."' " ;
		mysql_query($sql,$conn) or die ("Unable to connect to the database.").mysql_error() ;
		
		$strTo = "$info3[u_email]";
		$strSubject = "Approval for borrowing equipment";
		$strHeader = "From: ระบบยืมอุปกรณ์อิเล็กทรอนิกส์";
		$strMessage = "Hi K.$info3[name]. Your request to borrow equipment was not approved because $_POST[remark] ";
		$flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader);  // @ = No Show Error //
		if($flgSend)
		{ 
			echo "Email Sending.";
		}
		else
		{
			echo "Email Can Not Send.";
		}
	
	}else{ ?>
	<script language="javascript">
	alert("Please. Fill in Note.");
	window.location.href="approved.php?i_id=<?=$_POST[i_id]?>";
	</script>
<? }}
		mysql_close($conn);

?>
											
	
<script language="javascript">
alert("Successfully registered.");
window.location.href="index.php";
</script>
		

</body>
</html>
