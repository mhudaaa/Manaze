<?php $status = Session::get('status'); ?>
	
	<nav id="menu">
		<ul>
			<li>
				<table class="lmenu">
					<tr>

						<td>
							<div class="foto-samping">
								<img src="<?php echo URL; ?>public/img/avatar/<?php echo $info[0]['avatar'] ?>.jpg">
							</div>
						</td>
						<td>
							<h5><?php echo $info[0]['nama'] ?></h5>
							<small><?php echo $info[0]['email'] ?></small><br>
							<?php if ($info[0]['status']  == 2) { ?>
								<span class="vip" style="display:block;margin-top:5px; width:15px">VIP</span>
							<?php } ?>
						</td>
					</tr>
				</table>
			</li>

			<?php 
				$status = Session::get('status');
				if ($status == 3) { ?>
					<li class="wow fadeInLeft" data-wow-delay=".2s"><a href="<?php echo URL; ?>dashboard"><i class="pe-7s-home"></i> Beranda</a></li>
					<li class="selected wow fadeInLeft" data-wow-delay=".4s"><a href="<?php echo URL; ?>admin/member"><i class="pe-7s-user"></i> Member</a></li>
					<li class="selected wow fadeInLeft" data-wow-delay=".6s"><a href="<?php echo URL; ?>admin/vip"><i class="pe-7s-diamond"></i> Request VIP
					<?php if($new[0]['jumlah'] > 0) { ?> 
						<span class="notif"><?php echo $new[0]['jumlah'] ?></span>
					<?php } ?>
					</a></li>
					<li class="wow fadeInLeft" data-wow-delay=".8s"><a href="<?php echo URL; ?>/dashboard/logout"><i class="pe-7s-close-circle"></i> Logout</a></li>
			<?php 
				} else {
			?>
				<li class="wow fadeInLeft" data-wow-delay=".2s"><a href="<?php echo URL; ?>dashboard"><i class="pe-7s-home"></i> Beranda</a></li>
				<li class="selected wow fadeInLeft" data-wow-delay=".4s"><a href="<?php echo URL; ?>pemasukan/tambah"><i class="pe-7s-plus"></i> Tambah data</a></li>
				<li class="wow fadeInLeft" data-wow-delay=".8s"><a href="<?php echo URL; ?>pemasukan"><i class="pe-7s-wallet"></i> Pemasukan</a></li>
				<li class="wow fadeInLeft" data-wow-delay="1s"><a href="<?php echo URL; ?>pengeluaran"><i class="pe-7s-junk"></i> Pengeluaran</a></li>
				<li class="wow fadeInLeft" data-wow-delay="1.2s"><a href="<?php echo URL; ?>profil"><i class="pe-7s-user"></i> Profil</a></li>
				<?php if($status == 0){ ?>
					<li class="wow fadeInLeft" data-wow-delay="1.4s"><a href="<?php echo URL; ?>profil/vip"><i class="pe-7s-diamond color-yellow"></i> Upgrade VIP</a></li>
				<?php }?>
				<li class="wow fadeInLeft" data-wow-delay="1.6s"><a href="<?php echo URL; ?>/dashboard/logout"><i class="pe-7s-close-circle"></i> Logout</a></li>
			<?php } ?>
		</ul>
	</nav>
	

