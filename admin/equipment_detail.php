<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>ระบบยืมอุปกรณ์อิเล็คทรอนิกส์</title>
<head>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=description>
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
  <?php
 require ('connect.php');
	$strSQL = "SELECT * FROM equipment  WHERE e_id='$_REQUEST[e_id]'  order by e_id ASC ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$Total_amount=0;
	?>

  <?php
 require ('connect.php');
	$strSQL2 = "SELECT * FROM equipment  WHERE e_id='$_REQUEST[e_id]'  order by e_id ASC ";
	$objQuery2 = mysql_query($strSQL2) or die ("Error Query [".$strSQL2."]");
	$info2 = mysql_fetch_array( $objQuery2 );
	$Total_amount=0;
	?>
</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" >
    <tr >
      <td width="4%" height="38">&nbsp;</td>
      <td width="96%" align="center"><h1 class="style9">ข้อมูลอุปกรณ์อิเล็กทรอนิกส์</h1></td>
    </tr>
    <tr>
      <td colspan="2" align="left" valign="bottom"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="customers" class="style10">
        <tr class="ex-lgradient">
          <td width="14%" align="center">รูปภาพ</td>
          <td width="39%" align="center"> ชื่อ</td>
          <td width="21%" align="center">เลขครุภัณฑ์</td>
          <td width="3%" align="center">จำนวน</td>
        </tr>
        <? $i = 0; while($info = mysql_fetch_array( $objQuery )) {  ?>
        <tr>
          <td height="41" align="center" valign="middle" bordercolor="#CCCCCC"><div class="zoom"><img src="image/<?=$info[photo];?> "  width="120" /></div></td>
          <td align="center"><a href="equipment_detail.php?e_id=<?=$info['e_id']?>">
            <?=$info[e_name];?>
            <input type="hidden" name="e_id[]" value="<?=$info['e_id'];?>" />
          </a></td>
          <td align="center"><?=$info[e_detail];?></td>
          <td width="3%" align="center" valign="middle" bordercolor="#CCCCCC"><?  
	$strSQL_st = "SELECT sum(in_qty) as in_qty FROM stock  WHERE  e_id ='$info[e_id]' ";
	$objQuery_st = mysql_query($strSQL_st) or die ("Error Query [".$strSQL_st."]"); 
	$info_st = mysql_fetch_array( $objQuery_st);
	
	$strSQL_sto = "SELECT sum(o_qty) as o_qty FROM issue_out  WHERE  e_id ='$info[e_id]' ";
	$objQuery_sto = mysql_query($strSQL_sto) or die ("Error Query [".$strSQL_sto."]"); 
	$info_sto = mysql_fetch_array( $objQuery_sto);
	
	$qty=$info_st[in_qty]-$info_sto[o_qty];
	echo"$qty";	
	?></td>
        </tr>
        <? }?>

      </table>
       <h1 class="style9">คู่มือการใช้งาน</h1>
        <?=$info2[e_manual];?>
      </td>
    </tr>
  </table>
<p align="center">&nbsp;</p>
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