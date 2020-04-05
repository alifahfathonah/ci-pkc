<?php $this->load->view('layout/backend/header') ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>Edit Profil</h2>
                </div>
                <form class="form-horizontal" action="<?php echo site_url('admin/ubah_profil/'.$this->session->userdata('id_user')) ?>" method="POST">
                    <div class="form-group">
                        <label for="txt_name" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="txt_name" name="txt_name" value="<?php echo $this->session->userdata('name_user') ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_pass" class="col-sm-2 control-label">Password Baru</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" name="txt_pass" id="txt_pass" placeholder="Password Baru">
                        </div>
                    </div>
                    <div class="col-md-10 col-md-offset-2">
                        <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php $this->load->view('layout/backend/footer') ?>