<!DOCTYPE html>
<html>
<head>
<?php
	echo css('bootstrap.min.css');
?>
</head>
<body>
	<div class="navbar">
		<div class="navbar-inner">
			<ul class="nav">
				<li><a href="<?php echo site_url(); ?>">Home</a></li>
				<li><a href="<?php echo site_url() . '/berita_controller'; ?>">Berita</a></li>
				<li><a href="<?php echo site_url() . '/kondisi_controller'; ?>">Kondisi Daerah</a></li>
				<li><a href="<?php echo site_url() . '/masalah_controller'; ?>">Masalah</a></li>
			</ul>
		</div>
	</div>
		
