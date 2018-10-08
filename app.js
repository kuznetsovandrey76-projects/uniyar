(function( $ ) {			
	// http://jquery.page2page.ru/index.php5/Ajax-%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81
	$.ajax({
	  	url: "data.json",
	    success: function(data){
			setTimeout(function() {
			    $.each(data, function(key, value) {
			    	var templ_head = $('<p id="' + value.name + '" class="outer">' + value.translate + '</p>')
			    	var templ_info = $('<div id="' + value.name + '-tasks" class="inner">' + value.task + '</div>')
			    	var templ_foot = $('<p class="teacher">' + value.teacher + '</p>')
			    	$('body').append(templ_head)
			    	$('body').append(templ_info)
			    	$('body').append(templ_foot)
			    });
			}, 500);
	  	}
	});
})(jQuery);