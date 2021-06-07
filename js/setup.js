jQuery("document").ready(function($){

	var nav = $('.fix');

	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			nav.addClass("box-vermelho");
			$('#logo').stop().animate({ height: '130px' }, 100, 'linear');
		} else {
			nav.removeClass("box-vermelho");
			$('#logo').stop().animate({ height: '200px' }, 100, 'linear');
		}
	});

});