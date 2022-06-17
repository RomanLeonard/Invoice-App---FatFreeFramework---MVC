<div class="content text-center p-2 mb-5">
    <a class="btn btn-success" href="create-invoice">new invoice</a>
</div>


<div class="card">
    
    <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th style="width: 100px;">Number</th>
                <th style="width: 150px;">Date</th>
                <th style="width: 310px;">Client</th>
                <th style="width: 310px;">Items</th>
                <th>Shipping price</th>
                <th>Total price</th>
                <th style="width: 210px;">Options</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (($invoices['subset']?:[]) as $invoice): ?>
            <?php $client_JSON = $invoice->client;
               $decodedText = html_entity_decode($client_JSON);  
               $client = json_decode($decodedText, true);

               $items_JSON = $invoice->items;
               $decodedText_item = html_entity_decode($items_JSON);  
               $items_raw = json_decode($decodedText_item, true);
               $items = json_decode($items_raw);


                if($invoice->number < 1000){
                    if($invoice->number < 100){
                        if($invoice->number < 10){
                            $invoice_number = '000'.$invoice->number;
                        } else { $invoice_number = '00'.$invoice->number; }
                    } else { $invoice_number = '0'.$invoice->number; }
                }else { $invoice_number = $invoice->number; } ?>
                <tr>
                    <td>
                        <div style="display:flex;align-items:center;">
                            <span><?= ($invoice_number) ?></span>
                            <span class="small-text" style="margin-left: 5px;"><?= ($invoice->serial) ?></span>
                        </div>
                    </td>
                    <td><?= ($invoice->date) ?></td>
                    <td class="table-details">
                        <div class="table-details-expanded">
                            <div class="card">
                                <div class="card-body">
                                    <div class="info">
                                        <span>Name:</span>
                                        <span style="text-align:right;"><?= ($client['name']) ?></span>
                                        
                                        <span>Address:</span>
                                        <span style="text-align:right;"><?= ($client['address']) ?></span>

                                        <span>CUI:</span>
                                        <span style="text-align:right;"><?= ($client['cui']) ?></span>
                                        
                                        <?php if ($client['onrc'] != ''): ?>
                                            <span>ONRC:</span>
                                            <span style="text-align:right;"><?= ($client['onrc']) ?></span>
                                        <?php endif; ?>

                                        <?php if ($client['mobile'] != ''): ?>
                                            <span>Mobile:</span>
                                            <span style="text-align:right;"><?= ($client['mobile']) ?></span>
                                        <?php endif; ?>
                                        <?php if ($client['email'] != ''): ?>
                                            <span>Email:</span>
                                            <span style="text-align:right;"><?= ($client['email']) ?></span>
                                        <?php endif; ?>

                                        <?php if ($client['iban'] != ''): ?>
                                            <span>IBAN:</span>
                                            <span style="text-align:right;"><?= ($client['iban']) ?></span>
                                        <?php endif; ?>

                                        <?php if ($client['bank'] != ''): ?>
                                            <span>Bank:</span>
                                            <span style="text-align:right;"><?= ($client['bank']) ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="btn btn-outline table-details-btn" style="display: block; width: 100%; text-align: left; position: relative;">
                            <span style="display: block;"><?= ($client['name']) ?></span>
                            <span class="small-text" style="display: block;"><?= ($client['address']) ?></span>

                            <span class="expand-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-expand" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8zM7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2zM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10z"/>
                            </svg></span>
                        </div>
                    </td>
                    <td class="table-details">
                        <div class="table-details-expanded">
                            <div class="card">
                                <div class="card-body">
                                    <div class="info">
                                        <?php $ctr=0; foreach (($items?:[]) as $item_name=>$item_price): $ctr++; ?>
                                            <?php if($ctr == 1){  
                                                $first_item_name = $item_name;
                                                $first_item_price = $item_price;
                                            } ?>
                                            <span><?= ($item_name) ?></span>
                                            <span style="text-align:right;"><?= ($item_price) ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="btn btn-outline table-details-btn" style="display: block; width: 100%; text-align: left; position: relative;">
                            <span style="display: block;"><?= ((@$first_item_name) ? $first_item_name : "no item") ?></span>
                            <span class="small-text" style="display: block;"><?= ((@$first_item_price) ? $first_item_price : "0") ?></span>

                            <span class="expand-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-expand" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8zM7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2zM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10z"/>
                            </svg></span>
                        </div>
                    </td>
                    <td><span><?= ($invoice->shipping_price) ?></span></td>
                    <td><span><?= ($invoice->price_total) ?></span></td>
                    <td>
                        <div>
                            <a class="btn btn-outline-primary" href="#">edit</a>
                            <a class="btn btn-outline-dark" href="#">storno</a>
                            <a class="btn btn-outline-danger" href="#">cancel</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>

            
        </tbody>
    </table>
    </div>
    
</div>


