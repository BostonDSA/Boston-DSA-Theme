$(document).ready(function() {

	$('.rose').parallax({
		imageSrc: '/wp-content/themes/Boston-DSA-Theme/img/rose-overlay.svg',
		bleed: 30
	});

	$('#menu-item-27 a').addClass("btn btn-primary")

	$("#navbarNavDropdown, #wrapper-navbar").addClass("top");

	$(window).scroll(function (event) {
	    var scroll = $(window).scrollTop();

	    if(!scroll) { //abuse 0 == false :)
		  $("#navbarNavDropdown, #wrapper-navbar").addClass("top");
		} else {
			$("#navbarNavDropdown, #wrapper-navbar").removeClass("top");
		}
	});
})