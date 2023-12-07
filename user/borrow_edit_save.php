<?php

require ('connect.php');
 
		
			
		$sql=" update issue set i_date='".$_POST["date"]."',i_time='".$_POST["time"]."',i_detail='".$_POST["detail"]."',
		i_location='".$_POST["location"]."',i_date_return_plan='".$_POST["date_plan"]."',
		i_time_return_plan='".$_POST["time_plan"]."',i_status='0'
		where i_id='".$_POST["i_id"]."' " ;
		mysql_query($sql,$conn) or die ("Unable to connect to the database.").mysql_error() ;
		
				
	  foreach($_POST['o_id'] as $row=>$art ){
 	  $qty = mysql_real_escape_string($_POST['qty'][$row]);
	  $o_id = mysql_real_escape_string($_POST['o_id'][$row]);
		  
			$strSQL = " update issue_out set o_qty='".$qty."' where o_id='".$o_id."'  ";
		  $objQuery = mysql_query($strSQL) or die (mysql_error() . "<br/>Error Query [".$strSQL."]");
		}
			 	
		
mysql_close();
   	
?>
		<script language="javascript">
		alert("Done Save");
		window.location.href="borrow_edit.php?i_id=<?=$_POST[i_id]?>";
		</script>
		

