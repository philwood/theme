				</div><!-- /.container -->

				<footer class="blog-footer">
					<p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
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

	    </script>
	</body>
</html>