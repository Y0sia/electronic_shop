jQuery(function ($) {
    $('.header-search input[name="s"]').on('keyup', function () {
        var search = $('.header-search input[name="s"]').val();
        if (search.length < 4) {
            $('.header-result').css('display', 'none');
            $('.header-result').empty();
            $('.header-search').css('height', 'auto');
            return false;
        }
        var data = {
            s:search,
            action: 'search-ajax',
            nonce : search_form.nonce
        };
        $.ajax({
            url: search_form.url,
            data :data,
            type:'POST',
            dataType:'json',
            beforeSend:function(xhr){
            },
            success:function(data){
                $('.header-result').html(data.out);
              //  var heightResilt = $('.header-result').height();
               // $('.header-search').css('height', heightResilt);
                $('.header-result').css('display', 'block');
                //.log($('.search_form .search-result').height());
            }
        });

    });
});
