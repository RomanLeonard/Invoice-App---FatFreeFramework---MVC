<div class="row">
    <div class="col-12 col-lg-11 mx-auto">
        <div class="card">
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="min-width: 100px;">Number</th>
                                <th style="min-width: 150px;">Date</th>
                                <th style="min-width: 300px;">Client</th>
                                <th style="min-width: 150px;">Items</th>
                                <th style="min-width: 100px;">Shipping price</th>
                                <th style="min-width: 100px;">Total price</th>
                                <th style="min-width: 210px;">Options</th>
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
                            $items = json_decode($items_raw); ?>
                                <tr>
                                    <td>
                                        <div style="display:flex;align-items:center;">
                                            <span><?= (str_pad($invoice->number, $USER_SETTINGS_INVOICE_NUMBER, "0", STR_PAD_LEFT)) ?></span>
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
                                                        <?php if ($client['cui'] != ''): ?>
                                                            <span>CUI:</span>
                                                            <span style="text-align:right;"><?= ($client['cui']) ?></span>
                                                        <?php endif; ?>
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
                                        <input type="hidden" name="invoice_id" value="<?= ($invoice->id) ?>">
                                        <div style="width: 100%; text-align: right">
                                            <a class="btn btn-outline-primary" href="#">edit</a>
                                            <a class="btn btn-outline-dark" href="#">storno</a>
                                            <a class="btn btn-outline-danger" href="#">cancel</a>
                                            <a class="btn btn-success print-page-btn" style="margin-left: 15px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                                                    <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                                    <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                            
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>
