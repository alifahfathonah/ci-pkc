<?php $this->load->view('layout/frontend/header.php') ?>

<!-- services -->
	<div class="services">
		<div class="container">
			<h3 class="head">Daftar Galeri</h3>
			<div class="agileinfo_services_grids">
                <?php foreach($daftar_galeri as $galeri): ?>
				<div class="col-md-3 agileinfo_services_grid">
					<div class="agileinfo_services_grid1">
						<img src="<?php echo base_url('asset/gambar/galeri/'.$galeri->gambar_galeri) ?>" alt=" " class="img-responsive" />
						<h4 class="text-center"><a href="#"><?php echo $galeri->nama_galeri ?></a></h4>
					</div>
                </div>
                <?php endforeach; ?>
				<div class="clearfix"> </div>
			</div>
			<div class="text-center">
				<?php echo $this->pagination->create_links() ?>
			</div>
		</div>
	</div>
<!-- //services -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Subscribe</h3>
				<p>Dapatkan berita terbaru untuk setiap postingan kami di sini</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="<?php echo site_url('subscribe/insert') ?>" method="post">
					<input type="email" name="txt_email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Subscribe">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->

<?php $this->load->view('layout/frontend/footer.php') ?>
    