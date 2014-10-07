( function( $ ){
	"use strict";
	var $myList = $(".contact li a");
	$myList.css({
			height : $myList.width()
		});
	$(window).resize(function(){
		$myList.css({
			height : $myList.width()
		});
	});
})( jQuery );