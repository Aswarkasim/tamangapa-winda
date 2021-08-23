<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<div class="row">
    <div class="col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><strong><?= $title ?></strong></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <div class="row">
                    <div class="col-md-12">
                        <?php
                        echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
                        if (isset($error)) {
                            echo '<div class="alert alert-warning">';
                            echo $error;
                            echo '</div>';
                        }
                        $uri = $this->uri->segment(3);
                        if ($uri === 'add') {
                            echo form_open_multipart($add);
                        } else {
                            echo form_open_multipart($edit);
                        }
                        ?>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="" class="pull-right">Nama Lengkap</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="namalengkap" required value="<?= isset($data) ? $data->namalengkap : set_value('namalengkap') ?>" placeholder="Nama Lengkap" class="form-control">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="" class="pull-right">No. KK.</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="no_kk" required value="<?= isset($data) ? $data->no_kk : set_value('no_kk') ?>" placeholder="No. KK." class="form-control">
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="" class="pull-right">No. KTP.</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="no_ktp" required value="<?= isset($data) ? $data->no_ktp : set_value('no_ktp') ?>" placeholder="No. KTP." class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="" class="pull-right">Tempat Lahir</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="tempat_lahir" required value="<?= isset($data) ? $data->tempat_lahir : set_value('tempat_lahir') ?>" placeholder="Tempat Lahir" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="" class="pull-right">Tanggal Lahir</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="date" name="tanggal_lahir" required value="<?= isset($data) ? $data->tanggal_lahir : set_value('tanggal_lahir') ?>" placeholder="Tanggal Lahir" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="" class="pull-right">Alamat</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="alamat" required value="<?= isset($data) ? $data->alamat : set_value('alamat') ?>" placeholder="Alamat" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="" class="pull-right">Penghasilan</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="penghasilan" required class="form-control" id="">
                                        <option value=""> -- Penghasilan --</option>
                                        <option value="Rp. 500.000 - Rp. 2.000.000">Rp. 500.000 - Rp. 2.000.000</option>
                                        <option value="Rp. 2.000.000 - Rp. 5.000.000">Rp. 2.000.000 - Rp. 5.000.000</option>
                                        <option value="Rp. 4.000.000 keatas ">Rp. 4.000.000 keatas </option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="" class="pull-right">Gambar</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="file" name="foto" placeholder="Gambar" class="form-control">
                                    <?php if (isset($data)) {
                                        if ($data->foto != '') { ?>
                                            <br>
                                            <img src="<?= base_url($data->foto); ?>" width="250px" alt="">
                                    <?php
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-9">
                                    <a href="<?= base_url($back) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>

                        <?= form_close() ?>
                    </div>
                    <!-- <div class="col-md-6">

                    </div> -->
                </div>


            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('editor1')
    $('.select2').select2()
</script>