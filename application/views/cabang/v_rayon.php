<?php $this->load->view('layout/header') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">
         <i class="zmdi zmdi-flag"></i>&nbsp;
         Data Pengurus Rayon
      </h1>
      <button type="button" onclick="addForm()" class="d-none d-sm-inline-block btn btn-sm btn-primary">
         <i class="zmdi zmdi-plus"></i>&nbsp;Tambah Rayon
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
                        <th class="header">Nama Rayon</th>
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

<!-- modal form -->
<?php $this->load->view('cabang/_rayon_form') ?>

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
            "url": "<?= site_url('cabang/rayon/data') ?>",
            "type": "GET"
         },
         "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Indonesian.json"
         }
      });

      $('#modal-form').on('submit', function(e) {
         if (!e.isDefaultPrevented()) {

            var id_rayon = $('#txt_id').val();

            if (save_method == "add") url = "<?= site_url('cabang/rayon/insert') ?>";
            else url = "<?= site_url('cabang/rayon/update/') ?>" + id_rayon;

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

   function addForm() {
      save_method = "add";
      $('#modal-form').modal('show');
      $('#modal-form form')[0].reset();
      $('.modal-title').html(`<i class="zmdi zmdi-flag"></i>&nbsp;Tambah rayon`);
      $('#btn-submit').html(`<i class="zmdi zmdi-save"></i>&nbsp;Simpan Pembaruan`);
   }

   function editForm(id) {
      save_method = "edit";
      $('#modal-form form')[0].reset();

      $.ajax({
         url: "<?= site_url('cabang/rayon/edit/') ?>" + id,
         type: "GET",
         dataType: "JSON",
         success: function(data) {
            $('#modal-form').modal('show');
            $('#btn-submit').html(`<i class="zmdi zmdi-save"></i>&nbsp;Simpan Pembaruan`);
            $('.modal-title').html(`<i class="zmdi zmdi-flag"></i>&nbsp;Ubah rayon`);

            // memasukkan data yang didapatkan dari controller ke form modal
            $('#txt_id').val(data.id_rayon);
            $('#txt_nama').val(data.nama_rayon);
            $('#txt_komisariat').val(data.komisariat_id);
            $('#txt_alamat').val(data.alamat_rayon);
            $('#txt_email').val(data.email_rayon);
            $('#txt_telepon').val(data.telepon_rayon);
            $('#txt_berdiri').val(data.berdiri_rayon);
            $('#txt_status').val(data.status_rayon);

         },
         error: function() {
            alert('data not change');
         }
      });
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
               url: "<?= site_url('cabang/rayon/delete/') ?>" + id,
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