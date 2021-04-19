    <?php require_once '../includes/db_connect.php'; ?>
    <?php require_once '../includes/session.php' ;?>
    <?php include '../includes/functions.php' ;?>
    
     <?php
     include '../includes/header.php';
     ?>

    
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Login </h4>
				</div>
				<div class="modal-body">		
					<?php include '../includes/login.php'; ?>
				</div>
			</div>
        </div>
    </div>
	</div>
		<nav class="navbar">
		  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="index.php">EasyBlog</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="../pages/about.php">About <span class="sr-only">(current)</span></a></li>
				<li><a href="../pages/articles.php">Articles</a></li>
			  </ul>
			  
			  <ul class="nav navbar-nav navbar-right">
				<li><a data-toggle="modal" data-target="#loginModal" href="../includes/login_page.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
				</li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		
     <?php
     include '../includes/footer.php';
     ?>
