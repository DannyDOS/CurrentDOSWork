<script>
// USPS Mobile slide in animation
(function() {
    var headerUSPs = document.querySelectorAll('.usps__item'),
    i = 1;
    headerUSPs[0].classList.add('usps__item--active');
    setInterval(function() {
        for (var j = 0; j < headerUSPs.length; j++) headerUSPs[j].classList.remove('usps__item--active');

        headerUSPs[i].classList.add('usps__item--active');

        if (i === headerUSPs.length - 1) {
            i = 0
        } else {
            i++;
        };
    }, 3000)
})();
</script>