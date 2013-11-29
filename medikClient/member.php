<?php
session_start();
if (!empty ($_SESSION[username]) and !empty ($_SESSION[passuser])){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<title>
<?php echo "Selamat Datang ".$_SESSION['username']." - Rekam Medik Online -= WEB SERVICE =-";?>
</title>
<link rel='stylesheet' href='css/member-style.css' type='text/css'/>
</head>
<body>
<div id='wrapper'>
	<div id='header'>
	</div>
	<div id='status'>
		<p><?php echo "Selamat Datang ".$_SESSION['username']." | <a href='logout.php'>Logout</a>";?></p>
	</div>
	<div id='tengah'>
		<div id='search'>
			<?php include("include/cariForm.html");?>
		</div>
		<div id='admin'>
		</div>
	</div>
	<div id='result'>
		<?php
			$id=$_GET['mod'];
			if (!$id) {} else {
			include ("client.php");}
		?>
		<p><a href='logout.php'>Logout</a></p>
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