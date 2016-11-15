<body class="bg-yellow">
	<div id="wrapper" class="wow fadeInUp">
		<div class="close"><a href="<?php echo URL; ?>"><i class="pe-7s-close"></i></a></div>
		<div class="logo">
			<img class="center" src="<?php echo URL; ?>public/img/logo-white.png">
		</div>
		<?php 
			echo Session::get('pesan'); 
			Session::set('pesan', ''); 
		?>
		<form autocomplete="off" method="post" action="<?php echo URL ?>register/add">
			<table class="table-icon">
				<tr>
					<td><i class="pe-7s-user"></i></td>
					<td><input type="text" name="nama" placeholder="Nama" maxlength="15"></td>
				</tr>
				<tr>
					<td><i class="pe-7s-mail"></i></td>
					<td><input type="email" name="email" placeholder="Email" maxlength="50"></td>
				</tr>
				<tr>
					<td><i class="pe-7s-key"></i></td>
					<td><input type="password" name="password" placeholder="Password" maxlength="10"></td>
				</tr>
				<tr>
					<td><i class="pe-7s-check"></i></td>
					<td><input type="password" name="cpassword" placeholder="Ulangi Password" maxlength="10"></td>
				</tr>
			</table>
			<input class="btn bg-white" type="submit" value="Register">
		</form>
		<div class="text-center">
			<small>Sudah punya akun? <a href="<?php echo URL; ?>login"><b>Login</b></a></small>
		</div>

	</div>
</body>
</html>