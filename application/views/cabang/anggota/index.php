<?php $this->load->view('layout/cabang/header') ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>
                        Daftar Anggota
                        <div class="pull-right">
                            <a href="<?php echo site_url('anggota/create') ?>" class="btn btn-primary">Tambah</a>
                            <a href="<?php echo site_url('anggota/import') ?>" class="btn btn-success">Import Excel</a>
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
                            <th class="header">Telepon</th>
                            <th class="header">Status</th>
                            <th class="header" style="width:120px;">Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

<?php $this->load->view('layout/cabang/footer') ?>

    <script>
        // inisiasi variabel
        var table, save_method;

        $(document).ready(function(){

            // DataTable untuk konfigurasi table user pada halaman korcab
            table = $('.table').DataTable({
                "processing" : true,
                "serverside" : true,
                "ajax" : {
                    "url" : "<?php echo site_url('anggota/data') ?>",
                    "type" : "GET"
                }
            });

            $('#modal-form').on('submit', function (e) {
                if (!e.isDefaultPrevented()) {

                    var id_anggota = $('#txt_id').val();

                    if (save_method == "add") url = "<?php echo site_url('anggota/insert') ?>";
                    else url = "anggota/update/"+id_anggota;

                    $.ajax({
                        url: url,
                        type: "POST",
                        data: $('#modal-form form').serialize(),
                        success: function(data){
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                        },
                        error: function(){
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
            $('.modal-title').text('Tambah Data Baru');
        }

        function editForm(id) {
            save_method = "edit";
            $('#modal-form form')[0].reset();

            $.ajax({
                url: "anggota/edit/"+id,
                type: "GET",
                dataType:"JSON",
                success: function(data){
                    $('#modal-form').modal('show');
                    $('.modal-title').text('Edit Form');

                    // memasukkan data yang didapatkan dari controller ke form modal
                    $('#txt_id').val(data.id_anggota);
                    $('#txt_nama').val(data.nama_anggota);
                    $('#txt_tempat').val(data.tempat_anggota);
                    $('#txt_tgl').val(data.tgl_anggota);
                    $('#txt_bulan').val(data.bulan_anggota);
                    $('#txt_tahun').val(data.tahun_anggota);
                    $('#txt_rayon').val(data.rayon_id);
                    $('#txt_komisariat').val(data.komisariat_id);
                    $('#txt_prodi').val(data.prodi_anggota);
                    $('#txt_email').val(data.email_anggota);
                    $('#txt_telepon').val(data.telepon_anggota);
                    $('#txt_mapaba').val(data.angkatan_mapaba);
                    $('#txt_kaderisasi').val(data.kaderisasi_anggota);
                    $('#txt_status').val(data.status_anggota);

                },
                error: function(){
                    alert('data not change');
                }
            });
        }

        function deleteData(id) {
            if (confirm("Are You Sure for delete this ?")) {
                $.ajax({
                    url: "anggota/delete/"+id,
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
</html>