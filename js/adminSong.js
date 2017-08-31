$(function() {
    var isPlaying=false

    $(document).ready(function(){
        $('.collapsible').collapsible();
    });

    $('.playAdmin').click(function() {
        if(!isPlaying) {
            $(this).find('audio')[0].play();
            $(this).find("i").text('stop');

            isPlaying = true;
        } else {
            $(this).find('audio')[0].pause();
            $(this).find("i").text('play_circle_filled');
            isPlaying = false;
        }
    });
    
 });   