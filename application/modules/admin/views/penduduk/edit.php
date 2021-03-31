<div class="modal fade" id="ModalEdit<?= $row->id_penduduk ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Kategori</h4>
            </div>
            <?= form_open(base_url($tombol['edit'] . '/' . $row->id_penduduk)) ?>
            <div class="modal-body">

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="" class="pull-right">Klasifikasi</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="<?= $row->nama_klasifikasi; ?>" name="nama_klasifikasi" required>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="" class="pull-right">Jumlah Laki</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" class="form-control" value="<?= $row->lk; ?>" name="lk" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="" class="pull-right">Jumlah Perempuan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" class="form-control" value="<?= $row->pr; ?>" name="pr" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </div>

        </div>
        <?= form_close() ?>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->