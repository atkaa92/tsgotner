//                                    Preloader
// ========================================================================================================
$(window).on('load', function(){ 
    $('#preloader').fadeOut();
})
$(document).ajaxStart(function () {
    $('#preloader').fadeIn();
})
$(document).ajaxStop(function () {
    $( "#preloader" ).fadeOut();
})

$('body').click(function () {
    setTimeout(function () {
        $('.mes').hide();
    },3000)
})

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
//                                    Footer position
// ========================================================================================================
if ($("body").height() < $(window).height()){
    $("footer").css("margin-top",  $(window).height() - $('body').height());
}

//                                    Message pop
// ========================================================================================================
$(document).on('click', '.close_error', function(){
    $(this).parent().fadeOut('slow');
});

//                                File Manager
//=======================================================================================

$('.open-filemanager').fancybox({
    'width'		: 900,
    'height'	: 600,
    'type'		: 'iframe',
    'autoScale'    	: false
});

function responsive_filemanager_callback(field_id){
    $('#'+field_id).attr('name','images[]')
    $('#'+field_id).prev().attr('src',$('#'+field_id).val());
    $('#'+field_id).parent().append(`
        <button class="btn btn-danger btn-block rm-image">
        <i class="fa fa-remove"></i>
        Remove
        </button>
    `)
    $('#'+field_id).attr('id','');
    $('.room-albom').prepend(`
        <div class="one-img">
            <img src="/images/no-image.png" width="100%">
            <input type="hidden" id="room_image">
        </div>
    `)
}

$(document).on('click','.rm-image',function () {
    $(this).parent().remove()
})