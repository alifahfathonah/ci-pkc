<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" area-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-md">
     	<div class="modal-content">
     		<form class="form-horizontal" method="POST" enctype="multipart/form-data">
     			<div class="modal-header">
     				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> &times; </span></button>
     				<h3 class="modal-title"></h3>
     			</div>
     			
     			<div class="modal-body">
     				<input type="hidden" name="txt_id" id="txt_id">

     				<div class="form-group">
                        <label for="txt_nama" class="col-md-3 control-label">Nama Komisariat</label>
                        <div class="col-md-9">
                            <input type="text" name="txt_nama" id="txt_nama" class="form-control" required> 
                        </div>
                    </div>
     				<div class="form-group">
                        <label for="txt_alamat" class="col-md-3 control-label">Alamat</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="txt_alamat" id="txt_alamat" cols="15" rows="5" required></textarea> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="email" name="txt_email" id="txt_email" class="form-control" required> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_telepon" class="col-md-3 control-label">Telepon</label>
                        <div class="col-md-9">
                            <input type="text" name="txt_telepon" id="txt_telepon" class="form-control" required> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_berdiri" class="col-md-3 control-label">Tahun Berdiri</label>
                        <div class="col-md-9">
                            <input type="text" name="txt_berdiri" id="txt_berdiri" class="form-control" required> 
                        </div>
                    </div>
     				<div class="form-group">
                        <label for="txt_status" class="col-md-3 control-label">Status</label>
                        <div class="col-md-6">
                            <select class="form-control" name="txt_status" id="txt_status" required>
                                <option value="Persiapan">Persiapan</option>
                                <option value="Definitif">Definitif</option>
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