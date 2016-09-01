
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

		<!-- Font Awesome CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

		<!-- Custom styles for this template -->
		<link href="<?php bloginfo('template_directory');?>/css/style.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<?php wp_head();?>

	</head>

	<body>

		<div id="wrapper">
			<!-- Side-Nav-wrapper -->
	        <div id="side-nav-wrapper">
	            <ul class="side-nav">
	                <a href="<?php bloginfo('wpurl');?>" class="side-nav-brand">Logo</a>
	                <?php wp_list_pages( '&title_li='); ?>
	            </ul>
	        </div>
	        <!-- /#Side-Nav-Wrapper -->

	        <!-- Page Content -->
	        <div id="page-content-wrapper">

		        <div class="masthead">
					<div class="container">
						<nav class="desktop-nav">
							<a class="desktop-nav-brand" href="<?php bloginfo('wpurl');?>">Logo</a>
							<?php wp_list_pages( '&title_li='); ?>
						</nav>
					</div>
				</div>

				<div class="masthead-mobile">
					<div class="container">
						<a href="#menu-toggle" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></a>
						<a class="mobile-nav-brand" href="<?php bloginfo('wpurl');?>">Logo</a>
					</div>
				</div>