$(document).ready(function() {
		$('#menu').hide(0);
		$(window).scroll(function(){
				var windowHeight = $(window).scrollTop();

				    if(windowHeight >= 300  ){
					$('#menu').fadeIn(500);
 					$('#menu').addClass('fixed');
					$('#togglemenu').addClass('fixed-menu');
					$('#icon-menu').addClass('fixed-icon');
				    }else{
					$('#menu').hide();
					$('#togglemenu').hide();
					$('#menu').removeClass('fixed');
					$('#togglemenu').removeClass('fixed-menu');
					$('#icon-menu').removeClass('fixed-icon');
				}
	   });
});
var main = function(){
	$('#togglemenu').hide();
	$('#icon-menu').click(function(){
		$('#togglemenu').toggle(500);
	});
};
$(document).ready(main);
