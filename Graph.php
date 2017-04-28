<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" user-scalable=no" />
    <link rel="stylesheet" href="css/swiperPlayground.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/stileL.css">
    <style>
        @import url(css/history.css);
    </style>
    <script type="text/JavaScript" src="javascript/jquery.min.js"></script>
    <script type="text/JavaScript" src="javascript/global.js"></script>
    <script type="text/JavaScript" src="javascript/resize.js"></script>
    <script type="text/JavaScript" src="javascript/updating.js"></script>
    <script type="text/JavaScript" src="javascript/storicovento.js"></script>
    <script type="text/JavaScript" src="javascript/storicografico.js"></script>
    <script>
        $(document).ready(function () {
            $('#a3').addClass('selected');
        }); /*funzione di aggiornamento dei dati */
        function refreshInformations() {
            $('#lat').text(lat);
            $('#long').text(lon);
            showHistory();
            showGraph();
        }(function ($) { /*funzione di inizializzazione delle dimensioni e dei dati */
            $(document).ready(function () {
                resizeWindow();
                refreshInformations();
                updatingData();
                resizeImage();
            }); /*funzione che si attiva al ridimensionamento della pagina*/
            $(window).resize(function () {
                resizeWindow();
                refreshInformations();
                resizeImage();
            });
        })(jQuery);
    </script>
    <style>
        #titolo {
            width: 49%;
            font-size: 3vh;
            display: inline-block;
            text-align: center;
        }
    </style>
</head>

<body>
    <section class="header">
        <!-- Ci vanno header , dati e menu -->
        <h1><span id="fullscreen" alt="fullscreen"><img id="fs" src="img/ic_fullscreen_white_24dp.png" alt="fullscreen" />
            </span></h1>
        <h1 class="brand">Logo</h1>
        <h1><h1 id="clock"></h1></h1>
    </section>
    <input type="checkbox" class="menu-button--checkbox" id="menu-button--checkbox" />
    <label for="menu-button--checkbox" class="menu-button--label">
        <div class="container" onclick="hamburger(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </label>
    <nav class="nav"> <a href="test2.php">test2</a> <a href="Graph.php">Grafo</a> <a href="test3.php">test3</a> <a href="#">C</a></nav>
    <main class="main-w">
        <div id="contenuto">
            <p id="titolo">ciao</p>
            <p id="titolo">mamo</p>
            <canvas id="history"> </canvas>
            <canvas id="graph"> </canvas>
        </div>
    </main>
    <script src="javascript/swiper/swiper.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        function hamburger(x) {
            x.classList.toggle("change");
        }
    </script>
</body>

</html>