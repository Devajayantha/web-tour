$(document).ready(function(){
	$('.menu').click(function(){
		$('ul').toggleClass('active');
	})

	/* slide show waktu */
	$('.carouselExampleSlidesOnly').carousel({
	  interval: 1000
	})
	// newFunction();
})



function newFunction() {
	$('.carousel-inner').carousel({
		interval: 1000
	});
}
