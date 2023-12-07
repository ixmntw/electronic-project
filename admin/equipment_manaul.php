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
  <p><? include('header.php');   include('../css/css.php');?>
  </p>
  <p>
    <script language="JavaScript" type="text/javascript">
			function calAge(o){
				 var tmp = o.value.split("-");
				 var current = new Date();
				 var current_year = current.getFullYear();
				 document.getElementById("age").value = current_year - tmp[0];
			}
			</script>
    <script type="text/javascript">
		function Change(title){
			if(title=="นาย" || title=="เด็กชาย"){
				document.getElementById("Sex1").checked = true;
			}else if(title=="นาง" || title=="นางสาว" || title=="เด็กหญิง"){
				document.getElementById("Sex2").checked = true
			}
		}
		</script>
    <?php

 require ('connect.php');
	$strSQL = "SELECT * FROM equipment  WHERE e_id='$_REQUEST[e_id]' ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$Total_amount=0;
	?>
</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="ex-lgradient2">
    <tr >
      <td height="38" align="center"><h2 class="style11">เพิ่มคู่มือ</h2></td>
    </tr>
    <tr>
      <td align="center" valign="top"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" id="customers" class="style10">
        <tr class="ex-lgradient">
          <td width="14%" align="center">รูปภาพ</td>
          <td width="39%" align="center"> ชื่อ</td>
          <td width="21%" align="center">เลขครุภัณฑ์</td>
        </tr>
        <? $i = 0; while($info = mysql_fetch_array( $objQuery )) {  ?>
        <tr>
          <td height="41" align="center" valign="middle" bordercolor="#CCCCCC"><div class="zoom"><img src="image/<?=$info[photo];?> "  width="120" /></div></td>
          <td align="center"><?=$info[e_name];?>
              <input type="hidden" name="e_id[]" value="<?=$info['e_id'];?>" /></td>
          <td align="center"><?=$info[e_detail];?></td>
        </tr>
        <? }?>

      </table>
        <p>&nbsp;</p>
      <form action="user_add_picture_save.php" method="post" enctype="multipart/form-data"name="form1" id="form1"user_add_picture_save.php="user_add_picture_save.php">
        <table width="50%" border="0" cellpadding="0" cellspacing="0">

          <tr>
            <td width="24%">รูปภาพ/ไฟล์</td>
            <td width="76%"><p class="style23"><span class="style44">
              <input type="hidden" name="username" value="<?=$_REQUEST[username];?>"/>
              <input type="file" name="fileUpload[]" id="image-upload" multiple="multiple" />
            </span></p>
              <span class="style44">
              <p class="style23 style13 style18"><span class="style10 ">สามารถบันทึกไฟล์ .gif , .jpg , .jpeg , .png  , .pdf </span> ได้ </p>
            </span></td>
          </tr>
          <tr>
            <td colspan="2"><table width="60%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="50%"><button class="button button1" type="submit" value="save">Add</button></td>
                <td><button class="button button2" type="submit">Cancel</button></td>
              </tr>
            </table></td>
          </tr>
        </table>
        </form></td>
    </tr>
</table>
<p align="center">&nbsp;</p>
</body>
</html>
