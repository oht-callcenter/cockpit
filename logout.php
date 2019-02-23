<?php include 'includes/ewp.php';
	
	unset($_SESSION["user"]);
	unset($_SESSION["role"]);
	
	header("Location: index.php");
		
?>