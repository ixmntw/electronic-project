<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>ระบบยืมอุปกรณ์อิเล็คทรอนิกส์</title>
<head>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=description>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=Keywords>
  <style type="text/css"> 
@media print 
{ 
#non-printable { display: none; } 
#printable { display: block; } 
} 

  .button {border: none;
  width:90%;
  color: white;
  padding: 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px ;
  cursor: pointer;
}
.button1 {background-color:#0066FF;
border-radius: 4px 
}
.ex-lgradient {        background: linear-gradient(white, #e8eaf6);
}
  .button11 {background-color:#0066FF;
border-radius: 4px 
}
  </style>
 
 
</head>

<body>
<div id="non-printable">
  <p>
    <? include('header.php');   include('css/css.php');   ?>
  
    <?  	
require ('connect.php');
$strSQL2 ="SELECT * FROM equipment inner join issue_out on equipment.e_id=issue_out.e_id 
inner join issue on issue_out.i_id=issue.i_id
WHERE  issue.i_id='$_REQUEST[i_id]' and (equipment.e_name LIKE '%".$_GET["txtKeyword"]."%') order by o_id ASC ";
$objQuery2 = mysql_query($strSQL2) or die ("Error Query [".$strSQL2."]");
$Num_Rows = mysql_num_rows($objQuery2);

$Per_Page = 200;   // Per Page

$Page = $_GET["Page"];
if(!$_GET["Page"])
{
	$Page=1;
}

$Prev_Page = $Page-1;
$Next_Page = $Page+1;

$Page_Start = (($Per_Page*$Page)-$Per_Page);
if($Num_Rows<=$Per_Page)
{
	$Num_Pages =1;
}
else if(($Num_Rows % $Per_Page)==0)
{
	$Num_Pages =($Num_Rows/$Per_Page) ;
}
else
{
	$Num_Pages =($Num_Rows/$Per_Page)+1;
	$Num_Pages = (int)$Num_Pages;
}
 ?>
    <?php
if($_GET["txtKeyword"] != "")
	// Search By Name 
 require ('connect.php');
	$strSQL2 = "SELECT * FROM equipment inner join issue_out on equipment.e_id=issue_out.e_id 
inner join issue on issue_out.i_id=issue.i_id
WHERE issue.i_id='$_REQUEST[i_id]' and (equipment.e_name LIKE '%".$_GET["txtKeyword"]."%') order by o_id ASC LIMIT $Page_Start , $Per_Page  ";
	$objQuery2 = mysql_query($strSQL2) or die ("Error Query [".$strSQL2."]");
	$Total_amount=0;
	?>
    <?  require ('connect.php');
	$strSQL = "SELECT * FROM equipment inner join issue_out on equipment.e_id=issue_out.e_id 
	inner join issue on issue_out.i_id=issue.i_id inner join user on issue.id=user.id
	WHERE issue.i_id='$_REQUEST[i_id]' ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]"); 
	$info = mysql_fetch_array($objQuery);
	?>
</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<p>
  
</p>
<div id="printable">

  <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" >
    <tr >
      <td height="38" align="center"><h1 class="style9">แบบฟอร์มใบยืม-คืนอุปกรณ์คอมพิวเตอร์</h1></td>
    </tr>
    <tr>
      <td align="center" valign="bottom"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="customers" class="style2">
          <tr>
            <td>&nbsp;</td>
            <td colspan="2">&nbsp;</td>
            <td align="center">เลขที่</td>
            <td><?=$info[i_id];?></td>
          </tr>
          <tr>
            <td width="27%">&nbsp;</td>
            <td colspan="2">&nbsp;</td>
            <td width="9%" align="center">วันที่</td>
            <td width="18%"><?=$info[i_date_request];?></td>
          </tr>
          <tr>
            <td>ชื่อ - นามสกุล </td>
            <td colspan="2"><? echo "$info[name]"; echo " ";echo "$info[lname]";?>
                <input type="hidden" name="i_id" value="<?=$info[i_id];?>" />            </td>
            <td align="center">ตำแหน่ง</td>
            <td><?=$info[position];?></td>
          </tr>
          <tr>
            <td>หน่วยงาน</td>
            <td width="26%"><?=$info[department];?></td>
            <td colspan="2">เบอร์โทรศัพท์ที่ติดต่อได้ (เบอร์โต๊ะ) </td>
            <td><?=$info[u_tel];?></td>
          </tr>
          <tr>
            <td>มีความประวงค์จะขอยืมพัสดุเพื่อ</td>
            <td colspan="4"><?=$info[i_detail];?></td>
          </tr>
          <tr>
            <td>วันที่ยืม</td>
            <td colspan="2"><?=$info[i_date];?></td>
            <td align="center">เวลา</td>
            <td><?=$info[i_time];?></td>
          </tr>
          <tr>
            <td>สถานที่ใช้งาน</td>
            <td colspan="4"><?=$info[i_location];?></td>
          </tr>
          <tr>
            <td>กำหนดส่งคืน</td>
            <td colspan="2"><?=$info[i_date_return_plan];?></td>
            <td align="center">เวลา</td>
            <td><?=$info[i_time_return_plan];?></td>
          </tr>
          <tr>
            <td height="28" colspan="5">ดังรายการต่อไปนี้ </td>
          </tr>
        </table>
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="customers" class="style2">
            <tr class="ex-lgradient">
              <td width="8%" align="center" >ลำดับ</td>
              <td width="51%" align="center"> รายการ </td>
              <td width="23%" align="center">เลขครุภัณฑ์</td>
              <td width="18%" align="center">จำนวน</td>
            </tr>
            <? $i = 1; while($info2 = mysql_fetch_array( $objQuery2 )) {  ?>
            <tr>
              <td height="41" align="center" ><?=$i++;?></td>
              <td width="51%" align="center"><?=$info2[e_name];?>
              <input type="hidden" name="e_id[]" value="<?=$info2['e_id'];?>" /></td>
              <td width="23%" align="center"><?=$info2[e_detail];?></td>
              <td align="center" valign="middle" bordercolor="#CCCCCC"><?=$info2[o_qty];?></td>
            </tr>
            <? }?>
          </table>
        <br/>
          <table width="100%" height="52" border="0" cellpadding="0" cellspacing="0" class="style2" >
            <tr>
              <td colspan="3">ผู้ยืมควรอ่านทำความเข้าใจและโปรดตรวจสอบ ดังนี้ </td>
            </tr>
            <tr>
              <td width="6%">&nbsp;</td>
              <td colspan="2">1) ข้อมูลที่มีการบันทึกไว้ในอุปกรณ์ หากสูญหายหรือเสียหาย ศูนย์ข้อมูลและสารสนเทศจะไม่รับผิดชอบ </td>
            </tr>
            <tr>
              <td width="6%">&nbsp;</td>
              <td colspan="2">2) หากอุปกรณ์ที่ยืมเกิดการชำรุดเสียหายหรือสูญหาย ผู้ยืมต้องรับผิดชอบค่าเสียหาย </td>
            </tr>
            <tr>
              <td width="6%">&nbsp;</td>
              <td width="8%">&nbsp;</td>
              <td><form id="form1" name="form1" method="post" action="">
                <label>
                  <input type="checkbox" name="checkbox" value="checkbox" />
                </label>
              รับทราบ
              </form>              </td>
            </tr>
            <tr>
              <td width="6%">&nbsp;</td>
              <td colspan="2"><table width="350" border="0" align="right" cellpadding="0" cellspacing="0">
                <tr>
                  <td colspan="2">ลงชื่อผู้ยืม...........................................................</td>
                </tr>
                <tr>
                  <td width="15%">&nbsp;</td>
                  <td width="85%">(....................................................)</td>
                </tr>
                <tr>
                  <td colspan="2">วันที่.............................................................</td>
                </tr>
                            </table></td>
            </tr>
          </table>
          <br/>
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="style2" >
            <tr>
              <td>ตรวจสอบพัสดุ              </td>
            </tr>
            <tr>
              <td><table width="94%" border="0" align="right" cellpadding="0" cellspacing="0">
                <tr class="style2">
                  <td><label>
                    <input type="checkbox" name="checkbox2" value="checkbox" />
                    ครบถ้วน ...................................................................................................................................................</label></td>
                </tr>
                <tr class="style2">
                  <td><label>
                    <input type="checkbox" name="checkbox3" value="checkbox" />
                    ไม่ครบถ้วน              ...............................................................................................................................................</label></td>
                </tr>
                <tr class="style2">
                  <td>&nbsp;</td>
                </tr>
              </table></td>
            </tr>

            <tr>
              <td><table width="350" border="0" align="right" cellpadding="0" cellspacing="0">
                <tr>
                  <td colspan="2">ลงชื่อ...........................................................ผู้ตรวจสอบ</td>
                </tr>
                <tr>
                  <td width="15%">&nbsp;</td>
                  <td width="85%">(....................................................)</td>
                </tr>
                <tr>
                  <td colspan="2">วันที่.............................................................</td>
                </tr>
                            </table></td>
            </tr>
          </table>        
        <p>&nbsp; </p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>