<?php

// Ambil kode nusoap

require_once('lib/nusoap.php');

// buat instance server

$server = new soap_server;

// daftar kan metode yang bisa diakses

$server->register('cariData');
$server->register('detailData');

// buat fungsi dari yang barusan didaftarin
function cariData($nama_pasien, $kategori) {
if (!$nama_pasien){
		return new nusoap_fault('Client', '', 'Harus ada nilainya!', '');
	}
	if($conn=mysql_connect("localhost","root","")){
		if ($db = mysql_select_db("haryoland_db")){ //memilih database rumah sakit haryoland
			$result = mysql_query("SELECT * FROM id_pasien WHERE kategori='$kategori' AND nama like '%$nama_pasien%'");
			$i=0;
			while ($row = mysql_fetch_array($result)){ //menyimpan data yang dicari kedalam array
				$Nama=$row['nama'];
				$hasil[$i]=array(
								'Nama' => $Nama,
								'Alamat' => $row['alamat'],
								'Tanggal' => $row['tgl_lahir'],
								'Status' => $row['status'],
								'Agama' => $row['agama'],
								'Detail' => $row['id_detail']
								);
				$i++;
			}
		} else {
			return new nusoap_fault('Database Server', '', 'Koneksi  ke database gagal!', '');
		}
	} else {
		return new nusoap_fault('Database Server', '', 'Koneksi  ke database gagal!', '');
	}
	return $hasil;
}

function detailData($id_detail) {
	if (!$id_detail){
		return new nusoap_fault('Client', '', 'Harus ada nilainya!', '');
		}
	if($conn=mysql_connect("localhost","root","")){
		if ($db = mysql_select_db("haryoland_db")){
			$result = mysql_query("SELECT * FROM lap_medis WHERE id_detail='$id_detail' ORDER BY tgl_lap ASC");
			$i=0;
			while ($row = mysql_fetch_array($result)) //menyimpan data yang dicari ke dalam array
			{
				$hasil[$i]=array(
								'Tanggal' => $row['tgl_lap'],
								'Diagnosa' => $row['diagnosa'],
								'Tindakan' => $row['tindakan'],
								'Petugas' => $row['petugas']
								);
				$i++;
			}
		} else {
			return new nusoap_fault('Database Server', '', 'Koneksi  ke database gagal!', '');
		}
	} else {
		return new nusoap_fault('Database Server', '', 'Koneksi  ke database gagal!', '');
	}
	return $hasil;
}
// gunakan request untuk mencoba memanggil service yang dibuka

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : ”;

$server->service($HTTP_RAW_POST_DATA);

?>

