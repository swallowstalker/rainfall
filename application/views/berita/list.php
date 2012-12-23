<?php
	
	echo 'Daftar berita: ' . br(1);
	if ($listBerita == NULL) {
		echo 'Berita kosong.' . br(1);
	} else {
?>

<table border="1">
	<thead>
		<tr>
			<th>Deskripsi</th>
			<th>Status</th>
			<th>Tujuan</th>
			<th>Tanggal Keluar</th>
			
			<th>Detail</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php
			
		    foreach ($listBerita as $berita) {
		    	echo '<tr>';
		        echo '<td>' . $berita['deskripsi'] . '</td>';
				echo '<td>' . ($berita['status']?'Darurat':'Biasa') . '</td>';
				echo '<td>' . ($berita['tujuan']?'Daerah Bencana':'Umum') . '</td>';
				echo '<td>' . $berita['tanggal'] . '</td>';
				
				echo '<td><a href="'. site_url() .'/berita_controller/detail/'. $berita['id'] .'"><i class="icon-eye-open"></i></a></td>';
				echo '<td><a href="'. site_url() .'/berita_controller/formEdit/'. $berita['id'] .'"><i class="icon-pencil"></i></a></td>';
				echo '<td><a href="'. site_url() .'/berita_controller/delete/'. $berita['id'] .'"><i class="icon-trash"></i></a></td>';
				
				echo '</tr>';
		    }
		?>
	</tbody>
</table>

<?php
	}
	echo br(1);
	echo ' <a href="'. site_url() .'/berita_controller/formAdd"><i class="icon-plus-sign"></i>Tambah berita baru</a> ';
?>