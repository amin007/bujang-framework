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
	'buka/kedai/komputer' => $folderApa . 'kedai_komputer.php',
	'buka/kedai/perisian' => $folderApa . 'kedai_perisian.php',
	'buka/kedai/ict' => $folderApa . 'kedai_ict.php',
	'buka/kedai/buku-alat-tulis' => $folderApa . 'kedai_buku-alat-tulis.php',
	'buka/kedai/kuih' => $folderApa . 'kedai_kuih.php',
];
#--------------------------------------------------------------------------------------------------
// Dapatkan URI semasa dan bersihkan
$uri = ltrim(parse_url($_SERVER['QUERY_STRING'], PHP_URL_PATH), '?/');
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
# Semak laluan dan panggil fail md yang sesuai
#--------------------------------------------------------------------------------------------------
$uri = ltrim(parse_url($_SERVER['QUERY_STRING'], PHP_URL_PATH), '/?');

$failMd = $laluanSah[$uri] ?? $folderApa . 'readme.php';

if ($uri !== '' && !array_key_exists($uri, $laluanSah))
{
    http_response_code(404);
}
#--------------------------------------------------------------------------------------------------
# kod yang boleh digunakan sama di semua kedai.
//$kembaliKePangkalJalan = '<i class="bi bi-door-open"></i> Kembali ke Halaman Utama';
$kembaliKePangkalJalan = '<i class="fa-solid fa-circle-left"></i></i> Kembali ke Halaman Utama';
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
?>