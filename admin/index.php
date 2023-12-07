<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>ระบบยืมอุปกรณ์อิเล็คทรอนิกส์</title>
<head>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=description>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=Keywords>
<style>
* {
  box-sizing: border-box;
}

.photo {    margin: 0px;
    width: 120px;
    float: left;
}

.div61 {   
  width: 100%;
  background-color:#FFFFFF;
  padding: 10px;
  border: 1px solid white;
  margin: 0; 
  border-radius: 4px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.button {  border: none;
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
.button2 {;
background-color:#FF0000;
border-radius: 4px 
}
.ex-lgradient {
        background: linear-gradient(white, #e8eaf6);
    }
.ex-lgradient2 { background: linear-gradient(#afbfff, white); border-radius: 4px;}

.button11 {background-color:#0066FF;
border-radius: 4px 
}
.button21 {;
background-color:#FF0000;
border-radius: 4px 
}
</style>
</style>
</head>

<body>
  <p>
    <?  include('header.php');  include('css/css.php');  ?>
  </p>
<p>
  <?  	
require ('connect.php');
$strSQL ="SELECT * FROM  issue WHERE  i_status='0' and (i_id LIKE '%".$_GET["txtKeyword"]."%') order by i_id DESC ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$Num_Rows = mysql_num_rows($objQuery);

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
	$strSQL = "SELECT * FROM  issue WHERE i_status='0' and (i_id LIKE '%".$_GET["txtKeyword"]."%') order by i_id DESC LIMIT $Page_Start , $Per_Page  ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$Total_amount=0;
	?>
</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="ex-lgradient3">
   <tr >
     <td height="38" align="center"><h1 class="style11">รายการอนุมัติการยืมอุปกรณ์</h1>
     </td>
   </tr>
   <tr>
     <td align="center" valign="bottom"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="customers" class="style10">
         <tr class="ex-lgradient">
           <td width="5%" align="center" >ลำดับ</td>
           <td width="11%" align="center"> เลขที่ใบยืม </td>
           <td width="11%" align="center"> วันที่ยืม</td>
           <td width="12%" align="center">กำหนดส่งคืน</td>
           <td width="11%" align="center"> สถานะ </td>
           <td width="11%" align="center"> วันที่คืน</td>
           <td width="3%" align="center">&nbsp;</td>
         </tr>
         <? $i = 1; while($info = mysql_fetch_array( $objQuery )) {  ?>
         <tr>
           <td height="41" align="center" ><?=$i++;?></td>
           <td width="11%" align="center"><a href="approved.php?i_id=<?=$info[i_id]?>">
            <?=$info[i_id];?>
           </a></td>
           <td width="11%" align="center"><?=$info[i_date];?></td>
           <td width="12%" align="center"><?=$info[i_date_return_plan];?></td>
           <td width="11%" align="center">
		   <? if($info[i_status]==0){ echo "รออนุมัติ";}else{echo "อนุมัติ";}?></td>
           <td width="11%" align="center"><? if($info[i_date_return]!="0000-00-00"){ echo $info[i_date_return];}else{echo "";}?></td>
           <td width="3%" height="41" align="center" valign="middle" bordercolor="#CCCCCC">&nbsp;</td>
         </tr>
         <? }?>
       </table>       
       <p>&nbsp; </p></td>
   </tr>
 </table>
 <p align="center"><span class="style190">Total
     <?= $Num_Rows;?>
Record :
<?=$Num_Pages;?>
Page :
<?   
	// การแบ่งหน้า	
if($Prev_Page)
{
	echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page'><< Back</a> ";
}

for($i=1; $i<=$Num_Pages; $i++){
	if($i != $Page)
	{
		echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";
	}
	else
	{
		echo "<b> $i </b>";
	}
}
if($Page!=$Num_Pages)
{
	echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'>Next>></a> ";
}
?>
 </span></p>
</body>
</html>

<script language="JavaScript">
function addCommas(nStr)
			{
				nStr += '';
				x = nStr.split('.');
				x1 = x[0];
				x2 = x.length > 1 ? '.' + x[1] : '';
				var rgx = /(\d+)(\d{3})/;
				while (rgx.test(x1)) {
					x1 = x1.replace(rgx, '$1' + ',' + '$2');
				}
				return x1 + x2;
			}
			
function sum() {
    var result=0;
    var txtFirstNumberValue = document.getElementById('txt1').value;   
        result = parseFloat(txtFirstNumberValue);	
        document.getElementById('txt2').value = addCommas(result.toFixed(2));       
 }
</script>

<script>
function myFunction() {
var p = document.getElementById("price").value;
var x = document.getElementById("money").value;
var y = document.getElementById("txt1").value;
var z = document.getElementById("txt2").value;
result = parseFloat(p)-parseFloat(x)-parseFloat(y)-parseFloat(z);	
document.getElementById("demo").innerHTML = addCommas(result.toFixed(2));
}
</script>

<script language="JavaScript">
   function fncSum()
   {
    var num2 = '';     var sum2 = 0;  
    for(var i=0;i<document.form2['amount[]'].length;i++){
     num2 = document.form2['amount[]'][i].value;
     if(num2!=""){
      sum2 += parseFloat(num2);
     }
    }
	document.form2.sum.value = sum2; 
	document.getElementById("demo3").innerHTML= addCommas(sum2.toFixed(2));
	     }
  </script>