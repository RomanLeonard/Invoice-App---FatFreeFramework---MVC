<div class="row list-invoices mb-5 px-2">
    <div class="col-12 mx-auto">
        <div class="card">
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="max-width: 35px; width: 35px;">#</th>
                                <th style="max-width: 250px;">Name</th>
                                <th style="max-width: 316px; width: 315px;">Address</th>
                                <th style="">Phone</th>
                                <th style="">Email</th>
                                <th style="">CUI</th>
                                <th style="">ONRC</th>
                                <th style="">IBAN</th>
                                <th style="">Bank</th>
                                <th style="min-width: 140px; max-width: 141px; width: 140px;">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <repeat group="{{ @clients['subset'] }}" value="{{ @client }}" counter="{{ @ctr }}">
                            
                                <tr>
                                    <td><span>{{ @ctr }}</span></td>
                                    <td><span>{{ @client->name }}</span></td>
                                    <td><span class="small-text">{{ @client->address }}</span></td>
                                    <td><span>{{ @client->mobile }}</span></td>
                                    <td><span>{{ @client->email }}</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <input type="hidden" name="invoice_id" value="{{ @invoice->id }}">
                                        <div style="width: 100%; text-align: left">
                                            <div class="btn-group" role="group">
                                                <a class="btn btn-outline-primary" href="#">edit</a>
                                                <a class="btn btn-outline-danger" href="#" style="margin-left: 3px;">delete</a>
                                            </div>
                                            
                                        </div>
                                    </td>
                                </tr>
                            </repeat>

                            
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>


<div class="row mb-5">
    <div class="col-12" style="display: flex; justify-content: center">
        <!-- pagination -->
        <nav>
            {~ $pagination_from = 0; ~}
            {~ $pagination_to = 10; ~}

            <ul class="pagination">
            
                    <check if="{{ @current_page <= 1 }}">
                    <true>
                        <li class="page-item disabled"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#" style="display: flex; align-items: center; height: 100%;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg> <!-- left arrow -->
                        </a></li>
                    </true>
                    <false>
                        <li class="page-item"><a class="page-link" href="?page={{@current_page-1}}">Prev</a></li>
                        <li class="page-item"><a class="page-link" href="?page=1" style="display: flex; align-items: center; height: 100%;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg> <!-- left arrow -->
                        </a></li>
                    </false>
                    </check>

                    <check if="{{ @current_page > 4 }}">
                    <true>{~ @loop_start = @current_page-3; @loop_to = @current_page+3; ~}</true>
                    <false>{~ @loop_start = 1; @loop_to = 7; ~}</false>
                    </check>
                    <loop from="{{ @i=@loop_start }}" to="{{ @i<@invoices['count']+1 }}" step="{{ @i++ }}">
                    <check if="{{ @i <= @loop_to }}">
                        <check if="{{ @i == @current_page}}">
                            <true>
                            <li class="page-item active">
                                <a class="page-link" href="?page={{@i}}">{{ @i }}</a>
                            </li>
                            </true>
                            <false>
                            <li class="page-item">
                                <a class="page-link" href="?page={{@i}}">{{ @i }}</a>
                            </li>
                            </false>
                        </check>
                    </check>
                    </loop>
                    
                    <check if="{{ @current_page >= @invoices['count'] }}">
                    <true>
                        <li class="page-item next disabled"><a class="page-link" href="#" style="display: flex; align-items: center; height: 100%;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg><!-- right arrow -->
                        </a></li>
                        <li class="page-item next disabled"><a class="page-link" href="#">Next</a></li>
                    </true>
                    <false>
                        <li class="page-item next"><a class="page-link" href="?page={{ @invoices['count'] }}" style="display: flex; align-items: center; height: 100%;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg><!-- right arrow -->
                        </a></li> 
                        <li class="page-item next"><a class="page-link" href="?page={{@current_page+1}}">Next</a></li>
                    </false>
                    </check>
               
            </ul>
        </nav>
        <!-- ./pagination -->
    </div>
</div>


