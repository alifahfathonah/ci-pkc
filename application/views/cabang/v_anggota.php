<?php $this->load->view('layout/header') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">
         <i class="zmdi zmdi-accounts"></i>&nbsp;
         Data Anggota
      </h1>
      <div>
         <a href="<?= site_url('cabang/anggota/create') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary">
            <i class="zmdi zmdi-plus"></i>&nbsp;Tambah Anggota
         </a>
         <a href="<?= site_url('cabang/anggota/import') ?>" class="d-none d-sm-inline-block btn btn-sm btn-success">
            <i class="fa fa-file-excel"></i>&nbsp;Import Data
         </a>
      </div>
   </div>

   <!-- Content Row -->
   <div class="row">
      <div class="col-md-12">
         <?= $this->session->flashdata('alert_anggota') ?>
         <div class="card shadow border-left-primary">
            <div class="card-body">
               <table class="table table-sm table-bordered table-hover">
                  <thead class="bg-dark text-white">
                     <tr>
                        <th class="header text-center" width="30">No</th>
                        <th class="header">Nama Anggota</th>
                        <th class="header text-center">Rayon</th>
                        <th class="header text-center">Komisariat</th>
                        <th class="header text-center">Telepon</th>
                        <th class="header text-center">Status</th>
                        <th class="header text-center" width="100">Aksi</th>
                     </tr>
                  </thead>
                  <tbody></tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- /.container-fluid -->

<?php $this->load->view('layout/footer') ?>
<script>
   // inisiasi variabel
   var table, save_method;

   $(document).ready(function() {

      // DataTable untuk konfigurasi table user pada halaman cabang
      table = $('.table').DataTable({
         "ordering": false,
         "processing": true,
         "serverside": true,
         "ajax": {
            "url": "<?= site_url('cabang/anggota/data') ?>",
            "type": "GET"
         },
         "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Indonesian.json"
         }
      });

      $('#modal-form').on('submit', function(e) {
         if (!e.isDefaultPrevented()) {

            var id_anggota = $('#txt_id').val();

            if (save_method == "add") url = "<?= site_url('cabang/anggota/insert') ?>";
            else url = "<?= site_url('cabang/anggota/update/') ?>" + id_anggota;

            $.ajax({
               url: url,
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
               url: "<?= site_url('cabang/anggota/delete/') ?>" + id,
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