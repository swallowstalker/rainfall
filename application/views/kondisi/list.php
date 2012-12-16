<?php
	
	echo 'Daftar kondisi: ' . br(1);
	
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
			<th>Tandai</th>
		</tr>
	</thead>
	<tbody>
		<?php
			
		    foreach ($listKondisi as $kondisi) {
		    	echo '<tr>';
		        echo '<td>' . $kondisi['nama_daerah'] . '</td>';
				echo '<td>' . ($kondisi['air']?'Ada':'-') . '</td>';
				echo '<td>' . ($kondisi['makanan']?'Ada':'-') . '</td>';
				echo '<td>' . ($kondisi['listrik']?'Ada':'-') . '</td>';
				echo '<td>' . ($kondisi['komunikasi']?'Ada':'-') . '</td>';
				echo '<td>' . ($kondisi['medis']?'Ada':'-') . '</td>';
				echo '<td>' . $kondisi['total_pengungsi'] . '</td>';
				echo '<td>' . $kondisi['korban_sakit_ringan'] . '</td>';
				echo '<td>' . $kondisi['korban_sakit_berat'] . '</td>';
				echo '<td>' . $kondisi['korban_tewas'] . '</td>';
				echo '<td>' . $kondisi['update_terakhir'] . '</td>';
				
				echo '<td><a href="'. site_url() .'/kondisi_controller/detail/'. $kondisi['id'] .'">[lihat detail]</a></td>';
				echo '<td><a href="'. site_url() .'/kondisi_controller/formEdit/'. $kondisi['id'] .'">[edit]</a></td>';
				echo '<td><a href="'. site_url() .'/kondisi_controller/delete/'. $kondisi['id'] .'">[delete]</a></td>';
				echo '<td><a href="'. site_url() .'/kondisi_controller/mark/'. $kondisi['id'] .'">[tandai sudah selesai]</a></td>';
				echo '</tr>';
		    }
		?>
	</tbody>
</table>

<?php
	echo br(1);
	echo ' <a href="'. site_url() .'/kondisi_controller/formAdd">[tambah kondisi baru]</a> ';
?>