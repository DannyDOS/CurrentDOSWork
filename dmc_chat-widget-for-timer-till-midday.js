<style>
    .zEWidget - launcher--pushup {
        bottom: 50 px !important;
    }
    
    @media only screen and(min - width: 1293 px) {
        .zEWidget - launcher--pushup {
            bottom: 0 px !important;
        }
    }
</style>
<!-- <div id = "count-down"> </div> -->

<script>
    (function() {
        window.addEventListener('load', function() {
            var countDownClose = document.querySelector('#count-close'),
                countDown = document.querySelector('#count-down'),
                launcher = document.querySelector('.zEWidget-launcher--active');

            if (countDown) {
                var counter = 0,
                    launcher;
                var int = setInterval(function() {
                    launcher = document.querySelector('.zEWidget-launcher--active');
                    if (launcher || counter >= 16) {
                        if (launcher) launcher.classList.add('zEWidget-launcher--pushup');
                        clearInterval(int);
                    }
                    counter++;
                }, 500);
            }

            if (countDownClose) {
                countDownClose.addEventListener("click", function() {
                    launcher.classList.remove("zEWidget-launcher--pushup");
                });
            }
        });
    })();
</script>