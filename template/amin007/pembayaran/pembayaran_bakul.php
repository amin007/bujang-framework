<?php
$papar = [
	'tajuk' => 'Semakan Pesanan',
	'keterangan' => 'Semak senarai pesanan anda sebelum membuat pembayaran.',
	'ikon' => 'bi bi-cart-check',
];
// koleksi/gambar/sembangsantai/terima_bayaran_rm3_v03.png
#--------------------------------------------------------------------------------------------------
$kelas = 'btn-outline-info';
$pautan = [
	'pembayaran/semakpesanan',
	'pembayaran/proses',
	'pembayaran/status',
];
#--------------------------------------------------------------------------------------------------
?>
<!-- ========================================================================================== -->
<div class="container my-3"><!-- Pautan Kembali ke Halaman Utama -->
	<a href="?" class="btn btn-outline-success">
		<?php echo $kembaliKePangkalJalan ?>
	</a>
	<nav class="navbar navbar-light bg-white shadow-sm mb-4">
	<header class="container-fluid justify-content-center flex-wrap">
	<?php foreach ($pautan as $laluan): ?>
		<a href="?/<?php echo htmlspecialchars($laluan) ?>" class="btn <?php
		echo $kelas ?> btn-nav"><?php echo $laluan ?></a>
	<?php endforeach; ?>
		</header>
	</nav>
</div><!-- / class="container" -->
<!-- ========================================================================================== -->
<div class="container my-5">
	<div class="card">
	<div class="card-body">
		<h2 class="card-title"><i class="<?php echo $papar['ikon'] ?>"></i>
		<?php echo $papar['tajuk'] ?></h5>
		<p class="card-text"><?php echo $papar['keterangan'] ?></p>
	</div><!-- / class="card-body" -->
	<div class="card-footer">
		<?php semakPembolehubah($_POST,'semak data POST',0);
		?>
	</div>
	</div><!-- / class="card" -->
</div><!-- / class="container my-5" -->
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
