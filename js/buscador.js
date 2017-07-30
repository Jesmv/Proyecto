$(function() {


    var selectedResult = null;


	// trae por ajax toda la lista de canciones
	$.get( "?controller=Homeuser&action=ajaxSongs#", function( songs ) {

        // El autocomplete de materialize necesita un objeto donde la key es el nombre que aparece en el buscador y el valor  es la imagen

        var files = {};
        var songNames = {};

        debugger;

		for(var i=0; i < songs.length; i++) {
            var songText = songs[i].author + ' - ' + songs[i].title;
            songNames[songText] = 'https://source.unsplash.com/random';
            
            files[songText] = songs[i];
        }


        $('#buscador').autocomplete({
            data: songNames,
            limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
            onAutocomplete: function(songText) {
                selectedResult = files[songText];
                showResult(files[songText]);
            },
            minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
        });

      
    });


    $('#play').click(function() {
        play(selectedResult);
    });


    function showResult(song) {
        $('#result .card-title').text(song.author);
        $('#result .card-content').text(song.title);
        $('#result img').attr('src', 'https://source.unsplash.com/random');
        $('#result').removeClass('hide');
    }

    function play(song) {
        $('#player').attr('src', song.file);
        $('#player')[0].play();
    }

});