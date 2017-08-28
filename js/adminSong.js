$(function() {
    var isPlaying=false

    $(document).ready(function(){
        $('.collapsible').collapsible();
    });

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        today: 'Today',
        clear: 'Clear',
        close: 'Ok',
        closeOnSelect: false // Close upon selecting a date,
    });

    $('#playAdmin').click(function() {
    
        if(!isPlaying) {
            $(this).find('audio')[0].play();
            $(this).find("i").text('stop');
            $(this).attr("id","stop");
            isPlaying = true;
        } else {
            $(this).find('audio')[0].pause();
            $(this).find("i").text('play_circle_filled');
            $(this).attr("id","playAdmin");
        }
    });
    
 });   