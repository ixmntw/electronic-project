<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<title>MatchingTKD</title>
<head>
<META content="MatchingTKD" name=description>
<META content="Sport, เทควันโด , taekwondo" name=Keywords>
<? //  Bootstrap Select ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="../../matchingtkd/dist/css/bootstrap-select.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="../../matchingtkd/dist/js/bootstrap-select.js"></script>


</head>

<body>
  <p><? include('header.php');   include('css/css.php');?></p>
  <p>&nbsp;</p>
  <p><span class="style15">
    <? require ('connect.php');
			$sql3="SELECT * FROM equipment ";
			$result3=mysql_query($sql3,$conn);
			?>
  </span></p>
  <div class="”form-group”" style33="style33" style18="style18">
    <select id="select-testing" class="selectpicker" data-live-search="true" title="Please select" name="PROVINCE_ID" >
      <?
							 
					while ($rs3 = mysql_fetch_array($result3)){
					echo "<option value=\"$rs3[e_id]\"";
					echo ">$rs3[e_name]";
					echo "</option>\n";		
					}
				?>
    </select>
  </div>
  <p>&nbsp;</p>
</body>
</html>
