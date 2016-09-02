$(function() {

    $("#menu-open, #menu-close").on('click', function(e) {
	    e.preventDefault();
	    e.stopImmediatePropagation();

	    $("#wrapper").toggleClass("toggled");

	    $(document).one('click', function closeMenu (e){

	        if($("#side-nav-wrapper").has(e.target).length === 0){
	            $("#wrapper").removeClass("toggled");
	        }
	        else {
	            $(document).one('click', closeMenu);
	        }
	    });
	});
});
