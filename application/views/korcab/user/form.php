<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" area-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
     	<div class="modal-content">
     		<form class="form-horizontal" method="POST" enctype="multipart/form-data">
     			<div class="modal-header">
     				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> &times; </span></button>
     				<h3 class="modal-title"></h3>
     			</div>
     			
     			<div class="modal-body">
     				<input type="hidden" name="txt_id" id="txt_id">

     				<div class="form-group">
                        <label for="txt_name" class="col-md-3 control-label">Name User</label>
                        <div class="col-md-9">
                            <input type="text" name="txt_name" id="txt_name" class="form-control" required> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_cabang" class="col-md-3 control-label">Cabang</label>
                        <div class="col-md-6">
                            <select class="form-control" name="txt_cabang" id="txt_cabang" required>
                            <!-- daftar diambil dari parsing data setiap controller -->
                            <?php foreach ($header_cabang as $cabang): ?>
                                <option value="<?php echo $cabang->id_cabang ?>"><?php echo $cabang->nama_cabang ?></option>
                            <?php endforeach; ?>
                                
                            </select> 
                        </div>
                    </div>
     				<div class="form-group">
                        <label for="txt_pass" class="col-md-3 control-label">Password User</label>
                        <div class="col-md-9">
                            <input type="password" name="txt_pass" id="txt_pass" class="form-control" required> 
                        </div>
                    </div>
     				<div class="form-group">
                        <label for="txt_level" class="col-md-3 control-label">Level User</label>
                        <div class="col-md-6">
                            <select class="form-control" name="txt_level" id="txt_level" required>
                                <option value="3">Pengurus Cabang</option>
                                <option value="2">Pengurus Koor. Cabang</option>
                                <option value="1">Administrator Web</option>
                            </select> 
                        </div>
                    </div>
     			</div>

     			<div class="modal-footer">
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save Changes</button>
     				<button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-remove"></i> Close</button>
     			</div>
     		</form>
     	</div>
    </div>
</div>