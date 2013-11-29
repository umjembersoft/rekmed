<?php

// ambil kode nusoap

require_once('lib/nusoap.php');

// buat instansiasi klien, perhatikan urlnya
if($konek=mysql_connect("localhost","root","")) {
	if ($db=mysql_select_db("medikclient")) {
		if(!$_GET['lokasi']){
			$namaRS=$_POST['rs'];
		}else{
			$namaRS=$_GET['lokasi'];
		}
		$query = mysql_query("SELECT * FROM alamat WHERE id='$namaRS'");
		$row = mysql_fetch_array($query);
		$url=$row['host_rs'];
		$client = new nusoap_client($url);

		if (!$client) {echo "<p>Server Sedang Tidak Konek</p>";}
		$err = $client->getError();
		if ($err) {
			echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
		}

		$id=$_GET['detail'];
		if (!$id) {
			$param=$_GET['nama'];
			$kat=$_GET['kat'];
			if ((!$param)&&(!$kat)) {
				$param=$_POST['nama_pasien'];
				$kat=$_POST['kategori'];
			}
			if ($param=='') {
				echo "<p>Masukkan Kata Kunci</p>";
			} else {
				include("include/show_cari.php");
			}
		} else {
			include("include/show_detail.php");
		}
	} else {
		echo "Database tidak konek";
	}
} else {
	echo "Database tidak konek";
}
?>
