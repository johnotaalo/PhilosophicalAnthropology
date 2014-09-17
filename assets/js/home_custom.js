$(document).ready(function(){
//variables for setting image and window height
var win_width = $(window).width();
var win_height = $(window).height();
var main_img = $("#main-image").height();

//hiding login
$("#tab-content").hide();
$("#login_form").addClass("fadeOutUp");

$("#login_button").click(function(){
	if ($("#login").hasClass("fadeOutUp")) {
	$("#login").removeClass("fadeOutUp");
	$("#login").removeClass("display-none");
	$("#login").addClass("fadeInDown");

	}else{
	$("#login").removeClass("fadeInDown");	
	$("#login").addClass("fadeOutUp");
	// $("#login").hide();
	};
});

$("#menu").click(function(){
	$("#tab-content").show();
	window.scrollTo(0,win_height);
});

// #home,#contact,#portfolio,#history,#about
$("#home,#contact,#portfolio,#history,#about,.reg-body").width(win_width);
$("#home,#contact,#portfolio,#history,#about,.reg-body").height(win_height);

$('.log_out').click(function(){
	
});


});

function scrollDown(){
	window.scrollTo(0,620);
}

function scrollUp(){
	window.scrollTo(1000,0);
}