Detail untuk ID: <?php echo $masalah['id']; ?><br /><br />
Deskripsi masalah: <?php echo $masalah['deskripsi']; ?><br />
Deadline: <?php echo $masalah['deadline']; ?><br />
Status masalah: 
<?php
	if ($masalah['resolved']) {
		echo 'Sudah Selesai.';
	} else {
		echo 'Belum Selesai.';
	}
	echo '<br /><br />';
	
	echo ' <a href="'. site_url() .'/masalah_controller/formEdit/'. $masalah['id'] .'">[edit]</a> ';
	echo ' <a href="'. site_url() .'/masalah_controller/delete/'. $masalah['id'] .'">[delete]</a> ';
	echo ' <a href="'. site_url() .'/masalah_controller/mark/'. $masalah['id'] .'">[tandai sudah selesai]</a> ';
	echo '<br /><br />';
	echo ' <a href="'. site_url() .'/masalah_controller">[kembali]</a> ';
?>
