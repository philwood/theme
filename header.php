
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Blog Template for Bootstrap</title>

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Custom styles for this template -->
		<link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">

		<!-- Sidebar Styles -->
		<link href="<?php bloginfo('template_directory');?>/simple-sidebar.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php wp_head();?>
	</head>

	<body>

		<div id="wrapper">
			<!-- Sidebar -->
	        <div id="sidebar-wrapper">
	            <ul class="sidebar-nav">
	                <li class="sidebar-brand">
	                    <a href="#">
	                        Start Bootstrap
	                    </a>
	                </li>
	                <li>
	                    <a href="#">Dashboard</a>
	                </li>
	                <li>
	                    <a href="#">Shortcuts</a>
	                </li>
	                <li>
	                    <a href="#">Overview</a>
	                </li>
	                <li>
	                    <a href="#">Events</a>
	                </li>
	                <li>
	                    <a href="#">About</a>
	                </li>
	                <li>
	                    <a href="#">Services</a>
	                </li>
	                <li>
	                    <a href="#">Contact</a>
	                </li>
	            </ul>
	        </div>
	        <!-- /#sidebar-wrapper -->

	        <!-- Page Content -->
	        <div id="page-content-wrapper">

		        <div class="blog-masthead">
					<div class="container">
						<nav class="blog-nav">
							<a class="blog-nav-item active" href="#">Home</a>
							<a class="blog-nav-item" href="#">New features</a>
							<a class="blog-nav-item" href="#">Press</a>
							<a class="blog-nav-item" href="#">New hires</a>
							<a class="blog-nav-item" href="#">About</a>
						</nav>
					</div>
				</div>

				<div class="container">

					<div class="blog-header">
						<a href="#menu-toggle" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></a>
						<h1 class="blog-title"><a href="<?php bloginfo('wpurl');?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
						<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
					</div>