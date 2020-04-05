<div class="modal" id="modal-logout" tabindex="-1" role="dialog" area-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
     	<div class="modal-content">
     		<form action="<?php echo site_url('login/logout') ?>" class="form-horizontal" method="POST">
     			
     			<div class="modal-body">
                    <div align="center">
                        <h2>Apakah anda yakin untuk keluar ?</h2>
                    </div>
     			</div>

     			<div class="modal-footer">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-check"></i> Ya, Keluar</button>
     				<button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-remove"></i> Batal</button>
     			</div>
     		</form>
     	</div>
    </div>
</div>