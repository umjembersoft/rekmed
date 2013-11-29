<?php  
session_start();
if (!empty ($_SESSION[username]) AND !empty ($_SESSION[passuser])){ 
	if($konek=mysql_connect("localhost","root","")) {
		if ($db=mysql_select_db("medikclient")) {
			$id=$_GET['id'];
			$query = mysql_query("DELETE FROM alamat WHERE id='$id'");
			echo "<p>Data berhasil dihapus</p>";
			echo "<p><a href='?mod=update'>[kembali]</a></p>";
			}
		} else {
		echo "Database tidak konek";
		}
	} else {
		echo "Database tidak konek";
	}
?>