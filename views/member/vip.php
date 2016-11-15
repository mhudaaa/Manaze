<body class="bg-yellow-img color-white">
		<div class="close"><a href="<?php echo URL ?>dashboard"><i class="pe-7s-close color-white"></i></a></div>
	<div id="wrapper" class="wow fadeInUp">
		<br><br>
		<?php 
			if ($info[0]['status'] == 1) {
		?>
			<div class="info">
				<h5>Permintaan akses VIP anda sedang di proses. Hubungi admin untuk info lebih lanjut.</h5>
			</div>
		<?php } else { ?>
		<h3 class="text-center">Upgrade Member VIP</h3>
		<hr>
		<ul class="fitur">
			<li><i class="pe-7s-check"></i> Bebas Iklan</li>
			<li><i class="pe-7s-check"></i> Bayar satu kali, fitur aktif selamanya</li>
			<li><i class="pe-7s-check"></i> Dan masih banyak lagi</li>
		</ul>
		<br>
		<div class="harga wow tada" data-wow-delay="1.5s">
			<small>hanya</small>
			<h1>Rp 89.000,-</h1>
			<b><small>aktif selamanya</small></b>
		</div>
		<br>
		<form method="post" action="<?php echo URL ?>profil/requestVip">
			<input type="hidden" name="id" value="<?php echo $info[0]['id'] ?>">
			<button type="submit" class="btn bg-white wow bounceInUp" data-wow-delay="2.5s">Upgrade Sekarang</button>
		</form>
		<?php } ?>
	</div>
</body>
</html>