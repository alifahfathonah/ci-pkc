<?php $this->load->view('layout/korcab/header') ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-university fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $total_komisariat ?></div>
                                <div>Total Komisariat</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-graduation-cap fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $total_rayon ?></div>
                                <div>Total Rayon</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-child fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $total_anggota ?></div>
                                <div>Total Anggota</div>
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