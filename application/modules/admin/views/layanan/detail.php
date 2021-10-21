<div class="col-md-6">
  <!-- Box Comment -->
  <div class="box box-widget">
    <div class="box-header with-border">
      <div class="user-block">
        <!-- <img class="img-circle" src="<?= base_url($layanan->gambar) ?>" alt="User Image"> -->
        <a href="<?= base_url('admin/layanan') ?>" class="btn btn-success"><i class="fa fa-arrow-left"></i> List Berita</a>
        <!-- <a href="<?= base_url('admin/layanan/edit/' . $layanan->id_layanan) ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a> -->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalEdit<?= $layanan->id_layanan ?>">
          <i class="fa fa-edit"></i>Edit
        </button>
        <?php include('edit.php') ?>
        <a href="<?= base_url('admin/layanan/cetak/' . $layanan->id_layanan) ?>" class="btn btn-warning" target="blank"><i class="fa fa-print"></i> Cetak</a>
        <span>
          <br>
          <h4><strong><?= 'Pengurusan ' . $layanan->type; ?></strong></h4>
          <h3><strong><?= $layanan->namalengkap; ?></strong></h3>
        </span>
        <span>diinput pada - <?= $layanan->date_created; ?></span>
      </div>
      <!-- /.user-block -->
      <div class="box-tools">
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <tr>
        <td><b>Nomor Surat</b></td>
        <td>: <b><?= $layanan->no_surat; ?></b></td>
      </tr>

      <?php
      switch ($layanan->type) {
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

      <tr>
        <td><b>Lampiran Surat RT/RW</b></td>
        <td>: <b><a href="<?= base_url('admin/layanan/download/' . $layanan->id_layanan); ?>"><i class="fa fa-download"></i> Lampiran</a></td>
      </tr>

    </div>
    <!-- /.box-body -->


    <!-- /.box-footer -->
  </div>
  <!-- /.box -->
</div>