//==============================LOG OUT================================================
<?php
session_start();
unset($_SESSION['username']);
session_destroy();
$_SESSION['message'] = "Logged out";
header("location: index.php");
	?>