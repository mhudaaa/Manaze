<body class="profile">
	<div class="wow fadeIn">
		<header class="upper">
			<div class="menu"><a onclick="history.go(-1)" class="color-white"><i class="pe-7s-angle-left"></i></a></div>
			<div class="text-center">Detail Member</div>
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
		<div id="wrapper">
			<div class="profile-wrapper">
				<h5>Tanggal Registrasi</h5>
				<h3 class="color-yellow"><?php echo date('d M Y', strtotime($info[0]['tgl_daftar'])); ?></h3>
				<h5>Status</h5>
				<h3 class="color-yellow">
					<?php 
						if($info[0]['status'] == 0) {
							echo "Member";
						} elseif($info[0]['status'] == 1) {
							echo "Pending VIP";
						} elseif($info[0]['status'] == 2) {
							echo "VIP";
						}
					?>
				</h3>
				<form method="post" action="<?php echo URL ?>admin/hapusMember">
					<input type="hidden" name="id" value="<?php echo $info[0]['id'] ?>">
					<button type="submit" onclick="return confirm('Hapus member?')" class="btn bg-red"><i class="pe-7s-trash left"></i> Hapus Member</button>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">

	</script>
</body>
</html>