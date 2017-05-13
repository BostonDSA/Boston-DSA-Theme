$(document).ready(function() {
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