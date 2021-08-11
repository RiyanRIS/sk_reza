<?php view('templates/header', $data) ?>

<?php view('templates/navigation') ?>

<div class="container pt-5">

  <div class="row mb-2">

    <!-- EDIT DATA ARSIP -->
    <div class="col-md-12 mb-3">
      <div class="card box-shadow p-5">
        <h3>Tambah Data Arsip</h3>
        <form action="<?= site_url('arsip/aksi_add') ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="id_arsip">ID ARSIP</label>
            <input type="text" class="form-control" required="true" name="id_arsip" id="id_arsip" aria-describedby="helpIdArsip" placeholder="ID ARSIP">
            <small id="helpIdArsip" class="form-text text-muted">Kode khusus untuk masing masing arsip.</small>
          </div>
          <div class="form-group">
            <label for="nama_arsip">NAMA ARSIP</label>
            <input type="text" class="form-control" required="true" name="nama_arsip" id="nama_arsip" aria-describedby="helpNamaArsip" placeholder="Beri Nama Pada Arsip">
          </div>
          <div class="form-group">
            <label for="jenis">JENIS ARSIP</label>
            <select class="form-control" required="true" name="jenis" id="jenis">
              <option>Surat</option>
              <option>Laporan</option>
              <option>Lainya</option>
            </select>
          </div>
          <div class="form-group">
            <label for="nama_arsip">WAKTU PELAKSANAAN</label>
            <div class="form-row">
              <div class="col-sm-2">
                <input type="text" class="form-control" required="true" name="tanggal" id="nama_arsip" aria-describedby="helpNamaArsip" placeholder="Tanggal">
              </div>
              
              <div class="col-sm-2">
                <select class="form-control" name="bulan" id="bulan">
                  <option disabled selected value>-- Bulan --</option>
                  <option>Januari</option>
                  <option>Februari</option>
                  <option>Maret</option>
                </select>
              </div>
              
              <div class="col-sm-2">
                <input type="text" class="form-control" required="true" name="tahun" id="tahun" aria-describedby="helpNamaArsip" placeholder="Tahun">
              </div>

              <div class="col-sm-2">
                <input type="text" class="form-control" required="true" name="jam" id="jam" aria-describedby="helpNamaArsip" placeholder="Jam">
              </div>

              <div class="col-sm-2">
                <input type="text" class="form-control" required="true" name="menit" id="menit" aria-describedby="helpNamaArsip" placeholder="Menit">
              </div>

            </div>
          </div>
          <div class="form-group">
            <label for="file">FILE</label>
            <input type="file" required="true" class="form-control-file" name="file" id="file" placeholder="FILE" aria-describedby="fileHelpId">
            <!-- <small id="fileHelpId" class="form-text text-muted">*doc, pdf, </small> -->
          </div>
          <input name="btn_simpan" id="btn_simpan" class="btn btn-primary" type="button" value="Simpan"> <a href="<?= site_url('arsip') ?>" class="btn btn-danger">Batal</a>
        </form>


      </div>
    </div>

  </div>
</div>

<?php view("templates/footer") ?>
</body>

</html>