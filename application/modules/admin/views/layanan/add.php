 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalEditADSS">
     <i class="fa fa-plus"></i> Tambah
 </button>

 <div class="modal fade" id="ModalEditADSS">
     <div class="modal-dialog">
         <?= form_open(base_url($add)) ?>
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                 <h4 class="modal-title">Edit</h4>
             </div>

             <div class="modal-body">

                 <div class="form-group bmd-form-group">
                     <label class="bmd-label-floating">Surat</label>
                     <select name="surat" required class="form-control" id="">
                         <option value="">--- Surat ---</option>
                         <option value="KK">Pengantar Kartu Keluarga</option>
                         <option value="KTP">Pengantar KTP</option>
                         <option value="AK">Pengantar Akta Kelahiran</option>
                         <option value="SKTM">Pengantar SKTM</option>
                     </select>
                 </div>

             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Buat</button>
             </div>
         </div>
         <?= form_close() ?>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>
 <!-- /.modal -->