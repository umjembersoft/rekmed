<?php 
$detail = $client->call('detailData', array('id_detail'=>$id));
$param=$_GET['nama'];
$kat=$_GET['kat'];
$result = $client->call('cariData', array('nama_pasien' => $param, 'kategori' => $kat));
if ($kat==1) {
	$kategori='Rawat Inap';
} else {
	$kategori='Rawat Jalan';
}
if ($detail) {
	include("convTime.php");
	$x=$_GET['array'];
	$tgl=tanggal($result[$x]['Tanggal']);
	echo "<br/><i>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$result[$x]['Nama']."</i><br/>";
	echo "<i>Alamat &nbsp;&nbsp;&nbsp;&nbsp;: ".$result[$x]['Alamat']."</i><br/>";
	echo "<i>Tgl Lahir &nbsp;: ".$tgl."</i><br/>";
	echo "<i>Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$result[$x]['Status']."</i><br/>";
	echo "<i>Agama &nbsp;&nbsp;&nbsp;: ".$result[$x]['Agama']."</i><br/>";
	echo "<i>Lokasi &nbsp;&nbsp;&nbsp;&nbsp;: ".$row['nama_rs']."</i><br/>";
	echo "<i>Kategori : ".$kategori."</i><br/><br/>";
	$i = count($detail);
	echo "<table border=1 align='center'>";
	echo "<tr>";
	echo "<th>Tanggal</th>";
	echo "<th>Diagnosa</th>";
	echo "<th>Tindakan</th>";
	echo "<th>Petugas</th>";
	echo "</tr>";
	for($x=0; $x<$i; $x++) {
		$tgl=tanggal($detail[$x]['Tanggal']);
		echo "<tr>";
		echo "<td align='center'>".$tgl."</td>";
		echo "<td align='center'>".$detail[$x]['Diagnosa']."</td>";
		echo "<td align='center'>".$detail[$x]['Tindakan']."</td>";
		echo "<td align='center'>".$detail[$x]['Petugas']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "<p><a href=?mod=cari&lokasi=".$_GET['lokasi']."&nama=".$param."&kat=".$kat.">[ kembali ]</a></p>";
} else {
	echo "<p>Detail Data Tidak Ditemukan</p>";
	echo "<p><a href=?mod=cari&lokasi=".$_GET['lokasi']."&nama=".$param."&kat=".$kat.">[ kembali ]</a></p>";
}
?>