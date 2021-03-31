<div class="modal fade" id="ModalEdit<?= $layanan->id_layanan ?>">
    <div class="modal-dialog">
        <?= form_open(base_url($edit . '/' . $layanan->id_layanan)) ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit</h4>
            </div>

            <div class="modal-body">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Nomor Surat</label>
                    <input required type="text" name="no_surat" value="<?= $layanan->no_surat ?>" class="form-control">
                </div>

                <?php
                switch ($layanan->type) {
                    case "AK":
                        include('edit/ak.php');
                        break;
                    case "KTP":
                        include('edit/ktp.php');
                        break;
                    case "KK":
                        include('edit/kk.php');
                        break;
                    case "SKTM":
                        include('edit/sktm.php');
                        break;
                }
                ?>

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