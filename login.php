<?php include 'includes/header.php';
	echo $_SESSION['user'];
?>

	
		<div class="large-2 large-centered columns">
			
			<img class="imgrndcrn" src="https://lh3.googleusercontent.com/yRsf85dQ4DU5JGhHmT6lqBPv3K4trZEefLNQhUwrmE3VTl1QdwFkIe6L7NPBfrfdCg">
			<hr />
			<div class="text-center">
			<h4 id="titlepage">Dashboard</h4>
			</div>
			<hr />
			<input type="text" id="user">
			<input type="password" id="pswd">
			<a href="#" id="submit" class="button large-12 small columns radius">Login</a>
			<div id="alert" class="text-center"></div>
		</div>
	
<?php include 'includes/footer.php';?>


<script>
	
	$(document).on("click","#submit",function(){
		
		var user = $("#user").val();
		var pswd = $("#pswd").val();
		
		$.post('includes/sessions.php',{user:user,pswd:pswd},function(data){
			
			//alert(data);
			if(data != 1){
				
				$('#alert').html('Email or Password Invalid').css("color","red");
				
			}else{
				
				window.location.replace("index.php");
				
			}
			
		});
		
	});
	
</script>