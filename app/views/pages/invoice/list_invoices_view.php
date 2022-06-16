
<div class="content">
    <span>invoice_add_view</span>



    <br><br>

    <repeat group="{{ @invoices['subset'] }}" value="{{ @invoice }}">

        <span> {{ @invoice->number }} </span>

    </repeat>
</div>