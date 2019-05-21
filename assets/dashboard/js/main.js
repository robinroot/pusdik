

jQuery(document).ready(function($) {


	$('#menuToggle').on('click', function(event) {
		$('body').toggleClass('open');
	});

	

	// $('.user-area> a').on('click', function(event) {
	// 	event.preventDefault();
	// 	event.stopPropagation();
	// 	$('.user-menu').parent().removeClass('open');
	// 	$('.user-menu').parent().toggleClass('open');
	// });


});