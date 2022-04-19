$(function(){


});

var rootUrl = $('meta[name="root-url"]').attr('content');
$(".toggle").click(function(){
	$(this).toggleClass("active");


	if ($(".collapse").hasClass("active")) {

		$(".collapse").css("height", "0px");

		if ( !$("header").hasClass("scroll") ) {
			$('.bars').removeClass('white');
		}

	}else{

		$(".collapse").height( $(window).height() );
		$('.bars').addClass('white');

		
	}

	$(".collapse").toggleClass("active");

});


$('.links a').click(function(e){
	e.preventDefault();

	$(".collapse").css("height", "0px");
	$('.collapse').removeClass("active");
	$(".toggle").toggleClass("active");
	toSection = this.hash;
	

	if ( $(""+toSection).length > 0 ) {
	

		$('html, body').animate({
        	scrollTop: $(toSection).offset().top - 100
	    }, 800, function(){
	    });
	}else {
	
		window.location = $(this).attr("href")
	}
	

});







$bandera = 0;
$offsetslider = 0;
$translateX = 0;
$posts = $('#slider-posts').attr("posts");
$scroll =  ( $(".preview-post").innerWidth() / 10 ) + 3;

$(window).resize(function(){
	$scroll =  ( $(".preview-post").innerWidth() / 10 ) + 3;
	$('#slider-posts').css("transform", "translateX(0rem)");
	$offsetslider = 0;
	$translateX = 0;
});


$('#offset-right').click(function(){
	console.log("oawdawd")
	if ($offsetslider < $posts - 2 ) {
		$translateX += $scroll;
		$offsetslider ++;
		$('#slider-posts').css("transform", "translateX(-"+$translateX+"rem)");
		
	}

});

$('#offset-left').click(function(){
	console.log("oawdawd")
	if ($offsetslider > 0 ) {
		$translateX -= $scroll;
		$offsetslider --;
		$('#slider-posts').css("transform", "translateX(-"+$translateX+"rem)");
		
	}
});

