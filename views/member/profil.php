<body class="profile">
	<div class="wow fadeIn">
		<header class="upper">
			<div class="menu"><a href="<?php echo URL; ?>dashboard" class="color-white"><i class="pe-7s-angle-left"></i></a></div>
			<div class="text-center">Profil</div>
			<div class="close"><a href="<?php echo URL; ?>profil/edit" class="color-white">Edit</a></div>
		</header>
		<div class="cover">
			<div class="photo">
				<img src="<?php echo URL ?>public/img/avatar/<?php echo $info[0]['avatar'] ?>.jpg">
			</div>
			<div>
				<h4 class="bold"><?php echo $info[0]['nama'] ?></h4>
				<small class="color-white"><?php echo $info[0]['email'] ?></small>
			</div>
		</div>
		<div id="pesan" class="sukses">
			<?php 
				echo Session::get('pesan'); 
				Session::set('pesan', ''); 
			?>
		</div>
		<div id="wrapper">
			<div class="profile-wrapper">
				<h5>Pemasukan Terbesar</h5>
				<h3 class="color-yellow">Rp <?php echo number_format($pemasukan[0]['jumlah'], 0, ",", "."); ?>,-</h3>
				<hr>
				<h5>Pengeluaran Terbesar</h5>
				<h3 class="color-yellow">Rp 
				<?php
					echo number_format($pengeluaran[0]['jumlah'], 0, ",", "."); 
				?>
				,-</h3>
				<?php if ($info[0]['status'] == 0) { ?>
				<a href="<?php echo URL; ?>profil/vip"><button class="btn bg-yellow"><i class="pe-7s-diamond left"></i> Upgrade to VIP</button></a>
				<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>