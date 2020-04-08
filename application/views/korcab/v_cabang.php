<?php $this->load->view('layout/header') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">
         <i class="zmdi zmdi-city"></i>&nbsp;
         Pengurus Cabang <?= $profil_cabang->nama_cabang ?>
      </h1>
   </div>

   <!-- Content Row -->
   <div class="row">
      <div class="col-md-12">
         <div class="card shadow border-left-dark">
            <div class="card-body">
               <table class="table table-sm table-borderless">
                  <tr>
                     <td width="150">Nama Cabang</td>
                     <td width="5">:</td>
                     <td> <?= $profil_cabang->nama_cabang ?></td>
                  </tr>
                  <tr>
                     <td width="150">Alamat</td>
                     <td width="5">:</td>
                     <td> <?= $profil_cabang->alamat_cabang ?></td>
                  </tr>
                  <tr>
                     <td width="150">Email</td>
                     <td width="5">:</td>
                     <td> <?= $profil_cabang->email_cabang ?></td>
                  </tr>
                  <tr>
                     <td width="150">No. Telepon</td>
                     <td width="5">:</td>
                     <td> <?= $profil_cabang->telepon_cabang ?></td>
                  </tr>
                  <tr>
                     <td width="150">Tahun Berdiri</td>
                     <td width="5">:</td>
                     <td> <?= $profil_cabang->berdiri_cabang ?></td>
                  </tr>
                  <tr>
                     <td width="150">Status</td>
                     <td width="5">:</td>
                     <td> <?= $profil_cabang->status_cabang ?></td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
   </div>

   <div class="row mt-4">
      <div class="col-md-4">
         <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-primary text-white">
               <h6 class="m-0 font-weight-bold">
                  Data Kepengurusan & Alumni
               </h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
               <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     Pengurus Komisariat
                     <span class="badge badge-primary badge-pill">
                        <?= $total_komisariat ?>
                     </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     Pengurus Rayon
                     <span class="badge badge-primary badge-pill">
                        <?= $total_rayon ?>
                     </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     Total Anggota
                     <span class="badge badge-primary badge-pill">
                        <?= number_format($total_anggota) ?>
                     </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     Total Alumni
                     <span class="badge badge-primary badge-pill">
                        <?= number_format($total_alumni) ?>
                     </span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-warning text-white">
               <h6 class="m-0 font-weight-bold">
                  Jenjang Kaderisasi Formal
               </h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
               <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     MAPABA
                     <span class="badge badge-warning badge-pill">
                        <?= $total_mapaba ?>
                     </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     PKD
                     <span class="badge badge-warning badge-pill">
                        <?= $total_pkd ?>
                     </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     PKL
                     <span class="badge badge-warning badge-pill">
                        <?= $total_pkl ?>
                     </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     PKN
                     <span class="badge badge-warning badge-pill">
                        <?= $total_pkn ?>
                     </span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-success text-white">
               <h6 class="m-0 font-weight-bold">
                  Jenjang Kaderisasi KOPRI
               </h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
               <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     KOPRI
                     <span class="badge badge-success badge-pill">
                        <?= $total_kopri ?>
                     </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     SIG
                     <span class="badge badge-success badge-pill">
                        <?= $total_sig ?>
                     </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     SKK
                     <span class="badge badge-success badge-pill">
                        <?= $total_skk ?>
                     </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     SKKN
                     <span class="badge badge-success badge-pill">
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
<?php $this->load->view('layout/footer') ?>
</body>

</html>