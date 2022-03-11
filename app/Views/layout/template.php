<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- CSS -->
  <link rel="stylesheet" href="/styles/main.css" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/libraries/bootstrap/css/bootstrap.css" />

  <!-- My Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800&family=Roboto:wght@300&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/libraries/fontawesome/css/all.css" />

  <title>CleanFile | Dashboard</title>
</head>

<body>

  <?= $this->include('layout/navbar'); ?>
  <!-- Start Sidebar and Main Content -->
  <div class="row sidebar-right">
    <div class="col-lg-2 col-sm-4">
      <ul class="nav m-2 rounded sidebar-wrapper bg-dark flex-column">
        <!-- <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="<?= base_url('/pages/dashboard'); ?>"><i class="fas fa-home me-3"></i>Dashboard</a>
          <hr class="text-white">
        </li> -->
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= base_url('/dokumen/index'); ?>"><i class="fas fa-file-alt me-3"></i>Dokumen</a>
          <hr class="text-white">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= base_url('/dokumen/logout'); ?>"><i class="fas fa-sign-out-alt me-3"></i></i>Logout</a>
          <hr class="text-white">
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fas fa-file-image me-3"></i>Gambar</a>
          <hr class="text-white">
        </li> -->
      </ul>
    </div>
    <div class="col-lg-9 col-sm-6 card-modif p-3 mt-3">

      <?= $this->renderSection('content'); ?>

    </div>
  </div>
  <!-- End Sidebar and Main Content -->

  <!-- JavaScript -->
  <script src="/scripts/script.js"></script>
  <script src="/libraries/jquery/jquery-3.5.1.min.js"></script>
  <script src="/libraries/bootstrap/js/bootstrap.js"></script>
  <script src="/libraries/fontawesome/js/all.js"></script>
</body>

</html>