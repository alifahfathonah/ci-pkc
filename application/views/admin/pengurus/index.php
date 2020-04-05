<?php $this->load->view('layout/backend/header') ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>
                        Daftar Pengurus
                    </h2>
                </div>
                
                <table class="table table-bordered table-hover table-striped" id="datatable_user">
                    <thead>
                        <tr>
                            <th class="header" style="width: 50px;">No</th>
                            <th class="header">Gambar</th>
                            <th class="header">Nama</th>
                            <th class="header">Jabatan</th>
                            <th class="header" style="width: 50px;">Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

    <?php $this->load->view('layout/backend/footer') ?>
    <script>
        // inisiasi variabel
        var table;

        $(document).ready(function(){

            // DataTable untuk konfigurasi table user pada halaman korcab
            table = $('.table').DataTable({
                "processing" : true,
                "serverside" : true,
                "ajax" : {
                    "url" : "<?php echo site_url('pengurus/data') ?>",
                    "type" : "GET"
                }
            });

        });

    </script>
</body>
</html>