<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h3 class="fw-bolder"><i class="fas fa-file-alt me-3"></i>Dokumen</h3>

<hr>

<?php if (!empty(session()->getFlashdata('error'))) : ?>
  <div class="alert alert-danger" role="alert">
    <h4>Periksa Entrian Form</h4>
    </hr />
    <?php echo session()->getFlashdata('error'); ?>
  </div>
<?php endif; ?>

<div class="row mt-5">
  <div class="col-lg-5">
    <form action="" method="POST">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Cari Judul" name="keyword">
        <button class="btn btn-primary" type="button" name="submit">Cari</button>
      </div>
    </form>
  </div>

  <?php if (session()->getFlashData('pesan')) : ?>
    <div class="alert alert-success" role="alert">
      <?= session()->getFlashData('pesan'); ?>
    </div>
  <?php endif; ?>

</div>


<!-- Section List File -->
<div class="row mt-3">
  <div class="card">
    <div class="row">
      <div class="col-lg-9">
        <h6 class="mt-4 ms-3 fw-bolder">List Dokumen Anda</h6>
      </div>
      <div class="col-lg-3">
        <!-- Button trigger modal tambah dokumen -->
        <button type="button" class="btn btn-primary ms-auto mt-3" data-bs-toggle="modal" data-bs-target="#tambahModal">
          <i class="fas fa-plus"></i> Upload Dokumen
        </button>
      </div>
    </div>
    <hr>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Dokumen</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($dokumen as $d) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td scope="row"><?= $d['judul_dokumen']; ?></td>
              <td scope="row"><i class="fas fa-file me-2"></i><?= $d['berkas']; ?></td>
              <td>
                <!-- <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a> -->
                <a href="/dokumen/download/<?= $d['id']; ?>" class="btn btn-warning"><i class="fas fa-download"></i></a>
                <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#detailModal<?= $d['id'] ?>"><i class="fas fa-search-plus"></i></i></a>
                <!-- <a href="/dokumen/update/<?= $d['id']; ?>" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?= $d['id'] ?>"><i class="fas fa-edit"></i></a> -->
                <a href="/dokumen/delete/<?= $d['id']; ?>" class="btn btn-danger" onclick="confirm('Apakah anda yakin?');"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Modal Tambah Dokumen -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahModal">Upload Dokumen</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/dokumen/save" method="POST" enctype="multipart/form-data">
          <?= csrf_field(); ?>
          <div class="input-group input-group-sm mb-3">
            <label for="judul_dokumen" class="form-label"></label>
            <input type="text" class="form-control" placeholder="Judul Dokumen" id="judul_dokumen" name="judul_dokumen">
          </div>

          <div class="input-group input-group-sm mb-3">
            <input type="file" class="form-control" id="berkas" name="berkas">
            <label class="input-group-text" for="berkas">Upload</label>
          </div>

          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="keterangan" name="keterangan" style="height: 100px"><?= old('keterangan'); ?></textarea>
            <label for="keterangan">Catatan</label>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Upload</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Edit Dokumen -->
<!-- <?php $i = 1; ?>
<?php foreach ($dokumen as $d) : ?>
  <div class="modal fade" id="editModal<?= $d['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Dokumen</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/dokumen/update" method="POST">
            <input type="hidden" name="id" id="id" value="<?= $d['id']; ?>">

            <div class="input-group input-group-sm mb-3">
              <label for="judul_dokumen"></label>
              <input type="text" value="<?= $d['judul_dokumen']; ?>" placeholder="Judul File" id="judul_dokumen" name="judul_dokumen" class="form-control">
            </div>

            <div class="form-floating">
              <input class="form-control" value="<?= $d['keterangan']; ?>" placeholder="Leave a comment here" id="keterangan" name="keterangan" style="height: 100px"></input>
              <label for="keterangan">Catatan</label>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?> -->

<!-- Modal Detail Dokumen -->
<?php $i = 1; ?>
<?php foreach ($dokumen as $d) : ?>
  <div class="modal fade" id="detailModal<?= $d['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Keterangan Dokumen</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-floating">
            <input class="form-control" value="<?= $d['keterangan']; ?>" placeholder="Leave a comment here" id="keterangan" name="keterangan" style="height: 100px"></input>
            <label for="keterangan">Catatan</label>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>


<?= $this->endSection(); ?>