<?php
    echo "Edit masalah di sini. <br /><br />";
	
	echo form_open('masalah_controller/processEdit');
	
	echo form_hidden('id', $masalah['id']);
	
	echo form_label('Deskripsi masalah: ');
	echo form_input('deskripsi', $masalah['deskripsi']);
	
	echo form_label('Deadline penyelesaian masalah: ');
	echo form_input('deadline', $masalah['deadline']);
	
	echo form_submit('submission_masalah', 'Submit Masalah');
	
	echo form_close();
	
	echo '<br /><a href="'. site_url() .'/masalah_controller">[kembali]</a> ';
?>