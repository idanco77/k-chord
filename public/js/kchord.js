$('.add-to-cart-btn').on('click', function () {
    $.ajax({
        type: 'GET',
        datatype: 'html',
        url: BASE_URL + 'shop/add-to-cart',
        data: {pid: $(this).data('id')},
        success: function (res) {
            location.reload();
        }
    });
});
$('.update-cart').on('click', function () {

    $.ajax({
        type: 'GET',
        url: BASE_URL + 'shop/update-cart',
        dataType: 'html',
        data: {pid: $(this).data('id'), op: $(this).data('op')},
        success: function () {
            location.reload();
        }
    });
});
$('#search').on('keyup', function () {
    var userSearch = $(this).val().trim();
    if (userSearch.length > 0) {
        $.ajax({
            type: 'GET',
            url: BASE_URL + 'shop/search',
            dataType: 'json',
            data: {search: userSearch},
            success: function (products) {
                if (products) {

                    var availableTags = [];
                    $.each(products, function (key, val) {
                        availableTags.push(val.title);
                    });
                    $('#search').autocomplete({
                        source: function (request, response) {
                            var matcher = new RegExp("^" + $.ui.autocomplete.escapeRegex(request.term), "i");
                            response($.grep(availableTags, function (item) {
                                return true;
                            }));
                        },
                        select: function (event, ui) {
                            for (var i = 0; i < products.length; i++) {
                                if (products[i].title == ui.item.value) {
                                    window.location = BASE_URL + 'shop/' + products[i].curl + '/' + products[i].url;
                                }
                            }
                        }
                    });
                }
            }
        });
    }
});
$('a[data-imagelightbox="demo"]').imageLightbox({
    selector: 'a[data-imagelightbox]',
    id: 'imagelightbox',
    allowedTypes: 'png|jpg|jpeg|gif',
    animationSpeed: 100,
    activity: true,
    arrows: true,
    button: true,
    caption: false,
    enableKeyboard: true,
    lockBody: true,
    navigation: true,
    overlay: true,
    preloadNext: true,
    quitOnEnd: false,
    quitOnImgClick: false,
    quitOnDocClick: false,
    quitOnEscKey: true
});
$('a[data-imagelightbox="demo"]').imageLightbox();


$('.myCounter').lemCounter({
    value_to_from_content: true
});


















