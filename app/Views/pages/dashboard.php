<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h3 class="fw-bolder"><i class="fas fa-home me-3"></i>Dashboard</h3>

<!-- Card Dashboard -->
<div class="row mt-5">
  <div class="col-lg-4">
    <div class="card shadow rounded p-3 border border-white">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title fw-bolder">Dokumen</h5>
          </div>
          <div class="col img-dashboard ms-4">
            <img style="width: 60px;" src="/images/file-folder.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="col-lg-4">
    <div class="card p-3 border border-white">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title fw-bolder">Gambar</h5>
            <p class="card-text">12</p>
          </div>
          <div class="col ms-4">
            <img style="width: 60px;" src="/images/image-folder.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div> -->
</div>
</div>
</div>
<!-- End Sidebar and Main Content -->
<?= $this->endSection(); ?>