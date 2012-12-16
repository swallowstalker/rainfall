<?php 
	echo 'Detail untuk ID: ' . $kondisi['id'] . br(2);
	echo 'Nama daerah: ' . $kondisi['nama_daerah'] . br(1);
	
	echo 'Ketersediaan air: ';
	echo $kondisi['air']?'Tersedia':'Tidak tersedia';
	echo br(1);
	echo 'Ketersediaan makanan: ';
	echo $kondisi['makanan']?'Tersedia':'Tidak tersedia';
	echo br(1);
	echo 'Ketersediaan listrik: ';
	echo $kondisi['listrik']?'Tersedia':'Tidak tersedia';
	echo br(1);
	echo 'Ketersediaan komunikasi: ';
	echo $kondisi['komunikasi']?'Tersedia':'Tidak tersedia';
	echo br(1);
	echo 'Ketersediaan medis: ';
	echo $kondisi['medis']?'Tersedia':'Tidak tersedia';
	echo br(1);
	
	echo 'Total pengungsi: ' . $kondisi['total_pengungsi'] . br(1);
	echo 'Korban sakit ringan: ' . $kondisi['korban_sakit_ringan'] . br(1);
	echo 'Korban sakit berat: ' . $kondisi['korban_sakit_berat'] . br(1);
	echo 'Korban tewas: ' . $kondisi['korban_tewas'] . br(1);
	echo 'Terakhir update: ' . $kondisi['update_terakhir'] . br(2);
	
	echo ' <a href="'. site_url() .'/kondisi_controller/formEdit/'. $kondisi['id'] .'">[edit]</a> ';
	echo ' <a href="'. site_url() .'/kondisi_controller/delete/'. $kondisi['id'] .'">[delete]</a> ';
	echo '<br /><br />';
	echo ' <a href="'. site_url() .'/kondisi_controller">[kembali]</a> ';
?>
