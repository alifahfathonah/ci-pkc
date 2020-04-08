<?php $this->load->view('layout/header') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">
         <i class="zmdi zmdi-account"></i>&nbsp;
         Halaman Profil
      </h1>
   </div>

   <!-- alert -->
   <div class="row">
      <div class="col-md-8">
         <?= $this->session->flashdata('alert_profil') ?>
      </div>
   </div>

   <!-- Content Row -->
   <div class="row">
      <div class="col-md-8">
         <div class="card shadow">
            <div class="card-body">
               <form method="POST" action="<?= site_url('atur-profil/' . $user->id_user) ?>">
                  <div class="form-group">
                     <label for="name_user">Nama Lengkap</label>
                     <input type="text" class="form-control" name="name_user" value="<?= $user->name_user ?>">
                     <?= form_error('name_user', '<small class="text-danger pl-2">', '</small>') ?>
                  </div>
                  <div class="form-group">
                     <label for="email_user">Email</label>
                     <input type="text" class="form-control" name="email_user" value="<?= $user->email_user ?> ">
                     <?= form_error('email_user', '<small class="text-danger pl-2">', '</small>') ?>
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