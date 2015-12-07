jQuery( document ).ready( function( $ ) {

    $('.wc-update-now').on('click',function(e){
        e.preventDefault();
        $.ajax({
           url:  yit_wc.ajaxurl ,
           data: 'action=add_myaccount_pages&wpnonce='+yit_wc.wpnonce,
            type    : 'POST',
            error   : function (xhr, desc, e) {
                console.log(xhr.responseText);
            }

        });
    })


});
