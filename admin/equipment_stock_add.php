<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>ระบบยืมอุปกรณ์อิเล็คทรอนิกส์</title>
<head>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=description>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=Keywords>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=Keywords>
<? //  Bootstrap Select ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="../dist/css/bootstrap-select3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="../dist/js/bootstrap-select.js"></script>
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
      <td width="96%" align="center"><h1 class="style11">สต๊อกอุปกรณ์อิเล็กทรอนิกส์</h1></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="bottom">
	  <form action="equipment_stock_add_save.php" method="post" enctype="multipart/form-data"name="form1" id="form1"equipment_stock_add_save.php="equipment_stock_add_save.php">
        <br/>
		<h3>เพิ่มสต๊อก</h3>
        <table width="60%" height="60" border="0" align="center" cellpadding="0" cellspacing="0"  class="style10" id="customers">
          <tr>
            <td width="30%" height="31" align="center" class="ex-lgradient">ชื่อ</td>
            <td width="70%" align="center"><?=$info[e_name];?></td>
          </tr>
          <tr>
            <td align="center" class="ex-lgradient">จำนวน
              <input type="hidden" name="e_id" value="<?=$info[e_id];?>" />            </td>
            <td align="center"><input name="qty" type="text" class="select" style="text-align:center;"/></td>
          </tr>
        </table>
		<br/>
        <table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="50%"><button class="button button1" type="submit">Save</button></td>
                <td><button class="button button2" type="reset">Cancel</button></td>
              </tr>
        </table>
      </form>
        <p>
          <? 
	$strSQL_st = "SELECT * FROM stock  WHERE  e_id ='$e_id' ";
	$objQuery_st = mysql_query($strSQL_st) or die ("Error Query [".$strSQL_st."]"); 
	?>
</p>
        <h3>รายละเอียด </h3>
        <form id="form2" name="form2" method="post" action="equipment_stock_del.php">
          <table width="60%" height="60" border="0" align="center" cellpadding="0" cellspacing="0"  class="style10" id="customers">
            <tr  class="ex-lgradient">
              <td width="7%" align="center" >All<br/>
                  <input type="checkbox" name="css_all_check" id="css_all_check" />
              </td>
              <td width="37%" height="31" align="center">วันที่</td>
              <td width="32%" align="center">จำนวน</td>
              <td width="5%" align="center"></td>
            </tr>
            <? $i = 0; while($info_st = mysql_fetch_array( $objQuery_st )) {  ?>
            <tr>
              <td align="center" ><span class="ex-lgradient style9 style10">
                <input name="Ch_INSERT[]" type="checkbox" class="css_data_item " id="Ch_INSERT" value="<?php echo $i++; ?>" />
              </span></td>
              <td align="center"><?=$info_st[in_date];?>
              <input type="hidden" name="in_id[]" value="<?=$info_st['in_id'];?>" />
              <span class="ex-lgradient">
              <input type="hidden" name="e_id2" value="<?=$info_st[e_id];?>" />
              </span></td>
              <td align="center"><?=$info_st[in_qty];?></td>
              <td width="5%" align="center" valign="middle" bordercolor="#CCCCCC"><a href="equipment_stock_edit.php?in_id=<?=$info_st[in_id]?>&e_id=<?=$info_st[e_id]?>" class="style12"> <img src="img/edit.gif" width="25" border="0" /></a> </td>
            </tr>
            <? } ?>
            <tr>
              <td align="center" ><button class="button button1" type="submit" id="SAVE" name="SAVE[]">Del</button>
                  
              </td>
              <td align="center">&nbsp;</td>
              <td align="center">&nbsp;</td>
              <td width="5%" align="center" valign="middle" bordercolor="#CCCCCC" class="style190">&nbsp;</td>
            </tr>
          </table>
                </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p></td>
    </tr>
</table>
  <p>&nbsp;</p>
</body>
</html>

<script type="text/javascript">  
$(function(){        
 
    var highlight_bgColor="#A6F83D";     // กำหนดสี highlight ที่ต้องการ
    $("#css_all_check").click(function(){ // เมื่อคลิกที่ checkbox ตัวควบคุม  
        if($(this).prop("checked")){ // ตรวจสอบค่า ว่ามีการคลิกเลือก  
            $(".css_data_item").prop("checked",true); // กำหนดให้ เลือก checkbox ที่ต้องการ ที่มี class ตามกำหนด   
        }else{ // ถ้าไม่มีการ ยกเลิกการเลือก  
            $(".css_data_item").prop("checked",false); // กำหนดให้ ยกเลิกการเลือก checkbox ที่ต้องการ ที่มี class ตามกำหนด              
            $(".css_tr_data").each(function(k_data,v_data){ // วนหลูปแถวที่มี class ชื่อ css_tr_data
                var old_bgColor=$(this).attr("bgcolor");        // เรียกสีพื้นหลังเดิมมาเก็บไว้ในตัวแปร         
                old_bgColor=(old_bgColor!=undefined)?old_bgColor:"";    // กำหนดค่าสีพื้นหลังเดิม กรณีไม่มี หรือมีค่า       
                $(this).css("background-color",old_bgColor); // ยกเลือกสีพื้นหลัง หรือกำหนดเป็นค่าเดิม
            });             
        }  
    });     
       
    $(".css_data_item").click(function(){  // เมื่อคลิก checkbox  ใดๆ       
        var parentTR=$(this).parents(".css_tr_data");  // หาแถวที่ checkbox นั้นๆที่คลิก อยู่ด้านใน
        var old_bgColor=parentTR.attr("bgcolor"); // เรียกสีพื้นหลังเดิมมาเก็บไว้ในตัวแปร
        old_bgColor=(old_bgColor!=undefined)?old_bgColor:""; // กำหนดค่าสีพื้นหลังเดิม กรณีไม่มี หรือมีค่า
        if($(this).prop("checked")){
            parentTR.css("background-color",highlight_bgColor); // กำหนดสีพื้นหลังของแถวที่เลือกทั้งหมด
        }else{
            parentTR.css("background-color",old_bgColor); // ยกเลือกสีพื้นหลัง หรือกำหนดเป็นค่าเดิม
        }
    });  
 
    $("#form_checkbox1").submit(function(){ // เมื่อมีการส่งข้อมูลฟอร์ม  
        if($(".css_data_item:checked").length==0){ // ถ้าไม่มีการเลือก checkbox ใดๆ เลย  
            alert("NO");  
            return false;     
        }  
    });     
   
});  
      </script>