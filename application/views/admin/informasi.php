<?php $this->load->view('layout/backend/header') ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>Ubah Informasi Web</h2>
                </div>
                <form class="form-horizontal" action="<?php echo site_url('informasi/update/1') ?>" method="POST">
                    <div class="form-group">
                        <label for="txt_alamat" class="col-sm-2 control-label ">Alamat</label>
                        <div class="col-sm-6">
                            <textarea name="txt_alamat" id="txt_alamat" class="form-control"><?php echo $informasi->alamat_informasi ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" name="txt_email" id="txt_email" value="<?php echo $informasi->email_informasi ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_telepon" class="col-sm-2 control-label">Telepon</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="txt_telepon" id="txt_telepon" value="<?php echo $informasi->telepon_informasi ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_facebook" class="col-sm-2 control-label">Facebook</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="txt_facebook" id="txt_facebook" value="<?php echo $informasi->facebook_informasi ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_instagram" class="col-sm-2 control-label">Instagram</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="txt_instagram" id="txt_instagram" value="<?php echo $informasi->instagram_informasi ?>">
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
