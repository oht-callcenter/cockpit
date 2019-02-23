<?php include 'ewp.php';
	


$trkfix_action_cat = $_POST['trkfix_action_cat'];
$trkfix_action_title = $_POST['trkfix_action_title'];
$trkfix_action_icon = $_POST['trkfix_action_icon'];
$trkfix_action_desc = $_POST['trkfix_action_desc'];
$trkfix_action_content = $_POST['trkfix_action_content'];


$sql = "INSERT INTO Actions(trkfix_action_cat, trkfix_action_title, trkfix_action_icon, trkfix_action_desc, trkfix_action_content) VALUES ('$trkfix_action_cat', '$trkfix_action_title', '$trkfix_action_icon', '$trkfix_action_desc', '$trkfix_action_content')";

$insertQuery = mysqli_query($con,$sql);


if($insertQuery){
	echo 'its up';
}else{
	echo 'tweak it';
}

?>
	