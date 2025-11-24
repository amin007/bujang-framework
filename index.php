<?php
#--------------------------------------------------------------------------------------------------
require 'fungsi_global.php';
require 'bujang.php';
#--------------------------------------------------------------------------------------------------
diatasDaa('Masih Belum Berkahwin');
#--------------------------------------------------------------------------------------------------
# Senarai laluan yang sah (route mapping)
#--------------------------------------------------------------------------------------------------
$laluanSah = [
	'baca/dokumen/ini' => 'README.md',
	'baca/dokumen/english' => 'README.en.md',
	'baca/dokumen/lesen/inggeris' => 'LICENSE.md',
	'baca/dokumen/lesen/melayu' => 'LICENSE_MS.md',
	'baca/dokumen/lesen/ringkasan' => 'LICENSE-MELAYU.md',
];
#--------------------------------------------------------------------------------------------------
// Dapatkan URI semasa dan bersihkan
$uri = ltrim(parse_url($_SERVER['QUERY_STRING'], PHP_URL_PATH), '?/');
#--------------------------------------------------------------------------------------------------
?>
<!-- Navbar melintang dengan butang success -->
<nav class="navbar navbar-light bg-white shadow-sm mb-4">
<header class="container-fluid justify-content-center flex-wrap">
<?php foreach ($laluanSah as $laluan => $fail): 
// Teks butang yang cantik
$teks = match(true) {
	str_ends_with($laluan, '/ini')       => 'Baca Saya',
	str_ends_with($laluan, '/english')   => 'Read Me',
	str_ends_with($laluan, '/inggeris')  => 'Lesen (EN)',
	str_ends_with($laluan, '/melayu')    => 'Lesen (MS)',
	str_ends_with($laluan, '/ringkasan') => 'Ringkasan Lesen',
	default                              => 'Dokumen',
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
#--------------------------------------------------------------------------------------------------
# Semak laluan dan panggil fail md yang sesuai
#--------------------------------------------------------------------------------------------------
$uri = ltrim(parse_url($_SERVER['QUERY_STRING'], PHP_URL_PATH), '/?');

$failMd = $laluanSah[$uri] ?? 'README.md';

if ($uri !== '' && !array_key_exists($uri, $laluanSah))
{
    http_response_code(404);
}
#--------------------------------------------------------------------------------------------------
if($failMd === 'README.md' || $failMd === 'README.en.md'):
	$kodHTML = 'div';
else:
	$kodHTML = 'pre';
endif;
#--------------------------------------------------------------------------------------------------
# sumber : https://stackoverflow.com/questions/72263107/how-do-i-use-markdown-it-without-node-js
echo '<' . $kodHTML . ' class="container markdown">';
require $failMd; // Markdown akan dipaparkan sebagai teks biasa
echo '</' . $kodHTML . '><!-- / class="markdown" -->';
#--------------------------------------------------------------------------------------------------
?>
<hr>
<?php
#--------------------------------------------------------------------------------------------------
dibawahDaa();
#--------------------------------------------------------------------------------------------------
?>
<script>
window.onload = function() {
	var md = window.markdownit();
	var div = document.getElementsByClassName('markdown');
	for(var i = 0; i < div.length; i++) {
		var content = div[i].innerHTML;
		document.getElementsByClassName('markdown')[i].innerHTML = md.render(content);
	}
}
</script>
<?php
#--------------------------------------------------------------------------------------------------
badanKaki();
#--------------------------------------------------------------------------------------------------
?>