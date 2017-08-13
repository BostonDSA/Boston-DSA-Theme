$(document).ready(function() {
	var scroll = $(window).scrollTop();

	$('.rose').parallax({
		imageSrc: '/wp-content/themes/Boston-DSA-Theme/img/rose-overlay.svg',
		bleed: 30
	});

	$('#menu-item-27 a').addClass("btn btn-primary")

	$("#navbarNavDropdown, #wrapper-navbar").addClass("top");

	if(scroll > 0) {
		$("#navbarNavDropdown, #wrapper-navbar").removeClass("top");
	}

	$(window).scroll(function (event) {
	    scroll = $(window).scrollTop();

	    if(!scroll) { //abuse 0 == false :)
		  $("#navbarNavDropdown, #wrapper-navbar").addClass("top");
		} else {
			$("#navbarNavDropdown, #wrapper-navbar").removeClass("top");
		}
	});
})