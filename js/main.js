$(function() {


	// trae por ajax toda la lista de canciones
	$.get( "?controller=Homeuser&action=ajaxSongs#", function( songs ) {

		// necesario un campo name para el typeahead
		for(var i=0; i < songs.length; i++) {
			songs[i].name = songs[i].author + ' - ' + songs[i].title;
		}

		$('.typeahead').typeahead({
			source: songs,
			autoSelect: true
		});

		$('.typeahead').change(function() {
			var current = $('.typeahead').typeahead("getActive");
			if (current) {
				$('#player').attr('src', current.file);
				$('#player')[0].play();
			}
		});

	});



});

