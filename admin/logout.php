	 
<?php
@session_start();
 require ('connect.php');
unset ( $_SESSION["username"] );
unset ( $_SESSION["password"] );
session_destroy();


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>logout</title>
<meta http-equiv="Content-Type>"text/html; charset=windows-874">
<meta http-equiv="Content-Type" content="text/html; charset=windows-874"></head>

<p align="center"><font color="#006600"><strong>
</strong></font></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><a href="../index.php"><script> </script>
</a>
  <script>alert('LOGOUT Completed');window.location='../index.php';</script>
</p>
</body>
</html>
