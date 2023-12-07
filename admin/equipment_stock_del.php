<?php 
	require ('connect_array.php'); 
	
	$in_id=$_POST['in_id'][i]; 
		
		$CheckBox = $_POST['Ch_INSERT'];
        if(isset($_POST["SAVE"]))
		{
			if(empty($CheckBox) || $CheckBox == 0 ) {	
				echo "Please Select Checkbox after click Save!!!";	
			}else{
				foreach($_POST['Ch_INSERT'] as $i) 
				{						
					$INSERT ="DELETE FROM stock  WHERE in_id='{$_POST['in_id'][$i]}'";
					$Q_INSERT = mysqli_query($conn,$INSERT);						
				}
			}
			if($Q_INSERT)
			{
			?>
<script language="javascript">
alert("Delete done.");
window.location.href="equipment_stock_add.php?e_id=<?=$_POST[e_id2]?>";
</script>

				<?
			}
			    
        }

		?>	