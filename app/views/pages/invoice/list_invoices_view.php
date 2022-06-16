
<div class="page-content">
    <div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Date</th>
                    <th>Client</th>
                    <th>Items</th>
                    <th style="width: 210px;">Options</th>
                </tr>
            </thead>
            <tbody>
                <repeat group="{{ @invoices['subset'] }}" value="{{ @invoice }}">
                    <tr>
                        <td>{{ @invoice->number }}</td>
                        <td>{{ @invoice->date }}</td>
                        <td>{{ @invoice->client_id }}</td>
                        <td>{{ @invoice->items }}</td>
                        <td>
                            <div>
                                <a class="btn btn-primary" href="#">edit</a>
                                <a class="btn btn-dark" href="#">storno</a>
                                <a class="btn btn-danger" href="#">cancel</a>
                            </div>
                        </td>
                    </tr>
                </repeat>

                
            </tbody>
        </table>
    </div>



</div>