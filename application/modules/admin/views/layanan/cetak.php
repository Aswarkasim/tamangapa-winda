<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cetak Surat</title>
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <style type="text/css">
    /* body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        } */

    @page {
      size: portrait;
      margin-left: 90px;
      margin-right: 90px;
      margin-top: 50px;
      margin-bottom: 50px;
    }
  </style>
</head>

<body>

  <table style="width: 100%;">
    <tr>
      <td align="right"><img src="<?= base_url('assets/img/logo_pangkep.png'); ?>" width="70px" alt=""></td>

      <td class="text-center" align="left">
        <h4><strong>
            PEMERINTAH KABUPATEN PANGKAJENE DAN KEPULAUAN <br>
            KECAMATAN MA’RANG <br>
            DESA TAMANGAPA
          </strong></h4>
        <span>Alamat : Jl. Poros Makassar Pare-Pare Km. 71 Balombong Kode Pos 90654</span>
      </td>

    </tr>
  </table>
  <img src="<?= base_url('assets/img/shapesurat.svg'); ?>" alt="">
  <center>
    <p>

    <h4><b><u>SURAT KETERANGAN PENGANTAR</u></b></h4>
    <span style="margin-top: -100px;">Nomor : <?= $layanan->no_surat; ?></span>
    </p>


  </center>
  <br>
  <p>Yang bertanda tangan dibawah ini Kepala Desa Tamangapa, Kec. Ma’rang, Kab. Pangkep, menerangkan bahwa:</p>

  <?php
  switch ($layanan->type) {
    case "AK":
      include('cetak/ak.php');
      break;
    case "KTP":
      include('cetak/ktp.php');
      break;
    case "KK":
      include('cetak/kk.php');
      break;
    case "SKTM":
      include('cetak/sktm.php');
      break;
  }

  $date = date('Y-m-d');
  ?>

  <table width="100%">
    <tr>
      <td align="right">Tamangapa, <?= date_indo($date) ?></td>
    </tr>
    <tr>
      <td align="right">Kepala Desa Tamangapa</td>
    </tr>
    <tr>
      <td><br><br><br></td>
    </tr>
    <tr>
      <td align="right"><b><?= $konfigurasi->nama_pimpinan; ?></b></td>
    </tr>
  </table>

  <script>
    window.print()
  </script>
</body>

</html>