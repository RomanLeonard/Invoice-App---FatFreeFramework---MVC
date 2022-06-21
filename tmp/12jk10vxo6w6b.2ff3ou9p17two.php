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
      <a class="navbar-brand" href="#">
        <svg width="100" height="30" viewBox="0 0 219 100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M90.3693 89V50.8182H96.2358V89H90.3693ZM93.3523 44.4545C92.2088 44.4545 91.2228 44.0651 90.3942 43.2862C89.5821 42.5073 89.1761 41.571 89.1761 40.4773C89.1761 39.3835 89.5821 38.4472 90.3942 37.6683C91.2228 36.8894 92.2088 36.5 93.3523 36.5C94.4957 36.5 95.4735 36.8894 96.2855 37.6683C97.1141 38.4472 97.5284 39.3835 97.5284 40.4773C97.5284 41.571 97.1141 42.5073 96.2855 43.2862C95.4735 44.0651 94.4957 44.4545 93.3523 44.4545ZM112.847 66.0312V89H106.981V50.8182H112.648V56.7841H113.145C114.04 54.8452 115.399 53.2874 117.222 52.1108C119.045 50.9176 121.398 50.321 124.282 50.321C126.867 50.321 129.129 50.8513 131.068 51.9119C133.007 52.956 134.515 54.5469 135.592 56.6847C136.669 58.8059 137.208 61.4905 137.208 64.7386V89H131.341V65.1364C131.341 62.1368 130.563 59.8002 129.005 58.1264C127.447 56.4361 125.309 55.5909 122.591 55.5909C120.719 55.5909 119.045 55.9969 117.57 56.8089C116.112 57.621 114.96 58.8059 114.115 60.3636C113.27 61.9214 112.847 63.8106 112.847 66.0312ZM177.782 50.8182L163.663 89H157.697L143.578 50.8182H149.941L160.481 81.2443H160.879L171.419 50.8182H177.782ZM195.599 89.8949C193.18 89.8949 190.984 89.4392 189.012 88.5277C187.04 87.5997 185.474 86.2656 184.314 84.5256C183.154 82.7689 182.574 80.6477 182.574 78.1619C182.574 75.9744 183.005 74.2012 183.866 72.8423C184.728 71.4669 185.88 70.3897 187.322 69.6108C188.763 68.8319 190.354 68.2519 192.094 67.8707C193.851 67.473 195.616 67.1581 197.389 66.9261C199.709 66.6278 201.59 66.4041 203.032 66.255C204.49 66.0893 205.551 65.8158 206.214 65.4347C206.893 65.0535 207.233 64.3906 207.233 63.446V63.2472C207.233 60.7945 206.562 58.8887 205.219 57.5298C203.894 56.1709 201.88 55.4915 199.179 55.4915C196.378 55.4915 194.182 56.1046 192.591 57.331C191.001 58.5573 189.882 59.8665 189.236 61.2585L183.667 59.2699C184.662 56.9498 185.988 55.1435 187.645 53.8509C189.318 52.5417 191.141 51.6302 193.113 51.1165C195.102 50.5862 197.058 50.321 198.98 50.321C200.206 50.321 201.615 50.4702 203.206 50.7685C204.813 51.0502 206.363 51.6385 207.854 52.5334C209.362 53.4283 210.613 54.7789 211.608 56.5852C212.602 58.3916 213.099 60.8111 213.099 63.8438V89H207.233V83.8295H206.934C206.537 84.6581 205.874 85.5447 204.946 86.4893C204.018 87.4339 202.783 88.2377 201.242 88.9006C199.701 89.5634 197.82 89.8949 195.599 89.8949ZM196.494 84.625C198.814 84.625 200.77 84.1693 202.361 83.2578C203.968 82.3464 205.178 81.1697 205.99 79.728C206.818 78.2862 207.233 76.7699 207.233 75.179V69.8097C206.984 70.108 206.437 70.3814 205.592 70.63C204.764 70.862 203.802 71.0691 202.709 71.2514C201.631 71.4171 200.579 71.5663 199.552 71.6989C198.541 71.8149 197.72 71.9143 197.091 71.9972C195.566 72.196 194.141 72.5192 192.815 72.9666C191.506 73.3975 190.445 74.0521 189.633 74.9304C188.838 75.7921 188.44 76.9687 188.44 78.4602C188.44 80.4986 189.194 82.0398 190.702 83.0838C192.227 84.1113 194.157 84.625 196.494 84.625Z" fill="#001514"/>
          <rect x="15" y="22" width="5" height="50" transform="rotate(-90 15 22)" fill="#6B0504"/>
          <rect x="15" y="37" width="5" height="50" transform="rotate(-90 15 37)" fill="#6B0504"/>
          <rect x="14" y="52" width="5" height="50" transform="rotate(-90 14 52)" fill="#6B0504"/>
          <rect x="14" y="67" width="5" height="25" transform="rotate(-90 14 67)" fill="#6B0504"/>
          <rect x="14" y="82" width="5" height="25" transform="rotate(-90 14 82)" fill="#6B0504"/>
          <rect x="2.5" y="2.5" width="75" height="95" rx="10.5" stroke="#001514" stroke-width="5"/>
          <rect x="89" y="36" width="9" height="9" rx="4.5" fill="#6B0504"/>
        </svg>
      </a>
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