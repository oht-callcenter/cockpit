<?php include 'ewp.php';
	
	
	$userFORM = $_POST['user'];
	$pswdFORM = $_POST['pswd'];
	
	$sql = "SELECT * FROM login WHERE trkfx_login_user='$userFORM'";
	$chk = mysqli_query($con,$sql);
	
	//echo mysqli_num_rows($chk);
	
	while($pswdDB = mysqli_fetch_array($chk)){
		
		$truepswd = $pswdDB['trkfx_login_pswd'];
		
		if($truepswd == $pswdFORM){
			echo '1';
			$_SESSION['user'] = $userFORM;
			$_SESSION['role'] = $pswdDB['trkfx_login_role'];
		}else{
			echo '0';
		}
	
	}
	
	

	
?>

