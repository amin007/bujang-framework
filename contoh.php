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
	'Contoh Claude v1' => 'contoh001.php',
	'Contoh Claude v2' => 'contoh002.php',
	'Contoh Chatgpt v1' => 'contoh-chatgpt.php',
];
#-------------------------------------------------------------------------------------------------
?>
<nav class="navbar navbar-light bg-white shadow-sm mb-4">
<header class="container-fluid justify-content-center flex-wrap">
<?php
foreach ($laluanSah as $fail => $laluan):
// Tentukan kelas butang: aktif atau tidak
//$kelas = 'btn-success';
$kelas = 'btn-outline-success';
?>
	<a href="<?= htmlspecialchars($laluan) ?>"
	class="btn <?= $kelas ?> btn-nav">
	<?php echo $fail ?>
	</a>
<?php endforeach; ?>
	</header>
</nav>
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