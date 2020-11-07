<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/lightslider.js"></script>
<script>
    $(document).ready(function() {
        $("#content-slider").lightSlider({
            loop: true,
            keyPress: true,
            item: 4,
        });

    });

</script>
<script>
    setTimeout(function() {
        $('#12').modal();
    }, 6000);

</script>
