<!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="agileinfo_footer_grids">
                    <div class="col-md-4 agileinfo_footer_grid">
                        <h3>Media Sosial</h3>
                        <ul class="agileinfo_footer_grid_nav">
                            <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="<?php echo $informasi->facebook_informasi ?>" target="_blank">Facebook</a></li>
                            <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="<?php echo $informasi->instagram_informasi ?>" target="_blank">Instagram</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 agileinfo_footer_grid">
                        <h3>Kontak</h3>
                        <ul class="agileinfo_footer_grid_list">
                            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><?php echo $informasi->alamat_informasi ?></li>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:<?php echo $informasi->email_informasi ?>"><?php echo $informasi->email_informasi ?></a></li>
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><?php echo $informasi->telepon_informasi ?></li>
                        </ul>
                    </div>
                    <div class="col-md-4 agileinfo_footer_grid">
                        <h3>Navigation</h3>
                        <ul class="agileinfo_footer_grid_nav">
                            <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="<?php echo site_url('welcome') ?>">Beranda</a></li>
                            <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="<?php echo site_url('welcome/artikel') ?>">Artikel</a></li>
                            <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="<?php echo site_url('welcome/galeri') ?>">Galeri</a></li>
                            <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="<?php echo site_url('welcome/kontak') ?>">Kontak</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="w3agile_footer_copy">
                    <p>&copy; 2019 PKC PMII KALTIMRA. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> And <a href="">PMII Komisariat UNU Kaltim Samarinda</a></p>
                </div>
            </div>
        </div>
    <!-- //footer -->

    <!-- for bootstrap working -->
        <script src="<?php echo base_url('asset/frontend/js/bootstrap.js') ?>"></script>
    <!-- //for bootstrap working -->

    <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                    var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                    };
                */
                                    
                $().UItoTop({ easingType: 'easeOutQuart' });
                                    
                });
        </script>
    <!-- //here ends scrolling icon -->
    </body>
</html>