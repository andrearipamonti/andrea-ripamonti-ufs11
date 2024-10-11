let body = $('body');

$('.js-modal-open').on('click', function() {
    $(this).next().show();
    body.addClass('modal-is-open');
});

$('.js-modal-close').on('click', function() {
    $('.modal').hide();
    body.removeClass('modal-is-open');
});