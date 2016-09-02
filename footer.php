				</div><!-- /.container -->

				<footer class="scene_element scene_element--fadeinup pt-reverse">
				    <div class="footer" id="footer">
				        <div class="container">
				            <div class="row">
				                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
				                	<?php 
									$location = 'footer-menu-1';
									if (has_nav_menu($location)) :
									    $menu_obj = get_menu_by_location($location); 
									    wp_nav_menu( array( 
									        'theme_location'  => $location,
									        'items_wrap'=> '<h3>'.esc_html($menu_obj->name).'</h3><ul id="%1$s" class="%2$s">%3$s</ul>'
									    )); 
									endif;
									?>
				                </div>
				                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
									<?php 
									$location = 'footer-menu-2';
									if (has_nav_menu($location)) :
									    $menu_obj = get_menu_by_location($location); 
									    wp_nav_menu( array( 
									        'theme_location'  => $location,
									        'items_wrap'=> '<h3>'.esc_html($menu_obj->name).'</h3><ul id="%1$s" class="%2$s">%3$s</ul>'
									    )); 
									endif;
									?>
				                </div>
				                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
									<?php 
									$location = 'footer-menu-3';
									if (has_nav_menu($location)) :
									    $menu_obj = get_menu_by_location($location); 
									    wp_nav_menu( array( 
									        'theme_location'  => $location,
									        'items_wrap'=> '<h3>'.esc_html($menu_obj->name).'</h3><ul id="%1$s" class="%2$s">%3$s</ul>'
									    )); 
									endif;
									?>
				                </div>
				                <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
									<?php 
									$location = 'footer-menu-4';
									if (has_nav_menu($location)) :
									    $menu_obj = get_menu_by_location($location); 
									    wp_nav_menu( array( 
									        'theme_location'  => $location,
									        'items_wrap'=> '<h3>'.esc_html($menu_obj->name).'</h3><ul id="%1$s" class="%2$s">%3$s</ul>'
									    )); 
									endif;
									?>
				                </div>
				                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
				                    <h3> Lorem Ipsum </h3>
				                    <ul>
				                        <li>
				                            <div class="input-append newsletter-box text-center">
				                                <input type="text" class="full text-center" placeholder="Email ">
				                                <button class="btn" type="button"> Sign up to our Newsletter <i class="fa fa-long-arrow-right"> </i> </button>
				                            </div>
				                        </li>
				                    </ul>
				                    <ul class="social">
				                    	<?php if(get_option('facebook') != ''){ ?>
											<li> <a href="<?php echo get_option('facebook'); ?>"> <i class=" fa fa-facebook">   </i> </a> </li>
				                    	<?php } ?>
				                        <?php if(get_option('twitter') != ''){ ?>
				                        	<li> <a href="<?php echo get_option('twitter'); ?>"> <i class="fa fa-twitter">   </i> </a> </li>
				                        <?php } ?>
				                        <?php if(get_option('google') != ''){ ?>
				                        	<li> <a href="<?php echo get_option('google'); ?>"> <i class="fa fa-google-plus">   </i> </a> </li>
				                        <?php } ?>
				                        <?php if(get_option('pinterest') != ''){ ?>
				                        	<li> <a href="<?php echo get_option('pinterest'); ?>"> <i class="fa fa-pinterest">   </i> </a> </li>
				                        <?php } ?>
				                        <?php if(get_option('youtube') != ''){ ?>
				                        	<li> <a href="<?php echo get_option('youtube'); ?>"> <i class="fa fa-youtube">   </i> </a> </li>
				                        <?php } ?>
				                    </ul>
				                </div>
				            </div>
				            <!--/.row--> 
				        </div>
				        <!--/.container--> 
				    </div>
				    <!--/.footer-->
				    
				    <div class="footer-bottom">
				        <div class="container">
				            <p class="pull-left"> Copyright &copy; <?php echo get_bloginfo( 'name' ) . ' ' . date('Y'); ?>. All right reserved. </p>
				            <div class="pull-right">
				                <ul class="nav nav-pills payments">
				                	<li><i class="fa fa-cc-visa"></i></li>
				                    <li><i class="fa fa-cc-mastercard"></i></li>
				                    <li><i class="fa fa-cc-amex"></i></li>
				                    <li><i class="fa fa-cc-paypal"></i></li>
				                </ul> 
				            </div>
				        </div>
				    </div>
				    <!--/.footer-bottom--> 
				</footer>

			</div><!-- /#page-content-wrapper -->

	    </div><!-- /#wrapper -->	

	    <?php wp_footer(); ?> 

	    <!-- Script -->
		<script>

		//$(function() {

		//});	

	    </script>

	</body>
</html>