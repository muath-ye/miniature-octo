<script src="<?= asset('js/bootstrap.bundle.min.js') ?>"></script>
<script>
    /**
     * Add active class to the current button (highlight it).
     */

    /* get current url path */
    var page_url = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);

    /* select element with same url path */
    var active_page = document.querySelectorAll("a[href='/" + page_url + "']");

    /* add active class to selected element */
    active_page[0].className += " active";
</script>
<script>
    function copyToClipboard(elementId) {
        /* Get the text field */
        // var copyText = document.getElementById("myInput");
        var copyText = document.getElementById(elementId);

        /* Select the text field */
        // copyText.select();
        // copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        // navigator.clipboard.writeText(copyText.value);

        /* Copy text to clipboard */
        navigator.clipboard.writeText(copyText.textContent);

        /* Alert the copied text */
        // alert("Copied the text: " + copyText.textContent);
        copyText.className += " active";
    }
</script>
</body>

</html>