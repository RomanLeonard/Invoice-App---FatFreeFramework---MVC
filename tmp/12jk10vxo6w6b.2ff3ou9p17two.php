<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap-css -->
  <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
  <!-- tweaker css -->
  <link rel="stylesheet" href="assets/css/stylesheet.css">
  <!-- custom css -->
  <?php if ($CSS_PATH): ?>
    <link rel="stylesheet" href="<?= ($CSS_PATH) ?>">
  <?php endif; ?>
  
  <title>invoice app</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">inva</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#">Invoices</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Statistics</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>







  <div class="page-title">
    <h1><?= ($PAGE_TITLE) ?></h1>
  </div>

  <!-- content -->
    <?php echo $this->render($content,NULL,get_defined_vars(),0); ?>
  <!-- ./content -->

  <!-- bootstrap-js -->
  <script src="assets/js/bootstrap/bootstrap.bundle.min.js" type="text/javascript"></script>
  
  <!-- custom js -->
  <?php if ($JS_PATH): ?>
    <script src="<?= ($JS_PATH) ?>"></script>
  <?php endif; ?>
  
</body>
</html>