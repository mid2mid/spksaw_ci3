<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $title; ?></title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/modules/jquery-selectric/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/components.css">
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-6 mx-auto">
            <div class="login-brand">
              <img src="<?= base_url(); ?>/assets/img/logopt.png" alt="logo" width="250" class="shadow-light">
            </div>

            <div class="card card-primary">
              <div class="card-header">
                <h4>Registrasi Pengguna</h4>
              </div>

              <div class="card-body">
                <form action="<?= base_url('auth/registrasi'); ?>" method="POST">
                  <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap" value="<?= set_value('nama_lengkap'); ?>" autofocus>
                    <small class="text-danger"><?= form_error('nama_lengkap'); ?></small>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="<?= set_value('email'); ?>">
                    <small class=" text-danger"><?= form_error('email'); ?></small>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password1" type="password" class="form-control" name="password1">
                      <small class="text-danger"><?= form_error('password1'); ?></small>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Konfirmasi Passworrd</label>
                      <input id="password2" type="password" class="form-control" name="password2">
                      <small class="text-danger"><?= form_error('password1'); ?></small>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Registrasi
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Sudah Punya Akun ? <a href=" <?= base_url('auth'); ?>">Silakan Login</a>
            </div>
            <div class="simple-footer">

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?= base_url(); ?>/assets/modules/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/assets/modules/popper.js"></script>
  <script src="<?= base_url(); ?>/assets/modules/tooltip.js"></script>
  <script src="<?= base_url(); ?>/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url(); ?>/assets/modules/moment.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="<?= base_url(); ?>/assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?= base_url(); ?>/assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?= base_url(); ?>/assets/js/page/auth-register.js"></script>

  <!-- Template JS File -->
  <script src="<?= base_url(); ?>/assets/js/scripts.js"></script>
  <script src="<?= base_url(); ?>/assets/js/custom.js"></script>
</body>

</html>