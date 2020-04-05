<?php $this->load->view('layout/cabang/header') ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>
                        Ubah Data Anggota
                    </h2>
                </div>
            </div>
        </div>
        <form class="form-horizontal" action="<?php echo site_url('anggota/update/'.$anggota->id_anggota) ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="txt_nama" class="col-md-3 control-label">Nama Anggota</label>
                    <div class="col-md-9">
                        <input type="text" name="txt_nama" id="txt_nama" class="form-control" value="<?php echo $anggota->nama_anggota ?>"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_tempat" class="col-md-3 control-label">Tempat Lahir</label>
                    <div class="col-md-5">
                        <input type="text" name="txt_tempat" id="txt_tempat" class="form-control" value="<?php echo $anggota->tempat_anggota ?>"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_tgl" class="col-md-3 control-label">Tanggal Lahir</label>
                    <div class="col-md-5">
                        <input type="date" class="form-control" name="txt_tgl" id="txt_tgl" value="<?php echo $anggota->tgl_anggota ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_alamat" class="col-md-3 control-label">Alamat</label>
                    <div class="col-md-9">
                        <textarea name="txt_alamat" id="txt_alamat" cols="15" rows="2" class="form-control"><?php echo $anggota->alamat_anggota ?></textarea> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_jk" class="col-md-3 control-label">Jenis Kelamin</label>
                    <div class="col-md-4">
                        <select class="form-control" name="txt_jk" id="txt_jk" required>
                            <?php
                                if ($anggota->jk_anggota == "L") {
                            ?>
                                <option value="L" selected>Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            <?php
                                }
                                elseif($anggota->jk_anggota == "P") {
                            ?>
                                <option value="L">Laki-Laki</option>
                                <option value="P" selected>Perempuan</option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_kampus" class="col-md-3 control-label">Kampus</label>
                    <div class="col-md-9">
                        <input type="text" name="txt_kampus" id="txt_kampus" class="form-control" value="<?php echo $anggota->kampus_anggota ?>"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_prodi" class="col-md-3 control-label">Jurusan/Prodi</label>
                    <div class="col-md-9">
                        <input type="text" name="txt_prodi" id="txt_prodi" class="form-control" value="<?php echo $anggota->prodi_anggota ?>"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_email" class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input type="email" name="txt_email" id="txt_email" class="form-control" value="<?php echo $anggota->email_anggota ?>"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_telepon" class="col-md-3 control-label">Telepon</label>
                    <div class="col-md-6">
                        <input type="text" name="txt_telepon" id="txt_telepon" class="form-control" value="<?php echo $anggota->telepon_anggota ?>"> 
                    </div>
                </div>
            </div>      
            <div class="col-lg-6">  
                <div class="form-group">
                    <label for="txt_komisariat" class="col-md-3 control-label">Komisariat</label>
                    <div class="col-md-9">
                        <select class="form-control" name="txt_komisariat" id="txt_komisariat">
                            <option value="1">Belum Ada Komisariat</option>
                            <?php foreach($data_komisariat as $komisariat): ?>
                            <option <?php if($komisariat->id_komisariat == $anggota->komisariat_id) echo "selected" ?> value="<?php echo $komisariat->id_komisariat ?>"><?php echo $komisariat->nama_komisariat ?></option>
                            <?php endforeach; ?>
                        </select>  
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_rayon" class="col-md-3 control-label">Rayon</label>
                    <div class="col-md-9">
                        <select class="form-control" name="txt_rayon" id="txt_rayon">
                            <option value="1">Belum Ada Rayon</option>
                            <?php foreach($data_rayon as $rayon): ?>
                            <option <?php if($rayon->id_rayon == $anggota->rayon_id) echo "selected" ?> value="<?php echo $rayon->id_rayon ?>"><?php echo $rayon->nama_rayon ?></option>
                            <?php endforeach; ?>
                        </select>  
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="txt_mapaba" class="col-md-3 control-label">Tahun MAPABA</label>
                    <div class="col-md-3">
                        <select class="form-control" name="txt_mapaba" id="txt_mapaba">
                            <?php
                                for ($i=1980; $i <= date('Y'); $i++) {
                                    if ($i == $anggota->angkatan_mapaba) {
                            ?>
                                    <option value="<?php echo $anggota->angkatan_mapaba ?>" selected><?php echo $anggota->angkatan_mapaba ?></option>
                            <?php
                                    }
                                    else {
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                }
                                
                            ?>
                        </select> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_kaderisasi" class="col-md-3 control-label">Kaderisasi</label>
                    <div class="col-md-4">
                        <select class="form-control" name="txt_kaderisasi" id="txt_kaderisasi">
                            <?php
                                if ($anggota->kaderisasi_anggota == "MAPABA") {
                            ?>
                                <option value="MAPABA" selected>MAPABA</option>
                                <option value="PKD">PKD</option>
                                <option value="PKL">PKL</option>
                                <option value="PKN">PKN</option>
                            <?php
                                }
                                elseif($anggota->kaderisasi_anggota == "PKD") {
                            ?>
                                <option value="MAPABA">MAPABA</option>
                                <option value="PKD" selected>PKD</option>
                                <option value="PKL">PKL</option>
                                <option value="PKN">PKN</option>
                            <?php
                                }
                                elseif($anggota->kaderisasi_anggota == "PKL") {
                            ?>
                                <option value="MAPABA">MAPABA</option>
                                <option value="PKD">PKD</option>
                                <option value="PKL" selected>PKL</option>
                                <option value="PKN">PKN</option>
                            <?php
                                }
                                elseif($anggota->kaderisasi_anggota == "PKN") {
                            ?>
                                <option value="MAPABA">MAPABA</option>
                                <option value="PKD">PKD</option>
                                <option value="PKL">PKL</option>
                                <option value="PKN" selected>PKN</option>
                            <?php
                                }
                            ?>
                        </select> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_korpri" class="col-md-3 control-label">Kaderisasi Korpri</label>
                    <div class="col-md-4">
                        <select class="form-control" name="txt_korpri" id="txt_korpri">
                            <?php
                                if ($anggota->kaderisasi_kopri == "TIDAK ADA") {
                            ?>
                                <option value="TIDAK ADA" selected>TIDAK ADA</option>
                                <option value="SIG">SIG</option>
                                <option value="SKK">SKK</option>
                                <option value="SKKN">SKKN</option>
                            <?php
                                }
                                elseif($anggota->kaderisasi_kopri == "SIG") {
                            ?>
                                <option value="TIDAK ADA">TIDAK ADA</option>
                                <option value="SIG" selected>SIG</option>
                                <option value="SKK">SKK</option>
                                <option value="SKKN">SKKN</option>
                            <?php
                                }
                                elseif($anggota->kaderisasi_kopri == "SKK") {
                            ?>
                                <option value="TIDAK ADA">TIDAK ADA</option>
                                <option value="SIG">SIG</option>
                                <option value="SKK" selected>SKK</option>
                                <option value="SKKN">SKKN</option>
                            <?php
                                }
                                elseif($anggota->kaderisasi_kopri == "SKKN") {
                            ?>
                                <option value="TIDAK ADA">TIDAK ADA</option>
                                <option value="SIG">SIG</option>
                                <option value="SKK">SKK</option>
                                <option value="SKKN" selected>SKKN</option>
                            <?php
                                }
                            ?>
                            
                        </select> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_status" class="col-md-3 control-label">Status</label>
                    <div class="col-md-4">
                        <select class="form-control" name="txt_status" id="txt_status" >
                            <?php
                                if ($anggota->status_anggota == "Aktif") {
                            ?>
                                <option value="Aktif" selected >Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                            <?php
                                }
                                elseif($anggota->status_anggota == "Tidak Aktif") {
                            ?>
                                <option value="Aktif" >Aktif</option>
                                <option value="Tidak Aktif" selected>Tidak Aktif</option>
                            <?php
                                }
                            ?>
                        </select> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="img_anggota" class="col-md-3 control-label">Foto Anggota</label>
                    <div class="col-md-9">
                        <input type="file" name="img_anggota" id="img_anggota" class="form-control"> 
                        <br>
                        <?php if($anggota->foto_anggota == '') { ?>
                            <img width="200" height="180" src="<?php echo base_url('asset/gambar/anggota/pmii.jpg') ?>"><br>
                        <?php } else { ?>
                            <img width="200" height="180" src="<?php echo base_url('asset/gambar/anggota/'.$anggota->foto_anggota) ?>"><br>
                        <?php } ?>
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