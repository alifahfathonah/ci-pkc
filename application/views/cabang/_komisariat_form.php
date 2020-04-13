<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
         <form>
            <input type="hidden" id="txt_id">
            <div class="modal-header">
               <h5 class="modal-title"></h5>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-6">
                     <div class="form-group">
                        <label class="text-primary" for="txt_nama">Nama Komisariat :</label>
                        <input type="text" class="form-control" id="txt_nama" name="txt_nama" required>
                     </div>

                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label class="text-primary" for="txt_email">Email Komisariat :</label>
                        <input type="email" class="form-control" id="txt_email" name="txt_email" required>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-6">
                     <div class="form-group">
                        <label class="text-primary" for="txt_telepon">Telepon :</label>
                        <input type="text" class="form-control" id="txt_telepon" name="txt_telepon" required>
                     </div>
                  </div>
                  <div class="col-2">
                     <div class="form-group">
                        <label class="text-primary" for="txt_berdiri">Berdiri :</label>
                        <input type="number" class="form-control" id="txt_berdiri" name="txt_berdiri" required>
                     </div>
                  </div>
                  <div class="col-4">
                     <div class="form-group">
                        <label class="text-primary" for="txt_berdiri">Status :</label>
                        <select class="form-control" name="txt_status" id="txt_status" required>
                           <option value="Persiapan">Persiapan</option>
                           <option value="Definitif">Definitif</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label class="text-primary" for="txt_alamat">Alamat :</label>
                  <textarea name="txt_alamat" id="txt_alamat" class="form-control"></textarea>
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