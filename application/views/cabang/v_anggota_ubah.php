<?php $this->load->view('layout/header') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">
         <i class="zmdi zmdi-accounts"></i>&nbsp;
         Ubah Data Anggota
      </h1>
   </div>

   <!-- Content Row -->
   <div class="row">
      <div class="col-md-12">
         <div class="card shadow border-left-primary mb-4">
            <div class="card-body">
               <form class="form-horizontal" action="<?= site_url('cabang/anggota/update/' . $anggota->id_anggota) ?>" method="POST" enctype="multipart/form-data">
                  <div class="row">
                     <div class="col-6">
                        <div class="form-group row">
                           <label for="txt_nama" class="col-sm-2 col-form-label text-primary">Nama</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control" name="txt_nama" id="txt_nama" value="<?= $anggota->nama_anggota ?>">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_tempat" class="col-sm-2 col-form-label text-primary">Tempat</label>
                           <div class="col-sm-7">
                              <input type="text" class="form-control" name="txt_tempat" id="txt_tempat" value="<?= $anggota->tempat_anggota ?>">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_tgl" class="col-sm-2 col-form-label text-primary">Tgl Lahir</label>
                           <div class="col-sm-5">
                              <input type="date" class="form-control" name="txt_tgl" id="txt_tgl" value="<?= $anggota->tgl_anggota ?>">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_jk" class="col-sm-2 col-form-label text-primary">Kelamin</label>
                           <div class="col-sm-6">
                              <select class="form-control" name="txt_jk" id="txt_jk">
                                 <option value="L" <?php if ($anggota->jk_anggota == "L") echo 'selected' ?>>Laki-Laki</option>
                                 <option value="P" <?php if ($anggota->jk_anggota == "P") echo 'selected' ?>>Perempuan</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_alamat" class="col-sm-2 col-form-label text-primary">Alamat</label>
                           <div class="col-sm-10">
                              <textarea name="txt_alamat" id="txt_alamat" cols="15" rows="2" class="form-control"><?= $anggota->alamat_anggota ?></textarea>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_telepon" class="col-sm-2 col-form-label text-primary">Telepon</label>
                           <div class="col-sm-7">
                              <input type="number" class="form-control" name="txt_telepon" id="txt_telepon" value="<?= $anggota->telepon_anggota ?>">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_email" class="col-sm-2 col-form-label text-primary">Email</label>
                           <div class="col-sm-9">
                              <input type="text" class="form-control" name="txt_email" id="txt_email" value="<?= $anggota->email_anggota ?>">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_kampus" class="col-sm-2 col-form-label text-primary">Kampus</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control" name="txt_kampus" id="txt_kampus" value="<?= $anggota->kampus_anggota ?>">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_prodi" class="col-sm-2 col-form-label text-primary">Prodi</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control" name="txt_prodi" id="txt_prodi" value="<?= $anggota->prodi_anggota ?>">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_mapaba" class="col-sm-2 col-form-label text-primary">Mapaba</label>
                           <div class="col-sm-3">
                              <select class="form-control" name="txt_mapaba" id="txt_mapaba">
                                 <?php
                                 for ($i = 2012; $i <= date('Y'); $i++) {
                                    echo '<option value="' . $i . '">' . $i . '</option>';
                                 }
                                 ?>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="form-group row">
                           <label for="txt_komisariat" class="col-sm-3 col-form-label text-primary">Komisariat</label>
                           <div class="col-sm-9">
                              <select class="form-control" name="txt_komisariat" id="txt_komisariat">
                                 <option value="1">Belum Ada Komisariat</option>
                                 <?php foreach ($komisariats as $komisariat) : ?>
                                    <option <?php if ($komisariat->id_komisariat == $anggota->komisariat_id) echo "selected" ?> value="<?php echo $komisariat->id_komisariat ?>"><?php echo $komisariat->nama_komisariat ?></option>
                                 <?php endforeach; ?>
                              </select>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_rayon" class="col-sm-3 col-form-label text-primary">Rayon</label>
                           <div class="col-sm-9">
                              <select class="form-control" name="txt_rayon" id="txt_rayon">
                                 <option value="1">Belum Ada Rayon</option>
                                 <?php foreach ($rayons as $rayon) : ?>
                                    <option <?php if ($rayon->id_rayon == $anggota->rayon_id) echo "selected" ?> value="<?php echo $rayon->id_rayon ?>"><?php echo $rayon->nama_rayon ?></option>
                                 <?php endforeach; ?>
                              </select>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_kaderisasi" class="col-sm-3 col-form-label text-primary">Kaderisasi</label>
                           <div class="col-sm-4">
                              <select class="form-control" name="txt_kaderisasi" id="txt_kaderisasi">
                                 <option value="MAPABA" <?php if ($anggota->kaderisasi_anggota == "MAPABA") echo 'selected' ?>>MAPABA</option>
                                 <option value="PKD" <?php if ($anggota->kaderisasi_anggota == "PKD") echo 'selected' ?>>PKD</option>
                                 <option value="PKL" <?php if ($anggota->kaderisasi_anggota == "PKL") echo 'selected' ?>>PKL</option>
                                 <option value="PKN" <?php if ($anggota->kaderisasi_anggota == "PKN") echo 'selected' ?>>PKN</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_korpri" class="col-sm-3 col-form-label text-primary">K. KOPRI</label>
                           <div class="col-sm-4">
                              <select class="form-control" name="txt_korpri" id="txt_korpri">
                                 <option value="TIDAK ADA" <?php if ($anggota->kaderisasi_kopri == "TIDAK ADA") echo 'selected' ?>>TIDAK ADA</option>
                                 <option value="SIG" <?php if ($anggota->kaderisasi_kopri == "SIG") echo 'selected' ?>>SIG</option>
                                 <option value="SKK" <?php if ($anggota->kaderisasi_kopri == "SKK") echo 'selected' ?>>SKK</option>
                                 <option value="SKKN" <?php if ($anggota->kaderisasi_kopri == "SKKN") echo 'selected' ?>>SKKN</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_status" class="col-sm-3 col-form-label text-primary">Status</label>
                           <div class="col-sm-4">
                              <select class="form-control" name="txt_status" id="txt_status">
                                 <option value="Aktif" <?php if ($anggota->status_anggota == "Aktif") echo 'selected' ?>>Aktif</option>
                                 <option value="Tidak Aktif" <?php if ($anggota->status_anggota == "Tidak Aktif") echo 'selected' ?>>Tidak Aktif</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_status" class="col-sm-3 col-form-label text-primary">Foto</label>
                           <div class="col-sm-9">
                              <?php if ($anggota->foto_anggota == '') { ?>
                                 <img width="170" height="170" src="<?= base_url('asset/user-null.png') ?>"><br>
                              <?php } else { ?>
                                 <img width="170" height="170" src="<?= base_url('asset/gambar/anggota/' . $anggota->foto_anggota) ?>"><br>
                              <?php } ?>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_status" class="col-sm-3 col-form-label text-primary">Ganti Foto</label>
                           <div class="col-sm-9">
                              <div class="input-group mb-3">
                                 <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="img_anggota" id="img_anggota">
                                    <label class="custom-file-label" for="img_anggota">Pilih Foto</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-group row">
                           <div class="col offset-3">
                              <button type="submit" class="btn btn-primary">
                                 <i class="zmdi zmdi-save"></i> Simpan Perubahan
                              </button>
                              <button type="reset" class="btn btn-warning">
                                 <i class="zmdi zmdi-refresh"></i> Reset
                              </button>
                              <a href="<?= site_url('cabang/anggota') ?>" class="btn btn-dark">
                                 <i class="zmdi zmdi-close"></i> Batal
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- /.container-fluid -->

<?php $this->load->view('layout/footer') ?>
<script>
   $(document).ready(function() {
      $(".custom-file-input").on("change", function() {
         var fileName = $(this).val().split("\\").pop();
         $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });
   });
</script>
</body>

</html>