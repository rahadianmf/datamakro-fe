$(document).ready(function () {
});

$(window).on("load",function() {
	$(".section-1 .inner-more").hover(function(){
		$(".frame").toggleClass("triggered");
	});
	$("span.arrow").click(function(){
		$("html, body").animate({
			scrollTop: $(".section-2").offset().top
		}, 500);
	});
	popup();
	plusmin();
	accordion();
	bSearchSpan();
	tabHome();
	tabHomeMobile();
	toggleaside();
	bborToggle();
	hLoginToggle();
});