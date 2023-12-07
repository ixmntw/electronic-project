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
  <p><? include('header.php');   include('css/css.php');?>
  </p>
<p>
  <?  require ('connect.php');
	$e_id = $_REQUEST['e_id']; 
	$strSQL = "SELECT * FROM equipment  WHERE  e_id ='$e_id' ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]"); 
	$info = mysql_fetch_array( $objQuery);
	?>
</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="ex-lgradient2">
    <tr >
      <td width="4%" height="38">&nbsp;</td>
      <td width="96%" align="center"><h1 class="style11">เพิ่มข้อมูลอุปกรณ์อิเล็กทรอนิกส์</h1></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="bottom">
	  <form action="equipment_edit_save.php" method="post" enctype="multipart/form-data"name="form1" id="form1"equipment_edit_save.php="equipment_edit_save.php">
        <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0" id="customers"  class="style10">


          <tr>
            <td width="30%" align="center" class="ex-lgradient">ชื่ออุปกรณ์
              <input type="hidden" name="e_id" value="<?=$info[e_id];?> " />            </td><td width="70%" align="center"><input name="e_name" type="text"  value="<?=$info[e_name];?>"  class="select"/></td>
          </tr>
          <tr>
            <td align="center" class="ex-lgradient">เลขครุภัณฑ์</td>
            <td align="center"><label>
              <textarea name="e_detail" class="select3"><?=$info[e_detail];?></textarea>
            </label></td>
          </tr>
          <tr>
            <td align="center" class="ex-lgradient">รูปภาพ</td>
            <td align="left"><p class="style23">
                <input type="hidden" name="image_form_submit" value="1"/>
                <input type="file" name="photo" id="image-upload" multiple="multiple"/>
                <br/>
              สามารถบันทึกไฟล์ .gif , .jpg , .jpeg , .png  , .pdf , .doc , .docx</span> ได้ </p></td>
          </tr>
          <tr>
            <td align="center" class="ex-lgradient">คู่มือ</td>
            <td align="center"><label>
              <? include('richtext/index.php');?>
            </label></td>
          </tr>
        </table>
        <table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="50%"><button class="button button1" type="submit">Save</button></td>
                <td><button class="button button2" type="reset">Cancel</button></td>
              </tr>
        </table>
      </form>
        <p>&nbsp;</p></td>
    </tr>
</table>
  <p>&nbsp;</p>
</body>
</html>
