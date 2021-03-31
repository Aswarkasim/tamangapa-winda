<?php
$konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
$uri = $this->uri->segment('2');
?>

<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="gagal" data-flashdata="<?= $this->session->flashdata('msg_er') ?>"></div>


<style>
  .text-black {
    color: black;
  }
</style>


<nav class="navbar fixed-top navbar-expand-lg" color-on-scroll="100" style="margin-bottom: px;" id="sectionsNav">
  <div class="container">
    <div class="navbar-translate">
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item <?php if ($this->uri->segment('2') == 'index') {
                              echo "active";
                            } ?>"><a class="nav-link" href="<?= base_url('home/index'); ?>"><strong> Beranda</strong></a></li>
        <li class="nav-item <?php if ($this->uri->segment('2') == 'berita') {
                              echo "active";
                            } ?>"><a class="nav-link" href="<?= base_url('home/berita'); ?>"><strong> Berita</strong></a></li>
        <li class="nav-item <?php if ($this->uri->segment('2') == 'sejarah') {
                              echo "active";
                            } ?>"><a class="nav-link" href="<?= base_url('home/sejarah'); ?>"><strong> Sejarah</strong></a></li>
        <li class="nav-item <?php if ($this->uri->segment('2') == 'visimisi') {
                              echo "active";
                            } ?>"><a class="nav-link" href="<?= base_url('home/visimisi'); ?>"><strong> Visi & Misi</strong></a></li>

        <li class="nav-item <?php if ($this->uri->segment('2') == 'posyandu') {
                              echo "active";
                            } ?>"><a class="nav-link" href="<?= base_url('home/posyandu'); ?>"><strong> Posyandu</strong></a></li>


        <li class="dropdown nav-item show">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="true">
            <strong> Layanan</strong>
            <div class="ripple-container"></div>
          </a>
          <div class="dropdown-menu dropdown-with-icons">
            <a href="<?= base_url('home/layanan/ktp') ?>" class="dropdown-item">
              Surat Pengantar KTP
            </a>
            <a href="<?= base_url('home/layanan/ak') ?>" class="dropdown-item">
              Surat Pengantar Akta Kelahiran </a>

            <a href="<?= base_url('home/layanan/kk') ?>" class="dropdown-item">
              Surat Pengantar KK </a>
            <a href="<?= base_url('home/layanan/sktm') ?>" class="dropdown-item">
              Surat Keterangan Tidak Mampu </a>
          </div>
        </li>

        <li class="nav-item <?php if ($this->uri->segment('2') == 'saran') {
                              echo "active";
                            } ?>"><a class="nav-link" href="<?= base_url('home/saran'); ?>"><strong> Hubungi Kami</strong></a></li>

      </ul>
    </div>
  </div>
</nav>

<!-- <div class="jumbotron mb-0 pb-2 pt-2">
  <div class="container">
    <div class="row">
      <div class="col-md-1">
        <img width="100%" src="<?= base_url('assets/img/logo.png'); ?>" alt="">
      </div>
      <div class="col-md-11">
        <strong>
          <h2 class="text-black mb-0"><?= $konfigurasi->nama_aplikasi; ?></h2>
          <h3 class="text-black"> KECAMATAN <?= $konfigurasi->kecamatan; ?></h3>
          <small>No. Telp. <?= $konfigurasi->kontak_person; ?> | Alamat : <?= $konfigurasi->alamat; ?></p>
        </strong>
      </div>
    </div>
  </div>
</div> -->