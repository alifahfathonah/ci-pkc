<?php $this->load->view('layout/frontend/header.php') ?>

<!-- single -->
	<div class="single">
		<div class="container">
			<div class="col-md-8 w3agile_single_left">
				<div class="w3agile_single_left1 text-justify">
					<img src="<?php echo base_url('asset/gambar/'.$artikel->gambar_artikel) ?>" alt=" " class="img-responsive" /><br>
					<h4><?php echo $artikel->nama_artikel ?></h4>
					<p><?php echo $artikel->isi_artikel ?></p>
				</div>
				<div class="wthree_share_post">
					<h4>Share This Post</h4>
					<div class="addthis_inline_share_toolbox"></div>
				</div>
            </div>
            <div class="col-md-4 w3agile_single_right">
				<div class="agileits_categories">
					<h4>Artikel Terbaru</h4>
					<ul>
                        <?php foreach($artikel_terbaru as $terbaru): ?>
                        <li><a href="<?php echo site_url('welcome/artikel_detail/'.$terbaru->slug_artikel) ?>"><?php echo $terbaru->nama_artikel ?></a><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></li>
                        <?php endforeach; ?>
					</ul>
				</div>
				<div class="agileits_categories">
					<h4>Artikel Terpopuler</h4>
					<ul>
						<?php foreach($artikel_terpopuler as $terpopuler): ?>
                        <li><a href="<?php echo site_url('welcome/artikel_detail/'.$terpopuler->slug_artikel) ?>"><?php echo $terpopuler->nama_artikel ?></a><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></li>
                        <?php endforeach; ?>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //single -->

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

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c5ec44476088a16"></script>
    