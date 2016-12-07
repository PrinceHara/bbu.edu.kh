<?php
$base_url = base_url('theme/admin/assets');
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Log In - BBU</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Open Sans font from Google CDN -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&amp;subset=latin" rel="stylesheet" type="text/css">

	<!-- LanderApp's stylesheets -->
	<link href="<?= $base_url ?>/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= $base_url ?>/stylesheets/landerapp.min.css" rel="stylesheet" type="text/css">
	<link href="<?= $base_url ?>/stylesheets/pages.min.css" rel="stylesheet" type="text/css">
	<link href="<?= $base_url ?>/stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
	<link href="<?= $base_url ?>/stylesheets/themes.min.css" rel="stylesheet" type="text/css">

	<!--[if lt IE 9]>
		<script src="<?= $base_url ?>/javascripts/ie.min.js"></script>
	<![endif]-->


<!-- $DEMO =========================================================================================

	Remove this section on production
-->
	<style>
		#signin-demo {
			position: fixed;
			right: 0;
			bottom: 0;
			z-index: 10000;
			background: rgba(0,0,0,.6);
			padding: 6px;
			border-radius: 3px;
		}
		#signin-demo img { cursor: pointer; height: 40px; }
		#signin-demo img:hover { opacity: .5; }
		#signin-demo div {
			color: #fff;
			font-size: 10px;
			font-weight: 600;
			padding-bottom: 6px;
		}
	</style>
<!-- / $DEMO -->

</head>


<!-- 1. $BODY ======================================================================================
	
	Body

	Classes:
	* 'theme-{THEME NAME}'
	* 'right-to-left'     - Sets text direction to right-to-left
-->
<body class="theme-default page-signin">

<script>
	var init = [];
</script>
<!-- Demo script --> <script src="<?= $base_url ?>/demo/demo.js"></script> <!-- / Demo script -->

	<!-- Page background -->
	<div id="page-signin-bg">
		<!-- Background overlay -->
		<div class="overlay"></div>
		<!-- Replace this with your bg image -->
		<img src="<?= $base_url ?>/demo/bbu_bg.jpg" alt="">
	</div>
	<!-- / Page background -->

	<!-- Container -->


	<div class="signin-container">



		<!-- Right side -->


		<div class="signin-form">

			<!-- Form -->
			<form action="<?= site_url() ?>Login/check_login" id="signin-form_id" method="post">
				<div class="signin-text">
					<span>Log In to your account</span>
				</div> <!-- / .signin-text -->

				<div class="form-group w-icon">
					<input type="text" name="txtusername" id="txtUserName"  class="form-control input-lg" placeholder="Username or email">
					<span class="fa fa-user signin-form-icon"></span>
				</div> <!-- / Username -->

				<div class="form-group w-icon">
					<input type="password" name="txtpassword" id="txtpassword" class="form-control input-lg" placeholder="Password">
					<span class="fa fa-lock signin-form-icon"></span>
				</div> <!-- / Password -->

				<div class="form-actions" >
					<input type="submit" value="SIGN IN"  class="signin-btn bg-primary">
					<a href="#" class="forgot-password" id="forgot-password-link">Forgot your password?</a>
				</div> <!-- / .form-actions -->
			</form>
			<!-- / Form -->

			<!-- "Sign In with" block -->
			<div class="signin-with">
				<!-- Facebook -->
				<a href="index.html" class="signin-with-btn" style="background:#2879BA">Sign In with <span>Facebook</span></a>
			</div>
			<!-- / "Sign In with" block -->

			<!-- Password reset form -->
			<div class="password-reset-form" id="password-reset-form">
				<div class="header">
					<div class="signin-text">
						<span>Password reset</span>
						<div class="close">&times;</div>
					</div> <!-- / .signin-text -->
				</div> <!-- / .header -->
				
				<!-- Form -->
				<form action="index.html" id="password-reset-form_id">
					<div class="form-group w-icon">
						<input type="text" name="password_reset_email" id="p_email_id" class="form-control input-lg" placeholder="Enter your email">
						<span class="fa fa-envelope signin-form-icon"></span>
					</div> <!-- / Email -->

					<div class="form-actions">
						<input type="submit" value="SEND PASSWORD RESET LINK" class="signin-btn bg-primary">
					</div> <!-- / .form-actions -->
				</form>
				<!-- / Form -->
			</div>
			<!-- / Password reset form -->
		</div>
		<!-- Right side -->

				<!-- Left side -->
		<div class="signin-info">
			<a href="index.html" class="logo">
				Hara<span style="font-weight:100;">Mart</span>
			</a> <!-- / .logo -->
			<div class="slogan">
				Simple. Flexible. Powerful.
			</div> <!-- / .slogan -->
			<ul>
				<li><i class="fa fa-sitemap signin-icon"></i> A smarter POS</li>
				<li><i class="fa fa-file-text-o signin-icon"></i> Can help your business</li>
				<li><i class="fa fa-outdent signin-icon"></i> Success!</li>
				<li><i class="fa fa-heart signin-icon"></i> From POS Developer!</li>
			</ul> <!-- / Info list -->
		</div>
		<!-- / Left side -->
		
	</div>
	<!-- / Container -->


<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
	<script type="text/javascript"> window.jQuery || document.write('<script src="<?= $base_url ?>/javascripts/jquery.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
	<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
<![endif]-->


<!-- LanderApp's javascripts -->
<script src="<?= $base_url ?>/javascripts/bootstrap.min.js"></script>
<script src="<?= $base_url ?>/javascripts/landerapp.min.js"></script>

<script type="text/javascript">
	// Resize BG
	init.push(function () {
		var $ph  = $('#page-signin-bg'),
		    $img = $ph.find('> img');

		$(window).on('resize', function () {
			$img.attr('style', '');
			if ($img.height() < $ph.height()) {
				$img.css({
					height: '100%',
					width: 'auto'
				});
			}
		});
	});

	// Show/Hide password reset form on click
	init.push(function () {
		$('#forgot-password-link').click(function () {
			$('#password-reset-form').fadeIn(400);
			return false;
		});
		$('#password-reset-form .close').click(function () {
			$('#password-reset-form').fadeOut(400);
			return false;
		});
	});

	// Setup Sign In form validation
	init.push(function () {
		$("#signin-form_id").validate({ focusInvalid: true, errorPlacement: function () {} });
		
		// Validate username
		$("#username_id").rules("add", {
			required: true,
			minlength: 3
		});

		// Validate password
		$("#password_id").rules("add", {
			required: true,
			minlength: 6
		});
	});

	// Setup Password Reset form validation
	init.push(function () {
		$("#password-reset-form_id").validate({ focusInvalid: true, errorPlacement: function () {} });
		
		// Validate email
		$("#p_email_id").rules("add", {
			required: true,
			email: true
		});
	});

	window.LanderApp.start(init);
</script>

</body>
</html>
