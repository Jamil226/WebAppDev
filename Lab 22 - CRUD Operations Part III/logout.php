<!--
************************************************************************************************
                        Hackers Third Eye 
                        Development Date : 14-03-2024
                        Page Updated on  : 11-04-2024
************************************************************************************************
-->
<?php
	session_start(); 
	session_unset();
	unset($_SESSION['SESSION_ID']);
	unset($_SESSION['USER_NAME']);
	session_destroy();
	ob_start();
// 	header('location:login.php');
	echo "<script>window.location.href='login.php';</script>";
    exit();
?>