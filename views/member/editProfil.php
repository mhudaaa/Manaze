<body>
	<div id="page" class="wow fadeIn"> 	

		<header class="upper">
			<div class="menu"><a href="<?php echo URL ?>profil"><i class="pe-7s-angle-left"></i></a></div>
			Edit Profil
			<div class="close"><a href="<?php echo URL ?>dashboard"><i class="pe-7s-close"></i></a></div>
		</header>
		<div class="with-header">
			<div id="wrapper">
				<form autocomplete="off" method="post" action="<?php echo URL ?>profil/simpanData">
					<table class="table-icon">
						<tr>
							<td><i class="pe-7s-id"></i></td>
							<td><input type="nama" name="nama" value="<?php echo $info[0]['nama'] ?>" placeholder="Nama" maxlength="20"></td>
						</tr>
						<tr>
							<td><i class="pe-7s-mail"></i></td>
							<td><input type="email" name="email" value="<?php echo $info[0]['email'] ?>" placeholder="Email Baru" maxlength="50"></td>
						</tr>
						<tr>
							<td><i class="pe-7s-user"></i></td>
							<td><input type="text" name="" placeholder="Avatar" disabled=""></td>
						</tr>
					</table>
					<table class="avatar">
						<tr>
							<td>
								<input type="radio" name="avatar" value="1" id="a" selected>
								<label for="a"><img src="<?php echo URL ?>public/img/avatar/1.jpg"></label>
							</td>
							<td>
								<input type="radio" name="avatar" value="2" id="b">
								<label for="b"><img src="<?php echo URL ?>public/img/avatar/2.jpg"></label>
							</td>
							<td>
								<input type="radio" name="avatar" value="3" id="c">
								<label for="c"><img src="<?php echo URL ?>public/img/avatar/3.jpg"></label>
							</td>
							<td>
								<input type="radio" name="avatar" value="4" id="d">
								<label for="d"><img src="<?php echo URL ?>public/img/avatar/4.jpg"></label>
							</td>
						</tr>
						<tr><td style="padding:5px;"></td></tr>
						<tr>
							<td>
								<input type="radio" name="avatar" value="5" id="e">
								<label for="e"><img src="<?php echo URL ?>public/img/avatar/5.jpg"></label>
							</td>
							<td>
								<input type="radio" name="avatar" value="6" id="f">
								<label for="f"><img src="<?php echo URL ?>public/img/avatar/6.jpg"></label>
							</td>
							<td>
								<input type="radio" name="avatar" value="7" id="g">
								<label for="g"><img src="<?php echo URL ?>public/img/avatar/7.jpg"></label>
							</td>
							<td>
								<input type="radio" name="avatar" value="8" id="h">
								<label for="h"><img src="<?php echo URL ?>public/img/avatar/8.jpg"></label>
							</td>
						</tr>
					</table>
					<input type="hidden" name="id" value="<?php echo $info[0]['id'] ?>">
					<input class="btn bg-yellow" type="submit" value="simpan">
				</form>
			</div>
		</div>
	</div>
</body>
</html>