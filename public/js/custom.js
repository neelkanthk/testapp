$(document).ready(function () {
    $('#other_hobby').click(function () {
        if ($('.cb_wrapper #other').html() == '')
        {
            $('.cb_wrapper #other').html('<input type="text" name="otherhobby" id="otherhobby"/>');
        }
        else {
            $('.cb_wrapper #other').html('');
        }

    });


});
//$('#otherhobby').focusout(function () {
//        
//    });
//$(document).on('focusout', '#otherhobby', function () {
//    var h = $('#otherhobby').val();
////    alert(h);
//    $('#other_hobby').attr('value', h);
//});