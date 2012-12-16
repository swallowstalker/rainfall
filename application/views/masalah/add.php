<?php
    echo "Tambah masalah di sini. " . br(2);
	
	echo form_open('masalah_controller/processAdd');
	
	echo form_label('Deskripsi masalah: ');
	echo form_input('deskripsi', 'Deskripsi');
	echo br(1);
	
	echo form_label('Deadline penyelesaian masalah: ');
	echo form_input('deadline', 'Deadline');
	echo br(1);
	
	echo form_submit('submission_masalah', 'Submit Masalah');
	
	echo form_close();
	
	echo br(1);
	echo '<a href="'. site_url() .'/masalah_controller">[kembali]</a> ';
?>