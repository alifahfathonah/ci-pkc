<?php $this->load->view('layout/header') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">
         <i class="zmdi zmdi-accounts"></i>&nbsp;
         Import Data Anggota
      </h1>
   </div>

   <!-- Content Row -->
   <div class="row">
      <div class="col-8">
         <div class="card shadow border-left-primary">
            <div class="card-body">
               <form class="form-horizontal" action="<?= site_url('cabang/anggota/import_proses') ?>" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                     <label class="text-primary" for="txt_nama">File Excel :</label>
                     <div class="input-group mb-3">
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" name="file_import" id="file_import">
                           <label class="custom-file-label" for="file_import">Pilih file excel</label>
                           <?= form_error('file_import', '<small class="text-danger">', '</small>') ?>
                        </div>
                     </div>
                  </div>
                  <button type="submit" class="btn btn-primary">
                     <i class="zmdi zmdi-save"></i> Simpan Perubahan
                  </button>
                  <a href="<?= site_url('cabang/anggota') ?>" class="btn btn-dark">
                     <i class="zmdi zmdi-close"></i> Batal
                  </a>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="row mt-3">
      <div class="col-4">
         <div class="card border-left-success shadow">
            <div class="card-body">
               <h5>ID Cabang <?= $cabang->nama_cabang . ' : ' . $cabang->id_cabang ?></h5>
               <hr>
               <div class="text-center">
                  <a href="<?= base_url('asset/example_import_excel.xlsx') ?>" class="btn btn-block btn-success text-center">
                     <i class="zmdi zmdi-download"></i>&nbsp; Contoh File Excel Download
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="col-4">
         <div class="card border-left-warning shadow">
            <div class="card-body">
               <table class="table table-sm table-bordered">
                  <thead class="bg-warning text-white">
                     <tr class="text-center">
                        <th>ID</th>
                        <th>Nama Komisariat</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($komisariats as $komisariat) : ?>
                        <tr>
                           <td class="text-center"><?= $komisariat->id_komisariat ?></td>
                           <td><?= $komisariat->nama_komisariat ?></td>
                        </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <div class="col-4">
         <div class="card border-left-info shadow">
            <div class="card-body">
               <table class="table table-sm table-bordered">
                  <thead class="bg-info text-white">
                     <tr class="text-center">
                        <th>ID</th>
                        <th>Nama Rayon</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($rayons as $rayon) : ?>
                        <tr>
                           <td class="text-center"><?= $rayon->id_rayon ?></td>
                           <td><?= $rayon->nama_rayon ?></td>
                        </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
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