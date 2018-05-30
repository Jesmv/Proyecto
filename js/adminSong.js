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

    $('.imageInput').change(function() {
        var id = $(this).data('id');
        var formData = new FormData(document.getElementById("editImageForm" + id));
        
        $.ajax({
            url: "index.php?controller=Admin&action=addImageSong",
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(res){
            $('#imageImg'+ id).attr('src', res);
        });
    })
    
 });   