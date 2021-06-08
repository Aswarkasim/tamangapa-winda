<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Manajemen Admin</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">

    <p>
      <?php include('add.php') ?>
      <!-- <a href="<?= base_url($add) ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a> -->
    </p>


    <style>
      .read-data {
        color: darkgray;
      }

      .not-read-data {
        color: #f4c000;
      }
    </style>


    <table class="table DataTable">
      <thead>
        <tr>
          <th width="40px">No</th>
          <th>Nama</th>
          <th width="100px">Surat</th>
          <th width="200px">Tindakan</th>
        </tr>
      </thead>
      <tbody id="targetData">
        <?php $no = 1;
        foreach ($layanan as $row) { ?>
          <tr>
            <td><?= $no ?></td>
            <td>
              <a href="<?= base_url('admin/layanan/detail/' . $row->id_layanan); ?>"><i class="fa <?php if ($row->is_read == '1') {
                                                                                                    echo 'fa-envelope-open read-data';
                                                                                                  } else {
                                                                                                    echo 'fa-envelope not-read-data';
                                                                                                  } ?>"></i> <b><?= $row->namalengkap ?></b></a>
            </td>
            <td><?= $row->type; ?></td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-info"><i class="fa fa-cogs"></i></button>
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <!-- <li><a href="<?= base_url($edit . $row->id_layanan)  ?>"><i class="fa fa-edit"></i> Edit</a></li> -->
                  <li><a class="tombol-hapus" href="<?= base_url($delete . $row->id_layanan)  ?>"><i class="fa fa-trash"></i> Hapus</a></li>
                </ul>
              </div>


            </td>
          </tr>
        <?php $no++;
        } ?>
      </tbody>
    </table>

  </div>
  <!-- /.box-body -->
</div>