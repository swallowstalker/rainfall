<?php
	
	echo 'Daftar masalah:' . br(1);
	if ($listMasalah == NULL) {
		echo 'Masalah kosong.' . br(1);
	} else {
	
	
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
					echo '<td><i class="icon-ok"></i></td>';
				} else {
					echo '<td><i class="icon-remove"></i></td>';
				}
				
				echo '<td><a href="'. site_url() .'/masalah_controller/detail/'. $masalah['id'] .'"><i class="icon-eye-open"></i></a></td>';
				echo '<td><a href="'. site_url() .'/masalah_controller/formEdit/'. $masalah['id'] .'"><i class="icon-pencil"></i></a></td>';
				echo '<td><a href="'. site_url() .'/masalah_controller/delete/'. $masalah['id'] .'"><i class="icon-trash"></i></a></td>';
				echo '<td><a href="'. site_url() .'/masalah_controller/mark/'. $masalah['id'] .'"><i class="icon-ok"></i></a></td>';
				echo '</tr>';
		    }
		?>
	</tbody>
</table>

<?php
	}
	echo br(1);
	echo ' <a href="'. site_url() .'/masalah_controller/formAdd"><i class="icon-plus-sign"></i>Tambah masalah baru</a> ';
?>