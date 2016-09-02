
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">

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
	        	<nav class="side-nav">
	        		<div class="side-nav-header">
		        		<a href="#menu-close" id="menu-close"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
		        		<a href="<?php bloginfo('wpurl');?>" class="side-nav-brand">Logo</a>
	        		</div>
		            <?php wp_list_pages( '&title_li='); ?>
		        </nav>
		        <footer>
		        	<p>Copyright &copy; Generic Theme 2016</p>
		        </footer>
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
						<a href="#menu-open" id="menu-open"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></a>
						<a class="mobile-nav-brand" href="<?php bloginfo('wpurl');?>">Logo</a>
					</div>
				</div>