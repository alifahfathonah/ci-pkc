<?php $this->load->view('layout/cabang/header') ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>Ubah Profil Cabang</h2>
                </div>
                <form class="form-horizontal" action="<?php echo site_url('cabang/profil_ubah/'.$this->session->userdata('cabang_id')) ?>" method="POST">
                    <div class="form-group">
                        <label for="txt_nama" class="col-sm-2 control-label">Nama Cabang</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="txt_nama" name="txt_nama" value="<?php echo $data_cabang->nama_cabang ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_alamat" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-6">
                            <textarea name="txt_alamat" id="txt_alamat" cols="15" rows="5" class="form-control"><?php echo $data_cabang->alamat_cabang ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_telepon" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="txt_email" name="txt_email" value="<?php echo $data_cabang->email_cabang ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_telepon" class="col-sm-2 control-label">Telepon</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="txt_telepon" name="txt_telepon" value="<?php echo $data_cabang->telepon_cabang ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_berdiri" class="col-sm-2 control-label">Tahun Berdiri</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="txt_berdiri" name="txt_berdiri" value="<?php echo $data_cabang->berdiri_cabang ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_status" class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="txt_status" id="txt_status" required>
                            <?php 
                                if($data_cabang->status_cabang == "Persiapan") {
                            ?>
                                <option value="Persiapan" selected>Persiapan</option>
                                <option value="Definitif">Definitif</option>
                            <?php
                                }
                                elseif($data_cabang->status_cabang == "Definitif"){
                            ?>
                                <option value="Persiapan">Persiapan</option>
                                <option value="Definitif" selected>Definitif</option>
                                
                            <?php
                                }
                                else{
                            ?>
                                <option value="Persiapan">Persiapan</option>
                                <option value="Definitif">Definitif</option>
                                
                            <?php
                                }
                            ?>
                            </select> 
                        </div>
                    </div>
                    <div class="col-md-10 col-md-offset-2">
                        <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan Perubahan</button>
                        <a href="<?php echo site_url('cabang') ?>" class="btn btn-warning"><i class="fa fa-save"></i> Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php $this->load->view('layout/cabang/footer') ?>