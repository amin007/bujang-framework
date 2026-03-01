<?php
#--------------------------------------------------------------------------------------------------
$produk = [
	1 => [
		'id'         => 'beliSekarang1',
		'label'      => 'modalLabel1',
		'nama'       => 'Set Alat Tulis Pelajar Premium',
		'penerangan' => 'Termasuk pen, pensel, pembaris, pemadam, seraut dan kotak pensel',
		'harga'      => 49.90,
		'kodProduk'  => 'bukualattulis001',
		'medan'      => [
			[
				'jenis' => 'number',
				'id'    => 'kuantiti1',
				'nama'  => 'borang[kuantiti]',
				'label' => 'Kuantiti:',
				'nilai' => 1,
				'min'   => 1,
			],
			[
				'jenis'  => 'alert',
				'warna'  => 'info',
				'ikon'   => 'bi-info-circle',
				'teks'   => 'Beli 3 set atau lebih dapat diskaun 10%',
			],
		],
	],
	2 => [
		'id'         => 'beliSekarang2',
		'label'      => 'modalLabel2',
		'nama'       => 'Buku Motivasi: Atomic Habits',
		'penerangan' => 'Oleh James Clear - Panduan membina tabiat baik dan memecahkan tabiat buruk',
		'harga'      => 59.90,
		'kodProduk'  => 'bukualattulis002',
		'medan'      => [
			[
				'jenis'    => 'select',
				'id'       => 'format2',
				'nama'     => 'borang[format]',
				'label'    => 'Format buku:',
				'pilihan'  => [
					'fizikal' => 'Buku fizikal (RM 59.90)',
					'ebook'   => 'E-book (RM 39.90)',
				],
				'terpilih' => 'fizikal',
			],
			[
				'jenis' => 'number',
				'id'    => 'kuantiti2',
				'nama'  => 'borang[kuantiti]',
				'label' => 'Kuantiti:',
				'nilai' => 1,
				'min'   => 1,
			],
		],
	],
	3 => [
		'id'         => 'beliSekarang3',
		'label'      => 'modalLabel3',
		'nama'       => 'Buku Nota A4 Bergaris (5 Unit)',
		'penerangan' => '200 muka surat setiap satu, kertas berkualiti tinggi',
		'harga'      => 29.90,
		'kodProduk'  => 'bukualattulis003',
		'medan'      => [
			[
				'jenis'    => 'select',
				'id'       => 'warna3',
				'nama'     => 'borang[warna]',
				'label'    => 'Pilih warna kulit:',
				'pilihan'  => [
					'biru'      => 'Biru',
					'hijau'     => 'Hijau',
					'merah'     => 'Merah',
					'kuning'    => 'Kuning',
					'campuran'  => 'Campuran (1 setiap warna)',
				],
				'terpilih' => 'campuran',
			],
			[
				'jenis' => 'number',
				'id'    => 'set3',
				'nama'  => 'borang[kuantiti]',
				'label' => 'Bilangan set:',
				'nilai' => 1,
				'min'   => 1,
			],
		],
	],
	4 => [
		'id'         => 'beliSekarang4',
		'label'      => 'modalLabel4',
		'nama'       => 'Set Pen Gel Warna (12 Warna)',
		'penerangan' => 'Dakwat licin, warna terang dan tahan lama',
		'harga'      => 24.90,
		'kodProduk'  => 'bukualattulis004',
		'medan'      => [
			[
				'jenis' => 'number',
				'id'    => 'kuantiti4',
				'nama'  => 'borang[kuantiti]',
				'label' => 'Kuantiti set:',
				'nilai' => 1,
				'min'   => 1,
			],
			[
				'jenis'  => 'alert',
				'warna'  => 'success',
				'ikon'   => 'bi-gift-fill',
				'teks'   => 'Beli 2 set percuma 1 kotak pensel!',
			],
		],
	],
	5 => [
		'id'         => 'beliSekarang5',
		'label'      => 'modalLabel5',
		'nama'       => 'Buku Cerita Kanak-Kanak (Set 10 Buku)',
		'penerangan' => 'Cerita mendidik dengan ilustrasi menarik, sesuai untuk umur 3-8 tahun',
		'harga'      => 79.90,
		'kodProduk'  => 'bukualattulis005',
		'medan'      => [
			[
				'jenis'    => 'select',
				'id'       => 'bahasa5',
				'nama'     => 'borang[bahasa]',
				'label'    => 'Pilih bahasa:',
				'pilihan'  => [
					'bm'        => 'Bahasa Melayu',
					'bi'        => 'Bahasa Inggeris',
					'campuran'  => 'Dwibahasa (5 BM + 5 BI)',
				],
				'terpilih' => 'campuran',
			],
			[
				'jenis' => 'number',
				'id'    => 'set5',
				'nama'  => 'borang[kuantiti]',
				'label' => 'Bilangan set:',
				'nilai' => 1,
				'min'   => 1,
			],
		],
	],
	6 => [
		'id'         => 'beliSekarang6',
		'label'      => 'modalLabel6',
		'nama'       => 'Papan Putih Magnet 90cm × 60cm',
		'penerangan' => 'Termasuk penanda dan pemadam, mudah dipasang',
		'harga'      => 149.00,
		'kodProduk'  => 'bukualattulis006',
		'medan'      => [
			[
				'jenis'    => 'select',
				'id'       => 'bingkai6',
				'nama'     => 'borang[bingkai]',
				'label'    => 'Jenis bingkai:',
				'pilihan'  => [
					'aluminium' => 'Aluminium (RM 149)',
					'kayu'      => 'Kayu (RM 179)',
				],
				'terpilih' => 'aluminium',
			],
			[
				'jenis' => 'number',
				'id'    => 'kuantiti6',
				'nama'  => 'borang[kuantiti]',
				'label' => 'Kuantiti:',
				'nilai' => 1,
				'min'   => 1,
			],
			[
				'jenis'      => 'checkbox',
				'id'         => 'penanda6',
				'nama'       => 'borang[penanda]',
				'label'      => 'Tambah set penanda warna (4 batang) (+RM 19.90)',
				'nilai'      => '19.90',
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
		<h1 class="display-5 text-success fw-bold">Kedai Buku dan Alat Tulis</h1>
		<p class="lead text-muted">
			Perbagai koleksi buku terkini dan alat tulis berkualiti untuk pelajar,
			profesional dan peminat buku.
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
				<h4 class="text-success fw-bold">RM <?php echo number_format($item['harga'], 2) ?></h4>
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
<h2>Kategori Buku Popular</h2>
<div class="row g-3">
	<!-- ========================================================================================== -->
	<div class="col-md-3 col-sm-6">
		<div class="card text-center border-success h-100">
		<div class="card-body">
			<i class="bi bi-book-fill text-success fs-1"></i>
			<h6 class="mt-3">Buku Akademik</h6>
			<p class="text-muted small mb-0">UPSR, PT3, SPM, STPM</p>
		</div><!-- / class="card-body" -->
		</div><!-- /  class="card text-center border-success h-100" -->
	</div><!-- / class="col-md-3 col-sm-6" -->
	<!-- ========================================================================================== -->
	<div class="col-md-3 col-sm-6">
		<div class="card text-center border-success h-100">
		<div class="card-body">
			<i class="bi bi-journal-text text-success fs-1"></i>
			<h6 class="mt-3">Novel & Sastera</h6>
			<p class="text-muted small mb-0">Fiksyen dan bukan fiksyen</p>
		</div><!-- / class="card-body" -->
		</div><!-- /  class="card text-center border-success h-100" -->
	</div><!-- / class="col-md-3 col-sm-6" -->
	<!-- ========================================================================================== -->
	<div class="col-md-3 col-sm-6">
		<div class="card text-center border-success h-100">
		<div class="card-body">
			<i class="bi bi-heart-fill text-success fs-1"></i>
			<h6 class="mt-3">Motivasi & Agama</h6>
			<p class="text-muted small mb-0">Pembangunan diri</p>
		</div><!-- / class="card-body" -->
		</div><!-- /  class="card text-center border-success h-100" -->
	</div><!-- / class="col-md-3 col-sm-6" -->
	<!-- ========================================================================================== -->
	<div class="col-md-3 col-sm-6">
		<div class="card text-center border-success h-100">
		<div class="card-body">
			<i class="bi bi-stars text-success fs-1"></i>
			<h6 class="mt-3">Kanak-kanak</h6>
			<p class="text-muted small mb-0">Cerita dan aktiviti</p>
		</div><!-- / class="card-body" -->
		</div><!-- /  class="card text-center border-success h-100" -->
	</div><!-- / class="col-md-3 col-sm-6" -->
	<!-- ========================================================================================== -->
</div><!-- / class="row g-3" -->
</div><!-- / class="container my-4" -->

<!-- ========================================================================================== -->
<div class="container my-4">
<h2>Promosi Istimewa</h2>
<div class="card bg-success text-white">
<div class="card-body">
	<h5 class="card-title"><i class="bi bi-percent"></i> Promosi Musim Perayaan</h5>
	<p class="card-text">Nikmati diskaun sehingga 30% untuk pembelian buku terpilih. Tawaran terhad!</p>
	<ul class="mb-3">
	<li>Beli 5 buku percuma 1</li>
	<li>Pembelian melebihi RM 100 dapat penghantaran percuma</li>
	<li>Mata ganjaran untuk setiap pembelian</li>
	</ul>
	<button class="btn btn-light">Lihat Produk Promosi</button>
</div><!-- / class="card-body" -->
</div><!-- / class="card bg-success text-white" -->
</div><!-- / class="container my-4" -->

<!-- ========================================================================================== -->
<div class="container my-4">
<h2>Kelebihan Membeli dengan Kami</h2>
<div class="row g-3">
	<!-- ========================================================================================== -->
	<div class="col-md-4">
		<div class="card border-success">
		<div class="card-body text-center">
			<i class="bi bi-bookmark-check-fill text-success fs-1"></i>
			<h6 class="mt-3">Koleksi Lengkap</h6>
			<p class="text-muted small">Lebih 10,000 tajuk buku dari pelbagai kategori</p>
		</div><!-- / class="card-body" -->
		</div><!-- / class="card border-success" -->
	</div><!-- / class="col-md-4" -->
	<!-- ========================================================================================== -->
	<div class="col-md-4">
		<div class="card border-success">
		<div class="card-body text-center">
			<i class="bi bi-tag-fill text-success fs-1"></i>
			<h6 class="mt-3">Harga Berpatutan</h6>
			<p class="text-muted small">Harga kompetitif dengan promosi berkala</p>
		</div><!-- / class="card-body" -->
		</div><!-- / class="card border-success" -->
	</div><!-- / class="col-md-4" -->
	<!-- ========================================================================================== -->
	<div class="col-md-4">
		<div class="card border-success">
		<div class="card-body text-center">
			<i class="bi bi-box-seam text-success fs-1"></i>
			<h6 class="mt-3">Pembungkusan Selamat</h6>
			<p class="text-muted small">Buku dibungkus dengan rapi untuk mengelakkan kerosakan</p>
		</div><!-- / class="card-body" -->
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
<p class="text-center text-muted"><strong>Nota:</strong>
Harga tertakluk kepada perubahan tanpa notis terlebih dahulu. Stok terhad untuk buku terpilih.
Untuk pertanyaan lanjut, sila hubungi kami di </p>
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
<!-- kod dialog mula -->
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
				value="<?php echo number_format($item['harga'], 2) ?>" readonly>
			</div><!-- / class="mb-3" -->
			<?php foreach ($item['medan'] as $medan) : ?>
			<?php if ($medan['jenis'] === 'number') : ?>
			<div class="mb-3">
				<label for="<?php echo $medan['id'] ?>" class="form-label"><?php echo $medan['label'] ?></label>
				<input type="number" class="form-control"
				id="<?php echo $medan['id'] ?>"
				name="<?php echo $medan['nama'] ?>"
				value="<?php echo $medan['nilai'] ?>"
				min="<?php echo $medan['min'] ?>">
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
				<label for="tarikh<?php echo $bil ?>" class="form-label">Tarikh:</label>
				<input type="date" class="form-control"
				id="tarikh<?php echo $bil ?>" name="borang[tarikh]"
				value="<?php echo date('Y-m-d') ?>">
			</div><!-- / class="mb-3 mt-3" -->
			<div class="mb-3">
				<label for="nota<?php echo $bil ?>" class="form-label">Nota:</label>
				<textarea class="form-control" id="nota<?php echo $bil ?>"
				name="borang[nota]" rows="3"><?php echo htmlspecialchars($item['penerangan']) ?></textarea>
			</div><!-- / class="mb-3" -->
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