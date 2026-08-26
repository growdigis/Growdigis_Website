<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/vendor/modernizr-3.7.1.min.js"></script>

<!--====== Bootstrap js ======-->
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>

<!--====== Plugins js ======-->
<script src="./assets/js/plugins.js"></script>

<!--====== Slick js ======-->
<script src="./assets/js/slick.min.js"></script>

<!--====== Ajax Contact js ======-->
<script src="./assets/js/ajax-contact.js"></script>

<!--====== Isotope js ======-->
<script src="./assets/js/imagesloaded.pkgd.min.js"></script>
<script src="./assets/js/isotope.pkgd.min.js"></script>

<!--====== Magnific Popup js ======-->
<script src="./assets/js/jquery.magnific-popup.min.js"></script>

<!--====== Counter Up js ======-->
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.counterup.min.js"></script>

<!--====== Circles js ======-->
<script src="./assets/js/circles.min.js"></script>

<!--====== Appear js ======-->
<script src="./assets/js/jquery.appear.min.js"></script>

<!--====== WOW js ======-->
<script src="./assets/js/wow.min.js"></script>

<!--====== Main js ======-->
<script src="./assets/js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>

<script>   
 $(document).ready(function() {
        $('#multiple-checkboxes').multiselect({
          includeSelectAllOption: true,
        });
    });
</script>

<script>
    var numberInput = document.getElementById("number");

    numberInput.addEventListener("input", function(event) {
        var inputValue = event.target.value;
        var numericValue = inputValue.replace(/\D/g, "");
        var maxLength = 10;
        var limitedValue = numericValue.slice(0, maxLength);
        event.target.value = limitedValue;
    });
</script>