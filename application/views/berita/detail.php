<?php 
	echo 'Detail untuk ID: ' . $berita['id'] . br(2);
	echo 'Deskripsi: ' . $berita['deskripsi'] . br(1);
	
	echo 'Status: ';
	echo $berita['status']?'Darurat':'Biasa';
	echo br(1);
	
	echo 'Tujuan: ';
	echo $berita['tujuan']?'Daerah Bencana':'Umum';
	echo br(1);
	
	echo 'Update terakhir: ' . $berita['tanggal'] . br(2);
	
	echo ' <a href="'. site_url() .'/berita_controller/formEdit/'. $berita['id'] .'">[edit]</a> ';
	echo ' <a href="'. site_url() .'/berita_controller/delete/'. $berita['id'] .'">[delete]</a> ';
	echo br(2);
	echo ' <a href="'. site_url() .'/berita_controller">[kembali]</a> ';
?>
