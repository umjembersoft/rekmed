<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html> 
<head>
<title>Rekam Medik Online - Kesehatan Anda Lebih Berharga Dari Materi Apapun -= WEB SERVICE =-</title>
<link rel="stylesheet" href="CSS/front-style.css" type="text/css"/>
</head>
<body>
	<div id='wrapper'> 
		<div id='header'> 
		</div>
		<div id='content'>
			<div id='kiri'>
				<div id='menu-kiri'>
					<ul>
						<li><a href='?mode=home'>Home</a></li>
						<li><a href='?mode=register'>Register</a></li>
						<li><a href='?mode=about'>About US</a></li>
						<li><a href='?mode=kontak'>Contact Us</a></li>
						<li><a href='?mode=faq'>FAQ</a></li>
					</ul>
				</div>
				<div id='isi-kiri'>
					<?	
						$mode=$_GET['mode'];
						if(!$mode) {
							$mode='home';
						}
					?>
					<p><? include("include/{$mode}.php");?></p>
				</div>
			</div>
			<div id='kanan'>
				<div id='header-kanan'>
					<h3> MENU LOGIN </h3>
				</div>
				<div id='login'>
					<?php include("include/loginForm.html");?>
					<p><?php if($_GET['error']==1){echo "Username dan password salah";}?></p>
				</div>
			</div>
		</div>
		<div id='footer'>
		</div>
	</div>
</body>
</html>