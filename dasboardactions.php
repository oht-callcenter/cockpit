<?php include 'includes/ewp.php';

$sqlA = "SELECT * FROM Actions";
$queryA = mysqli_query($con, $sqlA);
while ($actions = mysql_fetch_array($queryA)) {
    echo "<div class='large-2 columns actionables text-center'>";
	    
	    		echo "<i class='fab fa-wpforms fa-2x'></i>";
		   
		   		echo "<span>".$actions['trkfix_action_title']."</span>";
		    
		   		echo "<hr />";
		   
		   		echo "<p>".$actions['trkfix_action_desc']."</p>";
		    
		    	echo '<a href="#" class="deeperDig text-center" data-reveal-id="xyz">GO</a>';
			   
			    echo '<div id="'.$actions['trkfix_action_id'].'" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">';
			    echo '<h2 id="modalTitle"> Title Goes Here AGAIN</h2>';
			    echo '<div>';
			    
				echo '<p>'.$actions['trkfix_action_content'].'</p>';
				
		    
    echo "</div>";
}

?>




<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
	$(document).foundation();
</script>