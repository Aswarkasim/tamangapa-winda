<div class="container pt-5">

  <div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

      <!-- Title -->
      <h2 class="mt-4">Data Penduduk</h2>

      <hr>

      <div class="form-group">
        <div class="table-responsive">
          <table class="table DataTable">
            <thead>
              <tr>
                <th width="40px">No</th>
                <th>Klasifikasi</th>
                <th>Laki-laki</th>
                <th>Perempuan</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody id="targetData">
              <?php $no = 1;
              foreach ($penduduk as $row) { ?>
                <tr>
                  <td><?= $no ?></td>
                  <td><?= $row->nama_klasifikasi ?></td>
                  <td><?= $row->lk . ' Orang' ?></td>
                  <td><?= $row->pr . ' Orang' ?></td>
                  <td><?= $row->total . ' Orang' ?></td>

                </tr>
              <?php $no++;
              } ?>
            </tbody>
          </table>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="text-center">
              <?= $pagination; ?>
            </div>
          </div>
        </div>

      </div>


    </div>
    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">
      <?php $this->load->view('home/berita/cari') ?>


    </div>

  </div>
  <!-- /.row -->

</div>