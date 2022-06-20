$(document).ready(function(){

    
    $(document).on('click', '.print-page-btn', function(){
        var invoice_id = $(this).closest('td').find('input[name="invoice_id"]').val();
        $.ajax({
            method: "GET",
            url: "print",
            dataType: "json",
            data: {
                AJAX: true,
                PRINT_PAGE: true,
                invoice_id: invoice_id
            }
        })
        .done(function( data ) {
        
            document.open();
            document.write(data.html);
            document.close();

            window.print()

        });
    });
    

});