<?php $this->load->view('layout/korcab/header') ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>
                        PC <?php echo $profil_cabang->nama_cabang ?>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h2 class="panel-title"><i class="fa fa-university"></i> Total Komisariat</h2>
                    </div>
                    <div class="panel-body">
                        <center><h1><?php echo $total_komisariat ?></h1></center>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="panel-title"><i class="fa fa-graduation-cap"></i> Total Rayon</h2>
                    </div>
                    <div class="panel-body">
                        <center><h1><?php echo $total_rayon ?></h1></center>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h2 class="panel-title"><i class="fa fa-child"></i> Total Anggota</h2>
                    </div>
                    <div class="panel-body">
                        <center><h1><?php echo $total_anggota ?></h1></center>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-sticky-note"></i> Informasi Cabang</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th width="150">Nama Cabang</th>
                                            <th>:</th>
                                            <td><?php echo $profil_cabang->nama_cabang ?></td>
                                        </tr>
                                        <tr>
                                            <th width="150">Alamat</th>
                                            <th>:</th>
                                            <td><?php echo $profil_cabang->alamat_cabang ?></td>
                                        </tr>
                                        <tr>
                                            <th width="150">Email</th>
                                            <th>:</th>
                                            <td><?php echo $profil_cabang->email_cabang ?></td>
                                        </tr>
                                        <tr>
                                            <th width="150">Telepon</th>
                                            <th>:</th>
                                            <td><?php echo $profil_cabang->telepon_cabang ?></td>
                                        </tr>
                                        <tr>
                                            <th width="150">Status Cabang</th>
                                            <th>:</th>
                                            <td><?php echo $profil_cabang->status_cabang ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-sort-amount-asc"></i> Kaderisasi Formal</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span class="badge"><?php echo $total_mapaba ?></span> 
                                        Masa Penerimaan Anggota Baru (MAPABA)
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge"><?php echo $total_pkd ?></span> 
                                        Pelatihan Kader Dasar (PKD)
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge"><?php echo $total_pkl ?></span> 
                                        Pelatihan Kader Lanjut (PKL)
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge"><?php echo $total_pkn ?></span>
                                        Pelatihan Kader Nasional (PKN)
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-sort-amount-asc"></i> Kaderisasi Kopri</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span class="badge"><?php echo $total_sig ?></span> 
                                        Sekolah Islam Gender (SIG)
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge"><?php echo $total_skk ?></span> 
                                        Sekolah Kader Kopri (SKK)
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge"><?php echo $total_skkn ?></span> 
                                        Sekolah Kader Kopri Nasional (SKKN)
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view('layout/korcab/footer') ?>