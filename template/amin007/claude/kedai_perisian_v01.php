<?php
#--------------------------------------------------------------------------------------------------
$produk = [
	1 => [
		'id'         => 'beliSekarang1',
		'label'      => 'modalLabel1',
		'nama'       => 'Microsoft Office 365 Personal',
		'penerangan' => 'Langganan tahunan, termasuk Word, Excel, PowerPoint, OneDrive 1TB',
		'harga'      => 299.00,
		'hargaUnit'  => '/tahun',
		'kodProduk'  => 'perisian001',
		'nota'       => 'Langganan tahunan, termasuk Word, Excel, PowerPoint, OneDrive 1TB',
	],
	2 => [
		'id'         => 'beliSekarang2',
		'label'      => 'modalLabel2',
		'nama'       => 'Adobe Creative Cloud',
		'penerangan' => 'Photoshop, Illustrator, Premiere Pro, After Effects (langganan bulanan)',
		'harga'      => 199.00,
		'hargaUnit'  => '/bulan',
		'kodProduk'  => 'perisian002',
		'nota'       => 'Photoshop, Illustrator, Premiere Pro, After Effects (langganan bulanan)',
	],
	3 => [
		'id'         => 'beliSekarang3',
		'label'      => 'modalLabel3',
		'nama'       => 'Windows 11 Pro',
		'penerangan' => 'Lesen tulen seumur hidup, kemas kini percuma',
		'harga'      => 899.00,
		'hargaUnit'  => '',
		'kodProduk'  => 'perisian003',
		'nota'       => 'Lesen tulen seumur hidup, kemas kini percuma',
	],
	4 => [
		'id'         => 'beliSekarang4',
		'label'      => 'modalLabel4',
		'nama'       => 'Antivirus Kaspersky Total Security',
		'penerangan' => 'Perlindungan untuk 5 peranti, langganan tahunan',
		'harga'      => 189.00,
		'hargaUnit'  => '/tahun',
		'kodProduk'  => 'perisian004',
		'nota'       => 'Perlindungan untuk 5 peranti, langganan tahunan',
	],
	5 => [
		'id'         => 'beliSekarang5',
		'label'      => 'modalLabel5',
		'nama'       => 'AutoCAD 2025',
		'penerangan' => 'Perisian reka bentuk profesional untuk arkitek dan jurutera',
		'harga'      => 6999.00,
		'hargaUnit'  => '/tahun',
		'kodProduk'  => 'perisian005',
		'nota'       => 'Perisian reka bentuk profesional untuk arkitek dan jurutera',
	],
	/*6 => [
		'id'         => 'beliSekarang6',
		'label'      => 'modalLabel6',
		'nama'       => 'Aplikasi Mudah Alih Kustom',
		'penerangan' => 'Pembangunan aplikasi Android dan iOS mengikut keperluan',
		'harga'      => 670.00,
		'hargaUnit'  => '',
		'kodProduk'  => 'perisian006',
		'nota'       => 'Pembangunan aplikasi Android dan iOS mengikut keperluan',
	],//*/
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
		<h1 class="display-5 text-success fw-bold">Kedai Perisian dan Aplikasi Mudah Alih</h1>
		<p class="lead text-muted">
			Perbagai perisian berlesen tulen dan aplikasi mudah alih
			untuk kegunaan peribadi dan korporat.
		</p><hr>
	</div><!-- / class="text-center mb-4" -->
	<!-- ========================================================================================== -->
	<div class="row g-4">
	<?php foreach ($produk as $bil => $item) : ?>
	<!-- ========================================================================================== -->
	<!-- Produk <?= $bil ?> -->
	<div class="col-md-6 col-lg-4">
		<div class="card h-100 shadow-sm">
			<div class="card-body">
				<h5 class="card-title"><?= htmlspecialchars($item['nama']) ?></h5>
				<p class="card-text text-muted"><?= htmlspecialchars($item['penerangan']) ?></p>
				<h4 class="text-success fw-bold">
					<?php if ($item['harga'] !== null) : ?>
						RM <?= number_format($item['harga'], 2) ?><?= $item['hargaUnit'] ?>
					<?php else : ?>
						Daripada RM 5,000
					<?php endif ?>
				</h4>
			</div><!-- / class="card-body" -->
			<div class="card-footer bg-white border-0 pb-3">
				<button class="btn btn-success w-100 mb-2" data-bs-toggle="modal"
					data-bs-target="#<?= $item['id'] ?>">
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
	<h2>Pakej Perisian Korporat</h2>
	<div class="alert alert-success" role="alert">
		<h5 class="alert-heading">
			<i class="bi bi-briefcase-fill"></i> Diskaun Khas untuk Syarikat
		</h5>
		<p>Dapatkan diskaun sehingga 30% untuk pembelian lesen berbilang. Hubungi pasukan jualan
		kami untuk sebut harga terperinci.</p>
		<hr>
	</div><!-- /  class="alert alert-success" -->
</div><!-- / class="container my-4" -->

<!-- ========================================================================================== -->
<div class="container my-4">
<h2>Kelebihan Perkhidmatan Kami</h2>
<div class="row g-3">
	<div class="col-md-4">
		<div class="card border-success">
		<div class="card-body text-center">
			<i class="bi bi-patch-check-fill text-success fs-1"></i>
			<h6 class="mt-3">Lesen Tulen</h6>
			<p class="text-muted small">Semua perisian dijamin tulen dan sah dari pembekal rasmi</p>
		</div><!-- /  class="card-body text-center" -->
		</div><!-- /  class="card border-success" -->
	</div><!-- / class="col-md-4" -->
	<div class="col-md-4">
		<div class="card border-success">
		<div class="card-body text-center">
			<i class="bi bi-clock-history text-success fs-1"></i>
			<h6 class="mt-3">Penghantaran Segera</h6>
			<p class="text-muted small">Kod pengaktifan dihantar terus ke e-mel anda dalam masa 24 jam</p>
		</div><!-- /  class="card-body text-center" -->
		</div><!-- /  class="card border-success" -->
	</div><!-- / class="col-md-4" -->
	<div class="col-md-4">
		<div class="card border-success">
		<div class="card-body text-center">
		<i class="bi bi-life-preserver text-success fs-1"></i>
		<h6 class="mt-3">Sokongan Teknikal</h6>
		<p class="text-muted small">Bantuan pemasangan dan sokongan teknikal percuma</p>
		</div><!-- /  class="card-body text-center" -->
		</div><!-- /  class="card border-success" -->
	</div><!-- / class="col-md-4" -->
</div><!-- /  class="row g-3" -->
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
Semua harga adalah untuk lesen digital. Pastikan anda mempunyai sambungan Internet
yang stabil untuk mengaktifkan perisian.
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
</div><!-- / class="d-flex gap-3">
</div><!-- / class="container" -->
<!-- ========================================================================================== -->
<?php
#--------------------------------------------------------------------------------------------------
/*
			<div class="mb-3">
				<label for="emel<?= $bil ?>" class="form-label">E-mel untuk kod pengaktifan:</label>
				<input type="email" class="form-control" id="emel<?= $bil ?>" name="borang[email]" placeholder="nama@contoh.com">
			</div><!-- / class="mb-3" -->

//*/
#--------------------------------------------------------------------------------------------------
?>
<!-- kod dialog mula -->
<!-- ========================================================================================== -->
<!-- kod dialog mula -->
<?php foreach ($produk as $bil => $item) : ?>
<!-- ========================================================================================== -->
<!-- Modal untuk produk <?= $bil ?> -->
<div class="modal fade" id="<?= $item['id'] ?>" tabindex="-1" aria-labelledby="<?= $item['label'] ?>" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<form method="POST" action="?/pembayaran/semakpesanan">
	<div class="modal-content">
		<div class="modal-header bg-success text-white">
			<h5 class="modal-title" id="<?= $item['label'] ?>">Pengesahan Pembelian</h5>
			<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
		</div><!-- / class="modal-header bg-success text-white" -->
		<div class="modal-body">
			<h6><?= htmlspecialchars($item['nama']) ?></h6>
			<p class="text-muted mb-3"><?= htmlspecialchars($item['penerangan']) ?></p>
			<input type="hidden" name="borang[kodProduk]" value="<?= htmlspecialchars($item['kodProduk']) ?>">
			<div class="mb-3">
				<label for="harga<?= $bil ?>" class="form-label">Harga:</label>
				<input type="text" class="form-control bg-secondary-subtle"
				id="harga<?= $bil ?>" name="borang[harga]"
				value="<?= $item['harga'] !== null ? number_format($item['harga'], 2) : 'Sebut harga' ?>" readonly>
			</div><!-- / class="mb-3" -->
			<div class="mb-3">
				<label for="kuantiti<?= $bil ?>" class="form-label">Kuantiti:</label>
				<input type="number" class="form-control" id="kuantiti<?= $bil ?>" name="borang[kuantiti]" value="1" min="1">
			</div><!-- / class="mb-3" -->
			<div class="mb-3">
				<label for="tarikh<?= $bil ?>" class="form-label">Tarikh:</label>
				<input type="date" class="form-control" id="tarikh<?= $bil ?>" name="borang[tarikh]" value="<?= date('Y-m-d') ?>">
			</div><!-- / class="mb-3" -->
			<div class="mb-3">
				<label for="nota<?= $bil ?>" class="form-label">Nota:</label>
				<textarea class="form-control" id="nota<?= $bil ?>" name="borang[nota]"
				rows="3"><?= htmlspecialchars($item['nota']) ?></textarea>
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
