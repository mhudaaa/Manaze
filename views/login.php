<body class="bg-white-img">
	<div class="close"><a href="<?php echo URL; ?>"><i class="pe-7s-close"></i></a></div>
	<div id="wrapper" class="wow fadeInUp">
		<div class="logo">
			<img class="center" src="<?php echo URL; ?>public/img/logo.png">
		</div>
		<?php 
			echo Session::get('pesan'); 
			Session::set('pesan', ''); 
		?>
		<form autocomplete="off" method="post" action="login/run">
			<table class="table-icon">
				<tr>
					<td><i class="pe-7s-mail"></i></td>
					<td><input type="email" name="email" placeholder="Email" maxlength="50"></td>
				</tr>
				<tr>
					<td><i class="pe-7s-key"></i></td>
					<td><input type="password" name="password" placeholder="Password" maxlength="10"></td>
				</tr>
			</table>
			<input class="btn bg-yellow" type="submit" value="login">
		</form>
		<div class="text-center">
			<small>Belum punya akun? <a href="<?php echo URL; ?>register"><b>Daftar</b></a></small>
		</div>
	</div>	
</body>
</html>