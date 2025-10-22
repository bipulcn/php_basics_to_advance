(function( $ ){
	$.fn.testFun = function(options) {
		var defaults = {
			'show' : 'yes'
		};

		var options = $.extend(defaults, options);

		this.each(function() {	  	
			var o = options;
			obj = $(this);
			// obj.animate({'font-size': 2+'em'});
			obj.click(function () {
			    if($(this).text() == "Show") {
			        $(this).text("Hide");
			    } else {
			        $(this).text("Show");
			    }
			});
		});
	}
})( jQuery );
