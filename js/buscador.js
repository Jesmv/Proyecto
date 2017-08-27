$(function() {


    var selectedResult = null;
    var listSong = [];
    var cancionActual = 0;

	// trae por ajax toda la lista de canciones
	$.get( "?controller=Homeuser&action=ajaxSongs#", function( songs ) {

        // El autocomplete de materialize necesita un objeto donde la key es el nombre que aparece en el buscador y el valor  es la imagen

        var files = {};
        var songNames = {};

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
        listSong.unshift(selectedResult);     
        play(listSong[0]);

        $("#listSongs").prepend("<li id='"+selectedResult.id+"'>"+selectedResult.title+"</li>");
    });

    $('#addList').click(function() {
        if (listSong === null) {
            listSong = [selectedResult]
        } else {
            listSong.push(selectedResult);
        }
        $("#listSongs").append("<li id='"+selectedResult.id+"'>"+selectedResult.title+" - "+selectedResult.author+"</li>"); 
        
    });

    function showResult(song) {
        
        $('#result .card-title').text(song.author);
        $('#result .card-content').text(song.title);
        $('#result img').attr('src', song.image);
        $('#result').attr('data-songid', song.id);
        $('#result').removeClass('hide');
    }


    document.getElementById("player").addEventListener('ended', function() {
        console.log('termino');
        cancionActual = cancionActual +1;
        play(listSong[cancionActual]);
    });

    function play(song) {       
        $('#player').attr('src', song.file);
        $('#player')[0].play();        
    }

    
    // Para gestionar los likes

    $('#like').click(function() {
        var songId = $('#result').attr('data-songid');
        $.get( "?controller=Homeuser&action=ajaxLikeSong&id=" + songId, function() {});
        return false;
    });


});