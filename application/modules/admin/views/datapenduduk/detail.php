<div class="col-md-6">
  <!-- Box Comment -->
  <div class="box box-widget">
    <div class="box-header with-border">
      <div class="user-block">
        <a href="<?= base_url('admin/datapenduduk') ?>" class="btn btn-success"><i class="fa fa-arrow-left"></i> List Berita</a>
        <span>
          <h3><strong><?= $data->namalengkap; ?></strong></h3>
        </span>
      </div>
      <!-- /.user-block -->
      <div class="box-tools">

      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table class="table">
        <tr width="150px">
          <td>Nama</td>
          <td>: <?= $data->namalengkap; ?></td>
        </tr>

        <tr>
          <td>No. KK.</td>
          <td>: <?= $data->no_kk; ?></td>
        </tr>

        <tr>
          <td>No. KTP.</td>
          <td>: <?= $data->no_ktp; ?></td>
        </tr>

        <tr>
          <td>Tempat Tanggal Lahir</td>
          <td>: <?= $data->tempat_lahir . ', ' . $data->tanggal_lahir; ?></td>
        </tr>

        <tr>
          <td>Alamat</td>
          <td>: <?= $data->alamat; ?></td>
        </tr>

        <tr>
          <td>Penhasilan</td>
          <td>: <?= $data->penghasilan; ?></td>
        </tr>


        <tr>
          <td>Foto</td>
          <td>:
            <img class="img-responsive pad" width="200px" src="<?= base_url($data->foto) ?>" alt="Photo">
          </td>
        </tr>

      </table>

    </div>
    <!-- /.box-body -->


    <!-- /.box-footer -->
  </div>
  <!-- /.box -->
</div>