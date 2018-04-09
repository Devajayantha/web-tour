$(document).ready(function(){
    var $inp = $('#rating-input');

    $inp.rating({
        min: 0,
        max: 5,
        step: 1,
        size: 'lg',
        showClear: false
    });

    $('#btn-rating-input').on('click', function () {
        $inp.rating('refresh', {
            showClear: true,
            disabled: !$inp.attr('disabled')
        });
    });
});