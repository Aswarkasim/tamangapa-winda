<button type="button" class="btn btn-warning btn-sx" data-toggle="modal" data-target="#modal-default">
    <i class="fa fa-plus"></i>Tambah
</button>
<?= form_open(base_url($tombol['add'])) ?>
<form action="" method="POST">
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Penduduk</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="pull-right">Klasifikasi</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="nama_klasifikasi" required>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="pull-right">Jumlah Laki</label>
                            </div>
                            <div class="col-md-8">
                                <input type="number" class="form-control" name="lk" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="pull-right">Jumlah Perempuan</label>
                            </div>
                            <div class="col-md-8">
                                <input type="number" class="form-control" name="pr" required>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</form>
<?= form_close() ?>
<!-- /.modal -->