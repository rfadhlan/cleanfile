<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- CSS -->
  <link rel="stylesheet" href="/styles/main.css" />

  <link href="/styles/sb-admin-2.min.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/libraries/bootstrap/css/bootstrap.css" />

  <!-- My Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800&family=Roboto:wght@300&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/libraries/fontawesome/css/all.css" />

  <title>CleanFile | Login</title>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat datang kembali!</h1>
                  </div>
                  <form action="<?= base_url('/auth'); ?>" method="POST" class="user">
                    <div class="form-group">
                      <label for="email"></label>
                      <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <label for="password"></label>
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('home/register'); ?>">Buat akun!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- JavaScript -->
  <script src="/scripts/script.js"></script>
  <script src="/scripts/sb-admin-2.min.js"></script>
  <script src="/libraries/jquery/jquery-3.5.1.min.js"></script>
  <script src="/libraries/bootstrap/js/bootstrap.js"></script>
  <script src="/libraries/fontawesome/js/all.js"></script>
</body>

</html>