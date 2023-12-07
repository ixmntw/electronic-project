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
.style9 {font-size: 14px}
.ex-lgradient2 { background: linear-gradient(#afbfff, white); border-radius: 4px;}
.style10 {color: #666666}

</style>
</style>
</head>

<body>
  <p><? include('header.php');   include('css/css.php');?>
  </p>
<p>&nbsp;</p>
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="ex-lgradient3">
    <tr >
      <td width="4%" height="38">&nbsp;</td>
      <td width="96%" align="center"><h1 class="style11">Login</h1></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="bottom">
	  <form id="form1" name="form1" method="post" action="login.php">
	    <table width="60%" border="0" align="center" cellpadding="0" cellspacing="0" id="customers">
          <tr>
            <td width="47%" align="center" class="ex-lgradient style9 style10">Username</td>
            <td width="53%" align="center"><label>
            <input type="text" name="username" class="select" />
            </label></td>
          </tr>
          <tr>
            <td align="center" class="ex-lgradient style9 style10">Password</td>
            <td align="center"><label>
              <input type="password" name="password" class="select"/>
            </label></td>
          </tr>
        </table>
        <p>
          <input type="hidden" name="m_id" value="<?=$_REQUEST['m_id'];?>" />
        </p>
        <table width="30%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td><button class="button button1" type="submit">Login</button></td>
            <td><button class="button button2" type="submit">Cancel</button></td>
          </tr>
        </table>
	  </form>
	  <p>&nbsp;</p></td>
    </tr>
  </table>
<p>&nbsp;</p>
</body>
</html>
