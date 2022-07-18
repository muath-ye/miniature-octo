<?php require 'partials/head.php'; ?>

<h2 class="text-center"><?= $values['secret']; ?></h2>
<br>
<div class="text-center"><a href="<?= $values['qrCodeUrl']; ?>">Get QR code</a></div>
<br>
<h2 class="text-center"><?= $values['oneCode']; ?></h2>
<br>
<div class="d-flex justify-content-center">
    <div id="qrcode2" style="position:absolute; z-index:3; width:250px; height:250px; padding-left:10px; padding-top:20px;" />
</div>
<script type="text/javascript" src="/public/js/jquery.min.js"></script>
<script type="text/javascript" src="/public/js/qrcode.min.js"></script>
<script type="text/javascript">
    var qrcode2 = new QRCode(document.getElementById("qrcode2"), {
        width: 250,
        height: 250,
        correctLevel: QRCode.CorrectLevel.L
    });

    function drawCode2() {
        /* var qr = document.getElementById("qr").value; */
        var qr = "<?= $values['authLink']; ?>"
        qrcode2.makeCode(qr);
    }

    qrcode2.makeCode("");

    $(window).load(function() {
        drawCode2();
    });

    // $("#qr").
    // on("keyup", function(e) {
    //     drawCode2()
    // });
</script>
<?php require 'partials/footer.php'; ?>