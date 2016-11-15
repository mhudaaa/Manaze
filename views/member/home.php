<body>
	<div id="page" class="">
		<header class="upper">
			<div class="menu"><a href="#menu"><i class="pe-7s-menu"></i></a></div>
			Manaze 
		</header>
		<div class="logo">
			<img class="center" src="<?php echo URL; ?>public/img/logo.png">
		</div>
		<?php 
			Session::init();
			echo $_SESSION['loggedIn']; 
			echo $_SESSION['status']; 
		?>
	</div>
</body>
</html>
