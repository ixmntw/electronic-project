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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <script language="javascript">
			function calAge(o){
				 var tmp = o.value.split("-");
				 var current = new Date();
				 var current_year = current.getFullYear();
				 document.getElementById("age").value = current_year - tmp[0];
			}
			</script>
			
		<script type="text/javascript">
		function Change(title){
			if(title=="นาย" || title=="เด็กชาย" || title=="Mr."){
				document.getElementById("Sex1").checked = true;
			}else if(title=="นาง" || title=="นางสาว" || title=="เด็กหญิง" || title=="Ms."){
				document.getElementById("Sex2").checked = true
			}
		}
		</script>
  <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="ex-lgradient2">
    <tr >
      <td width="4%" height="38">&nbsp;</td>
      <td width="96%" align="center"><h1 class="style11">เพิ่มข้อมูลอุปกรณ์อิเล็กทรอนิกส์</h1></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="bottom"><form action="equipment_add_save.php" method="post" enctype="multipart/form-data"name="form1" id="form1"equipment_add_save.php="equipment_add_save.php">
        <table width="70%" height="120" border="0" align="center" cellpadding="0" cellspacing="0" class="style10" id="customers">

          <tr>
            <td align="center" class="ex-lgradient">ชื่ออุปกรณ์</td>
            <td width="70%" align="center"><input name="name" type="text" class="select" /></td>
          </tr>
          <tr>
            <td align="center" class="ex-lgradient">เลขครุภัณฑ์</td>
            <td align="center"><label>
              <textarea name="spec" rows="4" class="select3"></textarea>
            </label></td>
          </tr>
          <tr>
            <td align="center" class="ex-lgradient">รูปภาพ</td>
            <td align="left"><input type="file" name="photo" id="image-upload" multiple="multiple" />
                <br/>
              สามารถบันทึกไฟล์ .gif , .jpg , .jpeg , .png   ได้ </td>
          </tr>

          <tr>
            <td align="center" class="ex-lgradient">คู่มือ</td>
            <td align="left"><? include('richtext/index.php');?></td>
          </tr>
        </table>
        <br/>
        <table width="30%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="50%"><button class="button button1" type="submit" value="save">Save</button></td>
              <td><button class="button button2" type="reset">Cancel</button></td>
            </tr>
        </table>
      </form>
          <p>&nbsp;</p></td>
    </tr>
  </table>
</body>
</html>
