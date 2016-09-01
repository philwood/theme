$(function() {

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
});

$(window).on('resize',function(){location.reload();});