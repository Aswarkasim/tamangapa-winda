<div class="col-md-12 text-center mt-5">
  <h2>Berita<br></h2>
</div>

<div class="container">

  <hr>

  <div class="row">
    <div class="col-md-8">
      <ul class="list-unstyled">

        <div class="row">
          <?php foreach ($posyandu as $row) { ?>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <a href=""><b><?= format_indo($row->jadwal) ?></b></a>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>

      </ul>
    </div>

    <div class="col-md-4">

      <?php $this->load->view('home/berita/cari') ?>
      <?php $this->load->view('home/berita/kategori') ?>



    </div>
  </div>

  <div class="row">
    <div class="col-md-8 text-center">
      <?php if (isset($pagination)) {
        echo $pagination;
      } ?>
    </div>
  </div>
</div>