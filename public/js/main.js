$(document).ready(function(){
	$('.menu').click(function(){
		$('ul').toggleClass('active');
	})

	/* slide show waktu */
	$('.carouselExampleSlidesOnly').carousel({
	  interval: 1000
	})
})