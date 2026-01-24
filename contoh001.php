<?php
#--------------------------------------------------------------------------------------------------
require 'fungsi_global.php';
require 'bujang.php';
#--------------------------------------------------------------------------------------------------
# Senarai laluan yang sah (route mapping)
#--------------------------------------------------------------------------------------------------
$folder = ['template/amin007/','template/amin007/claude/','template/amin007/grok/',
'template/amin007/chatgpt/'];
$folderApa = $folder[1];
#--------------------------------------------------------------------------------------------------
$laluanSah = [
	'buka/kedai/komputer' => $folderApa . 'kedai_komputer.php',
	'buka/kedai/perisian' => $folderApa . 'kedai_perisian.php',
	'buka/kedai/ict' => $folderApa . 'kedai_ict.php',
	'buka/kedai/buku-alat-tulis' => $folderApa . 'kedai_buku-alat-tulis.php',
	'buka/kedai/kuih' => $folderApa . 'kedai_kuih.php',
	//'tawar/khidmat/aturcara' => $folderApa . 'khidmat_aturcara.php',
	'tawar/khidmat/aturcara' => $folderApa . 'khidmat_aturcara_v01.php',
	//'tawar/khidmat/latihan' => $folderApa . 'khidmat_latihan.php',
	'tawar/khidmat/latihan' => $folderApa . 'khidmat_latihan_v01.php',
	//'tawar/khidmat/rnd_ai' => $folderApa . 'khidmat_rnd_ai.php',
	'tawar/khidmat/rnd_ai' => $folderApa . 'khidmat_rnd_ai_v01.php',
	//'tawar/khidmat/nasihat' => $folderApa . 'khidmat_nasihat.php',
	'tawar/khidmat/nasihat' => $folderApa . 'khidmat_nasihat_v01.php',
	//'tawar/khidmat/penulisan' => $folderApa . 'khidmat_penulisan.php',
	'tawar/khidmat/penulisan' => $folderApa . 'khidmat_penulisan_v01.php',
	//'tawar/khidmat/cetak' => $folderApa . 'khidmat_cetak.php',
	'tawar/khidmat/cetak' => $folderApa . 'khidmat_cetak_v02.php',
	'hubungi/whatsapp' => $folderApa . 'hubungi_whatsapp.php',
	'hubungi/facebook' => $folderApa . 'hubungi_facebook.php',
	'hubungi/instagram' => $folderApa . 'hubungi_instagram.php',
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
###################################################################################################
# mula jana halaman
#--------------------------------------------------------------------------------------------------
//diatasDaa('Jenis Bisnes Di 7 ADA SOLUTION');
diatasDaa('7 ADA SOLUTION/' . $uri);
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
/*?>
<!-- Navbar melintang dengan butang success -->
<nav class="navbar navbar-light bg-white shadow-sm mb-4">
<header class="container-fluid justify-content-center flex-wrap">
<?php foreach ($laluanSah as $laluan => $fail):
// Teks butang yang cantik
$teks = match(true)
{
	str_ends_with($laluan, '/komputer')
		=> 'Komputer, peralatan dan aksesori komputer',
	str_ends_with($laluan, '/perisian')
		=> 'Perisian dan aplikasi mudah alih',
	str_ends_with($laluan, '/ict')
		=> 'Peralatan telekomunikasi dan elektronik',
	str_ends_with($laluan, '/buku-alat-tulis')
		=> 'Buku dan alat tulis',
	str_ends_with($laluan, '/kuih')
		=> 'Produk bakeri dan konfeksi, termasuk kuih tradisional dan kuih raya',
	default => 'Halaman Utama',
};
#--------------------------------------------------------------------------------------------------
// Tentukan kelas butang: aktif atau tidak
$kelas = ($uri === $laluan) ? 'btn-success' : 'btn-outline-success';
?>
	<a href="?/<?= htmlspecialchars($laluan) ?>"
	class="btn <?= $kelas ?> btn-nav">
	<?= $teks ?>
	</a>
<?php endforeach; ?>
</header>
</nav>
<hr>
<?php
*/
#--------------------------------------------------------------------------------------------------
?>