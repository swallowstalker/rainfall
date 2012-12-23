<?php
	
	echo 'Daftar kondisi: ' . br(1);
	if ($listKondisi == NULL) {
		echo 'Kondisi kosong.' . br(1);
	} else {
	
?>

<table border="1">
	<thead>
		<tr>
			<th>Nama Daerah</th>
			<th>Air</th>
			<th>Makanan</th>
			<th>Listrik</th>
			<th>Komunikasi</th>
			<th>Medis</th>
			<th>Total Pengungsi</th>
			<th>Sakit Ringan</th>
			<th>Sakit Berat</th>
			<th>Tewas</th>
			<th>Update Terakhir</th>
			<th>Detail</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php
		    foreach ($listKondisi as $kondisi) {
		    	echo '<tr>';
		        echo '<td>' . $kondisi['nama_daerah'] . '</td>';
				echo '<td>' . ($kondisi['air']?'<i class="icon-ok"></i>':'<i class="icon-remove"></i>') . '</td>';
				echo '<td>' . ($kondisi['makanan']?'<i class="icon-ok"></i>':'<i class="icon-remove"></i>') . '</td>';
				echo '<td>' . ($kondisi['listrik']?'<i class="icon-ok"></i>':'<i class="icon-remove"></i>') . '</td>';
				echo '<td>' . ($kondisi['komunikasi']?'<i class="icon-ok"></i>':'<i class="icon-remove"></i>') . '</td>';
				echo '<td>' . ($kondisi['medis']?'<i class="icon-ok"></i>':'<i class="icon-remove"></i>') . '</td>';
				echo '<td>' . $kondisi['total_pengungsi'] . '</td>';
				echo '<td>' . $kondisi['korban_sakit_ringan'] . '</td>';
				echo '<td>' . $kondisi['korban_sakit_berat'] . '</td>';
				echo '<td>' . $kondisi['korban_tewas'] . '</td>';
				echo '<td>' . $kondisi['update_terakhir'] . '</td>';
				
				echo '<td><a href="'. site_url() .'/kondisi_controller/detail/'. $kondisi['id'] .'"><i class="icon-eye-open"></i></a></td>';
				echo '<td><a href="'. site_url() .'/kondisi_controller/formEdit/'. $kondisi['id'] .'"><i class="icon-pencil"></i></a></td>';
				echo '<td><a href="'. site_url() .'/kondisi_controller/delete/'. $kondisi['id'] .'"><i class="icon-trash"></i></a></td>';
				echo '</tr>';
		    }
		?>
	</tbody>
</table>

<?php
	}
	echo br(1);
	echo ' <a href="'. site_url() .'/kondisi_controller/formAdd"><i class="icon-plus-sign"></i> Tambah kondisi baru</a> ';
?>