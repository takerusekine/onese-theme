$(document).ready(function () {
	  hsize = $(window).height();
	  $(".js-height").css("height", hsize + "px");
	});
	$(window).resize(function () {
	  hsize = $(window).height();
	  if (window.matchMedia('screen and (min-width:1024px)').matches)  {
	  $(".js-height").css("height", hsize + "px");
	  }
	});
