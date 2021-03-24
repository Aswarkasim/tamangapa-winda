<?php
$konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
$uri = $this->uri->segment('2');
$uri1 = $this->uri->segment('1');

?>

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/home/') ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url('assets/home/') ?>assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Kit by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?= base_url('assets/home/') ?>assets/css/material-kit.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url('assets/home/') ?>assets/demo/demo.css" rel="stylesheet" />
</head>


<style>
  .margin-top-head {
    margin-top: 100px;
  }
</style>

<body style="background-color: #fff;" class="index-page sidebar-collapse <?php if ($uri != 'index') {
                                                                            if ($uri != '') {
                                                                              echo 'margin-top-head';
                                                                            }
                                                                          } ?> ">