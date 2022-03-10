    <script src="./assets/js/waypoints.js"></script>
    <script src="./assets/js/universal-parallax.min.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <!-- <script src="./assets/js/lightbox.js"></script> -->
    <script src="./assets/js/venobox.min.js"></script>
    <script src="./assets/js/script.js"></script>

    <script src="https://apps.elfsight.com/p/platform.js" defer></script>

    <script>

        new universalParallax().init({
            speed: 4.0
        });


        $(document).ready(function() {
            $('.venobox').venobox({
                //framewidth : '100%',                            // default: ''
                //frameheight: '100%',                            // default: ''
                //arrowsColor: '#96110c',
                spinner: 'cube-grid',
                spinColor: '#fbb802',
                border: '5px', // default: '0'
                bgcolor: '#fbb802', // default: '#fff'
                titleattr: 'data-title', // default: 'title'
                numeratio: true, // default: false
                infinigall: true, // default: false
                share: [] // default: []
            });
        });

    </script>