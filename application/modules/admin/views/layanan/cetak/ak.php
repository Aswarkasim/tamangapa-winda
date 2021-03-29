<table style="margin-left: 30px;">

  <tr>
    <td width="200px">Nama Lengkap</td>
    <td>: <?= $layanan->namalengkap; ?></td>
  </tr>

  <tr>
    <td>Tempat Tanggal Lahir</td>
    <td>: <?= $layanan->tempat_lahir, date_indo($layanan->tanggal_lahir); ?></td>
  </tr>

  <tr>
    <td>Pekerjaan</td>
    <td>: <?= $layanan->pekerjaan; ?></td>
  </tr>

  <tr>
    <td>Jenis Kelamin</td>
    <td>: <?= $layanan->jenis_kelamin; ?></td>
  </tr>



  <tr>
    <td>Alamat</td>
    <td>: <?= $layanan->alamat; ?></td>
  </tr>

  <tr>
    <td><br></td>
  </tr>

  <tr>
    <td>Adalah anak dari </td>
    <td>:</td>
  </tr>


  <tr>
    <td>Nama Ayah Kandung</td>
    <td>: <?= $layanan->nama_ayah; ?></td>
  </tr>

  <tr>
    <td>Nama Ibu Kandung</td>
    <td>: <?= $layanan->nama_ibu; ?></td>
  </tr>

  <tr>
    <td>Anak ke</td>
    <td>: <?= $layanan->anak_ke; ?></td>
  </tr>

</table>

<br>
<p>
  Yang tersebut namanya diatas benar adalah warga desa Tamangapa Kec. Ma’rang, Kab. Pangkep. Surat pengantar ini dibuat guna melengkapi syarat pembuatan atau pengurusan Akte Kelahiran.
  <br><br> Demikian surat pengantar ini kami buat agar dapat dipergunakan sebagaimana mestinya dan penuh tanggung jawab.
</p>