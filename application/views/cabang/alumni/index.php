<?php $this->load->view('layout/cabang/header') ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>
                        Daftar Alumni
                        <div class="pull-right">
                            <a onclick="addForm()" class="btn btn-primary">Tambah</a>
                        </div>
                    </h2>
                </div>
                
                <table class="table table-bordered table-hover table-striped" id="datatable_user">
                    <thead>
                        <tr>
                            <th class="header" style="width: 50px;">No</th>
                            <th class="header">Nama </th>
                            <th class="header">Telepon</th>
                            <th class="header">Asal</th>
                            <th class="header" style="width:120px;">Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- load form modal  -->
    <?php $this->load->view('cabang/alumni/form') ?>

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
                    "url" : "<?php echo site_url('alumni/data') ?>",
                    "type" : "GET"
                }
            });

            $('#modal-form').on('submit', function (e) {
                if (!e.isDefaultPrevented()) {

                    var id_alumni = $('#txt_id').val();

                    if (save_method == "add") url = "<?php echo site_url('alumni/insert') ?>";
                    else url = "alumni/update/"+id_alumni;

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
                url: "alumni/edit/"+id,
                type: "GET",
                dataType:"JSON",
                success: function(data){
                    $('#modal-form').modal('show');
                    $('.modal-title').text('Edit Form');

                    // memasukkan data yang didapatkan dari controller ke form modal
                    $('#txt_id').val(data.id_alumni);
                    $('#txt_nama').val(data.nama_alumni);
                    $('#txt_telepon').val(data.telepon_alumni);
                    $('#txt_asal').val(data.asal_alumni);

                },
                error: function(){
                    alert('data not change');
                }
            });
        }

        function deleteData(id) {
            if (confirm("Are You Sure for delete this ?")) {
                $.ajax({
                    url: "alumni/delete/"+id,
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