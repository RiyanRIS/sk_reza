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
                <td>KODE ARSIP</td>
                <td>NAMA ARSIP</td>
                <td>AKSI</td>
              </tr>
            </thead>
            <tbody>
            <?php if(count($data['arsip']) == 0){ ?>
              <tr>
                <td colspan="4" style="text-align:center">Data Kosong..</td>
              </tr>
            <?php }else{ ?>
              <?php $no = 1; foreach ($data['arsip'] as $key) { ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $key['kode'] ?></td>
                  <td><a target="_BLANK" href="<?= toUrl("arsip", $key['file']) ?>"><?= $key['nama'] ?></a></td>
                  <td><a href="<?= site_url('arsip/edit/'.$key['id']) ?>" class="btn btn-sm btn-info" title="Edit Data"><i class="fa fa-edit    "></i></a> <a href="<?= site_url('arsip/delete/'.$key['id']) ?>" class="btn btn-sm btn-danger" title="Hapus Data"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
              <?php } ?>
            <?php } ?>
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