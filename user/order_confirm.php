
<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>ระบบยืมอุปกรณ์อิเล็คทรอนิกส์</title>
<head>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=description>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=Keywords>

</head>

<p><?  include('header.php');  include('css/css.php');  require ('connect.php'); ?></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="frmMain" method="post" action="order_confirm_save.php""" enctype="multipart/form-data" OnSubmit="return onSave();" order_confirm_save.php="order_confirm_save.php"  id="box">

  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center"><table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="ex-lgradient3">
        <tr >
          <td height="38" align="center"><h1 class="style11">ทำรายการยืมอุปกรณ์อิเล็กทรอนิกส์</h1></td>
        </tr>
        <tr>
          <td align="center" valign="bottom">
		  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" id="customers" class="style10">
            <tr>
              <td width="27%">&nbsp;</td>
              <td colspan="2">&nbsp;</td>
              <td width="9%" align="center">วันที่</td>
              <td width="18%"><? echo date("Y-m-d"); ?></td>
            </tr>
            <tr>
              <td>ชื่อ - นามสกุล </td>
              <td colspan="2"><? echo "$rs[name]"; echo " ";echo "$rs[lname]";?>
                <input type="hidden" name="id" value="<?=$rs[id];?>" />
              </td>
              <td align="center">ตำแหน่ง</td>
              <td><?=$rs[position];?></td>
            </tr>
            <tr>
              <td>หน่วยงาน</td>
              <td width="26%"><?=$rs[department];?></td>
              <td colspan="2">เบอร์โทรศัพท์ที่ติดต่อได้ (เบอร์โต๊ะ) </td>
              <td><?=$rs[u_tel];?></td>
            </tr>
            <tr>
              <td>มีความประวงค์จะขอยืมพัสดุเพื่อ</td>
              <td colspan="4"><textarea name="detail" rows="4" class="select2"></textarea></td>
            </tr>
            <tr>
              <td>วันที่ยืม</td>
              <td colspan="2">
                <input type="date" name="date"  class="select"/>
             </td>
              <td align="center">เวลา</td>
              <td>
                <input type="time" name="time" class="select" />
             </td>
            </tr>
            <tr>
              <td>สถานที่ใช้งาน</td>
              <td colspan="4"><textarea name="location" rows="4" class="select2"></textarea></td>
              </tr>
            <tr>
              <td>กำหนดส่งคืน</td>
              <td colspan="2"><label>
                <input type="date" name="date_plan" class="select" />
              </label></td>
              <td align="center">เวลา</td>
              <td><label>
                <input type="time" name="time_plan" class="select" />
              </label></td>
            </tr>
          </table>
          <p><span class="style10">จำนวนรายการสั่งซื้อทั้งหมด <? echo $Rows;?> รายการ</span></p>
            <table width="95%" id="customers">
              <tr>
                <th width="11%" align="center"><div align="center">ลำดับ</div></th>
                <th width="44%" align="center"><div align="center">รายการ</div></th>
                <th width="17%" align="center"><div align="center">เลขครุภัณฑ์</div></th>
                <th width="19%" align="center"><div align="center">จำนวน</div></th>
                <th width="9%" align="center">&nbsp;</th>
              </tr>
              <?php  $j=1;
  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strProductID"][$i] != "")
	  {
		$strSQL = "SELECT * FROM equipment WHERE e_id = '".$_SESSION["strProductID"][$i]."' ";
		$objQuery = mysql_query($strSQL)  or die(mysql_error());
		$objResult = mysql_fetch_array($objQuery);
		$Num_Rows = mysql_num_rows($objQuery);
	  ?>
              <tr class="style10">
                <td width="11%" align="center" ><?=$j++;?>
				<input type="hidden" name="strProductID[]" value="<?=$_SESSION["strProductID"][$i];?>" /></td>
                <td align="center" ><?=$objResult[e_name];?></td>
                <td width="17%" align="center" ><?=$objResult[e_number];?></td>
                <td width="19%" align="right" class="style7"><input type="text" name="qty[]" id="qty[]" class="select" style="text-align:center;"/></td>
                <td width="9%" align="center" class="style7"><span class="style8"><a href="order_delete.php?Line=<?php echo $i;?>">ยกเลิก</a>&nbsp;</span></td>
              </tr>
              <?php 
	  }
  }
  ?>
            </table>
            <p>&nbsp;</p>
            <table width="30%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="50%"><button class="button button1" type="submit" value="save">Save</button></td>
                <td><button class="button button2" type="reset">Cancel</button></td>
              </tr>
            </table>            <p>&nbsp;</p></td>
        </tr>
      </table>
      <br/>
      </td>
    </tr>
  </table>
</form>
  <p>
    <?php
mysql_close();
?>
</p>
</p>
</html>