( function( $ ){
	"use strict";
	var $myList = $(".contact li a");
	var $myGallery = $(".gallery a");

	var $resizing = function ($ratio, $myClass){
		$myClass.css({
			height : $myClass.width()*$ratio
		});
	};
	$(window).resize(function(){
		$resizing(1,$myList);
		$resizing(0.75,$myGallery);
	});
})( jQuery );
