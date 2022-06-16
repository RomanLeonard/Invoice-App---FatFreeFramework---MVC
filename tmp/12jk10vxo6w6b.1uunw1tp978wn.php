
<div class="content">
    <span>invoice_add_view</span>



    <br><br>

    <?php foreach (($invoices['subset']?:[]) as $invoice): ?>

        <span> <?= ($invoice->number) ?> </span>

    <?php endforeach; ?>
</div>