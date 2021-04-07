<div class="modal fade" id="ModalEdit<?= $row->id_posyandu ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Jadal Posyandu</h4>
            </div>
            <?= form_open(base_url($tombol['edit'] . '/' . $row->id_posyandu)) ?>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Jadwal</label>
                        </div>
                        <div class="col-md-9">
                            <input type="date" class="form-control" name="jadwal" value="<?= $row->jadwal; ?>" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Lokasi</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Lokasi" value="<?= $row->lokasi; ?>" name="lokasi" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Pelaksana</label>
                        </div>
                        <div class="col-md-9">
                            <textarea name="pelaksana" id="editor2" cols="30" rows="10"><?= $row->pelaksana; ?></textarea>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Penanggung Jawab</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Penanggung Jawab" value="<?= $row->pj; ?>" name="pj" required>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <?= form_close() ?>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script src="<?= base_url('assets/admin/') ?>bower_components/ckeditor/ckeditor.js"></script>

<script>
    CKEDITOR.replace('editor2')
    $('.select2').select2()
</script>