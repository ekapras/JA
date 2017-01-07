<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Jepara ART</title>


	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/files/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/files/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/files/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/files/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/files/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/files/rs-plugin/css/settings.css">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/css/form-elements.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/css/style.css">


</head>
<body>
	
	<div class="sidebar-menu-container" id="sidebar-menu-container">
		<div class="sidebar-menu-push">
			<div class="sidebar-menu-overlay"></div>
			<div class="sidebar-menu-inner">
				<header class="site-header">
					<div id="main-header" class="main-header header-sticky">
						<div class="inner-header clearfix">
							<div class="logo">
								<a href="<?php echo base_url(); ?>home">J S A</a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button" ><i class="fa fa-bars" ></i></a>
							</div>
							<nav class="main-navigation pull-right hidden-xs hidden-sm">


							<?php
							$this->load->library('session');

							if (isset($this->session->userdata['logged_in'])=='admin'){
									$this->load->view('template/admin_login_v');
							}

							else {
								$data = array('' => '', );
								$this->load->view('template/notlogin_v');
							}

							?>

							</nav>
						</div>
					</div>
				</header>
				


			<?php $this->load->view($content_view); ?>



			 	<footer class="footer">
			 		
			 		<div class="container">
					  	<a href="#" class="scrollpoint sp-effect3">
	                    	<img src="<?php echo base_url(); ?>assets/assets/template/img/freeze/logo.png" alt="" class="logo">
	                	</a>
	                	<p align="left" style="color:white;"> We Are On Social Media</p>
	                	<div align="left" class="social-login-buttons">
	                    	<a class="btn btn-link-1 btn-link-1-twitter" href="#" style="color:white;">
	                    		<i class="fa fa-twitter"></i> Twitter
	                    	</a><br>
	                    	<a class="btn btn-link-1 btn-link-1-facebook" href="#" style="color:white;">
	                    		<i class="fa fa-facebook"></i> Facebook
	                    	</a><br>
	                    	<a class="btn btn-link-1 btn-link-1-google-plus" href="#" style="color:white;">
	                    		<i class="fa fa-google-plus"></i> Google Plus
	                    	</a>
	                    </div>
	                    <p align="right" style="color:white;">@2016. All rights reserved . <br>
	                    Template By <a href="#"> Y O M  </a></p>
	            	</div>
	            	
			    </footer>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/files/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/files/js/bootstrap.min.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="<?php echo base_url(); ?>assets/files/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/files/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/files/js/plugins.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/files/js/custom.js"></script>
	<!-- LOGIN SCRIPT DON'T LOW 	
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.backstretch.min.js"></script>
	<script src="assets/js/scripts.js"></script>-->

</body>
</html>