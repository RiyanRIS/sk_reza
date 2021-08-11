<?php view('templates/header', $data) ?>

<?php view('templates/navigation') ?>

<div class="container pt-5">

  <div class="row mb-2">

    <!-- DATA ARSIP -->
    <div class="col-md-12 mb-3">
      <div class="card box-shadow p-5">
        <h3>Data Arsip <a href="<?= site_url('arsip/add') ?>" title="Tambah Data" class="btn btn-sm btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a> </h3>
        <div class="table-responsive mt-3">
          <table class="table table-bordered table-stiped">
            <thead>
              <tr>
                <td>NO.</td>
                <td>ID ARSIP</td>
                <td>NAMA ARSIP</td>
                <td>AKSI</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>014/ARSIP/BEM/09/2021</td>
                <td>LPJ Pelantikan</td>
                <td><a href="<?= site_url('arsip/edit/1') ?>" class="btn btn-sm btn-info" title="Edit Data"><i class="fa fa-edit    "></i></a> <a href="<?= site_url('arsip/delete/1') ?>" class="btn btn-sm btn-danger" title="Hapus Data"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
              </tr>
            </tbody>
          </table>
        </div>

        <a href="<?= site_url('home') ?>" class="btn btn-primary w-25">Kembali</a>
      </div>
    </div>

  </div>
</div>

<?php view("templates/footer") ?>
</body>

</html>