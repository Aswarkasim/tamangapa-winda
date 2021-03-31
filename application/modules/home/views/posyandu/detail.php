<div class="container">

  <div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

      <!-- Date/Time -->
      <p>dbuat pada : <?= format_indo($posyandu->date_created); ?></p>

      <hr>
      <h4><b><?= format_indo($posyandu->jadwal); ?></b></h4>
      <hr>

      <table width="100%">
        <tr>
          <td width="100px">Lokasi</td>
          <td>: <?= $posyandu->lokasi; ?></td>
        </tr>

        <tr>
          <td>Penanggung Jawab</td>
          <td>: <?= $posyandu->pj; ?></td>
        </tr>

        <tr>
          <td>Pelaksana :</td>
          <td></td>
        </tr>

        <tr>
          <td><?= $posyandu->pelaksana; ?></td>
          <td></td>
        </tr>

      </table>

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">


      <!-- Search Widget -->
      <?php $this->load->view('home/berita/cari') ?>
      <?php $this->load->view('home/berita/kategori') ?>


    </div>


  </div>
  <!-- /.row -->





</div>