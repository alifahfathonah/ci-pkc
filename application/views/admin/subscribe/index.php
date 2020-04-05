<?php $this->load->view('layout/backend/header') ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Daftar Subscribe
                </h1>
            </div>
        </div>
        <table class="table table-bordered table-hover table-striped" id="datatable_user">
            <thead>
                <tr>
                    <th class="header" style="width: 50px;">No</th>
                    <th class="header text-center" >Email Subscriber</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

<?php $this->load->view('layout/backend/footer') ?>

<script>
    $(document).ready(function(){
        // DataTable untuk konfigurasi table user pada halaman korcab
        $('.table').DataTable({
            "processing" : true,
            "serverside" : true,
            "ajax" : {
                "url" : "<?php echo site_url('subscribe/data') ?>",
                "type" : "GET"
            }
        });
    });
</script>

</body>
</html