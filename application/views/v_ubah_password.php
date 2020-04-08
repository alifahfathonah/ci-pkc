<?php $this->load->view('layout/header') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">
         <i class="zmdi zmdi-key"></i>&nbsp;
         Halaman Ubah Password
      </h1>
   </div>

   <!-- alert -->
   <div class="row">
      <div class="col-md-6">
         <?= $this->session->flashdata('alert_password') ?>
      </div>
   </div>

   <!-- Content Row -->
   <div class="row">
      <div class="col-md-6">
         <div class="card shadow">
            <div class="card-body">
               <form method="POST" action="<?= site_url('ubah-password/' . $this->session->userdata('id_user')) ?>">
                  <div class="form-group">
                     <label for="pass1">Password baru</label>
                     <input type="password" class="form-control" name="pass1" placeholder="min. 6 karakter">
                     <?= form_error('pass1', '<small class="text-danger pl-2">', '</small>') ?>
                  </div>
                  <div class="form-group">
                     <label for="pass2">Ulangi password</label>
                     <input type="password" class="form-control" name="pass2" placeholder="ulangi password baru">
                     <?= form_error('pass2', '<small class="text-danger pl-2">', '</small>') ?>
                  </div>
                  <button type="submit" class="btn btn-primary">
                     <i class="zmdi zmdi-save"></i>&nbsp;Simpan Perubahan
                  </button>
                  <button type="reset" class="btn btn-dark">
                     <i class="zmdi zmdi-refresh"></i>&nbsp;Reset Form
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- /.container-fluid -->
<?php $this->load->view('layout/footer') ?>
</body>

</html>