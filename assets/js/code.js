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

});