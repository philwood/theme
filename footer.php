				</div><!-- /.container -->

				<footer class="blog-footer scene_element scene_element--fadein pt-reverse">
					<p>Sufficiently modded to be <a href="https://en.wikipedia.org/wiki/Pwn">pwned</a> by <a href="https://twitter.com/phil_wood_">@phil_wood_</a>.</p>
					<p>
						<a href="#">Back to top</a>
					</p>
				</footer>

			</div><!-- /#page-content-wrapper -->

	    </div><!-- /#wrapper -->

				

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory');?>/js/jquery.smoothState.js"></script>
		<script src="<?php bloginfo('template_directory');?>/js/runSmoothState.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<!-- Menu Toggle Script -->
		<script>

	    $("#menu-toggle").on('click', function(e) {
		    e.preventDefault();
		    e.stopPropagation();

		    $("#wrapper").toggleClass("toggled");

		    $(document).one('click', function closeMenu (e){

		        if($("#sidebar-wrapper").has(e.target).length === 0){
		            $("#wrapper").removeClass("toggled");
		        } else {
		            $(document).one('click', closeMenu);
		        }
		    });
		});

		$(window).on('resize',function(){location.reload();});

	    </script>
	    <?php wp_footer(); ?> 
	</body>
</html>