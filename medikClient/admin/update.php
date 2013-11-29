<?php
session_start();
if (!empty ($_SESSION[username]) AND !empty ($_SESSION[passuser])){ 
	if($konek=mysql_connect("localhost","root","")) {
		if ($db=mysql_select_db("medikclient")) {
			$query = mysql_query("SELECT * FROM alamat ORDER BY id ASC");	
		} else {
		echo "Database tidak konek";
		}
	} else {
		echo "Database tidak konek";
	}
}
?>
<table align='center' cellspacing='1' border='1'>
	<tr>
		<td align='center'>No</td>
		<td align='center'>Rumah Sakit</td>
		<td align='center'>URL Rumah Sakit</td>
		<td align='center'>Aksi</td>
	</tr>
	<?
	$no=1;
	while ($row=mysql_fetch_array($query)) {
		echo "<tr>";
		echo "<td align='center'>".$no."</td>";
		echo "<td align='center'>".$row['nama_rs']."</td>";
		echo "<td align='center'>".$row['host_rs']."</td>";
		echo "<td align='center'><a href='?mod=edit&id=".$row['id']."'>Edit</a>|<a href='?mod=hapus&id=".$row['id']."'>Hapus</a></td>";
		echo "</tr>";
		$no++;
		}
	?>
</table>