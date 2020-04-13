<div class="modal fade" id="modal-profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <form>
            <div class="modal-header">
               <h5 class="modal-title">
                  <i class="zmdi zmdi-city"></i>&nbsp;
                  Pengaturan Profil Cabang
               </h5>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label class="text-primary" for="txt_email">Email Cabang :</label>
                  <input type="email" class="form-control" id="txt_email" name="txt_email" value="<?= $cabang->email_cabang ?>" required>
               </div>
               <div class="row">
                  <div class="col-8">
                     <div class="form-group">
                        <label class="text-primary" for="txt_telepon">Telepon Cabang :</label>
                        <input type="text" class="form-control" id="txt_telepon" name="txt_telepon" value="<?= $cabang->telepon_cabang ?>" required>
                     </div>
                  </div>
                  <div class="col-4">
                     <div class="form-group">
                        <label class="text-primary" for="txt_berdiri">Berdiri Cabang :</label>
                        <input type="text" class="form-control" id="txt_berdiri" name="txt_berdiri" value="<?= $cabang->berdiri_cabang ?>" required>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label class="text-primary" for="txt_alamat">Alamat :</label>
                  <textarea name="txt_alamat" id="txt_alamat" class="form-control"><?= $cabang->alamat_cabang ?></textarea>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">
                  <i class="zmdi zmdi-close"></i>&nbsp;Batal
               </button>
               <button type="submit" id="btn-submit" class="btn btn-primary">
                  <!-- <i class="zmdi zmdi-save"></i>&nbsp;Simpan Pengguna -->
               </button>
            </div>
         </form>
      </div>
   </div>
</div>