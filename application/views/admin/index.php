<?php $this->load->view('layout/backend/header') ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-newspaper-o fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $total_artikel ?></div>
                                <div>Total Artikel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-picture-o fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $total_galeri ?></div>
                                <div>Total Galeri</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa  fa-envelope fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $total_kontak ?></div>
                                <div>Total Kontak</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-at fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $total_subscribe ?></div>
                                <div>Total Subcscribe</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-desktop"></i> Informasi User</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th width="150">ID User</th>
                                            <th>:</th>
                                            <td><?php echo $this->session->userdata('id_user') ?></td>
                                        </tr>
                                        <tr>
                                            <th width="150">Username</th>
                                            <th>:</th>
                                            <td><?php echo $this->session->userdata('name_user') ?></td>
                                        </tr>
                                        <tr>
                                            <th width="150">Level User</th>
                                            <th>:</th>
                                            <td>
                                                <?php 
                                                    if ($this->session->userdata('level_user') == 1) {
                                                        echo "Administrator Web";
                                                    }
                                                    elseif ($this->session->userdata('level_user') == 2) {
                                                        echo "Pengurus Koordinator Cabang";
                                                    }
                                                    elseif ($this->session->userdata('level_user') == 3) {
                                                        echo "Pengurus Cabang";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-cloud"></i> Info Server</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th width="150">Terakhir Login</th>
                                            <th>:</th>
                                            <td><?php echo date('Y-m-d') ?></td>
                                        </tr>
                                        <tr>
                                            <th width="150">IP Address</th>
                                            <th>:</th>
                                            <td><?php echo $_SERVER["REMOTE_ADDR"] ?></td>
                                        </tr>
                                        <tr>
                                            <th width="150">Server</th>
                                            <th>:</th>
                                            <td><?php echo $_SERVER['SERVER_NAME'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view('layout/backend/footer') ?>