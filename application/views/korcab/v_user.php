<?php $this->load->view('layout/header') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">
         <i class="zmdi zmdi-account-box"></i>&nbsp;
         Data Pengguna
      </h1>
      <button onclick="addForm()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
         <i class="zmdi zmdi-plus"></i>&nbsp;
         Tambah Pengguna
      </button>
   </div>

   <!-- Content Row -->
   <div class="row">
      <div class="col-md-12">
         <div class="card shadow border-left-primary">
            <div class="card-body">
               <table class="table table-sm table-bordered table-hover">
                  <thead class="bg-dark text-white">
                     <tr>
                        <th class="header text-center" width="30">No</th>
                        <th class="header" width="400">Nama Pengguna</th>
                        <th class="header text-center">Nama Cabang</th>
                        <th class="header text-center" width="150">Level user</th>
                        <th class="header text-center" width="50">Aksi</th>
                     </tr>
                  </thead>
                  <tbody></tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- modal form -->
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <form>
            <div class="modal-header">
               <h5 class="modal-title">
                  <i class="zmdi zmdi-account-box"></i>&nbsp;
                  Tambah Pengguna
               </h5>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label class="text-primary" for="txt_name">Nama Pengguna :</label>
                  <input type="text" class="form-control" id="txt_name" name="txt_name" placeholder="masukkan nama pengguna" required>
               </div>
               <div class="form-group">
                  <label class="text-primary" for="txt_email">Email Pengguna :</label>
                  <input type="email" class="form-control" id="txt_email" name="txt_email" placeholder="irfan@mail.com" required>
               </div>
               <div class="form-group">
                  <label class="text-primary" for="txt_cabang">Cabang :</label>
                  <select class="form-control" name="txt_cabang" id="txt_cabang" required>
                     <!-- daftar diambil dari parsing data setiap controller -->
                     <?php foreach ($header_cabang as $cabang) : ?>
                        <option value="<?= $cabang->id_cabang ?>"><?= $cabang->nama_cabang ?></option>
                     <?php endforeach; ?>
                  </select>
               </div>
               <div class="form-group">
                  <label class="text-primary" for="txt_level">Level User :</label>
                  <select class="form-control" name="txt_level" id="txt_level" required>
                     <option value="3">Pengurus Cabang</option>
                     <option value="2">Pengurus Koor. Cabang</option>
                     <option value="1">Administrator Web</option>
                  </select>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">
                  <i class="zmdi zmdi-close"></i>&nbsp;Batal
               </button>
               <button type="submit" id="btn-submit" class="btn btn-primary">
                  <!-- <i class="zmdi zmdi-save"></i>&nbsp;Simpan Pengguna -->
               </button>
            </div>
         </form>
      </div>
   </div>
</div>

<!-- /.container-fluid -->
<?php $this->load->view('layout/footer') ?>
<script>
   // inisiasi variabel
   var table;

   $(document).ready(function() {

      // DataTable untuk konfigurasi table user pada halaman korcab
      table = $('.table').DataTable({
         "ordering": false,
         "processing": true,
         "serverside": true,
         "ajax": {
            "url": "<?= site_url('korcab/pengguna/data') ?>",
            "type": "GET"
         },
         "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Indonesian.json"
         }
      });

      $('#modal-form').on('submit', function(e) {
         if (!e.isDefaultPrevented()) {

            $.ajax({
               url: "<?= site_url('korcab/pengguna/insert') ?>",
               type: "POST",
               data: $('#modal-form form').serialize(),
               beforeSend: function() {
                  $('#btn-submit').html(`<i class="zmdi zmdi-refresh"></i>&nbsp;Mohon Tunggu..`);
               },
               success: function(data) {
                  $('#modal-form').modal('hide');
                  table.ajax.reload();
               },
               error: function() {
                  alert('data not save');
               }
            });

            return false;
         }
      });
   });

   function addForm() {
      $('#modal-form').modal('show');
      $('#modal-form form')[0].reset();
      $('#btn-submit').html(`<i class="zmdi zmdi-save"></i>&nbsp;Simpan Pengguna`);
   }

   function deleteData(id) {
      Swal.fire({
         text: "Apakah yakin ingin menghapus data ini ?",
         icon: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#dc3545',
         cancelButtonColor: '#343a40',
         confirmButtonText: 'Ya, hapus',
         cancelButtonText: 'Tidak, batal',
      }).then((result) => {
         if (result.value) {
            $.ajax({
               type: "GET",
               url: "<?= site_url('korcab/pengguna/delete/') ?>" + id,
               success: function(response) {
                  table.ajax.reload();
               },
               error: function() {
                  alert("function hapusData error");
               }
            });
         }
      });
   }
</script>
</body>

</html>