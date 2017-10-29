<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" user-scalable=no" />
    <link rel="stylesheet" href="css/swiperPlayground.css">
    <link rel="stylesheet" href="css/stile.css">
    <link rel="stylesheet" href="css/stile4x.css">
    <link rel="stylesheet" href="css/history.css">
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
            $('#graphX').text(graphX);
            $('#graphY').text(graphY);
            showHistory();
            showGraph();
        }(function ($) { /*funzione di inizializzazione delle dimensioni e dei dati */
            $(document).ready(function () {
                resizeWindow();
                refreshInformations();
                updatingData(); 
            }); /*funzione che si attiva al ridimensionamento della pagina*/
            $(window).resize(function () {
                resizeWindow();
                refreshInformations(); 
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
    <?php 
        include 'info.php';
    ?>
    <main class="main-w">
        <div id="contenuto">
            <p id="titolo">STORICO VENTO</p>
            <p id="titolo">STORICO GRAFO</p>
            <canvas id="history"> </canvas>
            <canvas id="graph"> </canvas>
        </div>
    </main>
    <!-- Initialize Swiper -->
    <script>
        function hamburger(x) {
            x.classList.toggle("change");
        }
    </script>
</body>

</html>