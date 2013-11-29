<?php
session_start();
unset($_SESSION[username]);
session_destroy();?>
<script language="javascript">
setTimeout('window.location.href="index.php"',5000);
</script>
<?
echo("<center>Anda telah sukses keluar sistem <b>[LOGOUT]<b><BR><BR>");
echo("<a href='index.php'><b>Dalam 5 Detik, anda akan kembali ke halaman utama</a></b></center>");
?>
<title>Terima Kasih</title>
