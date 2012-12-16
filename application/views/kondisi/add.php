<?php
    echo "Tambah Kondisi di sini." . br(2);
	
	echo form_open('kondisi_controller/processAdd');
	
	echo form_label('Nama Daerah: ');
	echo form_input('nama_daerah', '');
	echo br(1);
	
	$options = array(TRUE => 'Tersedia', FALSE => 'Tidak Tersedia');
	
	echo form_label('Ketersediaan Air? ');
	echo form_dropdown('air', $options, TRUE);
	echo br(1);
	
	echo form_label('Ketersediaan Makanan? ');
	echo form_dropdown('makanan', $options, TRUE);
	echo br(1);
	
	echo form_label('Ketersediaan Listrik? ');
	echo form_dropdown('listrik', $options, TRUE);
	echo br(1);
	
	echo form_label('Ketersediaan Komunikasi? ');
	echo form_dropdown('komunikasi', $options, TRUE);
	echo br(1);
	
	echo form_label('Ketersediaan Medis? ');
	echo form_dropdown('medis', $options, TRUE);
	echo br(1);
	
	echo form_label('Total Pengungsi (sehat dan sakit): ');
	echo form_input('total_pengungsi', '');
	echo br(1);
	
	echo form_label('Total Korban Sakit Ringan: ');
	echo form_input('korban_sakit_ringan', '');
	echo br(1);
	
	echo form_label('Total Korban Sakit Berat: ');
	echo form_input('korban_sakit_berat', '');
	echo br(1);
	
	echo form_label('Total Korban Tewas: ');
	echo form_input('korban_tewas', '');
	echo br(1);
	
	echo form_submit('submission_kondisi', 'Submit Kondisi');
	
	echo form_close();
	
	echo br(2);
	echo '<a href="'. site_url() .'/kondisi_controller">[kembali]</a> ';
?>