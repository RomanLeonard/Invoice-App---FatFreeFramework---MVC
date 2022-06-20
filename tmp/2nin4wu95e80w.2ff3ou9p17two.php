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
  <input type="hidden" name="global_base_url" value="<?= ($BASE) ?>">

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">inva</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="<?= ($BASE) ?>">Invoices</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/clients">Clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/statistics">Statistics</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- page title and utility (buttons, inputs etc.) -->
  <?php echo $this->render($title_utility,NULL,get_defined_vars(),0); ?>
  <!-- ./page title and utility (buttons, inputs etc.) -->
 

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
  <script src="assets/js/notification.js" type="text/javascript"></script>
  <script src="assets/js/code.js" type="text/javascript"></script>
  <?php if ($JS_PATH): ?>
    <script src="<?= ($JS_PATH) ?>" type="text/javascript"></script>
  <?php endif; ?>
  
</body>
</html>