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
			 
			 
 if($_POST["name"] != ""){ 
	require ('connect.php');
	
			    $date=date("Y-m-d");
				$photo=$_FILES['photo']['tmp_name']; 
				$photo_name= "$date-".$_FILES['photo']['name']; 
				$photo_size=$_FILES['photo']['size']; 
				$photo_type=$_FILES['photo']['type']; 
				
			
											if(!$photo){
											
											
											$strSQL = "INSERT INTO equipment ";
											$strSQL .="(e_date,e_name,e_detail,e_manual)
											VALUES ('". date("Y-m-d") ."','".$_POST["name"]."','".$_POST["detail"]."'
											,'".$_POST["spec"]."')";
											$objQuery = mysql_query($strSQL);
											mysql_close($conn);
											//echo"<script>alert('�к�..�ӡ�����������������������...!!..');<\script>";
											}
											if($photo){
											$array_last=explode(".",$photo_name); 
											$c=count($array_last)-1; 
											$lastname=strtolower($array_last[$c]) ; 
											if ($lastname=="gif" or $lastname=="jpg" or $lastname=="jpeg" or $lastname=="png") {
											copy($photo,"image/".$photo_name); 
											
											$strSQL = "INSERT INTO equipment ";
											$strSQL .="(e_date,e_name,e_detail,e_manual,photo)
											VALUES ('". date("Y-m-d") ."','".$_POST["name"]."'
											,'".$_POST["spec"]."','".$_POST["detail"]."','$photo_name' )";
											$objQuery = mysql_query($strSQL);
											mysql_close($conn);
											} else{ 
											echo "<h3>ERROR : Save is *.gif , *.jpg , *.jpeg , *.png  only</h3>"; 
											} 		
											}
					?>
<script language="javascript">
alert("Successfully registered.");
window.location.href="equipment.php";
</script>
		
<?
			
 	}else{ ?>
<script language="javascript">
alert("Sorry, please complete the information.")
window.location.href="equipment_add.php";
</script>
<?  }  ?>

</font>
	</body>
</html>
