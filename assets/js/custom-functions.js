jQuery(document).ready(function($) {
	// ADD SLIDEDOWN ANIMATION TO DROPDOWN //
	$('.dropdown').on('show.bs.dropdown', function(e){
	$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
	});

	// ADD SLIDEUP ANIMATION TO DROPDOWN //
	$('.dropdown').on('hide.bs.dropdown', function(e){
	$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
	});

	$(".mask-wrap").hover(
		function(){
		  $(this).find(".mask").fadeIn();
		},
		function(){
		  $(this).find(".mask").fadeOut();
		}
	);

});