<body class="bg-light">

<div class="container py-4"><!-- / class="container" -->
<!-- ========================================================================================== -->
	<div class="text-center mb-4"><!-- / class="text-center mb-4" -->
		<h1 class="text-success">Kedai Umum Dalam Talian</h1>
		<p class="text-muted">
			Susah cari barang? Beritahu kami. Kami tolong carikan.
		</p>
	</div><!-- / class="text-center mb-4" -->
<!-- ========================================================================================== -->
<?php
/*
<div class="list-group">
		<a href="?/buka/kedai/komputer" class="list-group-item list-group-item-action">
			Komputer, peralatan dan aksesori
		</a>
		<a href="?/buka/kedai/perisian" class="list-group-item list-group-item-action">
			Perisian dan aplikasi
		</a>
		<a href="?/buka/kedai/ict" class="list-group-item list-group-item-action">
			Peralatan ICT dan elektronik
		</a>
		<a href="?/buka/kedai/buku-alat-tulis" class="list-group-item list-group-item-action">
			Buku dan alat tulis
		</a>
		<a href="?/buka/kedai/kuih" class="list-group-item list-group-item-action">
			Kuih, bakeri dan konfeksi
		</a>
	</div><!-- / class="list-group" -->
//*/
?>
<!-- ========================================================================================== -->
	<div class="list-group">
<?php foreach($pautanSah as $key => $data):?>
		<a href="?<?php echo $key ?>" class="list-group-item list-group-item-action">
		<i class="<?php echo $data['ikon'] ?>"></i>
		<?php echo $data['tajuk'] ?>
		</a>
<?php
	/* hubungi
	'hubungi/whatsapp' => [ // $url pada pautan pelayar web
		'fail' => $folderApa . 'hubungi_whatsapp.php', // pautan fail ke folder
		'tajuk' => 'WhatsApp', // tajuk utama
		'keterangan' => 'Media Sosial Kami', // keterangan tajuk utama
		'ikon' => 'bi bi-whatsapp', //icon bootstrap (BI) atau font awesome(FA)
	],
//*/
echo "\r\n\r\n";
endforeach;//*/
?>
	</div><!-- / class="list-group" -->
<!-- ========================================================================================== -->
	<div class="alert alert-success mt-4"><!-- / class="alert alert-success mt-4" -->
		<strong>Tiada dalam senarai?</strong><br>
		Hubungi kami. Nyatakan barang yang dicari, kami cuba dapatkan dari kedai sekitar.
	</div><!-- / class="alert alert-success mt-4" -->
<!-- ========================================================================================== -->

</div><!-- / class="container" -->