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
                  <div class="col-7">
                     <div class="form-group">
                        <label class="text-primary" for="txt_nama">Nama Alumni :</label>
                        <input type="text" class="form-control" id="txt_nama" name="txt_nama" required>
                     </div>
                  </div>
                  <div class="col-5">
                     <div class="form-group">
                        <label class="text-primary" for="txt_telepon">Telepon :</label>
                        <input type="text" class="form-control" id="txt_telepon" name="txt_telepon" required>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label class="text-primary" for="txt_asal">Asal Alumni :</label>
                  <textarea name="txt_asal" id="txt_asal" class="form-control"></textarea>
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