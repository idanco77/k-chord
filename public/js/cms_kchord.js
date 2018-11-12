$('.cms-delete-item').confirm({

    icon: 'fa fa-music',
    title: 'Are you sure?',
    content: 'This will delete the menu link',
    type: 'orange',
    typeAnimated: true,
    buttons: {
        ok: {
            text: "ok!",
            btnClass: 'btn-red',
            keys: ['enter'],
            action: function () {
                $('.cms-delete-item').closest('form').submit();
            }
        },
        cancel: function () {

        }
    }
});

String.prototype.permalink = function () {
    return this.toString().trim().toLowerCase().replace(/\s/g, '-');
}

$('.original-text').on('keyup', function () {
    $('.target-text').val($(this).val().permalink());
});

$('#article').summernote({
    height: 300,
    popover: {
        image: [],
        link: [],
        air: []
    }

});

