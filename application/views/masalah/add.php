<?php
    echo "Tambah masalah di sini. <br /><br />";
	
	echo form_open('masalah_controller/processAdd');
	
	echo form_label('Deskripsi masalah: ');
	echo form_input('deskripsi', 'Deskripsi');
	
	echo form_label('Deadline penyelesaian masalah: ');
	echo form_input('deadline', 'Deadline');
	
	echo form_submit('submission_masalah', 'Submit Masalah');
	
	echo form_close();
	
	echo '<br /><a href="'. site_url() .'/masalah_controller">[kembali]</a> ';
?>