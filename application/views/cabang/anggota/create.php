<?php $this->load->view('layout/cabang/header') ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>
                        Tambahkan Anggota
                    </h2>
                </div>
            </div>
        </div>
        <form class="form-horizontal" action="<?php echo site_url('anggota/insert') ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="txt_nama" class="col-md-3 control-label">Nama Anggota</label>
                    <div class="col-md-9">
                        <input type="text" name="txt_nama" id="txt_nama" class="form-control" required> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_tempat" class="col-md-3 control-label">Tempat Lahir</label>
                    <div class="col-md-5">
                        <input type="text" name="txt_tempat" id="txt_tempat" class="form-control" required> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_tgl" class="col-md-3 control-label">Tanggal Lahir</label>
                    <div class="col-md-5">
                        <input type="date" class="form-control" name="txt_tgl" id="txt_tgl" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_alamat" class="col-md-3 control-label">Alamat</label>
                    <div class="col-md-9">
                        <textarea name="txt_alamat" id="txt_alamat" cols="15" rows="2" class="form-control" required></textarea> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_jk" class="col-md-3 control-label">Jenis Kelamin</label>
                    <div class="col-md-4">
                        <select class="form-control" name="txt_jk" id="txt_jk" required>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_kampus" class="col-md-3 control-label">Kampus</label>
                    <div class="col-md-9">
                        <input type="text" name="txt_kampus" id="txt_kampus" class="form-control"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_prodi" class="col-md-3 control-label">Jurusan/Prodi</label>
                    <div class="col-md-9">
                        <input type="text" name="txt_prodi" id="txt_prodi" class="form-control" required> 
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
                    <div class="col-md-6">
                        <input type="text" name="txt_telepon" id="txt_telepon" class="form-control" required> 
                    </div>
                </div>
            </div>     
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="txt_komisariat" class="col-md-3 control-label">Komisariat</label>
                    <div class="col-md-8">
                        <select class="form-control" name="txt_komisariat" id="txt_komisariat" required>
                            <option value="1">Belum Ada Komisariat</option>
                            <?php foreach($data_komisariat as $komisariat): ?>
                            <option value="<?php echo $komisariat->id_komisariat ?>"><?php echo $komisariat->nama_komisariat ?></option>
                            <?php endforeach; ?>
                        </select>  
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_rayon" class="col-md-3 control-label">Rayon</label>
                    <div class="col-md-8">
                        <select class="form-control" name="txt_rayon" id="txt_rayon" required>
                            <option value="1">Belum Ada Rayon</option>
                            <?php foreach($data_rayon as $rayon): ?>
                            <option value="<?php echo $rayon->id_rayon ?>"><?php echo $rayon->nama_rayon ?></option>
                            <?php endforeach; ?>
                        </select>  
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_mapaba" class="col-md-3 control-label">Tahun MAPABA</label>
                    <div class="col-md-3">
                        <select class="form-control" name="txt_mapaba" id="txt_mapaba" required>
                            <?php
                                for ($i=2012; $i <= date('Y'); $i++) {
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                }
                            ?>
                        </select> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_kaderisasi" class="col-md-3 control-label">Kaderisasi Formal</label>
                    <div class="col-md-3">
                        <select class="form-control" name="txt_kaderisasi" id="txt_kaderisasi" required>
                            <option value="MAPABA">MAPABA</option>
                            <option value="PKD">PKD</option>
                            <option value="PKL">PKL</option>
                            <option value="PKN">PKN</option>
                        </select> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_korpri" class="col-md-3 control-label">Kaderisasi Korpri</label>
                    <div class="col-md-4">
                        <select class="form-control" name="txt_korpri" id="txt_korpri" required>
                            <option value="TIDAK ADA">TIDAK ADA</option>
                            <option value="SIG">SIG</option>
                            <option value="SKK">SKK</option>
                            <option value="SKKN">SKKN</option>
                        </select> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_status" class="col-md-3 control-label">Status</label>
                    <div class="col-md-4">
                        <select class="form-control" name="txt_status" id="txt_status" required>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="img_anggota" class="col-md-3 control-label">Foto Anggota</label>
                    <div class="col-md-9">
                        <input type="file" name="img_anggota" id="img_anggota" class="form-control"> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan Perubahan</button>
                        <a href="<?php echo site_url('anggota') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Batal</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

    <?php $this->load->view('layout/cabang/footer') ?>
    
</body>
</html>