<?php
#--------------------------------------------------------------------------------------------------
$produk = [
	1 => [
		'id'         => 'beliSekarang1',
		'label'      => 'modalLabel1',
		'nama'       => 'Kuih Raya Premium (1 Balang)',
		'penerangan' => 'Pilihan: Kuih Bangkit, Kuih Makmur, Semperit Dahlia, Tart Nenas',
		'harga'      => 38.00,
		'hargaUnit'  => '/balang',
		'kodProduk'  => 'kuih001',
		'medan'      => [
			[
				'jenis'    => 'select',
				'id'       => 'jenis1',
				'nama'     => 'borang[jenis]',
				'label'    => 'Pilih jenis kuih:',
				'pilihan'  => [
					'bangkit'  => 'Kuih Bangkit',
					'makmur'   => 'Kuih Makmur',
					'semperit' => 'Semperit Dahlia',
					'tart'     => 'Tart Nenas',
					'campuran' => 'Campuran (4 jenis)',
				],
				'terpilih' => 'campuran',
			],
			[
				'jenis' => 'number',
				'id'    => 'balang1',
				'nama'  => 'borang[kuantiti]',
				'label' => 'Bilangan balang:',
				'nilai' => 1,
				'min'   => 1,
			],
			[
				'jenis' => 'alert',
				'warna' => 'info',
				'ikon'  => 'bi-gift-fill',
				'teks'  => 'Beli 5 balang dapat 1 balang percuma!',
			],
		],
	],
	2 => [
		'id'         => 'beliSekarang2',
		'label'      => 'modalLabel2',
		'nama'       => 'Kek Coklat Moist Premium',
		'penerangan' => 'Saiz 9 inci, sesuai untuk 10-12 orang, boleh tambah tulisan khas',
		'harga'      => 89.00,
		'hargaUnit'  => '',
		'kodProduk'  => 'kuih002',
		'medan'      => [
			[
				'jenis'    => 'select',
				'id'       => 'saiz2',
				'nama'     => 'borang[saiz]',
				'label'    => 'Pilih saiz:',
				'pilihan'  => [
					'7'  => '7 inci (6-8 orang) - RM 65',
					'9'  => '9 inci (10-12 orang) - RM 89',
					'11' => '11 inci (15-18 orang) - RM 125',
				],
				'terpilih' => '9',
			],
			[
				'jenis'       => 'text',
				'id'          => 'tulisan2',
				'nama'        => 'borang[tulisan]',
				'label'       => 'Tulisan khas pada kek (pilihan):',
				'placeholder' => 'Cth: Selamat Hari Jadi Sarah',
			],
			[
				'jenis' => 'date',
				'id'    => 'tarikh2',
				'nama'  => 'borang[tarikh_ambil]',
				'label' => 'Tarikh pengambilan:',
			],
			[
				'jenis' => 'alert',
				'warna' => 'warning',
				'ikon'  => 'bi-clock-fill',
				'teks'  => 'Tempahan memerlukan notis 3 hari bekerja',
			],
		],
	],
	3 => [
		'id'         => 'beliSekarang3',
		'label'      => 'modalLabel3',
		'nama'       => 'Kuih Tradisional Pelbagai (20 Biji)',
		'penerangan' => 'Campuran kuih lapis, seri muka, onde-onde, kuih kosui dan lain-lain',
		'harga'      => 25.00,
		'hargaUnit'  => '',
		'kodProduk'  => 'kuih003',
		'medan'      => [
			[
				'jenis'    => 'select',
				'id'       => 'pakej3',
				'nama'     => 'borang[pakej]',
				'label'    => 'Pilih pakej:',
				'pilihan'  => [
					'20' => '20 biji - RM 25',
					'40' => '40 biji - RM 48 (jimat RM 2)',
					'60' => '60 biji - RM 69 (jimat RM 6)',
				],
				'terpilih' => '20',
			],
			[
				'jenis' => 'date',
				'id'    => 'hantar3',
				'nama'  => 'borang[tarikh_hantar]',
				'label' => 'Tarikh penghantaran/pengambilan:',
			],
		],
	],
	4 => [
		'id'         => 'beliSekarang4',
		'label'      => 'modalLabel4',
		'nama'       => 'Roti Canai Beku (10 Keping)',
		'penerangan' => 'Sedap dan mudah disediakan, tahan sehingga 3 bulan dalam peti sejuk',
		'harga'      => 12.00,
		'hargaUnit'  => '',
		'kodProduk'  => 'kuih004',
		'medan'      => [
			[
				'jenis'    => 'select',
				'id'       => 'jenis4',
				'nama'     => 'borang[jenis]',
				'label'    => 'Jenis roti canai:',
				'pilihan'  => [
					'biasa'    => 'Biasa (RM 12)',
					'telur'    => 'Telur (RM 15)',
					'pisang'   => 'Pisang (RM 14)',
					'campuran' => 'Campuran (RM 13.50)',
				],
				'terpilih' => 'biasa',
			],
			[
				'jenis' => 'number',
				'id'    => 'paket4',
				'nama'  => 'borang[kuantiti]',
				'label' => 'Bilangan paket (10 keping):',
				'nilai' => 1,
				'min'   => 1,
			],
			[
				'jenis' => 'alert',
				'warna' => 'info',
				'ikon'  => 'bi-snow',
				'teks'  => 'Produk akan dihantar dalam keadaan sejuk beku',
			],
		],
	],
	5 => [
		'id'         => 'beliSekarang5',
		'label'      => 'modalLabel5',
		'nama'       => 'Biskut Raya Campuran (1kg)',
		'penerangan' => 'London Almond, Mazola, Cornflakes, Red Velvet',
		'harga'      => 45.00,
		'hargaUnit'  => '/kg',
		'kodProduk'  => 'kuih005',
		'medan'      => [
			[
				'jenis'    => 'select',
				'id'       => 'campuran5',
				'nama'     => 'borang[campuran]',
				'label'    => 'Jenis campuran:',
				'pilihan'  => [
					'4jenis'  => '4 jenis (London Almond, Mazola, Cornflakes, Red Velvet)',
					'klasik'  => 'Klasik (Mazola, Semperit, Cornflakes, Biskut Susu)',
					'premium' => 'Premium (Almond London, Honey Cornflakes, Chocolate Chip, Red Velvet)',
				],
				'terpilih' => '4jenis',
			],
			[
				'jenis' => 'number',
				'id'    => 'berat5',
				'nama'  => 'borang[berat]',
				'label' => 'Berat (kg):',
				'nilai' => 1,
				'min'   => 0.5,
				'step'  => 0.5,
			],
			[
				'jenis' => 'alert',
				'warna' => 'success',
				'ikon'  => 'bi-percent',
				'teks'  => 'Beli 3kg ke atas dapat diskaun 10%',
			],
		],
	],
	6 => [
		'id'         => 'beliSekarang6',
		'label'      => 'modalLabel6',
		'nama'       => 'Karipap Pelbagai Inti (30 Biji)',
		'penerangan' => 'Pilihan: Daging, Ayam, Sardin, Kentang Berempah',
		'harga'      => 30.00,
		'hargaUnit'  => '',
		'kodProduk'  => 'kuih006',
		'medan'      => [
			[
				'jenis'    => 'select',
				'id'       => 'inti6',
				'nama'     => 'borang[inti]',
				'label'    => 'Pilih inti:',
				'pilihan'  => [
					'daging'   => 'Daging',
					'ayam'     => 'Ayam',
					'sardin'   => 'Sardin',
					'kentang'  => 'Kentang Berempah',
					'campuran' => 'Campuran (4 jenis)',
				],
				'terpilih' => 'campuran',
			],
			[
				'jenis' => 'number',
				'id'    => 'kuantiti6',
				'nama'  => 'borang[kuantiti]',
				'label' => 'Kuantiti (30 biji per set):',
				'nilai' => 1,
				'min'   => 1,
			],
			[
				'jenis'      => 'checkbox',
				'id'         => 'goreng6',
				'nama'       => 'borang[goreng]',
				'label'      => 'Karipap sudah digoreng (+RM 5)',
				'nilai'      => '5',
				'ditandakan' => false,
			],
		],
	],
];
#--------------------------------------------------------------------------------------------------
?>
<!-- ========================================================================================== -->
<div class="container my-3"><!-- Pautan Kembali ke Halaman Utama -->
	<a href="?" class="btn btn-outline-success">
		<?php echo $kembaliKePangkalJalan ?>
	</a>
</div><!-- / class="container" -->
<!-- ========================================================================================== -->
<div class="container my-5">
	<!-- ========================================================================================== -->
	<div class="text-center mb-4"><!-- Tajuk Besar -->
		<h1 class="display-5 text-success fw-bold">Kedai Produk Bakeri dan Konfeksi</h1>
		<p class="lead text-muted">
			Pelbagai jenis kuih tradisional, kuih raya, kek dan
			produk bakeri yang lazat dan berkualiti.
		</p><hr>
	</div><!-- / class="text-center mb-4" -->
	<!-- ========================================================================================== -->
	<div class="row g-4">
	<?php foreach ($produk as $bil => $item) : ?>
	<!-- ========================================================================================== -->
	<!-- Produk <?php echo $bil ?> -->
	<div class="col-md-6 col-lg-4">
		<div class="card h-100 shadow-sm">
			<div class="card-body">
				<h5 class="card-title"><?php echo htmlspecialchars($item['nama']) ?></h5>
				<p class="card-text text-muted"><?php echo htmlspecialchars($item['penerangan']) ?></p>
				<h4 class="text-success fw-bold">
					RM <?php echo number_format($item['harga'], 2) ?><?php echo $item['hargaUnit'] ?>
				</h4>
			</div><!-- / class="card-body" -->
			<div class="card-footer bg-white border-0 pb-3">
				<button class="btn btn-success w-100 mb-2" data-bs-toggle="modal"
					data-bs-target="#<?php echo $item['id'] ?>">
					<i class="bi bi-cart-fill"></i> Beli Sekarang
				</button>
				<button class="btn btn-outline-success w-100">
					<i class="bi bi-info-circle"></i> Maklumat Lanjut
				</button>
			</div><!-- / class="card-footer bg-white border-0 pb-3" -->
		</div><!-- / class="card h-100 shadow-sm" -->
	</div><!-- / class="col-md-6 col-lg-4" -->
	<?php endforeach ?>
	<!-- ========================================================================================== -->
	</div><!-- / class="row g-4" -->
	<!-- ========================================================================================== -->
</div><!-- / class="container my-5" -->

<!-- ========================================================================================== -->
<div class="container my-4">
<h2>Pakej Istimewa Majlis</h2>
<div class="card border-success">
<div class="card-body">
	<h5 class="card-title"><i class="bi bi-gift-fill"></i> Pakej Jamuan dan Majlis</h5>
	<p class="card-text">Kami menyediakan pakej khas untuk majlis perkahwinan, kenduri, mesyuarat syarikat dan pelbagai acara lain.</p>
	<div class="row mt-3">
		<div class="col-md-4">
			<h6 class="text-success">Pakej A (50 pax)</h6>
			<ul class="small">
			<li>100 biji kuih tradisional</li>
			<li>50 biji karipap</li>
			<li>2 balang kuih raya</li>
			</ul>
			<strong class="text-success">RM 280.00</strong>
		</div><!-- / class="col-md-4" -->
		<div class="col-md-4">
			<h6 class="text-success">Pakej B (100 pax)</h6>
			<ul class="small">
			<li>200 biji kuih tradisional</li>
			<li>100 biji karipap</li>
			<li>5 balang kuih raya</li>
			<li>1 kek 9 inci</li>
			</ul>
			<strong class="text-success">RM 520.00</strong>
		</div><!-- / class="col-md-4" -->
		<div class="col-md-4">
			<h6 class="text-success">Pakej C (200 pax)</h6>
			<ul class="small">
			<li>400 biji kuih tradisional</li>
			<li>200 biji karipap</li>
			<li>10 balang kuih raya</li>
			<li>2 kek 11 inci</li>
			</ul>
			<strong class="text-success">RM 980.00</strong>
		</div><!-- / class="col-md-4" -->
	</div><!-- / class="row mt-3 -->
	<button class="btn btn-success mt-3">Tempah Pakej Majlis</button>
</div><!-- / class="card-body" -->
</div><!-- / class="card border-success" -->
</div><!-- / class="container my-4" -->

<!-- ========================================================================================== -->

<div class="container my-4">
<h2>Spesial Musim Perayaan</h2>
<div class="alert alert-success" role="alert">
	<h5 class="alert-heading"><i class="bi bi-calendar-event-fill"></i> Tempahan Musim Perayaan Kini Dibuka!</h5>
	<p>Tempah awal untuk Hari Raya, Tahun Baru Cina, Deepavali dan perayaan lain. Dapatkan diskaun sehingga 15% untuk tempahan awal.</p>
	<hr>
	<ul class="mb-0">
	<li>Tempahan 1 bulan awal: Diskaun 15%</li>
	<li>Tempahan 2 minggu awal: Diskaun 10%</li>
	<li>Tempahan 1 minggu awal: Diskaun 5%</li>
	</ul>
</div><!-- / class="alert alert-success" -->
</div><!-- / class="container my-4" -->

<!-- ========================================================================================== -->
<div class="container my-4">
<h2>Kelebihan Kuih Kami</h2>
<div class="row g-3">
	<!-- ========================================================================================== -->
	<div class="col-md-4">
	<div class="card border-success">
	<div class="card-body text-center">
		<i class="bi bi-hand-thumbs-up-fill text-success fs-1"></i>
		<h6 class="mt-3">Bahan Berkualiti</h6>
		<p class="text-muted small">Menggunakan bahan-bahan segar dan berkualiti tinggi</p>
	</div><!-- / class="card-body text-center" -->
	</div><!-- / class="card border-success" -->
	</div><!-- / class="col-md-4" -->
	<!-- ========================================================================================== -->
	<div class="col-md-4">
	<div class="card border-success">
	<div class="card-body text-center">
		<i class="bi bi-heart-pulse-fill text-success fs-1"></i>
		<h6 class="mt-3">Bersih dan Halal</h6>
		<p class="text-muted small">Disediakan dalam persekitaran yang bersih dan mematuhi piawaian halal</p>
	</div><!-- / class="card-body text-center" -->
	</div><!-- / class="card border-success" -->
	</div><!-- / class="col-md-4" -->
	<!-- ========================================================================================== -->
	<div class="col-md-4">
	<div class="card border-success">
	<div class="card-body text-center">
		<i class="bi bi-clock-history text-success fs-1"></i>
		<h6 class="mt-3">Segar Setiap Hari</h6>
		<p class="text-muted small">Kuih tradisional dibuat segar setiap hari untuk kesegaran terjamin</p>
	</div><!-- / class="card-body text-center" -->
	</div><!-- / class="card border-success" -->
	</div><!-- / class="col-md-4" -->
	<!-- ========================================================================================== -->
</div><!-- / class="row g-3" -->
</div><!-- / class="container my-4" -->
<!-- ========================================================================================== -->
<div class="container my-3"><!-- Pautan Kembali ke Halaman Utama -->
	<a href="?" class="btn btn-outline-success">
		<?php echo $kembaliKePangkalJalan ?>
	</a><hr>
</div><!-- / class="container" -->
<!-- ========================================================================================== -->
<div class="container">
<p class="text-center justify-content-center text-muted"><strong>Nota:</strong>
Harga tertakluk kepada perubahan tanpa notis terlebih dahulu. Untuk tempahan majlis atau tempahan
dalam kuantiti besar, sila hubungi kami terlebih dahulu. Tempahan kek memerlukan notis
sekurang-kurangnya 3 hari bekerja.<br>Untuk pertanyaan lanjut, sila hubungi kami di </p>
<div class="d-flex justify-content-center gap-3">
	<a href="?/hubungi/facebook" class="btn btn-outline-success btn-sm">
		<i class="bi bi-facebook"></i> Facebook
	</a>
	<a href="?/hubungi/instagram" class="btn btn-outline-success btn-sm">
		<i class="bi bi-instagram"></i> Instagram
	</a>
	<a href="?/hubungi/whatsapp" class="btn btn-outline-success btn-sm">
		<i class="bi bi-whatsapp"></i> WhatsApp
	</a>
</div><!-- / class="d-flex gap-3" -->
</div><!-- / class="container" -->
<!-- ========================================================================================== -->
<?php
#--------------------------------------------------------------------------------------------------
?>
<!-- kod dialog mula -->
<!-- ========================================================================================== -->
<?php foreach ($produk as $bil => $item) : ?>
<!-- ========================================================================================== -->
<!-- Modal untuk produk <?php echo $bil ?> -->
<div class="modal fade" id="<?php echo $item['id'] ?>" tabindex="-1" aria-labelledby="<?php echo $item['label'] ?>" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<form method="POST" action="?/pembayaran/semakpesanan">
	<div class="modal-content">
		<div class="modal-header bg-success text-white">
			<h5 class="modal-title" id="<?php echo $item['label'] ?>">Pengesahan Pembelian</h5>
			<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
		</div><!-- / class="modal-header bg-success text-white" -->
		<div class="modal-body">
			<h6><?php echo htmlspecialchars($item['nama']) ?></h6>
			<p class="text-muted mb-3"><?php echo htmlspecialchars($item['penerangan']) ?></p>
			<input type="hidden" name="borang[kodProduk]" value="<?php echo htmlspecialchars($item['kodProduk']) ?>">
			<div class="mb-3">
				<label for="harga<?php echo $bil ?>" class="form-label">Harga:</label>
				<input type="text" class="form-control bg-secondary-subtle"
				id="harga<?php echo $bil ?>" name="borang[harga]"
				value="<?php echo number_format($item['harga'], 2, '.', '') ?>" readonly>
			</div><!-- / class="mb-3" -->
			<?php foreach ($item['medan'] as $medan) : ?>
			<?php if ($medan['jenis'] === 'number') : ?>
			<div class="mb-3">
				<label for="<?php echo $medan['id'] ?>" class="form-label"><?php echo $medan['label'] ?></label>
				<input type="number" class="form-control"
				id="<?php echo $medan['id'] ?>"
				name="<?php echo $medan['nama'] ?>"
				value="<?php echo $medan['nilai'] ?>"
				min="<?php echo $medan['min'] ?>"
				<?php echo isset($medan['step']) ? 'step="' . $medan['step'] . '"' : '' ?>>
			</div><!-- / class="mb-3" -->
			<?php elseif ($medan['jenis'] === 'select') : ?>
			<div class="mb-3">
				<label for="<?php echo $medan['id'] ?>" class="form-label"><?php echo $medan['label'] ?></label>
				<select class="form-select" id="<?php echo $medan['id'] ?>" name="<?php echo $medan['nama'] ?>">
				<?php foreach ($medan['pilihan'] as $nilai => $teks) : ?>
				<option value="<?php echo $nilai ?>"<?php echo $nilai === $medan['terpilih'] ? ' selected' : '' ?>>
				<?php echo htmlspecialchars($teks) ?>
				</option>
				<?php endforeach ?>
				</select>
			</div><!-- / class="mb-3" -->
			<?php elseif ($medan['jenis'] === 'text') : ?>
			<div class="mb-3">
				<label for="<?php echo $medan['id'] ?>" class="form-label"><?php echo $medan['label'] ?></label>
				<input type="text" class="form-control"
				id="<?php echo $medan['id'] ?>"
				name="<?php echo $medan['nama'] ?>"
				placeholder="<?php echo htmlspecialchars($medan['placeholder']) ?>">
			</div><!-- / class="mb-3" -->
			<?php elseif ($medan['jenis'] === 'date') : ?>
			<div class="mb-3">
				<label for="<?php echo $medan['id'] ?>" class="form-label"><?php echo $medan['label'] ?></label>
				<input type="date" class="form-control"
				id="<?php echo $medan['id'] ?>"
				name="<?php echo $medan['nama'] ?>">
			</div><!-- / class="mb-3" -->
			<?php elseif ($medan['jenis'] === 'checkbox') : ?>
			<div class="form-check mb-3">
				<input class="form-check-input" type="checkbox"
				id="<?php echo $medan['id'] ?>"
				name="<?php echo $medan['nama'] ?>"
				value="<?php echo $medan['nilai'] ?>"
				<?php echo !empty($medan['ditandakan']) ? 'checked' : '' ?>>
				<label class="form-check-label" for="<?php echo $medan['id'] ?>">
					<?php echo htmlspecialchars($medan['label']) ?>
				</label>
			</div><!-- / class="form-check mb-3" -->
			<?php elseif ($medan['jenis'] === 'alert') : ?>
			<div class="alert alert-<?php echo $medan['warna'] ?> small mb-0">
				<i class="bi <?php echo $medan['ikon'] ?>"></i> <?php echo htmlspecialchars($medan['teks']) ?>
			</div><!-- / class="alert alert-<?php echo $medan['warna'] ?> small mb-0" -->
			<?php endif ?>
			<?php endforeach ?>
			<div class="mb-3 mt-3">
				<label for="nota<?php echo $bil ?>" class="form-label">Nota:</label>
				<textarea class="form-control" id="nota<?php echo $bil ?>"
				name="borang[nota]" rows="3"><?php echo htmlspecialchars($item['penerangan']) ?></textarea>
			</div><!-- / class="mb-3 mt-3" -->
		</div><!-- / class="modal-body" -->
		<div class="modal-footer">
			<input type="reset" class="btn btn-secondary" data-bs-dismiss="modal" value="Batal">
			<input type="submit" class="btn btn-success" value="Sahkan Pembelian">
		</div><!-- / class="modal-footer" -->
	</div><!-- / class="modal-content" -->
</form>
</div><!-- / class="modal-dialog modal-dialog-centered" -->
</div><!-- / class="modal fade" -->
<?php endforeach ?>
<!-- ========================================================================================== -->
<!-- kod dialog tamat -->
<!-- ========================================================================================== -->