<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title; ?></h1>
    </div>

    <div class="section-body">
      <div class="card">
        <div class="card-body">
          <?= $this->session->flashdata('message'); ?>
          <div class="table-responsive">
            <table class="table table-bordered table-md">
              <tr class="text-center">
                <th>No</th>
                <th>Alternatif</th>
                <?php foreach ($kriteria as $k) : ?>
                  <th style="width: 150px;"><?= $k['nama_kriteria']; ?></th>
                <?php endforeach; ?>
                <th>Aksi</th>
              </tr>
              <?php
              $no = 1;
              foreach ($data_penilaian as $penilaian) : ?>
                <tr class="text-center">
                  <td><?= $no++; ?></td>
                  <td>[<?= $penilaian['kode_alternatif']; ?>]</td>
                  <td><?= $penilaian['C1']; ?></td>
                  <td><?= $penilaian['C2']; ?></td>
                  <td><?= $penilaian['C3']; ?></td>
                  <td><?= $penilaian['C4']; ?></td>
                  <td><?= $penilaian['C5']; ?></td>
                  <td>
                    <a href="#" class="badge badge-pill badge-success" data-toggle="modal" data-target="#penilaianAlternatif<?= $penilaian['id_nilai']; ?>">Penilaian</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php foreach ($data_penilaian as $penilaian) : ?>
  <div class="modal fade" id="penilaianAlternatif<?= $penilaian['id_nilai']; ?>">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Penilaian Alternatif</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form-horizontal" action="<?= base_url('Penilaian/aksi_penilaian_alternatif'); ?>" method="POST">
          <input type="hidden" name="id_nilai" value="<?= $penilaian['id_nilai']; ?>">
          <input type="hidden" name="id_alternatif" value="<?= $penilaian['id_alternatif']; ?>">
          <div class="modal-body">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-5 col-form-label">Nama Alternatif</label>
              <div class="col-sm-7">
                <input type="text" name="nama_kriteria" class="form-control" id="inputEmail3" required value="<?= $penilaian['nama_alternatif']; ?>" readonly>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class=" col-form-label"><?= $kriteria[0]['nama_kriteria']; ?></label>
              <div class="">
                <input type="text" name="K1" class="form-control" id="inputEmail3" placeholder="masukan k1" required value="<?= $penilaian['C1']; ?>">
              </div>
            </div>
            <div class="form-group ">
              <label for="inputEmail3" class=" col-form-label"><?= $kriteria[1]['nama_kriteria']; ?></label>
              <div class="">
                <input type="text" name="K2" class="form-control" id="inputEmail3" placeholder="masukan k2" required value="<?= $penilaian['C2']; ?>">
              </div>
            </div>
            <div class="form-group ">
              <label for="inputEmail3" class=" col-form-label"><?= $kriteria[2]['nama_kriteria']; ?></label>
              <div class="">
                <input type="text" name="K3" class="form-control" id="inputEmail3" placeholder="masukan k3" required value="<?= $penilaian['C3']; ?>">
              </div>
            </div>
            <div class="form-group ">
              <label for="inputEmail3" class=" col-form-label"><?= $kriteria[3]['nama_kriteria']; ?></label>
              <div class="">
                <input type="text" name="K4" class="form-control" id="inputEmail3" placeholder="masukan k4" required value="<?= $penilaian['C4']; ?>">
              </div>
            </div>
            <div class="form-group ">
              <label for="inputEmail3" class=" col-form-label"><?= $kriteria[4]['nama_kriteria']; ?></label>
              <div class="">
                <input type="text" name="K5" class="form-control" id="inputEmail3" placeholder="masukan k5" required value="<?= $penilaian['C5']; ?>">
              </div>
            </div>
            <!-- /.card-body -->
            <!-- /.card-footer -->
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Proses Penilaian</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<?php endforeach; ?>