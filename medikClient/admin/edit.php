<?php 
session_start();
if (!empty ($_SESSION[username]) AND !empty ($_SESSION[passuser])){ 
	if($konek=mysql_connect("localhost","root","")) {
		if ($db=mysql_select_db("medikclient")) {
			$aksi=$_GET['aksi'];
			$id=$_GET['id'];
			if (!$aksi) {
				$query = mysql_query("SELECT * FROM alamat WHERE id='$id'");
				$row=mysql_fetch_array($query);
			} else {
				$hospital=$_POST['hospital'];
				$url=$_POST['url'];
				$query = mysql_query("UPDATE alamat SET nama_rs='$hospital', host_rs='$url' WHERE id='$id'");
				$query = mysql_query("SELECT * FROM alamat WHERE id='$id'");
				$row=mysql_fetch_array($query);
			}
		} else {
		echo "Database tidak konek";
		}
	} else {
		echo "Database tidak konek";
	}
}
?>
<form action='?mod=edit&id=<?echo $row['id'];?>&aksi=ganti' method='POST'>
	<table align='center'>
		<tr>
			<td>Nama Rumah Sakit</td>
			<td><input type='text' name='hospital' value='<?echo $row['nama_rs'];?>'/></td>
		</tr>
		<tr>
			<td>URL Rumah Sakit</td>
			<td><input type='text' name='url' value='<?echo $row['host_rs'];?>'/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type='submit' name='submit' value='Simpan'/></td>
		</tr>
	</table>
</form>