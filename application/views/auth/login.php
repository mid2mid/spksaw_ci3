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
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/modules/bootstrap-social/bootstrap-social.css">

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
      <div class="container mt-5" style="display: flex; justify-content: center; align-items: center; min-height: 95vh ;">
        <div class="row">
          <!-- <div class="col-8 col-md-6 col-sm-8 offset-xl-0 offset-sm-2 offset-md-3 col-lg-6 offset-lg-6 col-xl-8 mx-7 my-6 bg-primary "> -->
          <div class="login-brand">
            <img src="<?= base_url(); ?>/assets/img/logopt.png" alt="logo" width="350" class="shadow-light">
            <br>
            <h4 class="text-primary">Sistem Pendukung Keputusan Pemilihan Karyawan Teladan PT Kati Kartika Murni</h4>
            <br>

          </div>
        </div>
        <div class="col-5">
          <div class="card card-primary">
            <div class="card-header">
              <h4><?= $title; ?></h4>
            </div>

            <div class="card-body">
              <?= $this->session->flashdata('message'); ?>
              <form method="POST" action="<?= base_url('auth'); ?>">
                <div class="form-group">
                  <label for="email" class="text-primary">Email</label>
                  <input id="email" type="email" class="form-control text-primary" name="email" tabindex="1" autofocus autocomplete="off" value="<?= set_value('email'); ?>">
                  <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form-group">
                  <div class="d-block">
                    <label for="password" class="control-label text-primary">Password</label>
                  </div>
                  <input id="password" type="password" class="form-control text-primary" name="password" tabindex="2">
                  <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Login
                  </button>
                </div>
              </form>


            </div>
          </div>
          <div class="mt-5 text-muted text-center">
            Belum Punya Akun ? <a href=" <?= base_url('auth/registrasi'); ?>">Register</a>
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

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="<?= base_url(); ?>/assets/js/scripts.js"></script>
  <script src="<?= base_url(); ?>/assets/js/custom.js"></script>
</body>

</html>