<?php include 'includes/ewp.php';

	$delTASK = $_POST['delTASK'];
	
	$sql =  "DELETE FROM Actions WHERE trkfix_action_id='$delTASK'";
	
	$query = mysqli_query($con,$sql);
	
	
	//header('Location:index.php'); 	
	