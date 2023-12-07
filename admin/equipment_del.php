<?php 
	require ('connect_array.php'); 
	
	$e_id=$_POST['e_id'][i]; 
		
		$CheckBox = $_POST['Ch_INSERT'];
        if(isset($_POST["SAVE"]))
		{
			if(empty($CheckBox) || $CheckBox == 0 ) {	
				echo "Please Select Checkbox after click Save!!!";	
			}else{
				foreach($_POST['Ch_INSERT'] as $i) 
				{		

					$INSERT ="DELETE FROM equipment  WHERE e_id='{$_POST['e_id'][$i]}'";
					$Q_INSERT = mysqli_query($conn,$INSERT);	
					
					$INSERT2 ="DELETE FROM stock  WHERE e_id='{$_POST['e_id'][$i]}'";
					$Q_INSERT2 = mysqli_query($conn,$INSERT2);						
				}
			}
			if($Q_INSERT)
			{
			?>
				<script language="javascript">
alert("Delete done.");
window.location.href="equipment.php";
</script>

				<?
			}
			    
        }

		?>	