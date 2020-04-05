<?php $this->load->view('layout/frontend/header.php') ?>

<!-- mail -->
	<div class="mail">
		<div class="container">
            <h3 class="head">Kontak Kami</h3>
			<div class="agileinfo_mail_grids">
				<div class="col-md-6 agileinfo_mail_grid_left">
					<form action="<?php echo site_url('kontak/insert') ?>" method="post">
						<input type="text" name="txt_nama" placeholder="Nama" required="">
						<input type="email" name="txt_email" placeholder="Email" required="">
						<textarea name="txt_pesan" placeholder="Pesan.." required=""></textarea>
						<input type="submit" value="Submit">
					</form>
				</div>
				<div class="col-md-6 agileinfo_mail_grid_right">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4085567.229173297!2d114.18596595214079!3d0.10400312012876949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df14710964d9c91%3A0xc4abb01d2fe376d7!2sKalimantan+Timur!5e0!3m2!1sid!2sid!4v1549530297112" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //mail -->
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
    