<?php
    echo "Edit berita di sini." . br(2);
	
	echo form_open('berita_controller/processEdit');
	
	echo form_hidden('id', $berita['id']);
	
	echo form_label('Deskripsi: ');
	echo form_input('deskripsi', $berita['deskripsi']);
	echo br(1);
	
	$options = array(TRUE => 'Darurat', FALSE => 'Biasa');
	
	echo form_label('Status: ');
	echo form_dropdown('status', $options, $berita['status']);
	echo br(1);
	
	$options = array(TRUE => 'Daerah Bencana', FALSE => 'Umum');
	
	echo form_label('Tujuan: ');
	echo form_dropdown('tujuan', $options, $berita['tujuan']);
	echo br(1);
	
	echo form_submit('submission_berita', 'Submit berita');
	
	echo form_close();
	
	echo br(2);
	echo '<a href="'. site_url() .'/berita_controller">[kembali]</a> ';
?>