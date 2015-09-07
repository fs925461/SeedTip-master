var main = function(){
	var jPM = $.jPanelMenu();
	jPM.on();
};

var renderPage = function(){


	//Brettel Bild
	var a = $(".row-width").width();
	$(".brettel-img").css("width", a);
	$(".brettel-img").css("height", a*1.66);

	//Stellenanzeigen Bild
	// $(".pill-row").css("height", $(".stellenanzeige").width()*0.6);
	// $(".pill-row").css("padding-top", $(".stellenanzeige").width()*0.35);
	//$(".Flugzeug").css("height", this.closest($(".stellenanzeige")).height());
	// $(".Flugzeug").css("width", $(".stellenanzeige").width());
	$(".pill-row").css("margin-top", $(".pill-row").closest(($(".stellenanzeige"))).width()*0.25);

	if ($(window).width()>=1200) {
		$(".background-image").css("height", $("header").height()+$(".head").height()+$(".white-flow").height());

	}
	else {
		$(".background-image").css("height", $("header").height()+$(".head").height());
	}

	if(window.innerHeight > window.innerWidth){
		$(".spacer").css("height", $(window).height()*0.55);
		$(".bkgimg-landingpage").css("min-height", $(window).height()-$("header").height());

		//$(".brettel1>div").removeClass("col-xs-8 col-xs-offset-4");
		//$(".brettel1>div").addClass("col-xs-12");

	}

	if(window.innerWidth > window.innerHeight){
     $(".spacer").css("height", "5vh");
		 $(".bkgimg-landingpage").css("min-height", $(window).height()-$("header").height());
	}

	$(".white-flow").css("min-height", $(window).height()-$("header").height()-$(".head").height());
	$(".bkgimg-blackboard").css("height", $("header").height()+$(".heading").height()+$(".flow").height()); //die 200 sind suboptimal
	$(".partner").css("margin-top", $(".partner").height()*-1);



};



$(document).ready(main);

$(window).load(function(){
	renderPage();
});

$(window).resize(function() {
	renderPage();
});

$(window).bind('orientationchange', function(event) {
	location.reload();
});

/*$.mobile.loading().hide();*/
