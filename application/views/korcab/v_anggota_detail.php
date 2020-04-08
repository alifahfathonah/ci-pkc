<?php $this->load->view('layout/header') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">
         <i class="zmdi zmdi-accounts"></i>&nbsp;
         Detail Data Anggota
      </h1>
      <a href="#" onclick="cetakKartu()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
         <i class="zmdi zmdi-card"></i>&nbsp;Cetak Kartu Anggota
      </a>
   </div>

   <!-- Content Row -->
   <div class="row">
      <div class="col-md-12">
         <div class="card shadow border-left-primary">
            <div class="card-body">
               <div class="row">
                  <div class="col-4">
                     <img src="<?= optimage(base_url('asset/gambar/anggota/' . $anggota->foto_anggota)) ?>" alt="" class="img-fluid">
                  </div>
                  <div class="col-8">
                     <table class="table table-sm table-borderless">
                        <tr>
                           <td width="180">Nama lengkap</td>
                           <td width="5">:</td>
                           <td> <?= $anggota->nama_anggota ?></td>
                        </tr>
                        <tr>
                           <td width="180">Tempat, Tanggal Lahir</td>
                           <td width="5">:</td>
                           <td> <?= $anggota->tempat_anggota . ', ' . tanggal($anggota->tgl_anggota) ?></td>
                        </tr>
                        <tr>
                           <td width="180">Jenis Kelamin</td>
                           <td width="5">:</td>
                           <td>
                              <?php
                              if ($anggota->jk_anggota == "L") {
                                 echo "Laki-laki";
                              } else {
                                 echo "Perempuan";
                              }
                              ?>
                           </td>
                        </tr>
                        <tr>
                           <td width="180">Email</td>
                           <td width="5">:</td>
                           <td> <?= $anggota->email_anggota ?></td>
                        </tr>
                        <tr>
                           <td width="180">No. Telepon</td>
                           <td width="5">:</td>
                           <td> <?= $anggota->telepon_anggota ?></td>
                        </tr>
                        <tr>
                           <td width="180">Alamat</td>
                           <td width="5">:</td>
                           <td> <?= $anggota->alamat_anggota ?></td>
                        </tr>
                        <tr>
                           <td width="180">Tahun MAPABA</td>
                           <td width="5">:</td>
                           <td> <?= $anggota->angkatan_mapaba ?></td>
                        </tr>
                        <tr>
                           <td width="180">Kaderisasi Formal</td>
                           <td width="5">:</td>
                           <td> <?= $anggota->kaderisasi_anggota ?></td>
                        </tr>
                        <tr>
                           <td width="180">Kaderisasi KOPRI</td>
                           <td width="5">:</td>
                           <td> <?= $anggota->kaderisasi_kopri ?></td>
                        </tr>
                        <tr>
                           <td width="180">Cabang</td>
                           <td width="5">:</td>
                           <td> <?= $anggota->nama_cabang ?></td>
                        </tr>
                        <tr>
                           <td width="180">Komisariat</td>
                           <td width="5">:</td>
                           <td> <?= $anggota->nama_komisariat ?></td>
                        </tr>
                        <tr>
                           <td width="180">Rayon</td>
                           <td width="5">:</td>
                           <td> <?= $anggota->nama_rayon ?></td>
                        </tr>
                        <tr>
                           <td width="180">Status</td>
                           <td width="5">:</td>
                           <td> <?= $anggota->status_anggota ?></td>
                        </tr>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- /.container-fluid -->

<?php $this->load->view('layout/footer') ?>
<script>
   function cetakKartu() {
      Swal.fire({
         icon: 'info',
         title: 'Minta Maaf',
         text: 'Untuk fitur cetak kartu masih dalam pengembangan'
      })
   }
</script>
</body>

</html>