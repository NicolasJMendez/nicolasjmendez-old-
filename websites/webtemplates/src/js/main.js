$(document).ready(function(){
	$("#click").click(function(e){
	    e.preventDefault();
	    $('#mobile').toggleClass("mobile_nav_toggle_view");
	});
	//if window is resized
	$(window).resize(function() {
		//if window is resized beyond the media querry for mobile, remove toggled class
		if ($(window).width() > 767 && $('#mobile').hasClass('mobile_nav_toggle_view')){
		    $('#mobile').toggleClass("mobile_nav_toggle_view");
		}
	});
});