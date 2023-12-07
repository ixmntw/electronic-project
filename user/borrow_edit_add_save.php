<?php
session_start();

require ('connect.php');
	  foreach($_POST['e_id'] as $row=>$art ){
 	  $o_qty = mysql_real_escape_string($_POST['o_qty'][$row]);
	  $e_id = mysql_real_escape_string($_POST['e_id'][$row]);
	  
		if($e_id!="" and $o_qty!=""){  
			$strSQL = "
			INSERT INTO issue_out (o_qty, e_id,i_id)
			VALUES ('".$o_qty."','".$e_id."','".$_POST[i_id2]."' )";
		  	$objQuery = mysql_query($strSQL) or die (mysql_error() . "<br/>Error Query [".$strSQL."]");		
			mysql_close();
   	
?>
		<script language="javascript">
		alert("Done Save");
		window.location.href="borrow_edit.php?i_id=<?=$_POST[i_id2]?>";
		</script>
		
		<?  }else{  ?>
					<script language="javascript">
					alert("Please go back and fill out the information first.")
					window.location.href="borrow_edit.php?i_id=<?=$_POST[i_id2]?>";
					</script>
		<? } ?>
			
		
	<? } 	?>
