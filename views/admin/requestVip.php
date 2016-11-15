	<div id="page" class="wow fadeInRight">
	
		<header class="upper">
			<div class="menu"><a href="#menu"><i class="pe-7s-menu"></i></a></div>
			Request VIP
			<div class="close"><a href="<?php echo URL; ?>dashboard"><i class="pe-7s-close"></i></a></div>
		</header>
		<div class="with-header">
			<div id="pesan" class="sukses">
				<?php 
					echo Session::get('pesan'); 
					Session::set('pesan', ''); 
				?>
			</div>
			<div class="subheader">
				<table>
					<tr class="color-yellow">
						<td><i class="pe-7s-diamond"></i> Request VIP</td>
						<td><?php echo $jumlah[0]['jumlah']?> Member</td>
					</tr>
				</table>
			</div>

			<div id="wrapper">
				<table class="detail">	
						<?php
							$no = 1; 
							foreach ($info as $member) {
						?>						
						<tr>
							<td>
								<div class="no"><?php echo $no; ?></div>
							</td>
							<td width="99%">
								<b><?php echo $member['nama'] ?></b>
								<br>
								<i>Member sejak <?php echo date('d M Y', strtotime($member['tgl_daftar'])) ?></i>
							</td>
							<td>
								<table class="action">
								<tr>
									<td>
										<form method="post" action="<?php URL; ?>vipApprove">
											<input type="hidden" name="id" value="<?php echo $member['id'] ?>">
											<button type="submit" onclick="return confirm('Setujui VIP?')" class="btn-trans"><h2><i class="pe-7s-check color-green"></i></h2></button>
										</form> 
									</td>
									<td>
										<form method="post" action="<?php URL; ?>vipDelete">
											<input type="hidden" name="id" value="<?php echo $member['id'] ?>">
											<button type="submit" onclick="return confirm('Hapus Permintaan?')" class="btn-trans"><h2><i class="pe-7s-close-circle"></i></h2></button>
										</form> 
									</td>
								</tr>
							</table>
							</td>
						</tr>
						<?php $no++; } ?>
				</table>
			</div>
		</div>

	</div>	
</body>
</html>