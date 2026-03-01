<?php
#--------------------------------------------------------------------------------------------------
$produk = [
	1 => [
		'id'         => 'beliSekarang1',
		'label'      => 'modalLabel1',
		'nama'       => 'Penghala Wayarles TP-Link AX6000',
		'penerangan' => 'Wi-Fi 6, kelajuan sehingga 6 Gbps, liputan luas',
		'harga'      => 899.00,
		'kodProduk'  => 'ict001',
		'medan'      => [
			[
				'jenis'    => 'select',
				'id'       => 'pemasangan1',
				'nama'     => 'borang[pemasangan]',
				'label'    => 'Perkhidmatan pemasangan:',
				'pilihan'  => [
					'tidak' => 'Tidak perlu (+RM 0)',
					'ya'    => 'Ya, saya perlukan pemasangan (+RM 150)',
				],
				'terpilih' => 'tidak',
			],
			[
				'jenis' => 'number',
				'id'    => 'kuantiti1',
				'nama'  => 'borang[kuantiti]',
				'label' => 'Kuantiti:',
				'nilai' => 1,
				'min'   => 1,
			],
		],
	],
	2 => [
		'id'         => 'beliSekarang2',
		'label'      => 'modalLabel2',
		'nama'       => 'Telefon Pintar Samsung Galaxy S24',
		'penerangan' => 'Skrin 6.2", kamera 50MP, 256GB, 5G',
		'harga'      => 3799.00,
		'kodProduk'  => 'ict002',
		'medan'      => [
			[
				'jenis'    => 'select',
				'id'       => 'warna2',
				'nama'     => 'borang[warna]',
				'label'    => 'Pilih warna:',
				'pilihan'  => [
					'hitam' => 'Hitam Phantom',
					'putih' => 'Putih Marmar',
					'ungu'  => 'Ungu Lavender',
					'kuning'=> 'Kuning Amber',
				],
				'terpilih' => 'hitam',
			],
			[
				'jenis' => 'number',
				'id'    => 'kuantiti2',
				'nama'  => 'borang[kuantiti]',
				'label' => 'Kuantiti:',
				'nilai' => 1,
				'min'   => 1,
			],
			[
				'jenis' => 'checkbox',
				'id'    => 'pelindung2',
				'nama'  => 'borang[pelindung]',
				'label' => 'Tambah pelindung skrin dan sarung (+RM 99)',
				'nilai' => '99',
			],
		],
	],
	3 => [
		'id'         => 'beliSekarang3',
		'label'      => 'modalLabel3',
		'nama'       => 'Tablet Apple iPad Air 11"',
		'penerangan' => 'Cip M2, 128GB, Wi-Fi + Cellular',
		'harga'      => 2999.00,
		'kodProduk'  => 'ict003',
		'medan'      => [
			[
				'jenis'    => 'select',
				'id'       => 'warna3',
				'nama'     => 'borang[warna]',
				'label'    => 'Pilih warna:',
				'pilihan'  => [
					'kelabu' => 'Kelabu Angkasa',
					'biru'   => 'Biru Langit',
					'ungu'   => 'Ungu Pudina',
					'perak'  => 'Perak Bintang',
				],
				'terpilih' => 'kelabu',
			],
			[
				'jenis' => 'number',
				'id'    => 'kuantiti3',
				'nama'  => 'borang[kuantiti]',
				'label' => 'Kuantiti:',
				'nilai' => 1,
				'min'   => 1,
			],
			[
				'jenis' => 'checkbox',
				'id'    => 'apple-pencil',
				'nama'  => 'borang[apple_pencil]',
				'label' => 'Tambah Apple Pencil (Gen 2) (+RM 599)',
				'nilai' => '599',
			],
		],
	],
	4 => [
		'id'         => 'beliSekarang4',
		'label'      => 'modalLabel4',
		'nama'       => 'Suis Rangkaian 24-Port Gigabit',
		'penerangan' => 'Unmanaged switch, kelajuan 1000 Mbps setiap port',
		'harga'      => 599.00,
		'kodProduk'  => 'ict004',
		'medan'      => [
			[
				'jenis' => 'number',
				'id'    => 'kuantiti4',
				'nama'  => 'borang[kuantiti]',
				'label' => 'Kuantiti:',
				'nilai' => 1,
				'min'   => 1,
			],
			[
				'jenis'    => 'select',
				'id'       => 'kabel4',
				'nama'     => 'borang[kabel]',
				'label'    => 'Kabel rangkaian tambahan:',
				'pilihan'  => [
					'0'  => 'Tidak perlu (+RM 0)',
					'5'  => '5 keping kabel Cat6 1m (+RM 25)',
					'10' => '10 keping kabel Cat6 1m (+RM 45)',
					'20' => '20 keping kabel Cat6 1m (+RM 85)',
				],
				'terpilih' => '0',
			],
		],
	],
	5 => [
		'id'         => 'beliSekarang5',
		'label'      => 'modalLabel5',
		'nama'       => 'Kamera Keselamatan CCTV 8-Saluran',
		'penerangan' => 'Resolusi 4K, penglihatan malam, rakaman awan',
		'harga'      => 2499.00,
		'kodProduk'  => 'ict005',
		'medan'      => [
			[
				'jenis'    => 'select',
				'id'       => 'pakej5',
				'nama'     => 'borang[pakej]',
				'label'    => 'Pilih pakej:',
				'pilihan'  => [
					'4'  => '4 kamera - RM 1,499',
					'8'  => '8 kamera - RM 2,499',
					'16' => '16 kamera - RM 4,299',
				],
				'terpilih' => '8',
			],
			[
				'jenis'     => 'checkbox',
				'id'        => 'pemasangan5',
				'nama'      => 'borang[pemasangan]',
				'label'     => 'Perkhidmatan pemasangan profesional (+RM 500)',
				'nilai'     => '500',
				'ditandakan'=> true,
			],
		],
	],
	6 => [
		'id'         => 'beliSekarang6',
		'label'      => 'modalLabel6',
		'nama'       => 'Pembesar Suara Pintar Amazon Echo',
		'penerangan' => 'Kawalan suara Alexa, audio premium, rumah pintar',
		'harga'      => 499.00,
		'kodProduk'  => 'ict006',
		'medan'      => [
			[
				'jenis'    => 'select',
				'id'       => 'warna6',
				'nama'     => 'borang[warna]',
				'label'    => 'Pilih warna:',
				'pilihan'  => [
					'hitam' => 'Hitam Arang',
					'putih' => 'Putih Glazier',
					'biru'  => 'Biru Tengah Malam',
				],
				'terpilih' => 'hitam',
			],
			[
				'jenis' => 'number',
				'id'    => 'kuantiti6',
				'nama'  => 'borang[kuantiti]',
				'label' => 'Kuantiti:',
				'nilai' => 1,
				'min'   => 1,
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
		<h1 class="display-5 text-success fw-bold">Kedai Peralatan Telekomunikasi dan Elektronik</h1>
		<p class="lead text-muted">
			Perbagai peralatan telekomunikasi dan elektronik terkini untuk
			keperluan peribadi dan perniagaan anda.
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
	<h2> Perkhidmatan Pemasangan dan Sokongan</h2>
	<div class="card border-success">
	<div class="card-body">
		<h5 class="card-title"><i class="bi bi-tools"></i> Perkhidmatan Teknikal Profesional</h5>
		<p class="card-text">Kami menyediakan perkhidmatan pemasangan dan konfigurasi untuk
		semua peralatan rangkaian dan telekomunikasi. Pasukan juruteknik kami yang berpengalaman
		sedia membantu anda.</p>
		<ul class="list-unstyled">
		<li><i class="bi bi-check-circle-fill text-success"></i> Pemasangan dan konfigurasi rangkaian</li>
		<li><i class="bi bi-check-circle-fill text-success"></i> Pemasangan sistem CCTV dan keselamatan</li>
		<li><i class="bi bi-check-circle-fill text-success"></i> Penyelenggaraan berkala</li>
		<li><i class="bi bi-check-circle-fill text-success"></i> Sokongan teknikal 24/7</li>
		</ul>
		<button class="btn btn-success">Tempah Perkhidmatan</button>
	</div>
	</div>
</div>
<!-- ========================================================================================== -->
<div class="container my-4">
<h2>Kelebihan Membeli dengan Kami</h2>
<div class="row g-3">
	<!-- ========================================================================================== -->
	<div class="col-md-4">
		<div class="card border-success">
		<div class="card-body text-center">
			<i class="bi bi-award-fill text-success fs-1"></i>
			<h6 class="mt-3">Produk Berkualiti</h6>
			<p class="text-muted small">Semua produk dipilih daripada jenama terkemuka dan
			berkualiti tinggi</p>
		</div><!-- / class="card-body text-center" -->
		</div><!-- / class="card border-success" -->
	</div><!-- / class="col-md-4" -->	<!-- ========================================================================================== -->
	<div class="col-md-4">
		<div class="card border-success">
		<div class="card-body text-center">
			<i class="bi bi-shield-fill-check text-success fs-1"></i>
			<h6 class="mt-3">Jaminan Rasmi</h6>
			<p class="text-muted small">Jaminan pengeluar sehingga 3 tahun untuk produk
			terpilih</p>
		</div><!-- / class="card-body text-center" -->
		</div><!-- / class="card border-success" -->
	</div><!-- / class="col-md-4" -->	<!-- ========================================================================================== -->
	<div class="col-md-4">
		<div class="card border-success">
		<div class="card-body text-center">
			<i class="bi bi-truck-front text-success fs-1"></i>
			<h6 class="mt-3">Penghantaran Pantas</h6>
			<p class="text-muted small">Penghantaran ke seluruh Malaysia dalam masa 1-3 hari
			bekerja</p>
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
<p class="text-center text-muted"><strong>Nota:</strong>
Harga tertakluk kepada perubahan tanpa notis terlebih dahulu. Produk yang memerlukan pemasangan
akan dikenakan caj tambahan bergantung kepada lokasi.
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
			<?php endif ?>
			<?php endforeach ?>
			<div class="mb-3">
				<label for="tarikh<?php echo $bil ?>" class="form-label">Tarikh:</label>
				<input type="date" class="form-control"
				id="tarikh<?php echo $bil ?>" name="borang[tarikh]"
				value="<?php echo date('Y-m-d') ?>">
			</div><!-- / class="mb-3" -->
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