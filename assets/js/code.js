$(document).ready(function(){
   
    $('.table-details .table-details-expanded').css('display', 'none');
    $(document).on('click', '.table-details-btn', function(){
        var element = $(this).closest('.table-details').find('.table-details-expanded');
        element.css('display', 'block');

        // open table details pop-up
        $('body').on('click', function(e){ 
            if (!$(e.target).closest('.table-details-expanded').length) {
                element.css('display', 'none');
            }
        });
    });

    // set navbar item active by current link
    switch (window.location.href) {
        case $('.navbar .invoice').prop('href')+'/': // 
            $('.navbar .invoice').addClass('active');
            break;
        case $('.navbar .clients').prop('href'):
            $('.navbar .clients').addClass('active');
            break;
        case $('.navbar .statistics').prop('href'):
            $('.navbar .statistics').addClass('active');
            break;
        default:
            break;
    }
});