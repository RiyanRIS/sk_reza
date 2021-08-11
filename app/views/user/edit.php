<?php view('templates/header', $data) ?>

<?php view('templates/navigation') ?>

<div class="container pt-5">

  <div class="row mb-2">

    <!-- EDIT DATA USER -->
    <div class="col-md-12 mb-3">
      <div class="card box-shadow p-5">
        <h3>Tambah Data User</h3>
        <form action="<?= site_url('user/aksi_edit') ?>" method="post">
          <input type="hidden" name="id_user">
          
          <div class="form-group">
            <label for="nama_User">NAMA USER</label>
            <input type="text"
              class="form-control" required="true" name="nama_User" id="nama_User" aria-describedby="helpNamaUser" placeholder="Beri Nama Pada User">
          </div>

          <div class="form-group">
            <label for="nama_User">USERNAME</label>
            <input type="text"
              class="form-control" required="true" name="nama_User" id="nama_User" aria-describedby="helpNamaUser" placeholder="Beri Nama Pada User">
          </div>

          <div class="form-group">
            <label for="role">ROLE</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" required="true" name="role" id="gridRadios1" value="admin" checked>
              <label class="form-check-label" for="gridRadios1">
                Admin
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" required="true" name="role" id="gridRadios2" value="anggota">
              <label class="form-check-label" for="gridRadios2">
                Anggota
              </label>
            </div>
          </div>

          <div class="form-group">
            <label for="password">PASSWORD</label>
            <input type="password"
              class="form-control" name="password" id="password" aria-describedby="pass" placeholder="Password">
            <small id="pass" class="form-text text-muted">Abaikan jika tidak merubah password</small>
          </div>

          <div class="form-group">
            <label for="password2">KONFIRMASI PASSWORD</label>
            <input type="password"
              class="form-control" name="password2" id="password2" aria-describedby="pass1" placeholder="Konfirmasi Password">
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