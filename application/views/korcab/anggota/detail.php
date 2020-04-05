<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo TITLE_BAR ?></title>
    
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('asset/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- dataTables -->
    <link href="<?php echo base_url('asset/vendor/datatables/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="<?php echo base_url('asset/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>
                        Detail Anggota
                        <div class="pull-right">
                            <a href="<?php echo site_url('korcab/anggota') ?>" class="btn btn-warning">Kembali</a>
                        </div>
                    </h2>
                </div>
                <div class="pull-right">
                    <form class="form-inline" id="form_filter">
                        <div class="form-group">
                            <label for="txt_filter">Saring Berdasarkan </label>
                            <select name="txt_filter" id="txt_filter" class="form-control" required>
                                <option value="semua">Semua Anggota</option>
                                <option value="MAPABA">Anggota MAPABA</option>
                                <option value="PKD">Anggota PKD</option>
                                <option value="PKL">Anggota PKL</option>
                                <option value="PKN">Anggota PKN</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="header" style="width: 35px;">No</th>
                            <th class="header">Nama </th>
                            <th class="header">Tempat, TTL</th>
                            <th class="header">Rayon</th>
                            <th class="header">Komisariat</th>
                            <th class="header">Cabang</th>
                            <th class="header">Email</th>
                            <th class="header">Telepon</th>
                            <th class="header">Status</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script type="text/javascript" src="<?php echo base_url('asset/vendor/jquery/jquery.min.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url('asset/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

    <!-- dataTables -->
    <script type="text/javascript" src="<?php echo base_url('asset/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/vendor/datatables/dataTables.bootstrap.min.js') ?>"></script>

    <!-- button untuk detail -->
    <script src="<?php echo base_url('asset/vendor/datatables/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/vendor/datatables/js/buttons.bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/vendor/datatables/js/jszip.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/vendor/datatables/js/pdfmake.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/vendor/datatables/js/buttons.html5.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/vendor/datatables/js/buttons.print.min.js') ?>"></script>

    <script>
        $(document).ready(function(){
            // inisiasi variabel
            var table, filter;

            // DataTable untuk konfigurasi table user pada halaman korcab
            table = $('.table').DataTable({
                "dom"   : "Blrtip",
                "bSort" : false,
                "buttons"    : [
                    {
                        extend : 'pdf',
                        text : 'Export PDF',
                        className : 'pdf btn btn-danger'
                    },
                    {
                        extend : 'excel',
                        text : 'Export Excel',
                        className : 'excel btn btn-success'
                    },
                    {
                        extend : 'print',
                        text : 'Print',
                        className : 'print btn btn-info'
                    }
                ],
                "processing"    : true,
                "serverside"    : true,
                "ajax" : {
                    "url" : "<?php echo site_url('anggota/data_detail/semua') ?>",
                    "type" : "GET"
                }
            });

            $('#form_filter').submit(function() {
                // set variabel filter
                filter = $('#txt_filter').val();
                
                table.ajax.url("<?php echo site_url('anggota/data_detail/') ?>"+ filter);
                table.ajax.reload();
                return false;
            });
        });

    </script>
</body>
</html>