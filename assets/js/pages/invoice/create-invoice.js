$(document).ready(function(){

    

    var invoice_items = 2;
    $(document).on('click', '.invoice-add-item-btn', function(){
        invoice_items++;
        $('.items-body').append(`
            <div class="row">
                <div class="col-12 col-lg-9">
                    <!-- item -->
                    <label for="invoice_items_`+invoice_items+`" class="form-label">item `+invoice_items+`</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="invoice_items_`+invoice_items+`" name="invoice_items">
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <!-- item price -->
                    <label for="item_price_`+invoice_items+`" class="form-label">price for item `+invoice_items+`</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="item_price_`+invoice_items+`" name="item_price">
                    </div>
                </div>
            </div>
        `)
    });


    // submit new invoice
    $('#submit-invoice').on('click', function(){

        // check if item 2 has value
        if($('#invoice_items_2').val()){
            var items = {};
            var invoices_total_price = 0;
            $('input[name="invoice_items"]').each(function( index ){
                var price  = $(this).closest('.row').find('input[name="item_price"]').val()
                items[$(this).val()] = $(this).closest('.row').find('input[name="item_price"]').val();
                invoices_total_price = invoices_total_price + parseFloat(price);
            });
        }
        else{
            var item = $('#invoice_items').val();
            var price = $('#item_price_1').val();
            var items = {};
            items[item] = price;
        }

        $.ajax({
            method: "POST",
            url: "create-invoice-action",
            dataType: "json",
            data: {
                AJAX: true,
                
                client_name: $('input[name="client_name"]').val(),
                client_address: $('input[name="client_address"]').val(),
                client_cui: ( $('input[name="client_cui"]').val() ) ? $('input[name="client_cui"]').val() : '' ,
                client_onrc: ( $('input[name="client_onrc"]').val() ) ? $('input[name="client_onrc"]').val() : '',
                client_phone: ( $('input[name="client_phone"]').val() ) ? $('input[name="client_phone"]').val() : '',
                client_iban: ( $('input[name="client_iban"]').val() ) ? $('input[name="client_iban"]').val() : '',
                client_bank: ( $('input[name="client_bank"]').val() ) ? $('input[name="client_bank"]').val() : '',
                client_email: ( $('input[name="client_email"]').val() ) ? $('input[name="client_email"]').val() : '',

                invoice_number: $('#last_invoice_number').text(),
                invoice_shipping_price: $('input[name="invoice_shipping_price"]').val(),
                invoice_items: JSON.stringify(items),
                invoices_total_price: invoices_total_price
            }
        })
        .done(function( data ) {

            if(data == 'success'){
                notification('success', 'New invoice inserted successfuly.');
                setTimeout(function(){
                    location.reload();
                }, 1500)
            } else{ notification('danger', 'An error has occured.'); }
        });

    });
    
  
});
  