<!DOCTYPE html>
<?php
  include 'config.inc';
?>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content=" user-scalable=no" />
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/stileL.css">
        <script type="text/JavaScript" src="javascript/jquery.min.js"></script>
        <script type="text/JavaScript" src="javascript/global.js"></script>
        <script type="text/JavaScript" src="javascript/resize.js"></script>
        <script type="text/JavaScript" src="javascript/updating.js"></script>
        <script type="text/JavaScript" src="javascript/compassIndicator.js"></script>
        <script>
            $(document).ready(function () {
                $('#a3').addClass('selected');
            }); /*funzione di aggiornamento dei dati */
            function refreshInformations() {
                $('#aws').text(awsV);
                $('#sow').text(sowV);
                $('#awa').text(awaV);
                $('#mh').text(mhV);
                $('#tws').text(twsV);
                $('#twa').text(twaV);
                $('#sog').text(sogV);
                $('#cog').text(cogV);
                $('#sogp').text(sogpV);
                $('#togp').text(togpV);
                $('#lat').text(lat);
                $('#lon').text(lon);
                $('#data1').text(data1);
                $('#data2').text(data2);
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
        <nav class="nav"> <a href="test2.php">Dati</a> <a href="test.php">Indice</a> <a href="Graph.php">Storico</a> <a href="test4.php">Tracciato</a></nav>
        <div>
            <canvas id="myCanvas" width="200px" height="100px" style="border:1px solid #d3d3d3;"> Your browser does not support the HTML5 canvas tag.</canvas>
        </div>
        <main class="main-w"> </main>
        <!--<section class="footer">
        <h2><div class="long">E  --  Longitudine: </div> <div class="lat">N  --  Latitudine: </div> </h2> </section>
     Swiper JS -->
        <script src="javascript/swiper/swiper.min.js"></script>
        <!-- Initialize Swiper -->
        <script>
            function hamburger(x) {
                x.classList.toggle("change");
            }
        </script>
    </body>

    </html>