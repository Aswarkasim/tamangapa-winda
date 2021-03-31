<div class="form-group bmd-form-group">
  <label class="bmd-label-floating">Nama Lengkap</label>
  <input type="text" name="namalengkap" value="<?= $layanan->namalengkap ?>" class="form-control">
</div>

<div class="form-group bmd-form-group">
  <label class="bmd-label-floating">Tempat Lahir</label>
  <input type="text" name="tempat_lahir" value="<?= $layanan->tempat_lahir ?>" class="form-control">
</div>

<div class="form-group bmd-form-group">
  <label class="bmd-label-floating">Tanggal Lahir</label>
  <input type="date" name="tanggal_lahir" value="<?= $layanan->tanggal_lahir ?>" class="form-control">
</div>

<div class="form-group bmd-form-group">
  <label class="bmd-label-floating">Pekerjaan</label>
  <input type="text" name="pekerjaan" value="<?= $layanan->pekerjaan ?>" class="form-control">
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
  <label class="bmd-label-floating">Agama</label>
  <input type="text" name="agama" value="<?= $layanan->agama ?>" class="form-control">
</div>

<div class="form-group bmd-form-group">
  <label class="bmd-label-floating">Status Perkawinan</label>
  <select name="status_perkawinan" class="form-control" required id="">
    <option value="">-- Status Perkawinan --</option>
    <option value="Ya" <?= $layanan->status_perkawinan == 'Ya' ? 'selected' : ''; ?>>Ya</option>
    <option value="Belum" <?= $layanan->status_perkawinan == 'Belum' ? 'selected' : ''; ?>>Belum</option>
    <option value="Cerai" <?= $layanan->status_perkawinan == 'Cerai' ? 'selected' : ''; ?>>Cerai</option>
  </select>
</div>

<div class="form-group bmd-form-group">
  <label class="bmd-label-floating">Kewarganegaraan</label>
  <input type="text" name="kewarganegaraan" value="<?= $layanan->kewarganegaraan ?>" class="form-control">
</div>

<div class="form-group bmd-form-group">
  <label class="bmd-label-floating">Alamat</label>
  <input type="text" name="alamat" value="<?= $layanan->alamat ?>" class="form-control">
</div>