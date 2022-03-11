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

  <title>CleanFile</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="/images/logo.png" alt="" class="d-inline-block align-text-top" />
        CleanFile
      </a>
      <a href="<?= base_url('home/login'); ?>" class="btn btn-outline-dark btn-masuk">Masuk</a>
    </div>
  </nav>

  <!-- Header -->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-6">
          <div class="content-header">
            <h1>Cara termudah untuk menyimpan file anda</h1>
            <h4>
              Simpan file anda disini agar mudah untuk <br />
              anda akses dan ambil kembali
            </h4>
            <a href="<?= base_url('home/register'); ?>" class="btn btn-daftar">Daftar</a>
          </div>
        </div>
        <div class="col-sm-12 col-lg-6">
          <img class="img-header" src="/images/img-header.svg" alt="header image" />
        </div>
      </div>
    </div>
  </header>

  <!-- Main -->
  <main>
    <div class="container">
      <section class="section-about row">
        <div class="col-lg-3 about">
          <h2>Apa itu website Cleanfile</h2>
          <p>
            Jika anda memerlukan website untuk menyimpan dokumen agar aman dan
            mudah untuk diakses dan di unduh kembali kamu akan dapatkan di
            website ini
          </p>
        </div>
        <div class="col-lg-3">
          <div class="card-about">
            <img src="/images/file.svg" alt="icon-file" />
            <p class="card-text">
              Kelola file <br />
              yang anda <br />
              miliki
            </p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card-about upload">
            <img src="/images/upload.svg" alt="icon-file" />
            <p class="card-text">
              Upload file <br />
              dengan <br />
              mudah
            </p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card-about">
            <img src="/images/download.svg" alt="icon-file" />
            <p class="card-text">
              Unduh file <br />
              yang anda <br />
              perlukan
            </p>
          </div>
        </div>
      </section>

      <section class="section-benefit row">
        <div class="col-lg-7 image-benefit justify-content-center">
          <img src="/images/easy-img.svg" alt="easy image" />
        </div>
        <div class="col-lg-5 align-self-center content-benefit">
          <h3>
            Kemudahan untuk <br />
            mengelola file
          </h3>
          <p>
            Alihkan tempat anda untuk menyimpan <br />
            file-file tugas anda dari komputer lokal <br />
            anda ke website CleanFile agar aman <br />
            dan mudah diakses
          </p>
        </div>
      </section>

      <section class="section-benefit row mt-3">
        <div class="col image-benefit align-self-center content-benefit">
          <h3>
            Dapat anda akses di <br />
            berbagai perangkat
          </h3>
          <p>
            Tidak masalah jika anda tidak membawa <br />
            laptop karena CleanFile dapat anda <br />
            akses ke perangkat selular anda
          </p>
        </div>
        <div class="col content-benefit">
          <img class="ms-5" src="/images/app-img.svg" alt="easy image" />
        </div>
      </section>
    </div>
  </main>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <img class="img-closing" src="/images/closing-img.png" alt="" />
        </div>
        <div class="col-lg-6 col-sm-12 align-self-center closing-content">
          <h1>
            Tunggu apalagi silahkan <br />
            daftar akun dan nikmati <br />
            layanannya
          </h1>
          <a href="<?= base_url('home/register'); ?>" class="btn btn-daftar">Daftar</a>
        </div>
      </div>
    </div>

    <div class="row copyright text-center">
      <h3>CleanFile 2020 - 2021. All rights reserved.</h3>
    </div>
  </footer>


  <!-- JavaScript -->
  <script src="/scripts/script.js"></script>
  <script src="/libraries/jquery/jquery-3.5.1.min.js"></script>
  <script src="/libraries/bootstrap/js/bootstrap.js"></script>
  <script src="/libraries/fontawesome/js/all.js"></script>
</body>

</html>