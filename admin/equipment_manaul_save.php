<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<title>MatchingTKD</title>
<head
<META content="MatchingTKD" name=description>
<META content="Sport, ෤�ѹ� , taekwondo" name=Keywords>
		<?  
 header ('Content-type: text/html; charset=windows-874');
 $date=date("Y-m-d");
		require ('connect.php'); 
					for($i=0;$i<count($_FILES["fileUpload"]["name"]);$i++){
								$images = $_FILES["fileUpload"]["tmp_name"][$i];
								$new_images = "$date-".$_FILES["fileUpload"]["name"][$i];
								$img = $_FILES["fileUpload"]["name"][$i];
								list($width, $height, $type, $attr) = getimagesize("$images");
								//$size = $_FILES["fileUpload"]["size"][$i];
								$array_last=explode(".",$_FILES["fileUpload"]["name"][$i]); 
								$c=count($array_last)-1; 
								$lastname=strtolower($array_last[$c]) ; 
						if ($lastname=="gif" or $lastname=="jpg" or $lastname=="jpeg"or $lastname=="png" or $lastname=="pdf") {
								copy($_FILES["fileUpload"]["tmp_name"][$i],"file/".$new_images);
						
										$strSQL2 = "INSERT INTO file_photo  ";
										$strSQL2 .="(fp_file_photo,fp_lname,fp_date,username) VALUES ('".date("Y-m-d") ."-".$img."','$lastname','". date("Y-m-d") ."','".$_POST["username"]."')";
										$objQuery2 = mysql_query($strSQL2);
								
								} else{ 
												echo "<h3>ERROR :  Save is *.gif , *.jpg , *.jpeg , *.png  , *.pdf   only</h3>"; 
								} 								
				}												
?>
								<script language="javascript">
								alert("Save done.");
								window.location.href="user_detail.php?username=<?=$_POST[username]?>";
								</script>