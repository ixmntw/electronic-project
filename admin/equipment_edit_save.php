<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>ระบบยืมอุปกรณ์อิเล็คทรอนิกส์</title>
<head>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=description>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=Keywords>
</head>

		<?  
 header ('Content-type: text/html; charset=windows-874');
		require ('connect.php'); ?>
<?php 


			$date=date("Y-m-d");
				$photo=$_FILES['photo']['tmp_name']; 
				$photo_name= "$date-".$_FILES['photo']['name']; 
				$photo_size=$_FILES['photo']['size']; 
				$photo_type=$_FILES['photo']['type']; 
			if(!$photo){
					$sql=" update equipment set e_date='". date("Y-m-d") ."',e_name='".$_POST["e_name"]."',
					e_detail='".$_POST["e_detail"]."',e_manual='".$_POST["detail"]."'
					where e_id='".$_POST["e_id"]."' " ;
					mysql_query($sql,$conn) or die ("Unable to connect to the database.").mysql_error() ;
					mysql_close($conn);	
				}
				if($photo){
				$array_last=explode(".",$photo_name); 
				$c=count($array_last)-1; 
				$lastname=strtolower($array_last[$c]) ; 
					if ($lastname=="gif" or $lastname=="jpg" or $lastname=="jpeg" or $lastname=="png") {
					copy($photo,"image/".$photo_name); 
				
						$sql=" update equipment set e_date='". date("Y-m-d") ."',e_name='".$_POST["e_name"]."',
						e_detail='".$_POST["e_detail"]."',  photo='$photo_name',e_manual='".$_POST["detail"]."'
						where e_id='".$_POST["e_id"]."' " ;
						mysql_query($sql,$conn) or die ("Unable to connect to the database.").mysql_error() ;
						mysql_close($conn);					
				
						} else{ 
									echo "<h3>ERROR :Save is *.gif , *.jpg , *.jpeg , *.png only</h3>"; 
						} 	
					}
								?>
								<script language="javascript">
								alert("Update done.");
								window.location.href="equipment.php";
								</script>	
