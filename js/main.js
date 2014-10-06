( function( $ ){
	"use strict";
	var $myList = $(".contact li a");
	$myList.css({
			height : $myList.width()
		});
	$(window).resize(function(){
		console.log($myList.width());
		$myList.css({
			height : $myList.width()
		});
		console.log($myList.height());
	});
})( jQuery );