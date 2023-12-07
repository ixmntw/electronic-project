<?php
session_start();

require ('connect.php');

$code = "OR";
$yearMonth = date("ym");

require ('connect.php');

//query MAX ID 
$sql = "SELECT MAX(i_id) AS last_id FROM issue";
$qry = mysql_query($sql) or die(mysql_error());
$rs = mysql_fetch_assoc($qry);
$maxId = substr($rs['last_id'], -4);  //?????????????????????????????? ???????????????????????????
//$maxId = 237;   //<--- ????????????????????? ????????????? ??! ?????????????
$maxId = ($maxId + 1); 

$maxId = substr("0000".$maxId, -4);
$nextId = $code.$yearMonth.$maxId;


  $Total = 0;
  $SumTotal = 0; 
$i=0; 
	if($_POST["detail"]!="" and $_POST["location"]!="" and $_POST["date"]!="" and $_POST["date_plan"]!=""){
		
		
			$query="INSERT INTO issue (i_id, i_date_request, i_date , i_time ,i_detail, i_location , i_date_return_plan , i_time_return_plan , id) 	
			values ('".$nextId."','". date("Y-m-d") ."','".$_POST["date"]."' ,'".$_POST["time"]."' ,'".$_POST["detail"]."' ,
			'".$_POST["location"]."','".$_POST["date_plan"]."' ,'".$_POST["time_plan"]."' ,'".$_POST["id"]."' ) ";						
			$objQuery = mysql_query($query) or die (mysql_error() . "<br/>Error Query [".$query."]");
				
$strOrderID = mysql_insert_id();  	

  //for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  //{
	  
	  foreach($_POST['strProductID'] as $row=>$art ){
 	  $qty = mysql_real_escape_string($_POST['qty'][$row]);
	  $strProductID = mysql_real_escape_string($_POST['strProductID'][$row]);
			$strSQL = "
			INSERT INTO issue_out (o_qty, e_id,i_id)
			VALUES ('".$qty."','".$strProductID."','".$nextId."' ) 
		  ";
		  $objQuery = mysql_query($strSQL) or die (mysql_error() . "<br/>Error Query [".$strSQL."]");
	}	
	//} 
	unset($_SESSION['strProductID']);
	unset($_SESSION['strQty']);
	
	$strSQL3 = "SELECT * FROM user WHERE status='1' ";
	$objQuery3 = mysql_query($strSQL3) or die ("Error Query [".$strSQL3."]");
	$info3 = mysql_fetch_array( $objQuery3 );
	
	$strTo = "$info3[u_email]";
		$strSubject = "Request for borrowing equipment";
		$strHeader = "From: ????????????????????????????";
		$strMessage = "Hi K.$info3[name]. Have to borrow new electronic equipment.. ";
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
			alert("Please back for fill in a data.");
			window.location.href="order_confirm.php";
			</script>
		<?
	}
	
		
mysql_close();
   	
?>
		<script language="javascript">
		alert("Done Save");
		window.location.href="borrow_detail.php?i_id=<?=$nextId?>";
		</script>
		

