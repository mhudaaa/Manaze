	<div id="page" class="wow fadeInRight">
	
		<header class="upper">
			<div class="menu"><a href="#menu"><i class="pe-7s-menu"></i></a></div>
			Daftar Member
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
						<td><i class="pe-7s-note2"></i> Member</td>
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
							<td>
								<a href="<?php echo URL ?>admin/detail?id=<?php echo $member['id'] ?>"><b><?php echo $member['nama'] ?></b></a>
								<br>
								<i><?php echo $member['email'] ?></i>
							</td>
							<td>
								<?php
									if ($member['status'] == 2) {
										echo "<span class='vip'>VIP</span>";
									} elseif ($member['status'] == 1) {
										echo "<span class='pending'>PENDING</span>";
									}
								?>
							</td>
						</tr>
						<?php $no++; } ?>
				</table>
			</div>
		</div>
	</div>	
</body>
</html>