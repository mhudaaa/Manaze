<body>
	
	<div id="page">


		<header class="upper">
			<div class="menu"><a href="#menu"><i class="pe-7s-menu"></i></a></div>
			Tambah Data
			<div class="close"><a href="index.php"><i class="pe-7s-close"></i></a></div>
		</header>
		<div class="with-header">
			<div id="wrapper">
				<div id="mySliderTabs">
					<ul>
						<li><a href="#pemasukan">Pemasukan</a></li>
						<li><a href="#pengeluaran">Pengeluaran</a></li>
					</ul>

					<div id="pemasukan">
					    <h5 class="upper"><span class="color-yellow">Pemasukan : </span> <?php echo date("d-m-Y"); ?></h5>
						<form autocomplete="off" method="post" action="<?php echo URL ?>pemasukan/tambahData" autocomplete="off">
							<table class="table-icon">
								<tr>
									<td><i class="pe-7s-wallet"></i></td>
									<td><input type="number" name="jumlah" placeholder="Jumlah (Rp)" maxlength="10" required></td>
								</tr>
								<tr>
									<td><i class="pe-7s-note2"></i></td>
									<td><input type="text" name="keterangan" placeholder="keterangan" maxlength="30" required></td>
								</tr>
							</table>
							<input class="btn bg-yellow" type="submit" value="tambah">
						</form>
					</div>
				  	<div id="pengeluaran">
				    	<h5 class="upper"><span class="color-yellow">Pengeluaran :</span> <?php echo date("d-m-Y"); ?></h5>
						<form method="post" id="pengeluaran" action="<?php echo URL; ?>pengeluaran/tambahData" autocomplete="off">
							<table class="table-icon">
								<tr>
									<td><i class="pe-7s-wallet"></i></td>
									<td><input type="number" name="jumlah" placeholder="Jumlah (Rp)" maxlength="10" required></td>
								</tr>
								<tr>
									<td><i class="pe-7s-note2"></i></td>
									<td><input type="text" name="keterangan" placeholder="keterangan" maxlength="30" required></td>
								</tr>
								<!-- <tr>
									<td><i class="pe-7s-paperclip"></i></td>
									<td><input type="text" name="" placeholder="Kategori" disabled=""></td>
								</tr> -->
							</table>
							<!-- <table class="kategori">
								<tr>
									<td>
										<input type="radio" name="kategori" value="1" id="a">
										<label for="a"><i class="pe-7s-bicycle"></i></label>
									</td>
									<td>
										<input type="radio" name="kategori" value="2" id="b">
										<label for="b"><i class="pe-7s-coffee"></i></label>
									</td>
									<td>
										<input type="radio" name="kategori" value="3" id="c">
										<label for="c"><i class="pe-7s-shopbag"></i></label>
									</td>
									<td>
										<input type="radio" name="kategori" value="4" id="d">
										<label for="d"><i class="pe-7s-plug"></i></label>
									</td>
								</tr>
							</table> -->
							
							<input class="btn bg-yellow" type="submit" value="tambah">
						</form>
				  	</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			var slider = $("#mySliderTabs").sliderTabs({
			  autoplay: false,
			  mousewheel: true
			});
		</script>
	</div>
</body>
</html>