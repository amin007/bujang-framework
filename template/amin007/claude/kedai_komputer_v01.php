<?php
#--------------------------------------------------------------------------------------------------
# Kedai Komputer, Peralatan dan Aksesori Komputer
#--------------------------------------------------------------------------------------------------
//$gambar[] = '<img src="https://placehold.net/product-400x400.png" class="img-fluid" alt="contoh gambar">';
$gambar[] = '<img src="https://cdn.pixabay.com/photo/2017/08/06/10/24/laptop-2591031_1280.jpg" class="img-fluid" alt="contoh gambar">';
//$gambar[] = '<img src="http://picsum.photos/id/9/500/500" class="img-fluid" alt="...">';
$gambar[] = '<img src="https://images.unsplash.com/photo-1658070429465-848c0796abf3?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="...">';
$gambar[] = '<img src="https://placeholder.pics/svg/200" class="img-fluid" alt="...">';
#--------------------------------------------------------------------------------------------------
# tatasusunan kod produk
#--------------------------------------------------------------------------------------------------
$produk = [
	1 => [
		'id'          => 'beliSekarang1',
		'label'       => 'modalLabel1',
		'nama'        => 'Komputer Riba Dell XPS 15',
		'namaPapar'   => 'Komputer Riba',
		'penerangan'  => 'Prosesor Intel Core i7, RAM 16GB, SSD 512GB',
		'harga'       => 4999.00,
		'kodProduk'   => 'kedaiKomputer001',
		'papar_harga' => true,
		'gambar'      => 'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
		//'gambar'      => 'https://cdn.pixabay.com/photo/2021/08/04/13/06/laptop-6521044_1280.jpg',
	],
	2 => [
		'id'          => 'beliSekarang2',
		'label'       => 'modalLabel2',
		'nama'        => 'Tetikus Tanpa Wayar Logitech MX Master 3',
		'namaPapar'   => 'Tetikus Tanpa Wayar',
		'penerangan'  => 'Tetikus ergonomik dengan ketepatan tinggi',
		'harga'       => 399.00,
		'kodProduk'   => 'kedaiKomputer002',
		'papar_harga' => true,
		'gambar'      => 'https://images.unsplash.com/photo-1658070429465-848c0796abf3?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
		//'gambar'      => 'https://cdn.pixabay.com/photo/2020/05/09/20/31/mouse-5150558_1280.jpg',
	],
	3 => [
		'id'          => 'beliSekarang3',
		'label'       => 'modalLabel3',
		'nama'        => 'Monitor Samsung 27" 4K',
		'namaPapar'   => 'Monitor 4K',
		'penerangan'  => 'Resolusi 3840×2160, teknologi HDR10',
		'harga'       => 1299.00,
		'kodProduk'   => 'kedaiKomputer003',
		'papar_harga' => true,
		'gambar'      => 'https://cdn.pixabay.com/photo/2024/05/21/19/57/computer-8779036_1280.jpg',
	],
	4 => [
		'id'          => 'beliSekarang4',
		'label'       => 'modalLabel4',
		'nama'        => 'Papan Kekunci Mekanikal RGB',
		'namaPapar'   => 'Papan Kekunci Mekanikal RGB',
		'penerangan'  => 'Suis Cherry MX, lampu latar RGB boleh diselaraskan',
		'harga'       => 549.00,
		'kodProduk'   => 'kedaiKomputer004',
		'papar_harga' => true,
		'gambar'      => 'https://cdn.pixabay.com/photo/2024/10/30/10/53/ai-generated-9161446_1280.jpg',
	],
	5 => [
		'id'          => 'beliSekarang5',
		'label'       => 'modalLabel5',
		'nama'        => 'Pemacu Keras Luaran 2TB',
		'namaPapar'   => 'Pemacu Keras Luaran 2TB',
		'penerangan'  => 'USB 3.0, kelajuan pemindahan tinggi',
		'harga'       => 329.00,
		'kodProduk'   => 'kedaiKomputer005',
		'papar_harga' => true,
		'gambar'      => 'https://images.unsplash.com/photo-1613070541337-b40942ee6527?q=80&w=687&auto=format&fit=crop',
	],
	6 => [
		'id'          => 'beliSekarang6',
		'label'       => 'modalLabel6',
		'nama'        => 'Kamera Web HD 1080p',
		'namaPapar'   => 'Kamera Web HD 1080p',
		'penerangan'  => 'Mikrofon terbina dalam, penumpuan automatik',
		'harga'       => 249.00,
		'kodProduk'   => 'kedaiKomputer006',
		'papar_harga' => true,
		'gambar'      => 'https://cdn.pixabay.com/photo/2020/04/26/15/42/videoanruf-5095868_1280.jpg',
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
		<h1 class="display-5 text-success fw-bold">Kedai Komputer, Peralatan dan Aksesori Komputer</h1>
		<p class="lead text-muted">
		Pelbagai jenis komputer, peralatan dan aksesori berkualiti tinggi untuk memenuhi keperluan anda
		</p><hr>
	</div><!-- / class="text-center mb-4" -->
	<!-- ========================================================================================== -->
	<div class="row g-4">
	<?php foreach ($produk as $bil => $item) : ?>
	<!-- ========================================================================================== -->
	<!-- Produk <?php echo $bil ?> -->
	<div class="col-md-6 col-lg-4">
		<div class="card h-100 shadow-sm">
			<img src="<?php echo htmlspecialchars($item['gambar']) ?>"
				class="card-img-top"
				alt="<?php echo htmlspecialchars($item['namaPapar']) ?>"
				style="height: 200px; object-fit: cover;">
			<div class="card-body">
				<h5 class="card-title"><?php echo htmlspecialchars($item['namaPapar']) ?></h5>
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
	<h2>Mengapa Memilih Kami?</h2>
	<div class="row g-3">
		<div class="col-md-4">
			<div class="card border-success">
				<div class="card-body text-center">
					<i class="bi bi-shield-check text-success fs-1"></i>
					<h6 class="mt-3">Jaminan Kualiti</h6>
					<p class="text-muted small">Semua produk kami dijamin tulen dan berkualiti tinggi</p>
				</div><!-- / class="card-body text-center" -->
			</div><!-- / class="card border-success" -->
		</div><!-- / class="col-md-4" -->
		<div class="col-md-4">
			<div class="card border-success">
				<div class="card-body text-center">
					<i class="bi bi-truck text-success fs-1"></i>
					<h6 class="mt-3">Penghantaran Percuma</h6>
					<p class="text-muted small">Penghantaran percuma untuk pembelian melebihi RM 500</p>
				</div><!-- / class="card-body text-center" -->
			</div><!-- / class="card border-success" -->
		</div><!-- / class="col-md-4" -->
		<div class="col-md-4">
			<div class="card border-success">
				<div class="card-body text-center">
					<i class="bi bi-headset text-success fs-1"></i>
					<h6 class="mt-3">Sokongan Pelanggan</h6>
					<p class="text-muted small">Khidmat pelanggan 24/7 untuk membantu anda</p>
				</div><!-- / class="card-body text-center" -->
			</div><!-- / class="card border-success" -->
		</div><!-- / class="col-md-4" -->
	</div><!-- / class="row g-3" -->
	<hr>
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
Harga tertakluk kepada perubahan tanpa notis terlebih dahulu.
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
<?php foreach ($produk as $bil => $item) : ?>
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
				<?php if ($item['papar_harga']) : ?>
					<strong class="text-success fs-5 d-block mb-1">RM <?php echo $item['harga'] ?></strong>
				<?php endif ?>
				<input type="text" class="form-control bg-secondary-subtle"
				id="harga<?php echo $bil ?>" name="borang[harga]" value="<?php echo $item['harga'] ?>" readonly>
			</div><!-- / class="mb-3" -->
			<div class="mb-3">
				<label for="kuantiti<?php echo $bil ?>" class="form-label">Kuantiti:</label>
				<input type="number" class="form-control" id="kuantiti<?php echo $bil ?>"
				name="borang[kuantiti]" value="1" min="1">
			</div><!-- / class="mb-3" -->
			<div class="mb-3">
				<label for="tarikh<?php echo $bil ?>" class="form-label">Tarikh:</label>
				<input type="date" class="form-control" id="tarikh<?php echo $bil ?>"
				name="borang[tarikh]" value="<?php echo date('Y-m-d') ?>">
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
<!-- ========================================================================================== -->
<?php endforeach ?>
<!-- kod dialog tamat -->
<!-- ========================================================================================== -->