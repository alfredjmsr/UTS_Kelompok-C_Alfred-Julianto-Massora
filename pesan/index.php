<?php
?>

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPT+Serif:400,700">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }
  </style>
</head>

<body>
  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
  <div class="preloader">
    <div class="preloader-body">
      <div class="cssload-container">
        <div class="cssload-speeding-wheel"></div>
      </div>
      <p>Loading...</p>
    </div>
  </div>
  <div class="page"><a class="section section-banner d-none d-xl-flex"></a>
    <!-- Page Header-->
    <header class="section page-header">
    </header>
    <!-- Swiper-->
    <section class="section section-lg section-main-bunner section-main-bunner-filter text-center">
      <div class="main-bunner-img" style="background-image: url(&quot;images/favicon.png&quot;); background-size: cover;"></div>
      <div class="main-bunner-inner">
        <div class="container">
          <div class="box-default">
            <h1 class="box-default-title">Menu Pemesanan</h1>
            <div class="box-default-decor"></div>
            <p class="big box-default-text">silahkan masukkan data diri anda</p>
          </div>
        </div>
      </div>
    </section>
    <div class="bg-gray-1">
      <section class="section-transform-top">
        <div class="container">
          <div class="box-booking">
            <form class="rd-form rd-mailform booking-form" method="POST" action="pesanproses.php" role="form" enctype="multipart/form-data">
              <div>
                <p class="booking-title">nama</p>
                <div class="form-wrap">
                  <input class="form-input" id="booking-name" type="text" name="nama" data-constraints="@Required">
                  <label class="form-label" for="booking-name">nama anda</label>
                </div>
              </div>
              <div>
                <p class="booking-title">Jenis Barang</p>
                <div class="form-wrap">
                  <input class="form-input" id="booking-name" type="text" name="jenis" data-constraints="@Required">
                  <label class="form-label" for="booking-name">Jenis Barang</label>
                </div>
              </div>
              <div>
                <p class="booking-title">nomor telepon</p>
                <div class="form-wrap">
                  <input class="form-input" id="booking-phone" type="number" name="telp" data-constraints="@Numeric">
                  <label class="form-label" for="booking-phone">nomor telepon aktif</label>
                </div>
              </div>
              <div>
                <p class="booking-title">Date</p>
                <div class="form-wrap form-wrap-icon"><span class="icon mdi mdi-calendar-text"></span>
                  <input class="form-input" id="booking-date" type="text" name="tanggal" data-constraints="@Required" data-time-picker="date">
                </div>
              </div>
              <div>
                <p class="booking-title">Berat Barang/kg</p>
                <div class="form-wrap">
                  <input class="form-input" id="booking-name" type="number" name="berat" data-constraints="@Required">
                </div>
              </div>
              <div>
                <input type="submit" class="button button-lg button-gray-600" name="pesan" value="Pesan Sekarang">
              </div>
            </form>
          </div>
        </div>
      </section>

      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
</body>