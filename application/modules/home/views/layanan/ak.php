<div class="container">

  <div class="card">

    <div class="p-2 pl-4">
      <h3><strong>Surat Pengantar Akta Kelahiran</strong></h3>
      <p>Isi form berikut untuk melengkapi data</p>
    </div>

    <div class="card-body">

      <?php echo validation_errors('<div class="text-danger">', '</div>'); ?>

      <form action="<?= base_url('home/layanan/ak') ?>" method="POST" enctype="multipart/form-data">
        <div class="row">

          <div class="col-md-6">
            <div class="form-group bmd-form-group">
              <label class="bmd-label-floating">Nama Lengkap Anak</label>
              <input type="text" name="namalengkap" value="<?= set_value('namalengkap') ?>" class="form-control">
            </div>

            <div class="form-group bmd-form-group">
              <label class="bmd-label-floating">Tempat Lahir</label>
              <input type="text" name="tempat_lahir" value="<?= set_value('tempat_lahir') ?>" class="form-control">
            </div>

            <div class="form-group bmd-form-group">
              <label class="bmd-label-floating">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>" class="form-control">
            </div>

            <div class="form-group bmd-form-group">
              <label class="bmd-label-floating">Pekerjaan</label>
              <input type="text" name="pekerjaan" value="<?= set_value('pekerjaan') ?>" class="form-control">
            </div>

            <div class="form-group bmd-form-group">
              <!-- <label class="bmd-label-floating">Jenis Kelamin</label> -->
              <select name="jenis_kelamin" class="form-control" required id="">
                <option value="">-- Jenis Kelamin --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>



          </div>

          <div class="col-md-6">

            <div class="form-group bmd-form-group">
              <label class="bmd-label-floating">Anak Ke</label>
              <input type="text" name="anak_ke" value="<?= set_value('anak_ke') ?>" class="form-control">
            </div>

            <div class="form-group bmd-form-group">
              <label class="bmd-label-floating">Alamat</label>
              <input type="text" name="alamat" value="<?= set_value('alamat') ?>" class="form-control">
            </div>


            <div class="form-group bmd-form-group">
              <label class="bmd-label-floating">Nama Ayah Kandung</label>
              <input type="text" name="nama_ayah" value="<?= set_value('nama_ayah') ?>" class="form-control">
            </div>

            <div class="form-group bmd-form-group">
              <label class="bmd-label-floating">Nama Ibu Kandung</label>
              <input type="text" name="nama_ibu" value="<?= set_value('nama_ibu') ?>" class="form-control">
            </div>

            <div class="">
              <label class="bmd-label-floating">Surat RT/RW</label><br>
              <input type="file" name="lampiran" value="<?= set_value('lampiran') ?>">
            </div>


          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="float-right">
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
          </div>
        </div>
      </form>

    </div>

  </div>
</div>