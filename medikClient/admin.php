<?php
session_start();
if (!empty ($_SESSION[username]) and !empty ($_SESSION[passuser])){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<title>
Rekam Medik Online - Halaman Admin
</title>
<link rel='stylesheet' href='css/admin-style.css' type='text/css'/>
</head>
<body>
<div id='wrapper'>
	<div id='header'>
	</div>
	<div id='page'>
		<div id='page-bgtop'>
			<div id='sidebar'>
				<div id='menuheader'>
				</div>
				<div id='submenu'>
					<a href="?mod=Member">Register Member</a>
				</div>
				<div id='submenu'>
					<a href="?mod=Hospital">Register Rumah Sakit</a>
				</div>
				<div id='submenu'>
					<a href="?mod=update">Update Data</a>
				</div>
				<div id='submenu'>
					<a href="logout.php">Keluar</a>
				</div>
			<div style="clear: both;">&nbsp;</div>
			</div>
			<div id='content'>
				<?php
					$id=$_GET['mod'];
					if(!$id) {?>
						<h2>SELAMAT DATANG DI HALAMAN ADMIN</h2>
					<?
					} else {
						if ($id=='Member') {
							$id='daftarMember';
						} else if ($id=='Hospital'){
							$id='daftarHospital';
						} 
						include("admin/{$id}.php");
					}
				?>
				<div style="clear: both;">&nbsp;</div>
			</div>
			<div style="clear: both; height: 10px"></div>
		</div>
	</div>
	<div id='footer'>
	</div>
</div>
</body>
</html>
<?php
} else {
	echo "Mau coba - coba lewat jalan ga bener ya...";
}
?>