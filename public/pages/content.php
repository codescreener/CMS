<?php require_once '../includes/session.php'; ?>
<?php include '../includes/db_connect.php'; ?>
<?php require_once './includes/functions.php'; ?>
<?php confirm_logged_in(); ?>

	<?php include '../includes/header.php'; ?>
	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				<?php include("includes/sidebar.php"); ?>
				<?php include("includes/topnav.php"); ?>
				
				<div class="right_col">
					<div class="row">
						<?php
							if(isset($sel_subject)){
								include("includes/show_subject.php");
							}
							elseif(isset($sel_page)){
								include("includes/show_page.php");
							}
							else{
								include("includes/show_contentarea.php");
							}
						?>
					</div>
				</div>
				
				
			</div>
		</div>
		
        <?php require '../includes/footer.php'; ?>