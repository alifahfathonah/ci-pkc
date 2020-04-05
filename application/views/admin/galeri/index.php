<?php $this->load->view('layout/backend/header') ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Daftar Galeri
                    <div class="pull-right">
                        <a href="<?php echo site_url('galeri/create') ?>" class="btn btn-primary">Tambah</a>
                    </div>
                </h1>
            </div>
        </div>
        <table class="table table-bordered table-hover table-striped" id="datatable_user">
            <thead>
                <tr>
                    <th class="header" style="width: 50px;">No</th>
                    <th class="header">Gambar</th>
                    <th class="header">Judul</th>
                    <th class="header" style="width:120px;">Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

<?php $this->load->view('layout/backend/footer') ?>

<script>
    $(document).ready(function(){
        // DataTable untuk konfigurasi table user pada halaman korcab
        table = $('.table').DataTable({
            "processing" : true,
            "serverside" : true,
            "ajax" : {
                "url" : "<?php echo site_url('galeri/data') ?>",
                "type" : "GET"
            }
        });
    });

    function deleteData(id) {
        if (confirm("Are You Sure for delete this ?")) {
            $.ajax({
                url: "galeri/delete/"+id,
                type: "POST",
                success: function(data){
                    table.ajax.reload();
                },
                error: function(){
                    alert('data not deleted');
                }
            });
        }
    }
</script>

</body>
</html