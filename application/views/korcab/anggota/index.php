<?php $this->load->view('layout/korcab/header') ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>
                        Daftar Anggota
                        <div class="pull-right">
                            <a href="<?php echo site_url('anggota/detail') ?>" class="btn btn-primary">Detail Semua Anggota</a>
                        </div>
                    </h2>
                </div>
                
                <table class="table table-bordered table-hover table-striped" id="datatable_user">
                    <thead>
                        <tr>
                            <th class="header" style="width: 50px;">No</th>
                            <th class="header">Nama Anggota</th>
                            <th class="header">Rayon</th>
                            <th class="header">Komisariat</th>
                            <th class="header">Cabang</th>
                            <th class="header">Telepon</th>
                            <th class="header">Kartu</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

    <?php $this->load->view('layout/korcab/footer') ?>
    <script>
        // inisiasi variabel
        var table, save_method;

        $(document).ready(function(){
            // DataTable untuk konfigurasi table user pada halaman korcab
            table = $('.table').DataTable({
                "processing" : true,
                "serverside" : true,
                "ajax" : {
                    "url" : "<?php echo site_url('korcab/anggota_data') ?>",
                    "type" : "GET"
                }
            });
        });

    </script>
</body>
</html>