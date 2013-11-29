<?php
session_start();
if (!empty ($_SESSION[username]) AND !empty ($_SESSION[passuser])){ 
	if($konek=mysql_connect("localhost","root","")) {
		if ($db=mysql_select_db("medikclient")) {
			$user=$_POST['username'];
			$pass=md5($_POST['pass']);
			$status='user';
			
			if(!empty($user) and !empty($pass)) {
				$query = mysql_query("INSERT INTO pengguna (nama, pass, status) VALUES ('$user','$pass','$status')");
			} 
		} else {
			echo "Database tidak konek";
		}
	} else {
		echo "Database tidak konek";
	}
}	
?>
<form action='?mod=Member&id=1' method='POST'>
	<table align='center'>
		<tr>
			<td width='70'>Username</td>
			<td width='10'>:</td>
			<td><input type='text' name='username' size='25'/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td width='10'>:</td>
			<td><input type='password' name='pass' size='25'/></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td></td>
			<td><input type='submit' name='Tambah' value='Tambah'></td></tr>
		</tr>
	</table>
</form>
<p><?php 
	if($_GET['status']) {
		if ($_GET['status']==1) {
			echo "Data berhasil dimasukkan";
		} else {
			echo "Data harus di isi";
		}
	}
	?>
</p>