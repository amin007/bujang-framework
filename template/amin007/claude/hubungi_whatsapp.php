<!-- ========================================================================================== -->
<div class="row my-5">
<div class="col-12">
	<!-- ========================================================================================== -->
	<div class="card border-success">
	<div class="card-body p-4">
	<h4 class="card-title text-success text-center mb-4">
		<i class="bi bi-envelope-fill"></i> Borang Pertanyaan
	</h4>
	<!-- ========================================================================================== -->
	<form>
		<div class="row g-3">
		<div class="col-md-6">
			<label for="nama" class="form-label">Nama Penuh</label>
			<input type="text" class="form-control" id="nama" placeholder="Nama anda" required>
		</div><!-- / class="col-md-6" -->
		<div class="col-md-6">
			<label for="email" class="form-label">E-mel</label>
			<input type="email" class="form-control" id="email" placeholder="nama@contoh.com" required>
		</div><!-- / class="col-md-6" -->
		<div class="col-md-6">
			<label for="telefon" class="form-label">Nombor Telefon</label>
			<input type="tel" class="form-control" id="telefon" placeholder="012-3456789" required>
			</div><!-- / class="col-md-6" -->
		<div class="col-md-6">
			<label for="subjek" class="form-label">Subjek</label>
			<select class="form-select" id="subjek" required>
			<option value="">Pilih subjek</option>
			<option value="produk">Pertanyaan Produk</option>
			<option value="perkhidmatan">Pertanyaan Perkhidmatan</option>
			<option value="aduan">Aduan</option>
			<option value="cadangan">Cadangan</option>
			<option value="lain">Lain-lain</option>
			</select>
		</div><!-- / class="col-md-6" -->
		<div class="col-12">
			<label for="mesej" class="form-label">Mesej</label>
			<textarea class="form-control" id="mesej" rows="4" placeholder="Tulis mesej anda di sini..." required></textarea>
		</div><!-- / class="col-12" -->
		<div class="col-12">
			<button type="submit" class="btn btn-success w-100">
			<i class="bi bi-send-fill"></i> Hantar Mesej
			</button>
		</div><!-- / class="col-12" -->
		</div><!-- / class="row g-3" -->
	</form>
	<!-- ========================================================================================== -->
	</div><!-- / class="card-body p-4" -->
	</div><!-- / class="card border-success" -->
	<!-- ========================================================================================== -->
</div><!-- / class="col-12" -->
</div><!-- / class="row my-5" -->
<!-- ========================================================================================== -->
