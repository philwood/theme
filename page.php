<?php get_header(); ?>

<div class="container">

	<div class="row">
		<div class="col-sm-12 scene_element scene_element--fadeinright pt-reverse">

			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content-page', get_post_format() );
  
				endwhile; endif; 
			?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->

<?php get_footer(); ?>