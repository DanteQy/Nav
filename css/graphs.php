<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" user-scalable=no" />
    <link rel="stylesheet" href="css/swiperPlayground.css">
    <link rel="stylesheet" href="css/stile.css">
    <link rel="stylesheet" href="css/stile4x.css">
    <script type="text/JavaScript" src="javascript/jquery.min.js"></script>
    <script type="text/JavaScript" src="javascript/global.js"></script>
    <script type="text/JavaScript" src="javascript/rotate.js"></script>
    <script type="text/JavaScript" src="javascript/resize.js"></script>
    <script type="text/JavaScript" src="javascript/updating.js"></script>
    <script>
        /*funzione di aggiornamento dei dati */
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
    <style>
        .cell {
            width: 22%;
            height: 27%;
            border: 3px solid black;
            margin-left: 2%;
            display: inline-grid;
            display: -moz-groupbox;
        }
        
        .value {
            word-break: break-all;
            vertical-align: middle;
            font-size: calc(4vw + 4vh + 1vmin);
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
    <nav class="nav"> <a href="index.php">Indice</a> <a href="index4x.php">Dati 4</a> <a href="history.php">Storico</a> <a href="graph.php">Grafici</a></nav>
    <main class="grid">
        <div class="cell" onclick="location.href='Graphs/graphDvpp.php';">
            <p class="title">DELTA VPP [%]</p>
            <p class="value" id="data1"></p>
        </div>
        <div class="cell" onclick="location.href='Graphs/graphMh.phpl';">
            <p class="title">MH[°]</p>
            <p class="value" id="mh"></p>
        </div>
        <div class="cell" onclick="location.href='Graphs/graphTws.php';">
            <p class="title">TWS[kn]</p>
            <p class="value" id="tws"></p>
        </div>
        <div class="cell" onclick="location.href='Graphs/graphVmg.php';">
            <p class="title">VMG[kn] </p>
            <p class="value" id="data2"></p>
        </div>
        <div class="cell" onclick="location.href='Graphs/graphSog.php';">
            <p class="title"> SOG[kn] </p>
            <p class="value" id="sog"></p>
        </div>
        <div class="cell" onclick="location.href='Graphs/graphSogp.php';">
            <p class="title"> SOGP [kn]</p>
            <p class="value" id="sogp"></p>
        </div>
        <div class="cell" onclick="location.href='Graphs/graphSow.php';">
            <p class="title"> SOW [kn]</p>
            <p class="value" id="sow"></p>
        </div>
        <div class="cell" onclick="location.href='Graphs/graphAws.php';">
            <p class="title"> AWS[kn] </p>
            <p class="value" id="aws"></p>
        </div>
        <div class="cell" onclick="location.href='Graphs/graphAwa.php';">
            <p class="title">AWA[°]</p>
            <p class="value" id="awa"></p>
        </div>
        <div class="cell" onclick="location.href='Graphs/graphCog.php';">
            <p class="title">COG[°]</p>
            <p class="value" id="cog"></p>
        </div>
        <div class="cell" onclick="location.href='Graphs/graphTwa.php';">
            <p class="title">TWA[°]</p>
            <p class="value" id="twa"></p>
        </div>
        <div class="cell" onclick="location.href='Graphs/graphTogp.php';">
            <p class="title">TOGP[°]</p>
            <p class="value" id="togp"></p>
        </div>
        <div class="cell" >
            <p class="title">LAT</p>
            <p class="value" id="lat"></p>
        </div>
        <div class="cell">
            <p class="title">LON </p>
            <p class="value" id="lon"></p>
        </div>
    </main>
    <script>
        function hamburger(x) {
            x.classList.toggle("change");
        }
    </script>
</body>

</html>