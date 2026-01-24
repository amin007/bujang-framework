<?php
#--------------------------------------------------------------------------------------------------
require 'fungsi_global.php';
require 'bujang.php';
#--------------------------------------------------------------------------------------------------
diatasDaa('Jenis Bisnes Di 7 ADA SOLUTION');
#--------------------------------------------------------------------------------------------------
# Senarai laluan yang sah (route mapping)
#--------------------------------------------------------------------------------------------------
$folder = ['template/amin007/','template/amin007/claude/','template/amin007/grok/',
'template/amin007/chatgpt/'];
$folderApa = $folder[3];
#--------------------------------------------------------------------------------------------------
$laluanSah = [
	/*'buka/kedai/komputer' => $folderApa . 'kedai_komputer.php',
	'buka/kedai/perisian' => $folderApa . 'kedai_perisian.php',
	'buka/kedai/ict' => $folderApa . 'kedai_ict.php',
	'buka/kedai/buku-alat-tulis' => $folderApa . 'kedai_buku-alat-tulis.php',
	'buka/kedai/kuih' => $folderApa . 'kedai_kuih.php',//*/
	'tawar/khidmat/cetak' => $folderApa . 'khidmat_cetak_v01.php',
	'hubungi/whatsapp' => $folderApa . 'hubungi_whatsapp.php',
	'hubungi/facebook' => $folderApa . 'hubungi_facebook.php',
	'hubungi/instagram' => $folderApa . 'hubungi_instagram.php',
];
#--------------------------------------------------------------------------------------------------
/*
[0] = url pada pautan pelayar web
[1] = pautan fail ke folder
[2] = tajuk utama
[3] = keterangan tajuk utama
[4] = icon bootstrap (BI) atau font awesome(FA)
//*/
$pautanSah = [
	# produk
/*	['buka/kedai/komputer', $folderApa . 'kedai_komputer.php',
	'Kedai Komputer, Peralatan dan Aksesori Komputer',
	'Pelbagai jenama komputer riba, komputer meja, dan aksesori komputer terkini',
	'bi bi-laptop-fill'],
	['buka/kedai/perisian' => $folderApa . 'kedai_perisian.php',
	'Kedai Perisian dan Aplikasi Mudah Alih',
	'Pelbagai perisian berlesen tulen untuk kegunaan peribadi dan korporat',
	'bi bi-code-square'],
	['buka/kedai/ict' => $folderApa . 'kedai_ict.php',
	'Kedai Peralatan Telekomunikasi dan Elektronik',
	'Keperluan peribadi dan perniagaan.',
	'bi bi-router-fill'],
	['buka/kedai/buku-alat-tulis' => $folderApa . 'kedai_buku-alat-tulis.php',
	'Kedai Buku dan Alat Tulis',
	'Koleksi buku terkini dari pelbagai kategori dan pelbagai alat tulis berkualiti',
	'bi bi-book-fill'],
	['buka/kedai/kuih' => $folderApa . 'kedai_kuih.php',
	'Kedai Produk Bakeri dan Konfeksi',
	'Pelbagai jenis kuih tradisional, kuih raya, kek, dan produk bakeri yang lazat dan segar',
	'bi bi-cake2-fill'],
	/* khidmat
	[0] = url pada pautan pelayar web
	[1] = pautan fail ke folder
	[2] = tajuk utama
	[3] = keterangan tajuk utama
	[4] = icon bootstrap (BI) atau font awesome(FA) //*
	['tawar/khidmat/aturcara', $folderApa . 'khidmat_aturcara_v01.php',
	'Pengaturcaraan & Aplikasi',
	'Pembangunan aplikasi web & mudah alih menggunakan teknologi moden.',
	'fa-solid fa-code fa-2x mb-3'],
	['tawar/khidmat/latihan', $folderApa . 'khidmat_latihan_v01.php',
	'Latihan ICT Masa Hadapan',
	'Latihan komputer dan teknologi untuk individu serta organisasi.',
	'fa-solid fa-laptop-code fa-2x mb-3'],
	['tawar/khidmat/rnd_ai', $folderApa . 'khidmat_rnd_ai_v01.php',
	'Penyelidikan dan Pembangunan & AI',
	'Pembangunan penyelesaian AI dan automasi untuk pelbagai industri.',
	'fa-solid fa-microchip fa-2x mb-3'],
	['tawar/khidmat/nasihat', $folderApa . 'khidmat_nasihat_v01.php',
	'Khidmat Nasihat Perisian',
	'Nasihat pembangunan sistem, integrasi dan penyelesaian teknologi.',
	'fa-solid fa-lightbulb fa-2x mb-3'],
	['tawar/khidmat/penulisan', $folderApa . 'khidmat_penulisan_v01.php',
	'Penulisan Profesional',
	'Penulisan bebas dengan penggunaan AI, automasi dan analisis data.',
	'fa-solid fa-pen-nib fa-2x mb-3'],//*/
	['tawar/khidmat/cetak', $folderApa . 'khidmat_cetak_v01.php',
	'Cetak Atas Talian',
	'Cetak Atas Permintaan',
	'fa-solid fa-print fa-2x mb-3'],
	/* hubungi
	[0] = url pada pautan pelayar web
	[1] = pautan fail ke folder
	[2] = tajuk utama
	[3] = keterangan tajuk utama
	[4] = icon bootstrap (BI) atau font awesome(FA) //*/
	/*['hubungi/whatsapp', $folderApa . 'hubungi_whatsapp.php',
	'WhatsApp','Media Sosial Kami',
	'bi bi-whatsapp'],
	['hubungi/facebook', $folderApa . 'hubungi_facebook.php',
	'Facebook','Media Sosial Kami',
	'bi bi-facebook'],
	['hubungi/instagram', $folderApa . 'hubungi_instagram.php',
	'Instagram','Media Sosial Kami',
	'bi bi-instagram'],//*/
];
#--------------------------------------------------------------------------------------------------
// Dapatkan URI semasa dan bersihkan
$uri = ltrim(parse_url($_SERVER['QUERY_STRING'], PHP_URL_PATH), '?/');
#--------------------------------------------------------------------------------------------------
$failMd = $laluanSah[$uri] ?? $folderApa . 'readme.php';
#--------------------------------------------------------------------------------------------------
/*semakPembolehubah($uri,'uri');
semakPembolehubah($laluanSah,'laluanSah[]',0);
semakPembolehubah($laluanSah[$uri],'laluanSah['.$uri.']',0);
semakPembolehubah($failMd,'failMd');//*/
#--------------------------------------------------------------------------------------------------
if ($uri !== '' && !array_key_exists($uri, $laluanSah))
{
    http_response_code(404);
}
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
# sumber : https://stackoverflow.com/questions/72263107/how-do-i-use-markdown-it-without-node-js
//echo '<' . $kodHTML . ' class="container markdown">';
require $failMd; // Markdown akan dipaparkan sebagai teks biasa
//echo '</' . $kodHTML . '><!-- / class="markdown" -->';
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