<script src="<?= asset('js/bootstrap.bundle.min.js') ?>"></script>
<script>
    /**
     * Add active class to the current button (highlight it).
     */

    /* get current url path */
    var page_url = window.location.href.substr(window.location.href.lastIndexOf("/")+1);

    /* select element with same url path */
    var active_page = document.querySelectorAll("a[href='/"+page_url+"']");
    
    /* add active class to selected element */
    active_page[0].className += " active";
</script>
</body>

</html>