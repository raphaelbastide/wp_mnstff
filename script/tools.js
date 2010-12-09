
jQuery(document).ready(function(){  
	// Universal Openers
	$('.open').click(function() {
	  $(this).next(".inside").toggle(0, function() {
	  	$(this).parent().toggleClass('closed');
	  });
	});
});