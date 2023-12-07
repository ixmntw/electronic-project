<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>ระบบยืมอุปกรณ์อิเล็คทรอนิกส์</title>
<head>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=description>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=Keywords>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=Keywords>
</head>

<body>
  <p><? include('header.php');   include('css/css.php');?>
  </p>
<p>
  <?  require ('connect.php');
	$strSQL = "SELECT * FROM equipment inner join issue_out on equipment.e_id=issue_out.e_id 
	inner join issue on issue_out.i_id=issue.i_id inner join user on issue.id=user.id
	WHERE issue.i_id='$_REQUEST[i_id]' ";
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
      <td width="96%" align="center"><h1 class="style11">คืนอุปกรณ์อิเล็กทรอนิกส์</h1></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="bottom"><form action="borrow_return_save.php" method="post" enctype="multipart/form-data"name="form1" id="form1"borrow_return_save.php="borrow_return_save.php">
        <h3>&nbsp;</h3>
        <table width="60%" height="60" border="0" align="center" cellpadding="0" cellspacing="0"  class="style10" id="customers">
          <tr>
            <td height="31" align="center" class="ex-lgradient">เลขที่</td>
            <td align="center"><?=$info[i_id];?></td>
          </tr>
          <tr>
            <td width="30%" height="31" align="center" class="ex-lgradient">วันที่ยืม</td>
            <td width="70%" align="center">
            <? if($info[i_date]!=""){ echo date('d/m/Y', strtotime($info[i_date]));} ?></td>
          </tr>
          <tr>
            <td align="center" class="ex-lgradient">วันที่คืน
                <?php $date = date("Y-m-d");?>
                <input type="hidden" name="i_id" value="<?=$info[i_id];?>" /></td>
            <td align="center"><input type="date" name="date" value="<?=$date?>" class="select" style="text-align:center;"/></td>
          </tr>
          <tr>
            <td align="center" class="ex-lgradient">รายละเอียดเพิ่มเติม</td>
            <td align="center"><label>
              <textarea name="remark" class="select3"></textarea>
            </label></td>
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
        <p>&nbsp;</p>
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