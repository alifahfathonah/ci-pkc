<?php $this->load->view('layout/backend/header') ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Daftar Kontak Pesan
                </h1>
            </div>
        </div>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th class="header" style="width: 50px;">No</th>
                    <th class="header">Nama Kontak</th>
                    <th class="header">Email</th>
                    <th class="header">Status</th>
                    <th class="header" style="width:120px;">Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    <!-- this load form add and edit -->
    <?php $this->load->view('backend/kontak/form') ?>

<?php $this->load->view('layout/backend/footer') ?>
       
    <script type="text/javascript">
    	// declare variabel
        var table, save_method;

    	$(document).ready(function() {
    		table = $('.table').DataTable({
                "processing" : true,
                "serverside" : true,
                "ajax" : {
                    "url" : "<?php echo site_url('kontak/data') ?>",
                    "type" : "GET"
                }
            });

            $('#modal-form').on('submit', function (e) {
                if (!e.isDefaultPrevented()) {

                    var id_kontak = $('#txt_id').val();

                    $.ajax({
                        url: "kontak/update/"+id_kontak,
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

    	function editForm(id) {
            save_method = "edit";
            $('#modal-form form')[0].reset();

            $.ajax({
                url: "kontak/edit/"+id,
                type: "GET",
                dataType:"JSON",
                success: function(data){
                    $('#modal-form').modal('show');
                    $('.modal-title').text('Detail Pesan');

                    // memasukkan data yang didapatkan dari controller ke form modal
                    $('#txt_id').val(data.id_kontak);
                    $('#txt_nama').val(data.nama_kontak);
                    $('#txt_email').val(data.email_kontak);
                    $('#txt_pesan').val(data.pesan_kontak);
                    $('#txt_balas').val(data.balas_kontak);
                },
                error: function(){
                    alert('data not change');
                }
            });
        }
        
    </script>
</body>
</html>