<?php
$link_whatsapp = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$no_hp = preg_replace('/\D/', '', $_POST['no_hp']); // buang semua bukan nombor
	$mesej = $_POST['mesej'];

	if ($no_hp && $mesej)
	{
		$mesej_encoded = urlencode($mesej);
		$link_whatsapp = "https://wa.me/$no_hp?text=$mesej_encoded";
	}
	else
	{
		$link_whatsapp = "Sila isi nombor telefon dan mesej.";
	}
}
?>
<div class="container py-5">
<h2 class="mb-4 text-center">Generate Link WhatsApp</h2>
	<!-- ===================================================================================== --->
	<form method="post" class="p-4 border rounded shadow-sm bg-light">
		<div class="mb-3">
			<label for="no_hp" class="form-label">Nombor Telefon (contoh: 60123456789):</label>
			<input type="text" class="form-control" id="no_hp" name="no_hp" required>
		</div><!-- / class="mb-3" -->
		<div class="mb-3">
			<label for="mesej" class="form-label">Mesej:</label>
			<textarea class="form-control" id="mesej" name="mesej" rows="4" required></textarea>
		</div><!-- / class="mb-3" -->
		<!-- button type="submit" class="btn btn-success w-100">Generate Link</button -->
		<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary btn-large">
		<input type="reset" name="Reset" value="Reset" class="btn btn-secondary btn-large">
	</form>
	<!-- ===================================================================================== --->
<?php if ($link_whatsapp): ?>
	<div class="mt-4 text-center">
		<h5>Link WhatsApp Anda:</h5>
<?php if (strpos($link_whatsapp, 'https://wa.me/') === 0): ?>
		<a href="<?= $link_whatsapp ?>" target="_blank" class="btn btn-primary"><?= $link_whatsapp ?></a>
<?php else: ?>
		<p class="text-danger"><?= $link_whatsapp ?></p>
<?php endif; ?>
	</div><!-- / class="mt-4 text-center" -->
<?php endif; ?>
	<!-- ===================================================================================== --->
</div><!-- / class="container py-5" -->