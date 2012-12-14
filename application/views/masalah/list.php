<?php
	
	echo 'Daftar masalah: <br />';
	
    foreach ($listMasalah as $masalah) {
        echo $masalah['deskripsi'] . ', ';
		echo $masalah['deadline'] . ', ';
		if ($masalah['resolved']) {
			echo 'Sudah Selesai.';
		} else {
			echo 'Belum Selesai.';
		}
		
		echo ' <a href="'. site_url() .'/masalah_controller/detail/'. $masalah['id'] .'">[lihat detail]</a> ';
		echo ' <a href="'. site_url() .'/masalah_controller/formEdit/'. $masalah['id'] .'">[edit]</a> ';
		echo ' <a href="'. site_url() .'/masalah_controller/delete/'. $masalah['id'] .'">[delete]</a> ';
		echo ' <a href="'. site_url() .'/masalah_controller/mark/'. $masalah['id'] .'">[tandai sudah selesai]</a> ';
		echo '<br />';
    }
	
	echo '<br />';
	echo ' <a href="'. site_url() .'/masalah_controller/formAdd">[tambah masalah baru]</a> ';
?>