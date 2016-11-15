<body>
	<div id="page" class="wow fadeInRight">

		<header class="upper">
			<div class="menu"><a href="#menu"><i class="pe-7s-menu"></i></a></div>
			Pengeluaran
			<div class="close"><a href="<?php echo URL; ?>dashboard"><i class="pe-7s-close"></i></a></div>
		</header>
		<div id="pesan" class="sukses">
			<?php 
				echo Session::get('pesan'); 
				Session::set('pesan', ''); 
			?>
		</div>
		<div class="with-header">
			<?php
    			foreach($pengeluaran as $pengeluaran) {    			
    		?>
			<div class="subheader">
				<table>
					<tr class="color-red">
						<td><i class="pe-7s-note2"></i> <?php echo $pengeluaran['bln'] ?></td>
						<?php
						$jumlah = 0;
						foreach ($pengeluaran['list'] as $list) {
							$jumlah += $list['jumlah'];
						} ?>
						<td>Rp <?php echo number_format($jumlah, 0, ",", "."); ?>,-</td>
					</tr>
				</table>
			</div>
			<div id="wrapper">
				<table class="detail">
					<?php foreach ($pengeluaran['list'] as $list) { ?>
					<tr>
						<td width="87%">
							<h2><?php echo number_format($list['jumlah'], 0, ",", "."); ?>,-</h2>
							<?php 
								echo $list['keterangan'];
								$id = $list['no_pengeluaran'];
							?>

						</td>
						<td>
							<table class="action">
								<tr>
									<td></td>
										<td>
											<form method="post" action="<?php URL; ?>pengeluaran/edit">
												<input type="hidden" name="id" value="<?php echo $id ?>">
												<button type="submit" class="btn-trans"><i class="pe-7s-pen"></i></button>
											</form> 
										</td>
									<td>
										<form method="post" action="<?php URL; ?>pengeluaran/hapusPengeluaran">
											<input type="hidden" name="id" value="<?php echo $id ?>">
											<button type="submit" onclick="return confirm('Hapus pengeluaran?')" class="btn-trans"><i class="pe-7s-trash"></i></button>
										</form> 
									</td>
								</tr>
								<tr>
									<td colspan="3">
										<small style="font-size:10px;margin-top:-15px;display:block"><?php echo date('d M', strtotime($list['tgl_pakai'])); ?></small>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
			<?php
				}
			?>
		</div>

	</div>
</body>
</html>