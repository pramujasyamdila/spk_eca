<script>
    function check() {
        if (document.getElementById("checkdeh").checked == true) {
            $('[name="password"').attr("disabled", false)
        } else {
            $('[name="password"').attr("disabled", true)
        }

    }
</script>