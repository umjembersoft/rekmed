<?php
//Panggil metode SOAP dengan parameter nama
$result = $client->call('cariData', array('nama_pasien' => $param, 'kategori' => $kat));
//Tampilkan hasilnya
if ($kat==1) {
	$kategori='Rawat Inap';
} else {
	$kategori='Rawat Jalan';
}
 
if ($result) {
	$i=count($result);
	echo "<table align='center' cellspacing='1'>";
	echo "<tr>";
	echo "<th>No</th>";
	echo "<th>Nama</th>";
	echo "<th>Alamat</th>";
	echo "<th>Lokasi</th>";
	echo "<th>Kategori</th>";
	//echo "<th>Detail</th>";
	echo "</tr>";
	for($x=0; $x<$i; $x++) {
		$no=$x+1;
		echo "<tr>";
		echo "<td align='center'>".$no."</td>";
		if ($param=' ') {
			$param=$result[$x]['Nama'];
		}
		echo "<td align='center'>
		<a href=?mod=cari&lokasi=".$namaRS."&detail=".$result[$x]['Detail']."&array=".$x."&kat=".$kat."&nama=".$param.">".$result[$x]['Nama']."</a></td>";
		echo "<td align='center'>".$result[$x]['Alamat']."</td>";
		echo "<td align='center'>".$row['nama_rs']."</td>";
		echo "<td align='center'>".$kategori."</td>";
		//echo "<td align='center'></td>";
		echo "</tr>";
	}
	echo "</table>";
} else {
	echo "<p>Data Tidak Ditemukan</p>";
}
?>