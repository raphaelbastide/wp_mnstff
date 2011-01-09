
jQuery(document).ready(function(){  

	// Universal Openers

	$('.open').click(function() {
	  $(this).next('.inside').toggle(0, function() {
		$(this).parent().toggleClass('closed');
	  });
	});

	

	// Show Sidebar on mousemove only

/* 
	var timeout = null;
	$('#leftsidebar').hide();

	$('body').mousemove(function(){
			if (timeout) {
				clearTimeout(timeout);
				timeout = null;
			}
			$('#leftsidebar').fadeIn(400);
		},
		function() {
			var menuBar = $(this);
			timeout = setTimeout(function() {
				timeout = null;
				$('#leftsidebar').fadeOut(400);
			}, 1000);
		}
	);
*/


});



