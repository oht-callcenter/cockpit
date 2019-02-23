<?php include 'includes/header.php';?>

	<script src="tinymce/js/tinymce/tinymce.min.js"></script>
			

	<div class="large-9 large-centered columns">	

	<div class="text-center">
	<img class="imgrndcrn" src="https://lh3.googleusercontent.com/yRsf85dQ4DU5JGhHmT6lqBPv3K4trZEefLNQhUwrmE3VTl1QdwFkIe6L7NPBfrfdCg" width="200px">
	</div>
	
	
	<h4 class="text-center">Add Action</h4>
	<hr / style="border:none;">	
		<label>Category</label>
		<select id="trkfix_action_cat">
			<option>Dashboard</option>
    		<option>Onboarding</option>
		</select>
		
		<label>Title</label>
		<input type="text" id="trkfix_action_title">
		
		<label>Icon</label>
		<input type="text" id="trkfix_action_icon">
		
		<label>Description</label>
		<input type="text" id="trkfix_action_desc">
		
		<label>Code</label>
		<input id="trkfix_action_code"></input>
		
		<label>Content</label>
		<textarea id="trkfix_action_content">
		
		
		</textarea>
		<hr />
		<a href="#" id="addNewAction" class="large-12 button small secondary">Create Action</a>
	
	</div>
	

<?php include 'includes/footer.php';?>

<script>
	
	
	$(document).ready(function(){
	
  
	  tinymce.init({
		  selector: '#trkfix_action_content',
		  height:400,
		  theme: 'modern',
		  plugins: 'print preview fullpage  searchreplace autolink directionality  visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount  imagetools   contextmenu colorpicker textpattern help',
		  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
		  image_advtab: true,
		  file_browser_callback: function(field_name, url, type, win) {
		  win.document.getElementById(field_name).value = 'my browser value';
			  },
			  content_css: [
			    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
			    '//www.tinymce.com/css/codepen.min.css'
				  ]
				 
				 });
		 
		 });
	
 

	</script>

<script>
	
	
	
	
	$(document).on('click','#addNewAction',function(data){
		
		var trkfix_action_cat     = $('#trkfix_action_cat option:selected').val(); 
	   	var trkfix_action_title   = $('#trkfix_action_title').val();
	   	var trkfix_action_icon    = $('#trkfix_action_icon').val();
	   	var trkfix_action_desc    = $('#trkfix_action_desc').val();
	   	var trkfix_action_code   = $('#trkfix_action_code').val();
	   	var trkfix_action_content = tinymce.get('trkfix_action_content').getContent();
	   	
	   	$.post('includes/actionAdder.php',{trkfix_action_cat:trkfix_action_cat,trkfix_action_title:trkfix_action_title,trkfix_action_icon:trkfix_action_icon,trkfix_action_desc:trkfix_action_desc,trkfix_action_code:trkfix_action_code,trkfix_action_content:trkfix_action_content}, function(data){
		   	
			alert(data);
			
	   	});
	   	
	   
	   
	});
	
	
</script>