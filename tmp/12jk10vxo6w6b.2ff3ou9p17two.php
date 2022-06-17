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
            <a class="nav-link active" href="list">invoices</a>
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




  <div class="row w-50 mx-auto mt-2">
    <div class="col-12 col-lg-6">
      <a href="<?= ($BASE) ?>" class="btn btn-outline-secondary align-middle" style="position: absolute; display: flex; align-items: center; justify-content: center; width: 40px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
      </a>
    </div>
    
  </div>


  <div class="page-title">
    <h1><?= ($PAGE_TITLE) ?></h1>
  </div>

  <!-- content -->
  <div class="page-content">
    <?php echo $this->render($content,NULL,get_defined_vars(),0); ?>
  </div>
    
  <!-- ./content -->

  <!-- jquery cdn -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- bootstrap-js -->
  <script src="assets/js/bootstrap/bootstrap.bundle.min.js" type="text/javascript"></script>
  
  <!-- custom js -->
  <script src="assets/js/code.js" type="text/javascript"></script>
  <?php if ($JS_PATH): ?>
    <script src="<?= ($JS_PATH) ?>" type="text/javascript"></script>
  <?php endif; ?>
  
</body>
</html>