$(document).ready(function(){
    
    // util. -> get URL parameter
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;
        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
        return false;
    };
    // util. -> UNIVERSAL SEARCH
    $('#universal-search-btn').on('click', function(){
        var query = $('#universal-search').val();
        window.location = '?query=' + query + '&page=1';
    })
    
    /*




    */
    // PRINT action
    $(document).on('click', '.invoice-print-btn', function(){
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
            var new_window = window.open()
            new_window.document.open();
            new_window.document.write(data.html);
            new_window.document.close();
            setTimeout(function(){
                new_window.print()
            }, 300)
        });
    });
    

    // STORNO action
    $(document).on('click', '.invoice-storno-btn', function(){
        var invoice_id = $(this).closest('td').find('input[name="invoice_id"]').val();
        var invoice_number = $(this).closest('tr').find('td').first().text();

        // get modal ready
        $('.modal-title').html('Storno invoice - '+invoice_number);
        $('.modal-body').html('Are you sure you want to storno invoice - <b>'+invoice_number+'</b>?');

        $('.modal').modal('show')

        $(document).on('click', '.modal-storno-btn', function(){
            $.ajax({
                method: "POST",
                url: "storno",
                dataType: "json",
                data: {
                    AJAX: true,
                    invoice_id: invoice_id
                }
            })
            .done(function( data ) {
                $('.modal').modal('hide'); 
                if(data == 'success'){
                    notification('success', 'Success! List will be refreshed now.')
                    setTimeout(function(){ location.reload(); }, 1500)
                }
                else if(data == 'error-storno'){ notification('warning', 'Warning! This invoice is already a storno invoice.') }
                else if(data == 'error-cancelled'){ notification('danger', 'You cannot storno a cancelled invoice.') }
                else if(data == 'error-unknown'){ notification('danger', 'An error has occured. Unknown invoice type.') }
            });

        });
        
    });

});