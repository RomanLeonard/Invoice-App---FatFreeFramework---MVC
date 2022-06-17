<div class="content">
    <div class="row">
        <div class="col-12 col-lg-6 mx-auto">

            <div class="alert alert-success text-center">
                <span class="badge rounded-pill text-bg-success" style="font-weight: normal">
                    <check if="{{ @last_invoice_number >= 1000 }}">
                        <true><span id="last_invoice_number">{{ @last_invoice_number+1 }}</span></true>
                        <false>0<span id="last_invoice_number">{{ @last_invoice_number+1 }}</span></false>
                    </check>    
                </span>
                <span class="badge rounded-pill text-bg-success" style="font-weight: normal">BIZ</span>
                <span class="badge rounded-pill text-bg-success" style="font-weight: normal">{{ @current_date }}</span>
            </div>

            <div class="card">
                <div class="card-body">
                    <!-- client name -->
                    <label for="client_name" class="form-label">client name</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="client_name" name="client_name" required>
                    </div>
                    <!-- client address -->
                    <label for="client_address" class="form-label">client address</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="client_address" name="client_address">
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <!-- client cui -->
                            <label for="client_cui" class="form-label">client cui</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="client_cui" name="client_cui">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <!-- client onrc -->
                            <label for="client_onrc" class="form-label">client onrc</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="client_onrc" name="client_onrc">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <!-- client mobile -->
                            <label for="client_phone" class="form-label">client phone</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="client_phone" name="client_phone">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <!-- client email -->
                            <label for="client_email" class="form-label">client email</label>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" id="client_email" name="client_email">
                            </div>
                        </div>
                    </div>
                    <!-- client iban -->
                    <label for="client_iban" class="form-label">client iban</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="client_iban" name="client_iban">
                    </div>
                    <!-- client bank -->
                    <label for="client_bank" class="form-label">client bank</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="client_bank" name="client_bank">
                    </div>

                    

                    

                    <div class="mt-5 pt-5"></div>
                    <!-- invoice content -->
                    <!-- invoice shipping price -->
                    <label for="invoice_shipping_price" class="form-label">shipping price</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="invoice_shipping_price" name="invoice_shipping_price">
                    </div>

                    <!-- invoice items -->
                    <div class="items-body">
                        <div class="row">
                            <div class="col-12 col-lg-9">
                                <!-- item -->
                                <label for="invoice_items" class="form-label">item 1</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="invoice_items" name="invoice_items">
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <!-- item price -->
                                <label for="item_price_1" class="form-label">price for item 1</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="item_price_1" name="item_price">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-9">
                                <!-- item -->
                                <label for="invoice_items_2" class="form-label">item 2</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="invoice_items_2" name="invoice_items">
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <!-- item price -->
                                <label for="item_price_2" class="form-label">price for item 2</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="item_price_2" name="item_price">
                                </div>
                            </div>
                        </div>
                        <!-- new generated item -->
                    </div>
                    <span class="btn d-block btn-outline-primary invoice-add-item-btn">+ add new item</span>

                    <span class="btn btn-success mt-4" id="submit-invoice">submit</span>


                </div>
            </div>
        </div>
    </div>
    
</div>