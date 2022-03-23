<?php require('partials/head.php'); ?>

<h2 class="text-center"><?= $values['secret']; ?></h2>
<br>
<div class="text-center"><a href="<?= $values['qrCodeUrl']; ?>">Get QR code</a></div>
<br>
<h2 class="text-center"><?= $values['oneCode']; ?></h2>

<?php require('partials/footer.php'); ?>