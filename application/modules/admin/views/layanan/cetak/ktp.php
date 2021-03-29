<table style="margin-left: 30px;">
  <tr>
    <td width="200px">Nama</td>
    <td>: <?= $layanan->namalengkap; ?></td>
  </tr>

  <tr>
    <td>Tempat, Tanggal Lahir</td>
    <td>: <?= $layanan->tempat_lahir . ', ' . date_indo($layanan->tanggal_lahir); ?></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>: <?= $layanan->jenis_kelamin; ?></td>
  </tr>


  <tr>
    <td>Pekerjaan</td>
    <td>: <?= $layanan->pekerjaan; ?></td>
  </tr>

  <tr>
    <td>Agama</td>
    <td>: <?= $layanan->agama; ?></td>
  </tr>

  <tr>
    <td>Status Perkawinan</td>
    <td>: <?= $layanan->status_perkawinan; ?></td>
  </tr>

  <tr>
    <td>Kewarganegaraan</td>
    <td>: <?= $layanan->kewarganegaraan; ?></td>
  </tr>


  <tr>
    <td>Alamat</td>
    <td>: <?= $layanan->alamat; ?></td>
  </tr>

</table>

<br>
<p>
  Yang tersebut namanya diatas benar adalah warga desa Tamangapa Kec. Ma’rang, Kab. Pangkep. Surat pengantar ini dibuat guna melengkapi syarat pembuatan atau pengurusan KTP (Kartu Tanda Penduduk).
  <br><br> Demikian surat pengantar ini kami buat agar dapat dipergunakan sebagaimana mestinya dan penuh tanggung jawab.
</p>