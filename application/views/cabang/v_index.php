<?php $this->load->view('layout/header') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">
         <i class="zmdi zmdi-layers"></i>&nbsp;
         Halaman Beranda
      </h1>
      <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
   </div>

   <!-- Content Row -->
   <div class="row">
      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Komisariat</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?= number_format($total_komisariat) ?> Pengurus
                     </div>
                  </div>
                  <div class="col-auto">
                     <i class="zmdi zmdi-hc-3x zmdi-accounts text-primary"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Rayon</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?= number_format($total_rayon) ?> Pengurus
                     </div>
                  </div>
                  <div class="col-auto">
                     <i class="zmdi zmdi-hc-3x zmdi-graduation-cap text-warning"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Anggota</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?= number_format($total_anggota) ?> Orang
                     </div>
                  </div>
                  <div class="col-auto">
                     <i class="zmdi zmdi-hc-3x zmdi-accounts text-success"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total KOPRI</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?= number_format($total_kopri) ?> Orang
                     </div>
                  </div>
                  <div class="col-auto">
                     <i class="zmdi zmdi-hc-3x zmdi-female text-info"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="card shadow border-left-dark">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <h6 class="m-0 font-weight-bold text-dark">
                  Profil Cabang
               </h6>
               <button type="button" onclick="showSettingProfilForm()" class="btn btn-sm btn-dark rounded-pill">
                  Perbarui Profil &nbsp;
                  <i class="zmdi zmdi-arrow-right"></i>
               </button>
            </div>
            <div class="card-body">
               <table class="table table-sm table-borderless">
                  <tr>
                     <td width="150">Nama Cabang</td>
                     <td width="5">:</td>
                     <td> <?= $cabang->nama_cabang ?></td>
                  </tr>
                  <tr>
                     <td width="150">Alamat</td>
                     <td width="5">:</td>
                     <td> <?= $cabang->alamat_cabang ?></td>
                  </tr>
                  <tr>
                     <td width="150">Email</td>
                     <td width="5">:</td>
                     <td> <?= $cabang->email_cabang ?></td>
                  </tr>
                  <tr>
                     <td width="150">No. Telepon</td>
                     <td width="5">:</td>
                     <td> <?= $cabang->telepon_cabang ?></td>
                  </tr>
                  <tr>
                     <td width="150">Tahun Berdiri</td>
                     <td width="5">:</td>
                     <td> <?= $cabang->berdiri_cabang ?></td>
                  </tr>
                  <tr>
                     <td width="150">Status</td>
                     <td width="5">:</td>
                     <td> <?= $cabang->status_cabang ?></td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
   </div>

   <div class="row mt-4">
      <div class="col-xl-6 col-lg-5">
         <div class="card shadow mb-4">
            <div class="card-header bg-primary  py-3 d-flex flex-row align-items-center justify-content-between">
               <h6 class="m-0 font-weight-bold text-white">
                  Jenjang Kaderisasi Formal
               </h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
               <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     Masa Penerimaan Anggota Baru
                     <span class="badge badge-primary badge-pill">
                        <?= $total_mapaba ?>
                     </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     Pelatihan Kader Dasar
                     <span class="badge badge-warning badge-pill">
                        <?= $total_pkd ?>
                     </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     Pelatihan Kader Lanjut
                     <span class="badge badge-success badge-pill">
                        <?= $total_pkl ?>
                     </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     Pelatihan Kader Nasional
                     <span class="badge badge-danger badge-pill">
                        <?= $total_pkn ?>
                     </span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="col-xl-6 col-lg-5">
         <div class="card shadow mb-4">
            <div class="card-header bg-warning  py-3 d-flex flex-row align-items-center justify-content-between">
               <h6 class="m-0 font-weight-bold text-white">
                  Jenjang Kaderisasi KOPRI
               </h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
               <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     KOPRS PMII Putri
                     <span class="badge badge-primary badge-pill">
                        <?= $total_kopri ?>
                     </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     Sekolah Islam Gender
                     <span class="badge badge-warning badge-pill">
                        <?= $total_sig ?>
                     </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     Sekolah Kader KOPRI
                     <span class="badge badge-success badge-pill">
                        <?= $total_skk ?>
                     </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     Sekolah Kader KOPRI Nasional
                     <span class="badge badge-danger badge-pill">
                        <?= $total_skkn ?>
                     </span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- /.container-fluid -->

<!-- modal pengaturan profil cabang -->
<?php $this->load->view('cabang/_index_profil') ?>

<?php $this->load->view('layout/footer') ?>
<script>
   function showSettingProfilForm() {
      $('#modal-profil').modal('show');
      $('#modal-profil form')[0].reset();
      $('#btn-submit').html(`<i class="zmdi zmdi-save"></i>&nbsp;Simpan Pembaruan`);
   }

   $(document).ready(function() {
      $('#modal-profil').on('submit', function(e) {
         if (!e.isDefaultPrevented()) {
            var idCabang = <?= $this->session->userdata('cabang_id') ?>;

            $.ajax({
               url: "<?= site_url('cabang/beranda/profil_ubah/') ?>" + idCabang,
               type: "POST",
               data: $('#modal-profil form').serialize(),
               beforeSend: function() {
                  $('#btn-submit').html(`<i class="zmdi zmdi-refresh"></i>&nbsp;Mohon Tunggu..`);
               },
               success: function(data) {
                  $('#modal-profil').modal('hide');
                  window.location.href = "<?= site_url('cabang/beranda') ?>";
               },
               error: function() {
                  alert('error modal-profil submit');
               }
            });

            return false;
         }
      });
   });
</script>
</body>

</html>