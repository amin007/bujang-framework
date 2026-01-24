<?php
#--------------------------------------------------------------------------------------------------
require 'fungsi_global.php';
require 'bujang.php';
#--------------------------------------------------------------------------------------------------
# Senarai laluan yang sah (route mapping)
#--------------------------------------------------------------------------------------------------
$folder = ['template/amin007/','template/amin007/claude/','template/amin007/grok/',
'template/amin007/chatgpt/'];
$folderApa = $folder[3];
#--------------------------------------------------------------------------------------------------
$pautanSah = [
	# produk
/*	'buka/kedai/komputer' => [
		'fail' => $folderApa . 'kedai_komputer.php',
		'tajuk' => 'Kedai Komputer, Peralatan dan Aksesori Komputer',
		'keterangan' => 'Pelbagai jenama komputer riba, komputer meja, dan aksesori komputer terkini',
		'ikon' => 'bi bi-laptop-fill'
	],
	'buka/kedai/perisian' => [
		'fail' => $folderApa . 'kedai_perisian.php',
		'tajuk' => 'Kedai Perisian dan Aplikasi Mudah Alih',
		'keterangan' => 'Pelbagai perisian berlesen tulen untuk kegunaan peribadi dan korporat',
		'ikon' => 'bi bi-code-square'
	],
	'buka/kedai/ict' => [
		'fail' => $folderApa . 'kedai_ict.php',
		'tajuk' => 'Kedai Peralatan Telekomunikasi dan Elektronik',
		'keterangan' => Keperluan peribadi dan perniagaan.',
		'ikon' => 'bi bi-router-fill'
	],
	'buka/kedai/buku-alat-tulis' => [
		'fail' => $folderApa . 'kedai_buku-alat-tulis.php',
		'tajuk' => 'Kedai Buku dan Alat Tulis',
		'keterangan' => 'Koleksi buku terkini dari pelbagai kategori dan pelbagai alat tulis berkualiti',
		'ikon' => 'bi bi-book-fill'
	],
	'buka/kedai/kuih' => [
		'fail' => $folderApa . 'kedai_kuih.php',
		'tajuk' => 'Kedai Produk Bakeri dan Konfeksi',
		'keterangan' => 'Pelbagai jenis kuih tradisional, kuih raya, kek, dan produk bakeri yang lazat dan segar',
		'ikon' => 'bi bi-cake2-fill'
	],
	# khidmat
	'tawar/khidmat/aturcara' => [
		'fail' => $folderApa . 'khidmat_aturcara_v01.php',
		'tajuk' => 'Pengaturcaraan & Aplikasi',
		'keterangan' => 'Pembangunan aplikasi web & mudah alih menggunakan teknologi moden.',
		'ikon' => 'fa-solid fa-code fa-2x mb-3'
	],
	'tawar/khidmat/latihan' => [
		'fail' => $folderApa . 'khidmat_latihan_v01.php',
		'tajuk' => 'Latihan ICT Masa Hadapan',
		'keterangan' => 'Latihan komputer dan teknologi untuk individu serta organisasi.',
		'ikon' => 'fa-solid fa-laptop-code fa-2x mb-3'
	],
	'tawar/khidmat/rnd_ai' => [
		'fail' => $folderApa . 'khidmat_rnd_ai_v01.php',
		'tajuk' => 'Penyelidikan dan Pembangunan & AI',
		'keterangan' => 'Pembangunan penyelesaian AI dan automasi untuk pelbagai industri.',
		'ikon' => 'fa-solid fa-microchip fa-2x mb-3'
	],//*/
	'tawar/khidmat/nasihat' => [
		'fail' => $folderApa . 'khidmat_nasihat_v00.php',
		'tajuk' => 'Khidmat Nasihat Perisian',
		'keterangan' => 'Nasihat pembangunan sistem, integrasi dan penyelesaian teknologi.',
		'ikon' => 'fa-solid fa-lightbulb fa-2x mb-3'
	],
	/*'tawar/khidmat/penulisan' => [
		'fail' => $folderApa . 'khidmat_penulisan_v01.php',
		'tajuk' => 'Penulisan Profesional',
		'keterangan' => 'Penulisan bebas dengan penggunaan AI, automasi dan analisis data.',
		'ikon' => 'fa-solid fa-pen-nib fa-2x mb-3'
	],//*/
	'tawar/khidmat/cetak' => [
		'fail' => $folderApa . 'khidmat_cetak_v02.php',
		'tajuk' => 'Cetak Atas Talian',
		'keterangan' => 'Cetak Atas Permintaan',
		'ikon' => 'fa-solid fa-print fa-2x mb-3',
	],
	'hubungi/whatsapp' => [
		'fail' => $folderApa . 'hubungi_whatsapp.php',
		'tajuk' => 'WhatsApp',
		'keterangan' => 'Media Sosial Kami',
		'ikon' => 'bi bi-whatsapp',
	],
	'hubungi/facebook' => [
		'fail' => $folderApa . 'hubungi_facebook.php',
		'tajuk' => 'Facebook',
		'keterangan' => 'Media Sosial Kami',
		'ikon' => 'bi bi-facebook'
	],
	'hubungi/instagram' => [
		'fail' => $folderApa . 'hubungi_instagram.php',
		'tajuk' => 'Instagram',
		'keterangan' => 'Media Sosial Kami',
		'ikon' => 'bi bi-instagram'
	],//*/
];
#--------------------------------------------------------------------------------------------------
// Dapatkan URI semasa dan bersihkan
$uri = ltrim(parse_url($_SERVER['QUERY_STRING'], PHP_URL_PATH), '?/');
$failPautan = $pautanSah[$uri]['fail'] ?? $folderApa . 'readme.php';
$tajuk = $pautanSah[$uri]['tajuk'] ?? 'Utama';
#--------------------------------------------------------------------------------------------------
if ($uri !== '' && !array_key_exists($uri, $pautanSah))
{
    http_response_code(404);
}
#--------------------------------------------------------------------------------------------------
/*semakPembolehubah($uri,'uri');
semakPembolehubah($pautanSah,'pautanSah[]',0);
semakPembolehubah($pautanSah[$uri],'pautanSah['.$uri.']',0);
semakPembolehubah($failPautan,'failPautan');//*/
#--------------------------------------------------------------------------------------------------
# kod yang boleh digunakan sama di semua kedai.
$classIcon[] = '<i class="bi bi-door-open"></i>';
$classIcon[] = '<i class="bi bi-house-fill"></i>';
$classIcon[] = '<i class="fa-solid fa-circle-left"></i>';
$classIcon[] = '<i class="fa-solid fa-arrow-left me-2"></i>';
$pilihIcon = $classIcon[0];
$kembaliKePangkalJalan = $pilihIcon . 'Kembali ke Halaman Utama';
$kembaliKePangkalJalan2 = $classIcon[3] . 'Kembali ke Halaman Utama';
#--------------------------------------------------------------------------------------------------
diatasDaa('Bisnes:' . $tajuk);
#--------------------------------------------------------------------------------------------------
require $failPautan;
#--------------------------------------------------------------------------------------------------
?>
<hr>
<?php
#--------------------------------------------------------------------------------------------------
dibawahDaa();
#--------------------------------------------------------------------------------------------------
/*?>
<script>
</script>
<?php*/
#--------------------------------------------------------------------------------------------------
badanKaki();
#--------------------------------------------------------------------------------------------------
###################################################################################################
# simpan kod debug
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------
//if ( ! function_exists('menuAtasLangit')):
	function menuAtasLangit($laluanSah, $uri)
	{
		list($butang) = dapatkanPembolehubahDaa($laluanSah, $uri);
		$kelas = 'btn-outline-success';
		$teks = 'Cubaan';
		print <<<END
<!-- Navbar melintang dengan butang success -->
<nav class="navbar navbar-light bg-white shadow-sm mb-4">
<header class="container-fluid justify-content-center flex-wrap">
$butang
</header>
</nav>
<hr>
END;
	}
//endif;//*/
#--------------------------------------------------------------------------------------------------
//if ( ! function_exists('dapatkanPembolehubahDaa')):
	function dapatkanPembolehubahDaa($laluanSah, $uri)
	{
		$butang = '';
		foreach ($laluanSah as $laluan => $fail):
			#--------------------------------------------------------------------------------------
			$teks = match(true) // Teks butang yang cantik
			{
				str_ends_with($laluan, '/media')
					=> 'Paparan media sosial yang popular',
				default => 'Halaman Utama',
			};
			#--------------------------------------------------------------------------------------
			// Tentukan kelas butang: aktif atau tidak
			$kelas = ($uri === $laluan) ? 'btn-success' : 'btn-outline-success';
			#--------------------------------------------------------------------------------------
			$butang .= "\r\n\t" . '<a href="?/' . htmlspecialchars($laluan) . '"'
			. ' class="btn ' . $kelas . ' btn-nav">'
			. $teks . '</a>';
			#--------------------------------------------------------------------------------------
		endforeach;
		$butang .= "\r\n";
		#------------------------------------------------------------------------------------------
		return array($butang);
	}
//endif;//*/
#--------------------------------------------------------------------------------------------------
?>