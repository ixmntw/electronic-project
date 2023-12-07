
<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>ระบบยืมอุปกรณ์อิเล็คทรอนิกส์</title>
<? //  Bootstrap Select ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="../dist/css/bootstrap-select.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="../dist/js/bootstrap-select.js"></script>
<style type="text/css">
<!--
.style15 {font-size: 14px; color: #666666; }
-->
</style>
<head>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=description>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=Keywords>

</head>

<p><?  include('header.php');  include('css/css.php');  require ('connect.php'); ?></p>
<p>&nbsp;</p>
<p>
  <?  require ('connect.php');
	$strSQL = "SELECT * FROM equipment inner join issue_out on equipment.e_id=issue_out.e_id 
	inner join issue on issue_out.i_id=issue.i_id
	WHERE issue.i_id='$_REQUEST[i_id]' ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]"); 
	$info = mysql_fetch_array($objQuery);
	?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="frmMain" method="post" action="borrow_edit_save.php""" enctype="multipart/form-data" OnSubmit="return onSave();" borrow_edit_save.php="borrow_edit_save.php"  id="box">

  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center"><table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="ex-lgradient2">
        <tr >
          <td height="38" align="center"><h1 class="style11">แก้ไขรายการยืมอุปกรณ์อิเล็กทรอนิกส์</h1></td>
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
                <input type="hidden" name="i_id" value="<?=$info[i_id];?>" />
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
              <td colspan="4"><textarea name="detail" rows="4" class="select2"><?=$info[i_detail];?></textarea></td>
            </tr>
            <tr>
              <td>วันที่ยืม</td>
              <td colspan="2">
                <input type="date" name="date"  class="select" value="<?=$info[i_date];?>"/>
             </td>
              <td align="center">เวลา</td>
              <td>
                <input type="time" name="time" class="select"  value="<?=$info[i_time];?>"/>
             </td>
            </tr>
            <tr>
              <td>สถานที่ใช้งาน</td>
              <td colspan="4"><textarea name="location" rows="4" class="select2"><?=$info[i_location];?></textarea></td>
              </tr>
            <tr>
              <td>กำหนดส่งคืน</td>
              <td colspan="2"><label>
                <input type="date" name="date_plan" class="select"  value="<?=$info[i_date_return_plan];?>" />
              </label></td>
              <td align="center">เวลา</td>
              <td><label>
                <input type="time" name="time_plan" class="select" value="<?=$info[i_time_return_plan];?>"/>
              </label></td>
            </tr>
          </table>
          <br/>
          
     <?  
	$strSQL2 = "SELECT * FROM equipment inner join issue_out on equipment.e_id=issue_out.e_id 
	WHERE issue_out.i_id='$_REQUEST[i_id]' ";
	$objQuery2 = mysql_query($strSQL2) or die ("Error Query [".$strSQL2."]"); 
	?>
<table width="95%" id="customers">
              <tr>
                <th width="11%" align="center"><div align="center">ลำดับ</div></th>
                <th width="44%" align="center"><div align="center">รายการ</div></th>
                <th width="17%" align="center"><div align="center">เลขครุภัณฑ์</div></th>
                <th width="19%" align="center"><div align="center">จำนวน</div></th>
                <th width="6%" align="center" >&nbsp;</th>
                </tr>
             <? $i = 1; while($info2 = mysql_fetch_array( $objQuery2 )) {  ?>
              <tr class="style10">
                <td width="11%" align="center" ><?=$i++;?>
				<input type="hidden" name="o_id[]" value="<?=$info2[o_id];?>" /></td>
                <td align="center" ><?=$info2[e_name];?></td>
                <td width="17%" align="center" ><?=$info2[e_number];?></td>
                <td width="19%" align="right" class="style7"><input type="text" name="qty[]" id="qty[]" class="select" style="text-align:center;" value="<?=$info2[o_qty];?>"/></td>
                <td width="6%" align="center" valign="middle" bordercolor="#CCCCCC"><? if($info[i_status]==0){?>
                    <script language="JavaScript" type="text/javascript">
				function chkdel(){if(confirm('  กรุณายืนยันการลบอีกครั้ง !!!  ')){
					return true;
				}else{
					return false;
				}
				}
          	      </script>
                    <a href="borrow_detail_del.php?o_id=<?=$info[o_id]?>&amp;i_id=<?=$info[i_id]?>&amp;status=<?=$info[i_status]?>" class="style2="style2="style2""" OnClick="return chkdel();"><img src="img/dele.gif" width="30" border="0" /></a>
                    <? } ?></td>
                </tr>
              <?php  } ?>
            </table>
            <p>&nbsp;</p>
            <table width="30%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="50%"><button class="button button1" type="submit" value="save">Edit</button></td>
                <td><button class="button button2" type="reset">Cancel</button></td>
              </tr>
            </table>            </td>
        </tr>
      </table>
      <br/>
      </td>
    </tr>
  </table>
</form>
<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0" class="ex-lgradient2">
  <tr>
    <td><h3 align="center">เพิ่มรายการ&nbsp;</h3></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="borrow_edit_add_save.php">
  <table width="60%" align="center" id="customers">
    <tr>
      <th width="11%" align="center"><div align="center">ลำดับ</div></th>
      <th width="44%" align="center"><div align="center">รายการ</div></th>
      <th width="19%" align="center"><div align="center">จำนวน</div></th>
    </tr>
    <?php  $k=1;  $i=0;  foreach(range(1,5) as $m):  ?>
    <tr class="style10">
      <td width="11%" align="center" ><?=$k;?></td>
      <td align="center" ><? require ('connect.php');
			$sql3="SELECT * FROM equipment ";
			$result3=mysql_query($sql3,$conn);
			?>
          <select id="select-testing" class="selectpicker" data-live-search="true" title="Please select" name="e_id[]" >
            <?
							 
					while ($rs3 = mysql_fetch_array($result3)){
					echo "<option value=\"$rs3[e_id]\"";
					echo ">$rs3[e_name]";
					echo "</option>\n";		
					}
				?>
          </select>
          </div>
        &nbsp;</td>
      <td width="19%" align="right" class="style7"><input type="text" name="o_qty[]" id="o_qty[]" class="select" style="text-align:center;" /></td>
    </tr>
    <?php   $k++;  $i++; endforeach;    ?>
  </table>
  <input type="hidden" name="i_id2" value="<?=$info[i_id];?>" />
  <br/>
  <table width="30%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="50%"><button class="button button1" type="submit" value="save">Save</button></td>
      <td><button class="button button2" type="reset">Cancel</button></td>
    </tr>
  </table>
</form>&nbsp;</td>
  </tr>
</table>

<p>&nbsp;</p>
<p>
  <?php
mysql_close();
?>
</p>
</p>
</html>