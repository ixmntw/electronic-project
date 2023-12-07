<? @session_start(); ?>

<?
 //�觤�� session �ҡ˹�� login

	require_once("connect.php");
	

	if(!isset($_SESSION['username']) and !isset($_SESSION['password']))
	{
?>
							<script language="javascript">
							alert("ขออภัย!!! กรุณาLogin เข้าระบบค่ะ");
							window.location.href="../index.php?";
							</script>
<?
	} else{
 ?>
<?
$username=$_SESSION["username"];
$password=$_SESSION["password"];

//���¡������ sql
require ('connect.php');
$sql2="select*from user where username ='$username'  and password='$password'" ;
$result2 = mysql_query($sql2, $conn) ;
$rs=mysql_fetch_array($result2);

echo "$rs[name]";
?>
<? mysql_close($conn); }?>
