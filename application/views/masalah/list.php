<?php
	
	echo 'Daftar masalah:' . br(1);
	
?>

<table border="1">
	<thead>
		<tr>
			<th>Deskripsi</th>
			<th>Deadline</th>
			<th>Status Resolusi</th>
			<th>Detail</th>
			<th>Edit</th>
			<th>Delete</th>
			<th>Tandai</th>
		</tr>
	</thead>
	<tbody>
		<?php
			
		    foreach ($listMasalah as $masalah) {
		    	echo '<tr>';
		        echo '<td>' . $masalah['deskripsi'] . '</td>';
				echo '<td>' . $masalah['deadline'] . '</td>';
				if ($masalah['resolved']) {
					echo '<td>Sudah Selesai.</td>';
				} else {
					echo '<td>Belum Selesai.</td>';
				}
				
				echo '<td><a href="'. site_url() .'/masalah_controller/detail/'. $masalah['id'] .'">[lihat detail]</a></td>';
				echo '<td><a href="'. site_url() .'/masalah_controller/formEdit/'. $masalah['id'] .'">[edit]</a></td>';
				echo '<td><a href="'. site_url() .'/masalah_controller/delete/'. $masalah['id'] .'">[delete]</a></td>';
				echo '<td><a href="'. site_url() .'/masalah_controller/mark/'. $masalah['id'] .'">[tandai sudah selesai]</a></td>';
				echo '</tr>';
		    }
		?>
	</tbody>
</table>

<?php
	echo br(1);
	echo ' <a href="'. site_url() .'/masalah_controller/formAdd">[tambah masalah baru]</a> ';
?>