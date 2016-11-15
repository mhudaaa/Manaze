<body>
	<div id="page" class="wow fadeIn"> 	

		<header class="upper">
			<div class="menu"><a href="<?php echo URL ?>pengeluaran"><i class="pe-7s-angle-left"></i></a></div>
			Edit Pengeluaran
			<div class="close"><a href="<?php echo URL ?>dashboard"><i class="pe-7s-close"></i></a></div>
		</header>
		<div class="with-header">
			<div id="wrapper">
				<form autocomplete="off" method="post" action="<?php echo URL ?>pengeluaran/simpanData">
					<table class="table-icon">
						<tr>
							<td><i class="pe-7s-date color-yellow"></i></td>
							<td><input type="text" name="" value="<?php echo date("d-m-Y"); ?>" disabled=""></td>
						</tr>
						<tr>
							<td><i class="pe-7s-cash"></i></td>
							<td><input type="number" name="jumlah" placeholder="Jumlah (Rp)" value="<?php echo $pengeluaran[0]['jumlah'] ?>" maxlength="10"></td>
						</tr>
						<tr>
							<td><i class="pe-7s-note2"></i></td>
							<td><input type="text" name="keterangan" placeholder="Keterangan" value="<?php echo $pengeluaran[0]['keterangan'] ?>" maxlength="30"></td>
						</tr>
					</table>					
					<input type="hidden" name="no_pengeluaran" value="<?php echo $pengeluaran[0]['no_pengeluaran'] ?>">			
					<input class="btn bg-yellow" type="submit" value="simpan">
				</form>
			</div>
		</div>
	</div>
</body>
</html>