<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>ระบบยืมอุปกรณ์อิเล็คทรอนิกส์</title>
<head>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=description>
<META content="ระบบยืมอุปกรณ์อิเล็คทรอนิกส์" name=Keywords>
    <style>
	  .header {
	  position: fixed;
	  text-align: rigth;
	  background-color:#FFFFFF;
	  opacity: 0.8;
	  color: blue;
	  font-size: 20px;
	  left: 0;
      top: 0;
	  width: 100%;
	  height:58px	  
	}
	.header2 {
	  position: fixed;
	  text-align: rigth;
	  opacity: 0.8;
	  color: blue;
	  font-size: 20px;
	  left: 0;
      top: 58px;
	  width: 100%;
	  height:33px	  
	}
body {
 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
   
}

body {
  padding-top: 0px;
  padding-bottom: 40px;
  position: relative;
}
body::before {
  
  content: '';
  z-index: -1;
  width: 100%;
  height: 100%;
  position:absolute; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  
  -webkit-filter: blur(3px);
  -moz-filter: blur(3px);
  -o-filter: blur(3px);
  -ms-filter: blur(3px);
  filter: blur(3px);
}

/* css menu*/
<style>

.topnav {
  overflow: hidden;
  background-color:#FFFFFF;
  height:55;
  
}

.topnav a {
  float: left;
  display: block;
  text-align: center;
  padding: 4px 8px;
  text-decoration: none;
}

.topnav a:hover {
  background-color: #ddd;
  color: black; 
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

.topnav input[type=text] {
  float: right;
  padding: 6px;
  margin-top: 6px;
  margin-right: 10px;
  border: none;
  font-size: 14px;
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  
}
.topnav input[type=text] {
    border: 1px solid #ccc;  
  }
    .style6 {font-size: 30px}
    .style7 {
	color: #0000CC;
	font-family: "Times New Roman", Times, serif;
	
}
    .style101 {color: #FFFF00; font-size: 14px; font-family: Arial, Helvetica, sans-serif; }
    .style78 {color: #0000CC}
    .style5 {	color: #FFFF00;
	font-size: 14px;
}
    </style>
</head>
  <body>


<div class="header">
<table width="100%" border="0" cellpadding="00" cellspacing="0">
  <tr>
    <td valign="bottom"><div class="topnav" >
  <table width="100%" height="17" border="0" align="right" cellpadding="0" cellspacing="0"   class="ex-lgradient4">
    <tr>
      <td width="5%" height="17"><table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="75%" height="57"><span class="style6 style7"><a href="index.php" class="style6 style7">ระบบยืมอุปกรณ์อิเล็คทรอนิกส์</a><a href="index.php"></a></span></td>
          <td width="25%"><form action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="get" name="frmSearch" id="frmSearch">
        <input type="text"name="txtKeyword"id="txtKeyword" placeholder="Search.." value="<?php echo $_GET["txtKeyword"];?>" class="select">
      </form></td>
        </tr>
      </table></td>
      </tr>
  </table>
    </div></td>
  </tr>
</table>
</div>
 <? require ('connect.php');
	
	  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strProductID"][$i] != "")
	  {
		$strSQL = "SELECT * FROM equipment WHERE e_id = '".$_SESSION["strProductID"][$i]."' ";
		$objQuery = mysql_query($strSQL)  or die(mysql_error());;
		$Num_Rows = mysql_num_rows($objQuery);
		$Rows+=$Num_Rows;
	  } 
  }
		
	?>
<div class="header2">
  <table width="100%" height="40" border="0" align="center" cellpadding="0" cellspacing="0" background="img/18586f21-2.jpg">
  <tr>
    <td><table width="84%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td class="style5"><div class="topnav" id="myTopnav">
		<a href="index.php" class="style101">อุปกรณ์อิเล็คทรอนิกส์</a>
		<a href="order_confirm.php" class="style101">ทำรายการขอยืม<span class="style4 style1">
            <? if($Rows>0){echo $Rows;}else{echo "";}?></span></a>
		<a href="borrow.php" class="style101">ข้อมูลการยืม-คืนอุปกรณ์</a>
	  	<a href="javascript:void(0);" class="icon" onClick="myFunction()">
		<i class="fa fa-bars"></i>  </a></div>    </td>
        <td align="right" class="style4">
		<a href="user.php">ยินดีต้อนรับ<? include('login.php'); ?> ค่ะ</a></td>
		  <td align="right" class="style4"> <a href="logout.php"><img src="img/power-button-red-th.png" width="30" border="0" /></a></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
  </body>
</html>