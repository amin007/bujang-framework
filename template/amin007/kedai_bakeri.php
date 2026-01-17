<!DOCTYPE html>
<html lang="ms">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bakeri & Konfeksi</title>
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
							<button class="nav-link active" id="bread-tab" data-bs-toggle="pill" data-bs-target="#bread" type="button" role="tab">
								<i class="fa-solid fa-bread-slice fa-fw me-2"></i>
								<span>Roti & Pastri</span>
							</button>
						</li><!-- / class="nav-item" -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="cakes-tab" data-bs-toggle="pill" data-bs-target="#cakes" type="button" role="tab">
								<i class="fa-solid fa-cake-candles fa-fw me-2"></i>
								<span>Kek</span>
							</button>
						</li><!-- / class="nav-item" -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="cookies-tab" data-bs-toggle="pill" data-bs-target="#cookies" type="button" role="tab">
								<i class="fa-solid fa-cookie-bite fa-fw me-2"></i>
								<span>Biskut & Kuih Kering</span>
							</button>
						</li><!-- / class="nav-item" -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="traditional-tab" data-bs-toggle="pill" data-bs-target="#traditional" type="button" role="tab">
								<i class="fa-solid fa-seedling fa-fw me-2"></i>
								<span>Kuih Tradisional</span>
							</button>
						</li><!-- / class="nav-item" -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="raya-tab" data-bs-toggle="pill" data-bs-target="#raya" type="button" role="tab">
								<i class="fa-solid fa-moon fa-fw me-2"></i>
								<span>Kuih Raya</span>
							</button>
						</li><!-- / class="nav-item" -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="custom-tab" data-bs-toggle="pill" data-bs-target="#custom" type="button" role="tab">
								<i class="fa-solid fa-wand-magic-sparkles fa-fw me-2"></i>
								<span>Tempahan Khas</span>
							</button>
						</li><!-- / class="nav-item" -->
					</ul><!-- / class="nav nav-pills flex-column" -->
				</div><!-- / class="bg-white rounded-3 p-4 shadow-sm" -->
			</div><!-- / class="col-md-3" -->

			<!-- Kawasan Kandungan -->
			<div class="col-md-9">
				<div class="bg-white rounded-3 p-4 shadow-sm">
					<div class="tab-content" id="myTabContent">
						<!-- Tab Roti & Pastri -->
						<div class="tab-pane fade show active" id="bread" role="tabpanel">
							<div class="mb-4">
								<h3><i class="fa-solid fa-bread-slice text-primary"></i> Roti & Pastri</h3>
								<p class="text-muted">Segar dari ketuhar setiap hari</p>
							</div><!-- / class="mb-4" -->

							<div class="row">
								<div class="col-md-6 mb-3">
									<div class="card h-100">
										<div class="card-body">
											<h5 class="card-title">🍞 Roti</h5>
											<p class="card-text">Roti lembut dan berkualiti</p>
											<ul class="small">
												<li>Roti putih dan roti gandum</li>
												<li>Roti Perancis dan baguette</li>
												<li>Roti kismis dan roti manis</li>
											</ul><!-- / class="small" -->
											<button class="btn btn-primary btn-sm">Lihat Menu</button>
										</div><!-- / class="card-body" -->
									</div><!-- / class="card h-100" -->
								</div><!-- / class="col-md-6 mb-3" -->
								<div class="col-md-6 mb-3">
									<div class="card h-100">
										<div class="card-body">
											<h5 class="card-title">🥐 Pastri</h5>
											<p class="card-text">Pastri rangup dan lazat</p>
											<ul class="small">
												<li>Kroisan mentega</li>
												<li>Danish dan puf pastri</li>
												<li>Karipap dan pai</li>
											</ul><!-- / class="small" -->
											<button class="btn btn-primary btn-sm">Lihat Menu</button>
										</div><!-- / class="card-body" -->
									</div><!-- / class="card h-100" -->
								</div><!-- / class="col-md-6 mb-3" -->
							</div><!-- / class="row" -->
						</div><!-- / Tab Roti & Pastri -->

						<!-- Tab Kek -->
						<div class="tab-pane fade" id="cakes" role="tabpanel">
							<div class="mb-4">
								<h3><i class="fa-solid fa-cake-candles text-primary"></i> Kek</h3>
								<p class="text-muted">Kek istimewa untuk setiap majlis</p>
							</div><!-- / class="mb-4" -->
							<div class="list-group">
								<div class="list-group-item">
									<div class="d-flex w-100 justify-content-between">
										<h6 class="mb-1">🎂 Kek Hari Jadi</h6>
										<small class="text-success">Boleh Tempah</small>
									</div><!-- / class="d-flex w-100 justify-content-between" -->
									<p class="mb-1 small">Pelbagai rasa dan saiz, dengan hiasan mengikut permintaan</p>
								</div><!-- / class="list-group-item" -->
								<div class="list-group-item">
									<div class="d-flex w-100 justify-content-between">
										<h6 class="mb-1">💍 Kek Perkahwinan</h6>
										<small class="text-success">Boleh Tempah</small>
									</div><!-- / class="d-flex w-100 justify-content-between" -->
									<p class="mb-1 small">Reka bentuk mewah dan elegan untuk majlis istimewa anda</p>
								</div><!-- / class="list-group-item" -->
								<div class="list-group-item">
									<div class="d-flex w-100 justify-content-between">
										<h6 class="mb-1">🍰 Kek Harian</h6>
										<small class="text-success">Sedia Ada</small>
									</div><!-- / class="d-flex w-100 justify-content-between" -->
									<p class="mb-1 small">Kek coklat, kek vanilla, kek keju, kek buah-buahan</p>
								</div><!-- / class="list-group-item" -->
							</div><!-- / class="list-group" -->
						</div><!-- / Tab Kek -->

						<!-- Tab Biskut & Kuih Kering -->
						<div class="tab-pane fade" id="cookies" role="tabpanel">
							<div class="mb-4">
								<h3><i class="fa-solid fa-cookie-bite text-primary"></i> Biskut & Kuih Kering</h3>
								<p class="text-muted">Rangup dan sedap untuk semua</p>
							</div><!-- / class="mb-4" -->

							<div class="row">
								<div class="col-md-4 mb-3">
									<div class="card text-center h-100">
										<div class="card-body">
											<i class="fa-solid fa-cookie fa-3x text-warning mb-3"></i>
											<h6>Biskut Klasik</h6>
											<p class="small text-muted">Biskut coklat cip, oat, mentega</p>
										</div><!-- / class="card-body" -->
									</div><!-- / class="card text-center h-100" -->
								</div><!-- / class="col-md-4 mb-3" -->
								<div class="col-md-4 mb-3">
									<div class="card text-center h-100">
										<div class="card-body">
											<i class="fa-solid fa-star fa-3x text-primary mb-3"></i>
											<h6>Kuih Kering</h6>
											<p class="small text-muted">Kuih bangkit, kuih tart, mazola</p>
										</div><!-- / class="card-body" -->
									</div><!-- / class="card text-center h-100" -->
								</div><!-- / class="col-md-4 mb-3" -->
								<div class="col-md-4 mb-3">
									<div class="card text-center h-100">
										<div class="card-body">
											<i class="fa-solid fa-heart fa-3x text-danger mb-3"></i>
											<h6>Biskut Istimewa</h6>
											<p class="small text-muted">Resipi keluarga turun-temurun</p>
										</div><!-- / class="card-body" -->
									</div><!-- / class="card text-center h-100" -->
								</div><!-- / class="col-md-4 mb-3" -->
							</div><!-- / class="row" -->
						</div><!-- / Tab Biskut & Kuih Kering -->

						<!-- Tab Kuih Tradisional -->
						<div class="tab-pane fade" id="traditional" role="tabpanel">
							<div class="mb-4">
								<h3><i class="fa-solid fa-seedling text-primary"></i> Kuih Tradisional</h3>
								<p class="text-muted">Warisan kuliner Nusantara</p>
							</div><!-- / class="mb-4" -->

							<div class="row">
								<div class="col-md-6">
									<h6>🍡 Kuih Basah</h6>
									<ul class="small">
										<li>Kuih lapis</li>
										<li>Kuih seri muka</li>
										<li>Kuih talam</li>
										<li>Kuih dadar</li>
										<li>Pulut panggang</li>
									</ul><!-- / class="small" -->
								</div><!-- / class="col-md-6" -->
								<div class="col-md-6">
									<h6>🥥 Kuih Nyonya</h6>
									<ul class="small">
										<li>Kuih angku</li>
										<li>Kuih ketayap</li>
										<li>Onde-onde</li>
										<li>Kuih bingka</li>
										<li>Kuih bahulu</li>
									</ul><!-- / class="small" -->
								</div><!-- / class="col-md-6" -->
							</div><!-- / class="row" -->

							<div class="alert alert-info mt-3">
								<i class="fa-solid fa-calendar-days"></i> Kuih tradisional disediakan mengikut pesanan. Tempah 2 hari lebih awal.
							</div><!-- / class="alert alert-info mt-3" -->
						</div><!-- / Tab Kuih Tradisional -->

						<!-- Tab Kuih Raya -->
						<div class="tab-pane fade" id="raya" role="tabpanel">
							<div class="mb-4">
								<h3><i class="fa-solid fa-moon text-primary"></i> Kuih Raya</h3>
								<p class="text-muted">Meriahkan perayaan dengan kuih istimewa</p>
							</div><!-- / class="mb-4" -->

							<div class="row">
								<div class="col-md-6 mb-3">
									<div class="card">
										<div class="card-body">
											<h6>🌙 Kuih Raya Aidilfitri</h6>
											<ul class="small">
												<li>Biskut raya (tart nenas, cornflakes, semperit)</li>
												<li>Kuih bangkit</li>
												<li>Kuih kapit</li>
												<li>Dodol dan wajik</li>
												<li>Bahulu dan kek lapis</li>
											</ul><!-- / class="small" -->
										</div><!-- / class="card-body" -->
									</div><!-- / class="card" -->
								</div><!-- / class="col-md-6 mb-3" -->
								<div class="col-md-6 mb-3">
									<div class="card">
										<div class="card-body">
											<h6>🏮 Kuih Perayaan Lain</h6>
											<ul class="small">
												<li>Kuih Tahun Baru Cina (kuih kapit, kuih bangkit)</li>
												<li>Murukku untuk Deepavali</li>
												<li>Pineapple tart</li>
												<li>Love letters</li>
												<li>Almond London</li>
											</ul><!-- / class="small" -->
										</div><!-- / class="card-body" -->
									</div><!-- / class="card" -->
								</div><!-- / class="col-md-6 mb-3" -->
							</div><!-- / class="row" -->

							<div class="alert alert-warning">
								<strong><i class="fa-solid fa-clock"></i> Tempahan Awal Disarankan</strong><br>
								Untuk memastikan anda mendapat kuih raya pilihan, sila tempah sekurang-kurangnya 2 minggu sebelum perayaan.
							</div><!-- / class="alert alert-warning" -->
						</div><!-- / Tab Kuih Raya -->

						<!-- Tab Tempahan Khas -->
						<div class="tab-pane fade" id="custom" role="tabpanel">
							<div class="mb-4">
								<h3><i class="fa-solid fa-wand-magic-sparkles text-primary"></i> Tempahan Khas</h3>
								<p class="text-muted">Ciptaan istimewa untuk acara istimewa anda</p>
							</div><!-- / class="mb-4" -->

							<div class="card border-primary">
								<div class="card-body">
									<h5><i class="fa-solid fa-star"></i> Perkhidmatan Eksklusif Kami</h5>
									<p>Kami percaya setiap majlis adalah unik dan istimewa. Justeru, kami menawarkan perkhidmatan tempahan khas yang direka khusus mengikut tema, citarasa, dan bajet anda. Setiap produk dibuat dengan penuh kasih sayang dan perhatian terhadap perincian.</p>

									<div class="row mt-4">
										<div class="col-md-6">
											<h6><i class="fa-solid fa-comments"></i> Perundingan Percuma</h6>
											<p class="small">Berbincang dengan pastri chef kami untuk mendapatkan idea dan cadangan terbaik</p>
										</div><!-- / class="col-md-6" -->
										<div class="col-md-6">
											<h6><i class="fa-solid fa-palette"></i> Reka Bentuk Tersuai</h6>
											<p class="small">Reka bentuk dan hiasan yang unik mengikut tema majlis anda</p>
										</div><!-- / class="col-md-6" -->
										<div class="col-md-6">
											<h6><i class="fa-solid fa-leaf"></i> Pilihan Rasa Istimewa</h6>
											<p class="small">Pelbagai pilihan rasa termasuk pilihan halal, tanpa gluten, dan vegan</p>
										</div><!-- / class="col-md-6" -->
										<div class="col-md-6">
											<h6><i class="fa-solid fa-truck"></i> Penghantaran & Pemasangan</h6>
											<p class="small">Perkhidmatan penghantaran dan pemasangan untuk memastikan kesempurnaan</p>
										</div><!-- / class="col-md-6" -->
									</div><!-- / class="row mt-4" -->

									<div class="alert alert-light mt-4">
										<strong><i class="fa-solid fa-heart"></i> Kepuasan Anda, Keutamaan Kami</strong><br>
										Kami tidak hanya membuat kek atau kuih, tetapi mencipta kenangan manis untuk anda. Setiap pesanan dibuat dengan bahan berkualiti tinggi dan mengikut piawaian kebersihan yang ketat. Dari majlis perkahwinan, hari jadi, majlis korporat hinggalah ke jamuan keluarga—kami sedia membantu menjadikan acara anda lebih istimewa.
									</div><!-- / class="alert alert-light mt-4" -->

									<div class="mt-3">
										<button class="btn btn-primary">Buat Pesanan</button>
										<button class="btn btn-outline-secondary ms-2">Lihat Portfolio</button>
									</div><!-- / class="mt-3" -->
								</div><!-- / class="card-body" -->
							</div><!-- / class="card border-primary" -->

							<div class="row mt-4">
								<div class="col-md-12">
									<h5>Pakej Istimewa</h5>
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead class="table-light">
												<tr>
													<th>Jenis Pakej</th>
													<th>Kandungan</th>
													<th>Sesuai Untuk</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><strong>Pakej Majlis Perkahwinan</strong></td>
													<td>Kek perkahwinan 3 tingkat, 200 biji kuih tradisional, hiasan meja</td>
													<td>Majlis perkahwinan 100-200 tetamu</td>
												</tr>
												<tr>
													<td><strong>Pakej Kenduri Doa Selamat</strong></td>
													<td>Pulut kuning, nasi minyak, 100 biji kuih tradisional</td>
													<td>Majlis doa selamat atau aqiqah</td>
												</tr>
												<tr>
													<td><strong>Pakej Korporat</strong></td>
													<td>100 kotak brownies, cookies premium, kek log</td>
													<td>Majlis korporat atau hadiah pelanggan</td>
												</tr>
												<tr>
													<td><strong>Pakej Hari Jadi</strong></td>
													<td>Kek bertingkat, 50 biji cupcakes, hiasan tema</td>
													<td>Majlis hari jadi kanak-kanak atau dewasa</td>
												</tr>
											</tbody>
										</table>
									</div><!-- / class="table-responsive" -->
								</div><!-- / class="col-md-12" -->
							</div><!-- / class="row mt-4" -->
						</div><!-- / Tab Tempahan Khas -->
					</div><!-- / class="tab-content" -->
				</div><!-- / class="bg-white rounded-3 p-4 shadow-sm" -->
			</div><!-- / class="col-md-9" -->
		</div><!-- / class="row" -->
	</div><!-- / class="container-fluid py-5" -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>