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
		<h1 class="display-5 text-success fw-bold">Sembang Santai 5 Minit</h1>
		<p class="lead text-muted">
		Sesi perkongsian idea perniagaan secara santai selama 5 minit sambil menikmati teh/kopi.
		<br>Temui potensi bisnes anda dengan modal serendah RM3.00 sahaja. Slot adalah terhad.
		</p><hr>
	</div><!-- / class="text-center mb-4" -->
	<!-- ========================================================================================== -->
</div><!-- / class="container my-5" -->
<!-- ========================================================================================== -->
<div class="container my-5">
	<img src="koleksi/gambar/sembangsantai/sembang-santai-5-minit-gemini.png">
	<a href="#" class="btn btn-lg btn-outline-success" data-bs-toggle="modal"
	data-bs-target="#khidmat002">
		Saya Setuju Membeli
	</a><hr>
	<hr>
</div><!-- / class="container my-5" -->
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
<!-- Modal untuk produk 1 -->
<div class="modal fade" id="khidmat002" tabindex="-1" aria-labelledby="modalLabel1"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
	<div class="modal-header bg-success text-white">
		<h5 class="modal-title" id="modalLabel1">Pengesahan Pembelian</h5>
		<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
		aria-label="Tutup"></button>
	</div><!-- / class="modal-header bg-success text-white" -->
	<form method="POST" action="?/pembayaran/semakpesanan">
	<div class="modal-body">
		<h6>Sembang Santai 5 Minit</h6>
		<p class="text-muted mb-3">Sesi perkongsian idea perniagaan secara santai selama
		5 minit sambil menikmati teh/kopi.</p>
		<input type="hidden" name="borang[kodProduk]" value="khidmat002">
		<div class="mb-3">
			<span>Harga:</span>
			<input type="text" class="form-control bg-secondary-subtle"
			name="borang[harga]" value="3.00" readonly>
		</div><!-- / class="mb-3" -->
		<input type="hidden" name="borang[kuantiti]" value="1">
		<div class="mb-3">
			<label for="email" class="form-label">Tarikh Pertemuan:</label>
			<input type="date" class="form-control" name="borang[tarikh]">
		</div><!-- / class="mb-3" -->
	</div><!-- / class="modal-body" -->
	<div class="modal-footer">
		<input type="reset" class="btn btn-secondary" data-bs-dismiss="modal" value="Batal">
		<input type="submit" class="btn btn-success" value="Sahkan Pembelian">
	</div><!-- / class="modal-footer" -->
	</form>
</div><!-- / class="modal-content" -->
</div><!-- / class="modal-dialog modal-dialog-centered" -->
</div><!-- / class="modal fade" -->
<!-- ========================================================================================== -->
<!-- kod dialog tamat -->
<!-- ========================================================================================== -->