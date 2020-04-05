<?php $this->load->view('layout/frontend/header.php') ?>

<!-- services -->
	<div class="services">
		<div class="container">
			<h3 class="head">Daftar Artikel</h3>
			<div class="agileinfo_services_grids">
                <?php foreach($daftar_artikel as $artikel): ?>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid1">
						<img src="<?php echo base_url('asset/gambar/'.$artikel->gambar_artikel) ?>" alt=" " class="img-responsive" />
						<h4><a href="<?php echo site_url('welcome/artikel_detail/'.$artikel->slug_artikel) ?>"><?php echo $artikel->nama_artikel ?></a></h4>
						<p><?php echo substr($artikel->isi_artikel, 0, 100) ?></p>
						<div class="w3agile_more">
							<a href="<?php echo site_url('welcome/artikel_detail/'.$artikel->slug_artikel) ?>" class="btn btn-warning hvr-underline-from-center">Baca Lebih..</a>
						</div>
					</div>
				</div>
                <?php endforeach; ?>
				<div class="clearfix"> </div>
			</div>
			<br>
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
    