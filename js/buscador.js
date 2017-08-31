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

    
    // el play del resultado principal
    $('#play').click(function() { 
        listSong.unshift(selectedResult);     
        play(listSong[0]);

        $("#listSongs").prepend("<li id='"+selectedResult.id+"'>"+selectedResult.title+"</li>");
    });

    // el resto de plays de la pagina
    $('.play-song').click(function() { 

        // cogemos el id de la cancion del atributo html del boton pulsado
        var songid = $(this).attr('data-id');

        /* en este caso hay que buscar la cancion por ajax con ese id, y cuando traigamos la informacion de esa canción,
        // entonces la podemos reproducir*/
        $.get( "?controller=Homeuser&action=ajaxSongById&id=" + songid, function( song ) {
            listSong.unshift(song);     
            play(listSong[0]);
            $("#listSongs").prepend("<li id='"+song.id+"'>"+song.title+"</li>");
        })
        
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
        
        cancionActual = cancionActual +1;
        play(listSong[cancionActual]);
    });

    function play(song) {       
        $('#player').attr('src', song.file);
        $('#player')[0].play();
        // guardar log de que se escucha la cancion
        $.get( "?controller=Homeuser&action=ajaxLogSong&id=" + song.id, function() {});
        $('#songPlaying').text(song.author + ' - ' + song.title);
    }

    $('#playMusic').click(function() {
        $('#player')[0].play();
    });

    $('#pauseMusic').click(function() {
        $('audio')[0].pause();
    });

    $('#stopMusic').click(function() {
        $('audio')[0].pause();
        $('audio')[0].currentTime = 0;
        return false;
    });

    $('#forwardMusic').click(function() {
        cancionActual = cancionActual +1;
        play(listSong[cancionActual]);
    });

    $('#backMusic').click(function() {
        cancionActual = cancionActual -1;
        play(listSong[cancionActual]);
    });
    
    
    // Para gestionar los likes

    $('#like').click(function() {
        var songId = $('#result').attr('data-songid');
        $.get( "?controller=Homeuser&action=ajaxLikeSong&id=" + songId, function() {});
        return false;
    });


});