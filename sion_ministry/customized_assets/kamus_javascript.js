/*-----------------------HALAMAN HEADER -----------------------------*/
/*-------------------------------------------------------------------*/
/*Set space under fixed-top-menu navbar*/
$(document).ready(function(){adjust_body_offset();});
$(window).resize(function(){adjust_body_offset()});
function adjust_body_offset() {
	$('body').css('padding-top', $('.navbar').outerHeight(true) + 'px' );
}
/*Resize navbar on scrolling*/
$(window).scroll(function() {
	if ($(document).scrollTop() > 50) {
		$('.navbar').addClass('shrink');
	}else {
		$('.navbar').removeClass('shrink');
	}
	if ($(document).scrollTop() == 0) {
		$(document).ready(adjust_body_offset);
	}
});
/*OnClick Button Menu*/
$(function() {
	$('#ChangeToggle').click(function() {
		$('#navbar-hamburger').toggleClass('hidden');
		$('#navbar-close').toggleClass('hidden');  
	});
});

/*-----------------------HALAMAN HOME -----------------------------*/
/*-------------------------------------------------------------------*/