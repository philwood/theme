<?php get_header(); ?>

<div class="container">

	<div class="row">

		<div class="col-sm-8 blog-main scene_element scene_element--fadeinup pt-reverse">

			<div class="blog-header">
				<h1 class="blog-title"><a href="<?php bloginfo('wpurl');?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
				<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
			</div>

			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile; 
			?>

			<nav>
				<ul class="pager">

					<?php
						$prev_link = get_previous_posts_link(__('Previous'));
						$next_link = get_next_posts_link(__('Next'));


						if(empty($prev_link)){
							echo '<li><a href="#" class="btn disabled">Previous</a></li>';
						}
						else {
							echo '<li>'.$prev_link .'</li>';
						}

						if(empty($next_link)){
							echo '<li><a href="#" class="btn disabled">Next</a></li>';
						}
						else {
							echo '<li>'.$next_link .'</li>';
						}

					?>
				</ul>
			</nav>

			<?php
			endif; 
			?>

		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>

	</div> <!-- /.row -->

<?php get_footer(); ?>

