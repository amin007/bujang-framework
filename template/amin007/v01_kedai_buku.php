<!DOCTYPE html>
<html lang="ms">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Buku & Alat Tulis</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light">
	<div class="container-fluid py-5">
		<div class="row">
			<!-- Sidebar -->
			<div class="col-md-3">
				<div class="bg-white rounded-3 p-4 shadow-sm">
					<h5 class="mb-4">Menu</h5>

					<ul class="nav nav-pills flex-column" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="books-tab" data-bs-toggle="pill" data-bs-target="#books" type="button" role="tab">
								<i class="fa-solid fa-book fa-fw me-2"></i>
								<span>Buku</span>
							</button>
						</li><!-- / class="nav-item" -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="writing-tab" data-bs-toggle="pill" data-bs-target="#writing" type="button" role="tab">
								<i class="fa-solid fa-pen fa-fw me-2"></i>
								<span>Alat Tulis</span>
							</button>
						</li><!-- / class="nav-item" -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="office-tab" data-bs-toggle="pill" data-bs-target="#office" type="button" role="tab">
								<i class="fa-solid fa-briefcase fa-fw me-2"></i>
								<span>Keperluan Pejabat</span>
							</button>
						</li><!-- / class="nav-item" -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="school-tab" data-bs-toggle="pill" data-bs-target="#school" type="button" role="tab">
								<i class="fa-solid fa-graduation-cap fa-fw me-2"></i>
								<span>Keperluan Sekolah</span>
							</button>
						</li><!-- / class="nav-item" -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="art-tab" data-bs-toggle="pill" data-bs-target="#art" type="button" role="tab">
								<i class="fa-solid fa-palette fa-fw me-2"></i>
								<span>Seni & Kraf</span>
							</button>
						</li><!-- / class="nav-item" -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="corporate-tab" data-bs-toggle="pill" data-bs-target="#corporate" type="button" role="tab">
								<i class="fa-solid fa-building fa-fw me-2"></i>
								<span>Pesanan Korporat</span>
							</button>
						</li><!-- / class="nav-item" -->
					</ul><!-- / class="nav nav-pills flex-column" -->
				</div><!-- / class="bg-white rounded-3 p-4 shadow-sm" -->
			</div><!-- / class="col-md-3" -->

			<!-- Kawasan Kandungan -->
			<div class="col-md-9">
				<div class="bg-white rounded-3 p-4 shadow-sm">
					<div class="tab-content" id="myTabContent">
						<!-- Tab Buku -->
						<div class="tab-pane fade show active" id="books" role="tabpanel">
							<div class="mb-4">
								<h3><i class="fa-solid fa-book text-primary"></i> Buku</h3>
								<p class="text-muted">Koleksi buku untuk semua peringkat umur</p>
							</div><!-- / class="mb-4" -->

							<div class="row">
								<div class="col-md-6 mb-3">
									<div class="card h-100">
										<div class="card-body">
											<h5 class="card-title">📚 Buku Teks & Rujukan</h5>
											<p class="card-text">Buku sekolah dan universiti</p>
											<ul class="small">
												<li>Buku teks sekolah rendah dan menengah</li>
												<li>Buku rujukan universiti</li>
												<li>Buku latihan dan nota</li>
											</ul><!-- / class="small" -->
											<button class="btn btn-primary btn-sm">Lihat Koleksi</button>
										</div><!-- / class="card-body" -->
									</div><!-- / class="card h-100" -->
								</div><!-- / class="col-md-6 mb-3" -->
								<div class="col-md-6 mb-3">
									<div class="card h-100">
										<div class="card-body">
											<h5 class="card-title">📖 Buku Am</h5>
											<p class="card-text">Bacaan untuk ilmu dan hiburan</p>
											<ul class="small">
												<li>Novel dan cerpen</li>
												<li>Buku motivasi dan pembangunan diri</li>
												<li>Buku agama dan kerohanian</li>
											</ul><!-- / class="small" -->
											<button class="btn btn-primary btn-sm">Lihat Koleksi</button>
										</div><!-- / class="card-body" -->
									</div><!-- / class="card h-100" -->
								</div><!-- / class="col-md-6 mb-3" -->
							</div><!-- / class="row" -->
						</div><!-- / Tab Buku -->

						<!-- Tab Alat Tulis -->
						<div class="tab-pane fade" id="writing" role="tabpanel">
							<div class="mb-4">
								<h3><i class="fa-solid fa-pen text-primary"></i> Alat Tulis</h3>
								<p class="text-muted">Peralatan menulis berkualiti tinggi</p>
							</div><!-- / class="mb-4" -->

							<div class="list-group">
								<div class="list-group-item">
									<div class="d-flex w-100 justify-content-between">
										<h6 class="mb-1"><i class="fa-solid fa-pen-nib"></i> Pen & Pensel</h6>
										<small class="text-success">Tersedia</small>
									</div><!-- / class="d-flex w-100 justify-content-between" -->
									<p class="mb-1 small">Pen bola, pen gel, pensel mekanikal, pensel kayu</p>
								</div><!-- / class="list-group-item" -->
								<div class="list-group-item">
									<div class="d-flex w-100 justify-content-between">
										<h6 class="mb-1"><i class="fa-solid fa-highlighter"></i> Penanda & Pemadam</h6>
										<small class="text-success">Tersedia</small>
									</div><!-- / class="d-flex w-100 justify-content-between" -->
									<p class="mb-1 small">Penanda warna, pen penanda, pemadam, pen pembetulan</p>
								</div><!-- / class="list-group-item" -->
								<div class="list-group-item">
									<div class="d-flex w-100 justify-content-between">
										<h6 class="mb-1"><i class="fa-solid fa-marker"></i> Marker & Pen Papan Putih</h6>
										<small class="text-success">Tersedia</small>
									</div><!-- / class="d-flex w-100 justify-content-between" -->
									<p class="mb-1 small">Marker kekal, pen papan putih, pen kaligrafi</p>
								</div><!-- / class="list-group-item" -->
							</div><!-- / class="list-group" -->
						</div><!-- / Tab Alat Tulis -->

						<!-- Tab Keperluan Pejabat -->
						<div class="tab-pane fade" id="office" role="tabpanel">
							<div class="mb-4">
								<h3><i class="fa-solid fa-briefcase text-primary"></i> Keperluan Pejabat</h3>
								<p class="text-muted">Kelengkapan untuk pejabat yang teratur</p>
							</div><!-- / class="mb-4" -->

							<div class="row">
								<div class="col-md-4 mb-3">
									<div class="card text-center h-100">
										<div class="card-body">
											<i class="fa-solid fa-folder fa-3x text-warning mb-3"></i>
											<h6>Fail & Folder</h6>
											<p class="small text-muted">Pelbagai jenis fail untuk pengurusan dokumen</p>
										</div><!-- / class="card-body" -->
									</div><!-- / class="card text-center h-100" -->
								</div><!-- / class="col-md-4 mb-3" -->
								<div class="col-md-4 mb-3">
									<div class="card text-center h-100">
										<div class="card-body">
											<i class="fa-solid fa-copy fa-3x text-primary mb-3"></i>
											<h6>Kertas & Nota</h6>
											<p class="small text-muted">Kertas A4, nota melekat, buku nota</p>
										</div><!-- / class="card-body" -->
									</div><!-- / class="card text-center h-100" -->
								</div><!-- / class="col-md-4 mb-3" -->
								<div class="col-md-4 mb-3">
									<div class="card text-center h-100">
										<div class="card-body">
											<i class="fa-solid fa-paperclip fa-3x text-success mb-3"></i>
											<h6>Alat Pejabat</h6>
											<p class="small text-muted">Pengikat kertas, pelekat, gunting, pembuka</p>
										</div><!-- / class="card-body" -->
									</div><!-- / class="card text-center h-100" -->
								</div><!-- / class="col-md-4 mb-3" -->
							</div><!-- / class="row" -->
						</div><!-- / Tab Keperluan Pejabat -->

						<!-- Tab Keperluan Sekolah -->
						<div class="tab-pane fade" id="school" role="tabpanel">
							<div class="mb-4">
								<h3><i class="fa-solid fa-graduation-cap text-primary"></i> Keperluan Sekolah</h3>
								<p class="text-muted">Kelengkapan untuk pelajar</p>
							</div><!-- / class="mb-4" -->

							<div class="row">
								<div class="col-md-6">
									<h6><i class="fa-solid fa-bag-shopping"></i> Kelengkapan Asas</h6>
									<ul class="small">
										<li>Beg sekolah dan beg galas</li>
										<li>Kotak pensel dan bekas alat tulis</li>
										<li>Buku latihan dan buku nota</li>
										<li>Penggaris, pembaris segi tiga, jangka lukis</li>
									</ul><!-- / class="small" -->
								</div><!-- / class="col-md-6" -->
								<div class="col-md-6">
									<h6><i class="fa-solid fa-calculator"></i> Alat Pembelajaran</h6>
									<ul class="small">
										<li>Kalkulator saintifik</li>
										<li>Set geometri</li>
										<li>Atlas dan peta</li>
										<li>Kamus dan tesaurus</li>
									</ul><!-- / class="small" -->
								</div><!-- / class="col-md-6" -->
							</div><!-- / class="row" -->

							<div class="alert alert-info mt-3">
								<i class="fa-solid fa-tags"></i> Pakej istimewa untuk pembelian pukal sekolah. Hubungi kami untuk tawaran khas.
							</div><!-- / class="alert alert-info mt-3" -->
						</div><!-- / Tab Keperluan Sekolah -->

						<!-- Tab Seni & Kraf -->
						<div class="tab-pane fade" id="art" role="tabpanel">
							<div class="mb-4">
								<h3><i class="fa-solid fa-palette text-primary"></i> Seni & Kraf</h3>
								<p class="text-muted">Peralatan untuk kreativiti tanpa had</p>
							</div><!-- / class="mb-4" -->

							<div class="row">
								<div class="col-md-6 mb-3">
									<div class="card">
										<div class="card-body">
											<h6><i class="fa-solid fa-paintbrush"></i> Alat Lukisan</h6>
											<p class="small">Pensel warna, krayon, pastel, cat air, cat akrilik, berus lukisan</p>
										</div><!-- / class="card-body" -->
									</div><!-- / class="card" -->
								</div><!-- / class="col-md-6 mb-3" -->
								<div class="col-md-6 mb-3">
									<div class="card">
										<div class="card-body">
											<h6><i class="fa-solid fa-scroll"></i> Kertas & Kanvas</h6>
											<p class="small">Kertas lukisan, kertas warna, blok cat air, kanvas lukisan</p>
										</div><!-- / class="card-body" -->
									</div><!-- / class="card" -->
								</div><!-- / class="col-md-6 mb-3" -->
								<div class="col-md-6 mb-3">
									<div class="card">
										<div class="card-body">
											<h6><i class="fa-solid fa-scissors"></i> Alat Kraf</h6>
											<p class="small">Gunting kraf, pisau pemotong, pelekat, pita pelekat, kertas origami</p>
										</div><!-- / class="card-body" -->
									</div><!-- / class="card" -->
								</div><!-- / class="col-md-6 mb-3" -->
								<div class="col-md-6 mb-3">
									<div class="card">
										<div class="card-body">
											<h6><i class="fa-solid fa-shapes"></i> Bahan Kraf</h6>
											<p class="small">Manik, benang, fabrik, tanah liat, bahan kitar semula</p>
										</div><!-- / class="card-body" -->
									</div><!-- / class="card" -->
								</div><!-- / class="col-md-6 mb-3" -->
							</div><!-- / class="row" -->
						</div><!-- / Tab Seni & Kraf -->

						<!-- Tab Pesanan Korporat -->
						<div class="tab-pane fade" id="corporate" role="tabpanel">
							<div class="mb-4">
								<h3><i class="fa-solid fa-building text-primary"></i> Pesanan Korporat</h3>
								<p class="text-muted">Penyelesaian alat tulis untuk perniagaan anda</p>
							</div><!-- / class="mb-4" -->

							<div class="card border-primary">
								<div class="card-body">
									<h5><i class="fa-solid fa-star"></i> Perkhidmatan Istimewa untuk Keperluan Korporat</h5>
									<p>Kami memahami bahawa setiap organisasi mempunyai keperluan yang unik. Oleh itu, kami menawarkan perkhidmatan pesanan khas yang direka khusus untuk memenuhi keperluan perniagaan anda—daripada alat tulis berjenama hingga pakej lengkap untuk pejabat baru.</p>

									<div class="row mt-4">
										<div class="col-md-6">
											<h6><i class="fa-solid fa-stamp"></i> Alat Tulis Berjenama</h6>
											<p class="small">Pen, buku nota, dan folder dengan logo syarikat anda yang dicetak dengan berkualiti tinggi</p>
										</div><!-- / class="col-md-6" -->
										<div class="col-md-6">
											<h6><i class="fa-solid fa-boxes-stacked"></i> Bekalan Pukal</h6>
											<p class="small">Harga istimewa untuk pembelian dalam kuantiti besar dengan penghantaran berjadual</p>
										</div><!-- / class="col-md-6" -->
										<div class="col-md-6">
											<h6><i class="fa-solid fa-gift"></i> Hadiah Korporat</h6>
											<p class="small">Set alat tulis eksklusif untuk hadiah kepada pelanggan dan rakan kongsi</p>
										</div><!-- / class="col-md-6" -->
										<div class="col-md-6">
											<h6><i class="fa-solid fa-truck"></i> Pengurusan Stok</h6>
											<p class="small">Sistem pengurusan inventori untuk memastikan alat tulis sentiasa mencukupi</p>
										</div><!-- / class="col-md-6" -->
									</div><!-- / class="row mt-4" -->

									<div class="alert alert-light mt-4">
										<strong><i class="fa-solid fa-info-circle"></i> Reka Bentuk & Percetakan Tersuai</strong><br>
										Pasukan kami boleh membantu mereka bentuk alat tulis eksklusif yang mencerminkan identiti jenama syarikat anda. Daripada konsep hingga penghantaran, kami uruskan semuanya.
									</div><!-- / class="alert alert-light mt-4" -->

									<div class="mt-3">
										<button class="btn btn-primary">Dapatkan Sebut Harga</button>
										<button class="btn btn-outline-secondary ms-2">Muat Turun Katalog</button>
									</div><!-- / class="mt-3" -->
								</div><!-- / class="card-body" -->
							</div><!-- / class="card border-primary" -->
						</div><!-- / Tab Pesanan Korporat -->
					</div><!-- / class="tab-content" -->
				</div><!-- / class="bg-white rounded-3 p-4 shadow-sm" -->
			</div><!-- / class="col-md-9" -->
		</div><!-- / class="row" -->
	</div><!-- / class="container-fluid py-5" -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>