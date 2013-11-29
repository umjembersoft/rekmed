<?php
if($konek=mysql_connect("localhost","root","")) {
	if ($db=mysql_select_db("medikclient")) {
		$query = mysql_query("SELECT * FROM alamat ORDER BY id ASC");
		while ($row = mysql_fetch_array($query)){
			$id=$row['id'];
			$nama=$row['nama_rs'];
			echo "<option value='".$id."'>".$nama."</option>";
		}
	} else {
		echo "Database tidak konek";
	}
} else {
	echo "Database tidak konek";
}
?>