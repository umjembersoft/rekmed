<?php 
session_start();
if (!empty ($_SESSION[username]) AND !empty ($_SESSION[passuser])){ 
	if($konek=mysql_connect("localhost","root","")) {
		if ($db=mysql_select_db("medikclient")) {
			$nama=$_POST['hospitalname'];
			$url=$_POST['urlhospital'];
			$user=$_POST['username'];
			$pass=md5($_POST['pass']);
			$status='hospital';
			
			if(!empty($nama) and !empty($url) and !empty($user) and !empty($pass)) {
				$query = @mysql_query("INSERT INTO alamat (nama_rs, host_rs) VALUES ('$nama','$url')");
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
<form action='?mod=Hospital&id=2' method='POST'>
	<table align='center'>
		<tr>
			<td width='130'>Nama Rumah Sakit</td>
			<td width='10'>:</td>
			<td><input type='text' name='hospitalname' size='30'/></td>
		</tr>
		<tr>
			<td>URL Rumah Sakit</td>
			<td>:</td>
			<td><input type='text' name='urlhospital' size='30'/></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type='text' name='username' size='25'/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type='password' name='pass' size='25'/></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
				<input type='submit' name='Tambah' value='Tambah'>
				<input type='reset' name='Reset'>
			</td>
		</tr>
	</table>
</form>