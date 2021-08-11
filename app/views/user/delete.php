<?php view('templates/header', $data) ?>

<?php view('templates/navigation') ?>

<div class="container pt-5">

  <div class="row mb-2">

    <!-- EDIT DATA USER -->
    <div class="col-md-12 mb-3">
      <div class="card box-shadow p-5">
        <h3>Tambah Data User</h3>
        <form action="<?= site_url('user/aksi_delete') ?>" method="post">
          <input type="hidden" name="id_user">
          
          <div class="form-group">
            <label for="nama_User">NAMA USER</label>
            <input type="text"
              class="form-control" disabled="true" name="nama_User" id="nama_User" aria-describedby="helpNamaUser" placeholder="Beri Nama Pada User">
          </div>

          <div class="form-group">
            <label for="nama_User">USERNAME</label>
            <input type="text"
              class="form-control" disabled="true" name="nama_User" id="nama_User" aria-describedby="helpNamaUser" placeholder="Beri Nama Pada User">
          </div>

          <input name="btn_simpan" id="btn_simpan" class="btn btn-primary" type="button" value="Simpan"> <a href="<?= site_url('user') ?>" class="btn btn-danger">Batal</a>
        </form>

        
      </div>
    </div>

  </div>
</div>

<?php view("templates/footer") ?>
</body>

</html>