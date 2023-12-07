<?php
	ob_start();
	session_start();
	unset($_SESSION['strProductID']);
	unset($_SESSION['strQty']);

	header("location:order_confirm_finish.php");
?>