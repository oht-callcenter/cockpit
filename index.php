<?php include 'includes/header.php';

include 'includes/nav.php';

$rolex =  $_SESSION['role'];

if (!isset($_SESSION['role'])) {
    header("Location: login.php");
}
?>




<ul class="tabs vertical large-3 columns" data-tab style="padding:0px;">

	<h3 style="padding-left:15px;">Actions</h3>

	<li class="tab-title"><a href="#panel1">Dispatcher</a></li>
	<li class="tab-title"><a href="#panel2">Onboarding Mechanics</a></li>
	<li class="tab-title"><a href="#panel3">Report Issue</a></li>
	<li class="tab-title"><a href="#panel4">Tools</a></li>
	<div class="text-center">
		<img src="img/oht-callcenter.png" alt="oht-logo" style="max-height:200px;" class="imgrndcrn">
	</div>
</ul>




<div class="large-9 columns">

	<div class="tabs-content">

		<!-- PANEL 1 -->

		<div class="content active" id="panel1">
			<div id="dsb_a">
				<!-- 				<?php include 'dashboardactions.php'; ?>
				-->
			</div>
		</div>

		<!-- PANEL 2 -->

		<div class="content" id="panel2">
			<div id="dsb_b">
				<!-- 				<?php include 'dashboardactions_onboard.php'; ?>
				-->
			</div>
		</div>

		<!-- PANEL 3 -->

		<div class="content" id="panel3">
			<div id="dsb_c">
				<h3>Submit Issues</h3>
				<hr />

				<label> Issue
					<input id="" type="text">
				</label>
				<label> Application
					<input id="" type="text">
				</label>
				<label>Describe Problem
					<textarea id=""></textarea>
				</label>
			</div>
		</div>

		<div class="content" id="panel4">
			<div id="dsb_d">
				<?php include 'dashboardactions_tools.php'; ?>
				<!-- Skype
				<hr />
				PBX -->
			</div>
		</div>

	</div>


	<hr />


	<div id="addactionmodal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
		<div class="large-10 large-centered columns">

			<div class="text-center">
				<img class="imgrndcrn" src="https://lh3.googleusercontent.com/yRsf85dQ4DU5JGhHmT6lqBPv3K4trZEefLNQhUwrmE3VTl1QdwFkIe6L7NPBfrfdCg"
				 width="200px">
			</div>


			<h4 class="text-center">Add Action</h4>
			<hr / style="border:none;">
			<label>Category</label>
			<select id="trkfix_action_cat">
				<option>Dashboard</option>
				<option>Onboarding</option>
				<option>Tools</option>
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


		</div>



		<?php include 'includes/footer.php'; ?>



		<div class="large-10 large-centered columns">
			<a href="#" id="addNewAction" class="large-12 button small secondary">Create Action</a>
		</div>
	</div>

	<?php include 'includes/footer.php';
