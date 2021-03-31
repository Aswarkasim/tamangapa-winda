<div class="form-group bmd-form-group">
  <label class="bmd-label-floating">Nama Lengkap</label>
  <input required type="text" name="namalengkap" value="<?= $layanan->namalengkap ?>" class="form-control">
</div>

<div class="form-group bmd-form-group">
  <label class="bmd-label-floating">Tempat Lahir</label>
  <input required type="text" name="tempat_lahir" value="<?= $layanan->tempat_lahir ?>" class="form-control">
</div>

<div class="form-group bmd-form-group">
  <label class="bmd-label-floating">Tanggal Lahir</label>
  <input required type="date" name="tanggal_lahir" value="<?= $layanan->tanggal_lahir ?>" class="form-control">
</div>

<div class="form-group bmd-form-group">
  <label class="bmd-label-floating">Pekerjaan</label>
  <input required type="text" name="pekerjaan" value="<?= $layanan->pekerjaan ?>" class="form-control">
</div>

<div class="form-group bmd-form-group">
  <label class="bmd-label-floating">Jenis Kelamin</label>
  <select name="jenis_kelamin" class="form-control" required id="">
    <option value="">-- Jenis Kelamin --</option>
    <option value="Laki-laki" <?= $layanan->jenis_kelamin == 'Laki-laki' ? 'selected' : ''; ?>>Laki-laki</option>
    <option value="Perempuan" <?= $layanan->jenis_kelamin == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
  </select>
</div>

<div class="form-group bmd-form-group">
  <label class="bmd-label-floating">Anak Ke</label>
  <input required type="text" name="anak_ke" value="<?= $layanan->anak_ke ?>" class="form-control">
</div>

<div class="form-group bmd-form-group">
  <label class="bmd-label-floating">Alamat</label>
  <input required type="text" name="alamat" value="<?= $layanan->alamat ?>" class="form-control">
</div>


<div class="form-group bmd-form-group">
  <label class="bmd-label-floating">Nama Ayah Kandung</label>
  <input required type="text" name="nama_ayah" value="<?= $layanan->nama_ayah ?>" class="form-control">
</div>

<div class="form-group bmd-form-group">
  <label class="bmd-label-floating">Nama Ibu Kandung</label>
  <input required type="text" name="nama_ibu" value="<?= $layanan->nama_ibu ?>" class="form-control">
</div>