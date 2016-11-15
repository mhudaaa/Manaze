<body>
	<div id="page" class="wow fadeInRight">
	
		<header class="upper">
			<div class="menu"><a href="#menu"><i class="pe-7s-menu"></i></a></div>
			Pemasukan
			<div class="close"><a href="<?php echo URL; ?>dashboard"><i class="pe-7s-close"></i></a></div>
		</header>
		<div id="pesan" class="sukses">
			<?php 
				echo Session::get('pesan'); 
				Session::set('pesan', ''); 
			?>
		</div>
		<div class="covers">
			<img src="<?php echo URL ?>public/img/cover/pemasukan.jpg">
		</div>
		<div class="with-header">
			<?php
    			foreach($pemasukan as $pemasukan) {    			
    		?>
			<div class="subheader">
				<table>
					<tr class="color-yellow">
						<td><i class="pe-7s-note2"></i> <?php echo $pemasukan['bln'] ?></td>
						<?php
						$jumlah = 0;
						foreach ($pemasukan['list'] as $list) {
							$jumlah += $list['jumlah'];
						} ?>
						<td>Rp <?php echo number_format($jumlah, 0, ",", "."); ?>,-</td>
					</tr>
				</table>
			</div>

			<div id="wrapper">
				<table class="detail">
						<?php foreach ($pemasukan['list'] as $list) { 
							$id = $list['no_pemasukan'];
						?>
							
						<tr>
							<td width="90%;"><h2><?php echo number_format($list['jumlah'], 0, ",", "."); ?>,-</h2><?php echo $list['keterangan'] ?></td>
							<td>
								
								<!-- <a href="<?php URL; ?>pemasukan/hapusPemasukan/<?php $id ?>"><i class="pe-7s-trash"></i></a> -->
								<table class="action">
									<tr>
										<td></td>
										<td>
											<form method="post" action="<?php URL; ?>pemasukan/edit">
												<input type="hidden" name="id" value="<?php echo $id ?>">
												<button type="submit" class="btn-trans"><i class="pe-7s-pen"></i></button>
											</form> 
										</td>
										<td>
											<form method="post" action="<?php URL; ?>pemasukan/hapusPemasukan">
												<input type="hidden" name="id" value="<?php echo $id ?>">
												<button type="submit" onclick="return confirm('Hapus pemasukan?')" class="btn-trans"><i class="pe-7s-trash"></i></button>
											</form> 
										</td>
									</tr>
									<tr>
										<td colspan="3">
											<small style="font-size:10px;margin-top:-10px;display:block"><?php echo date('d M', strtotime($list['tgl_masuk'])); ?></small>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<?php } ?>

				</table>
			</div>
		</div>

		<?php }	?>		
	</div>	
</body>
</html>