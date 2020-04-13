<?php $this->load->view('layout/header') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">
         <i class="zmdi zmdi-accounts"></i>&nbsp;
         Tambah Data Anggota
      </h1>
   </div>

   <!-- Content Row -->
   <div class="row">
      <div class="col-md-12">
         <div class="card shadow border-left-primary mb-4">
            <div class="card-body">
               <form class="form-horizontal" action="<?= site_url('cabang/anggota/create') ?>" method="POST" enctype="multipart/form-data">
                  <div class="row">
                     <div class="col-6">
                        <div class="form-group row">
                           <label for="txt_nama" class="col-sm-2 col-form-label text-primary">Nama</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control" name="txt_nama" id="txt_nama">
                              <?= form_error('txt_nama', '<small class="text-danger">', '</small>') ?>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_tempat" class="col-sm-2 col-form-label text-primary">Tempat</label>
                           <div class="col-sm-7">
                              <input type="text" class="form-control" name="txt_tempat" id="txt_tempat">
                              <?= form_error('txt_tempat', '<small class="text-danger">', '</small>') ?>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_tgl" class="col-sm-2 col-form-label text-primary">Tgl Lahir</label>
                           <div class="col-sm-5">
                              <input type="date" class="form-control" name="txt_tgl" id="txt_tgl">
                              <?= form_error('txt_tgl', '<small class="text-danger">', '</small>') ?>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_jk" class="col-sm-2 col-form-label text-primary">Kelamin</label>
                           <div class="col-sm-6">
                              <select class="form-control" name="txt_jk" id="txt_jk">
                                 <option value="L">Laki-Laki</option>
                                 <option value="P">Perempuan</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_alamat" class="col-sm-2 col-form-label text-primary">Alamat</label>
                           <div class="col-sm-10">
                              <textarea name="txt_alamat" id="txt_alamat" cols="15" rows="2" class="form-control"></textarea>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_telepon" class="col-sm-2 col-form-label text-primary">Telepon</label>
                           <div class="col-sm-7">
                              <input type="number" class="form-control" name="txt_telepon" id="txt_telepon">
                              <?= form_error('txt_telepon', '<small class="text-danger">', '</small>') ?>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_email" class="col-sm-2 col-form-label text-primary">Email</label>
                           <div class="col-sm-9">
                              <input type="text" class="form-control" name="txt_email" id="txt_email">
                              <?= form_error('txt_email', '<small class="text-danger">', '</small>') ?>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_kampus" class="col-sm-2 col-form-label text-primary">Kampus</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control" name="txt_kampus" id="txt_kampus">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_prodi" class="col-sm-2 col-form-label text-primary">Prodi</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control" name="txt_prodi" id="txt_prodi">
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
                                    <option value="<?= $komisariat->id_komisariat ?>"><?= $komisariat->nama_komisariat ?></option>
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
                                    <option value="<?php echo $rayon->id_rayon ?>"><?php echo $rayon->nama_rayon ?></option>
                                 <?php endforeach; ?>
                              </select>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_kaderisasi" class="col-sm-3 col-form-label text-primary">Kaderisasi</label>
                           <div class="col-sm-4">
                              <select class="form-control" name="txt_kaderisasi" id="txt_kaderisasi">
                                 <option value="MAPABA">MAPABA</option>
                                 <option value="PKD">PKD</option>
                                 <option value="PKL">PKL</option>
                                 <option value="PKN">PKN</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_korpri" class="col-sm-3 col-form-label text-primary">K. KOPRI</label>
                           <div class="col-sm-4">
                              <select class="form-control" name="txt_korpri" id="txt_korpri">
                                 <option value="TIDAK ADA">TIDAK ADA</option>
                                 <option value="SIG">SIG</option>
                                 <option value="SKK">SKK</option>
                                 <option value="SKKN">SKKN</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_status" class="col-sm-3 col-form-label text-primary">Status</label>
                           <div class="col-sm-4">
                              <select class="form-control" name="txt_status" id="txt_status">
                                 <option value="Aktif">Aktif</option>
                                 <option value="Tidak Aktif">Tidak Aktif</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="txt_status" class="col-sm-3 col-form-label text-primary">Foto</label>
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