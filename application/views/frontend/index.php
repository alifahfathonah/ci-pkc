<?php $this->load->view('layout/frontend/header.php') ?>
    <div class="container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="<?= base_url('asset/gambar/img/banner (1).jpeg') ?>" alt="...">
                </div>
                <div class="item">
                    <img class="img-responsive" src="<?= base_url('asset/gambar/img/banner (2).jpeg') ?>" alt="...">
                </div>
                <div class="item">
                    <img class="img-responsive" src="<?= base_url('asset/gambar/img/banner (3).jpeg') ?>" alt="...">
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- team -->
        <div class="team">
            <div class="container">
                <h3 class="head">Pengurus Koordinator Cabang</h3>
                <p class="urna">Kalimantan Timur - Kalimantan Utara</p>
                <div class="agile_team_grids">
                    <?php foreach ($daftar_pengurus as $pengurus) : ?>
                    <div class="col-md-3 agile_team_grid">
                        <div class="agile_team_grid_main">
                            <img src="<?php echo base_url('asset/gambar/pengurus/'.$pengurus->gambar_pengurus) ?>" class="img-responsive" />
                        </div>
                        <div class="agile_team_grid1">
                            <h4><?php echo $pengurus->nama_pengurus ?></h4>
                            <p><?php echo $pengurus->jabatan_pengurus ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="clearfix"> </div>
                    
                </div>
            </div>
        </div>
    <!-- //team -->
    <!-- count-down -->
        <div class="count">
            <div class="container">
                <div class="col-md-3 agile_count_grid">
                    <div class="agile_count_grid_left">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    </div>
                    <div class="agile_count_grid_right">
                        <p class="counter"><?php echo $total_mapaba ?></p> 
                    </div>
                    <div class="clearfix"> </div>
                    <h3>MAPABA</h3>
                </div>
                <div class="col-md-3 agile_count_grid">
                    <div class="agile_count_grid_left">
                        <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                    </div>
                    <div class="agile_count_grid_right">
                        <p class="counter"><?php echo $total_pkd ?></p> 
                    </div>
                    <div class="clearfix"> </div>
                    <h3>PKD</h3>
                </div>
                <div class="col-md-3 agile_count_grid">
                    <div class="agile_count_grid_left">
                        <span class="glyphicon glyphicon-plane" aria-hidden="true"></span>
                    </div>
                    <div class="agile_count_grid_right">
                        <p class="counter"><?php echo $total_pkl ?></p> 
                    </div>
                    <div class="clearfix"> </div>
                    <h3>PKL</h3>
                </div>
                <div class="col-md-3 agile_count_grid">
                    <div class="agile_count_grid_left">
                        <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                    </div>
                    <div class="agile_count_grid_right">
                        <p class="counter"><?php echo $total_pkn ?></p> 
                    </div>
                    <div class="clearfix"> </div>
                    <h3>PKN</h3>
                </div>
                <div class="clearfix"> </div>
                    <!-- Starts-Number-Scroller-Animation-JavaScript -->
                        <script src="<?php echo base_url('asset/frontend/js/waypoints.min.js') ?>"></script> 
                        <script src="<?php echo base_url('asset/frontend/js/counterup.min.js') ?>"></script> 
                        <script>
                            jQuery(document).ready(function( $ ) {
                                $('.counter').counterUp({
                                    delay: 20,
                                    time: 1000
                                });
                            });
                        </script>
                    <!-- //Starts-Number-Scroller-Animation-JavaScript -->
            </div>
        </div>
    <!-- //count-down -->
    
    <!-- galeri -->
        <div class="work">
            <h3 class="head">Galeri</h3>
            <div class="agileits_work_grids">
                <ul id="flexiselDemo1">	
                    <?php foreach ($daftar_galeri as $galeri): ?>		
                    <li>
                        <div class="agileits_work_grid view view-sixth">
                            <img src="<?php echo base_url('asset/gambar/galeri/'.$galeri->gambar_galeri) ?>" alt=" " class="img-responsive" />
                            <div class="mask">
                                <a href="#" class="info"><?php echo $galeri->nama_galeri ?></a>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
                    <script type="text/javascript">
                        $(window).load(function() {
                            $("#flexiselDemo1").flexisel({
                                visibleItems: 4,
                                animationSpeed: 1000,
                                autoPlay: true,
                                autoPlaySpeed: 3000,    		
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: { 
                                    portrait: { 
                                        changePoint:480,
                                        visibleItems: 1
                                    }, 
                                    landscape: { 
                                        changePoint:640,
                                        visibleItems:2
                                    },
                                    tablet: { 
                                        changePoint:768,
                                        visibleItems: 3
                                    }
                                }
                            });
                            
                        });
                    </script>
                    <script type="text/javascript" src="<?php echo base_url('asset/frontend/js/jquery.flexisel.js') ?>"></script>
            </div>
        </div>
    <!-- //work -->

    <!-- artikel terbaru -->
        <div class="blog" id="blog">
            <div class="container">
                <h3 class="head">Arikel Terbaru</h3>
                <div class="w3_blog_grids">
                    <?php foreach ($daftar_artikel as $artikel): ?>
                    <div class="col-md-6 w3_blog_grid">
                        <div class="col-md-6 w3_blog_grid_left">
                            <a href="<?php echo site_url('welcome/artikel_detail/'.$artikel->slug_artikel) ?>"><img src="<?php echo base_url('asset/gambar/'.$artikel->gambar_artikel) ?>" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="col-md-6 w3_blog_grid_right">
                            <h4><a href="<?php echo site_url('welcome/artikel_detail/'.$artikel->slug_artikel) ?>"><?php echo $artikel->nama_artikel ?></a></h4>
                            <p><?php echo substr($artikel->isi_artikel, 0, 200) ?></p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    <!-- //blog -->

<?php $this->load->view('layout/frontend/footer.php') ?>
    