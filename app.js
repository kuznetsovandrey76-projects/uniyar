$( document ).ready(function() {		
	// http://jquery.page2page.ru/index.php5/Ajax-%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81
	$.ajax({
	  	url: "data.json",
	    success: function(data){
			console.log(data.articles)
		    $.each(data.articles, function(key, value) {
		    	// var templ_header = $('<p id="' + value.name + '" class="outer">' + value.translate + '</p>');
		    	var templ_header = $('<div>')
		    						.attr('id', value.name)
		    						.addClass('outer');
		    	$('<a>',{
				    text: value.translate,
				    title: 'Blah',
				    href: 'dir/' + value.name,
				    click: function(){ console.log(value.name);}
				}).appendTo('#' + value.name);
		    	// var templ_info = $('<div id="' + value.name + '-tasks" class="inner">' + value.task + '</div>');
		    	var templ_info = $('<div>')
		    						.attr('id', value.name + '-tasks')
		    						.addClass('inner')
		    						.text(value.task);
		    	// var templ_footer = $('<p class="teacher">' + value.teacher + '</p>');
		    	var templ_footer = $('<p>')
		    						.addClass('teacher')
		    						.text(value.teacher);
		    	$('body').append(templ_header)
		    			.append(templ_info)
		    			.append(templ_footer);
		    });
	  	}
	});
});