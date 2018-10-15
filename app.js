$( document ).ready(function() {		
	// http://jquery.page2page.ru/index.php5/Ajax-%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81
	$.ajax({
	  	url: "data.json",
	    success: function(data){
		    $.each(data.articles, function(key, value) {

		    	var block = $('<div>')
		    						.attr('id', value.name)
		    						.addClass('outer');

		    	$('<a>',{
				    text: value.translate,
				    href: 'dir/' + value.name + '.html',
				    click: function(){ console.log(value.name);}
				}).appendTo(block);

				$('<p>',{
				    class: 'teacher',
				    text: value.teacher
				}).appendTo(block);		

		    	$('body').append(block)
		    });
	  	}
	});
});