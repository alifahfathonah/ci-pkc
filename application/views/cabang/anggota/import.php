<?php $this->load->view('layout/cabang/header') ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>
                        Import Excel Data Anggota
                    </h2>
                </div>
            </div>
        </div>
        <form class="form-horizontal" action="<?php echo site_url('anggota/do_upload') ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="file_import" class="col-md-3 control-label">File Excel</label>
                    <div class="col-md-9">
                        <input type="file" name="file_import" id="file_import" class="form-control"> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" value="import" class="btn btn-info"><i class="fa fa-save"></i> Submit</button>
                        <a href="<?php echo site_url('anggota') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Batal</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="alert alert-success" role="alert">
                    ID Untuk Cabang <strong><?= $nama_cabang->nama_cabang ?></strong> : <strong><?= $nama_cabang->id_cabang ?></strong>
                    <hr>
                    <center><a href="<?php echo base_url('asset/example_import_excel.xlsx') ?>" class="btn btn-success"><i class="fa fa-download"></i> Contoh File Excel Download</a></center>
                </div>
            </div>
        </div>
        </form>

        <hr> <!-- garis penghalang saja gan -->

        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-info">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Daftar ID Komisariat</div>

                    <!-- Table -->
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID Komisariat</th>
                                <th>Nama Komisariat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Belum Ada Komisariat</td>
                            </tr>
                            <?php foreach($daftar_komisariat as $komisariat): ?>
                            <tr>
                                <td><?= $komisariat->id_komisariat ?></td>
                                <td><?= $komisariat->nama_komisariat ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-warning">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Daftar ID Rayon</div>

                    <!-- Table -->
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID Rayon</th>
                                <th>Nama Rayon</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Belum Ada Rayon</td>
                            </tr>
                            <?php foreach($daftar_rayon as $rayon): ?>
                            <tr>
                                <td><?= $rayon->id_rayon ?></td>
                                <td><?= $rayon->nama_rayon ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>

    <?php $this->load->view('layout/cabang/footer') ?>
    
</body>
</html>