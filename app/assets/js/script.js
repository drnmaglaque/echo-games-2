$(document).ready(function() {


	$("#notif-session").fadeOut(3000).delay(3000);

	const main = $("#main");
	const mainOffset = main.offset();

	const header = $("#echo-header");

	$(window).on("scroll", function(e) {
	  if ($(this).scrollTop() > mainOffset.top + 200) {
	    header.addClass("fixed-top");
	    main.addClass("fixed-void");
	  } else {
	    header.removeClass("fixed-top");
	    main.removeClass("fixed-void");
	  }
	});
});