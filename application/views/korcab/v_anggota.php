<?php $this->load->view('layout/header') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">
         <i class="zmdi zmdi-accounts"></i>&nbsp;
         Data Anggota
      </h1>
      <form class="form-inline" id="form_filter">
         <label class="mb-2" for="txt_filter">
            <i class="zmdi zmdi-filter-list"></i>&nbsp;Saring :
         </label>
         &nbsp;
         <select name="txt_filter" id="txt_filter" class="form-control form-control-sm mb-2 mr-sm-2">
            <option value="semua">Semua Anggota</option>
            <option value="MAPABA">Anggota MAPABA</option>
            <option value="PKD">Anggota PKD</option>
            <option value="PKL">Anggota PKL</option>
            <option value="PKN">Anggota PKN</option>
         </select>

         <button type="button" onclick="Export()" class="btn btn-sm btn-success mb-2 ml-1">
            <i class="fa fa-sm fa-file-excel"></i>&nbsp;Export Excel
         </button>
         <button type="button" onclick="Export()" class="btn btn-sm btn-danger mb-2 ml-1">
            <i class="fa fa-sm fa-file-pdf"></i>&nbsp;Export PDF
         </button>
      </form>
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
                        <th class="header" width="400">Nama Anggota</th>
                        <th class="header text-center" width="250">Rayon</th>
                        <th class="header text-center" width="250">Komisariat</th>
                        <th class="header text-center" width="100">Cabang</th>
                        <th class="header text-center">Aksi</th>
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

<!-- modal -->
<div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">
               <i class="zmdi zmdi-accounts"></i>&nbsp;
               Detail Data Anggota
            </h5>
         </div>
         <div class="modal-body"></div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
               <i class="zmdi zmdi-close"></i>&nbsp;Tutup
            </button>
            <button type="submit" id="btn-submit" class="btn btn-primary">
               <i class="zmdi zmdi-card"></i>&nbsp;Cetak Kartu Anggota
            </button>
         </div>
      </div>
   </div>
</div>


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
            "url": "<?= site_url('korcab/anggota/data') ?>",
            "type": "GET"
         },
         "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Indonesian.json"
         }
      });

      $('#txt_filter').change(function() {
         // set variabel filter
         filter = $('#txt_filter').val();

         table.ajax.url("<?= site_url('korcab/anggota/data/') ?>" + filter);
         table.ajax.reload();
         return false;
      });
   });

   function Export() {
      Swal.fire({
         icon: 'info',
         title: 'Minta Maaf',
         text: 'Untuk fitur export masih dalam pengembangan'
      });
   };
</script>
</body>

</html>