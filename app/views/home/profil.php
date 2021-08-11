<?php view('templates/header', $data) ?>

<?php view('templates/navigation') ?>

<div class="container pt-5">

  <div class="row mb-2">

    <!-- PROFIL -->
    <div class="col-md-12 mb-3">
      <div class="card box-shadow p-5">
        <h3>PROFIL</h3>
        <form action="<?= site_url('home/aksi_profil') ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="logo_lembaga" value="<?= $data['profil']['logo_lembaga'] ?>">
        <input type="hidden" name="logo_kampus" value="<?= $data['profil']['logo_kampus'] ?>">
          <div class="form-group">
            <label for="sistem">NAMA SISTEM</label>
            <input type="text"
              class="form-control" required="true" name="sistem" id="sistem" aria-describedby="sistem" value="<?= $data['profil']['sistem'] ?>" placeholder="NAMA SISTEM">
          </div>

          <div class="form-group">
            <label for="lembaga">NAMA LEMBAGA</label>
            <input type="text"
              class="form-control" required="true" name="lembaga" id="lembaga" aria-describedby="lembaga" value="<?= $data['profil']['lembaga'] ?>" placeholder="NAMA LEMBAGA">
          </div>

          <div class="form-group">
            <label for="kabinet">NAMA KABINET</label>
            <input type="text"
              class="form-control" required="true" name="kabinet" id="kabinet" aria-describedby="kabinet" value="<?= $data['profil']['kabinet'] ?>" placeholder="NAMA KABINET">
          </div>

          <div class="form-group">
            <label for="kampus">NAMA KAMPUS</label>
            <input type="text"
              class="form-control" required="true" name="kampus" id="kampus" aria-describedby="kampus" value="<?= $data['profil']['kampus'] ?>" placeholder="NAMA KAMPUS">
          </div>

          <div class="form-group">
            <label for="logo_lembaga">LOGO LEMBAGA</label>
            <input type="file" name="img_lembaga">

          </div>

          <div class="form-group">
            <label for="logo_kampus">LOGO KAMPUS</label>
           <input type="file" name="img_kampus">
          </div>
          
          <input name="btn_simpan" id="btn_simpan" class="btn btn-primary" type="submit" value="Simpan"> <a href="<?= site_url('home') ?>" class="btn btn-danger">Batal</a>
        </form>
      </div>
    </div>

  </div>
</div>

<?php view("templates/footer") ?>
</body>

</html>