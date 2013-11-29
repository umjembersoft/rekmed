<?php
if($konek=mysql_connect("localhost","root","")) {
	if ($db=mysql_select_db("medikclient")) {
		$pass=md5($_POST[pass]);
		$uname=$_POST[username];
		$cek=@mysql_query("SELECT * FROM pengguna WHERE nama='$uname' AND pass='$pass'");
		$ketemu=mysql_num_rows($cek);
		$data=mysql_fetch_array($cek);

		if ($ketemu > 0) {
			SESSION_start();
			SESSION_register("username");
			SESSION_register("passuser");
			SESSION_register("status");
	
			$_SESSION[username]=$data['nama'];
			$_SESSION[passuser]=$data['pass'];
			$_SESSION[status]=$data['status'];
		} else {
			header('location:index.php?error=1');
		}

		if (!empty ($_SESSION[username]) and !empty ($_SESSION[passuser])){ 
			if ($_SESSION[status]=='admin') {
				header('location:admin.php');
			} else {
				header('location:member.php');
			}
		} else { 
			header('location:index.php?error=1');
		} 
	} else {
		echo "Database tidak konek";
	}
} else {
	echo "Database tidak konek";
}
?>