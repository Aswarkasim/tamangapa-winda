<div class="row">
  <div class="col-md-6">
    <div class="box">
      <div class="box-header">
        <h4><strong>
            Pengantar <?= $type; ?>
          </strong></h4>
      </div>
      <div class="box-body">



        <form action="<?= base_url($add); ?>" method="POST">

          <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Nomor Surat</label>
            <input required type="text" name="no_surat" class="form-control">
          </div>

          <?php
          switch ($type) {
            case "AK":
              include('ak.php');
              break;
            case "KTP":
              include('ktp.php');
              break;
            case "KK":
              include('kk.php');
              break;
            case "SKTM":
              include('sktm.php');
              break;
          }
          ?>

          <a href="<?= base_url('admin/layanan'); ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
          <button type="submit" class="btn btn-primary">Buat</button>

        </form>

      </div>
    </div>
  </div>
</div>