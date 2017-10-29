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
            }); /*funzione che si attiva al ridimensionamento della pagina*/
            $(window).resize(function () {
                resizeWindow();
                refreshInformations();
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
        
        @media (orientation: portrait) {
            .value {
                word-break: break-all;
                vertical-align: middle;
                font-size: calc(4vw + 1vh + 1vmin);
            }
        }
    </style>
</head>

<body>
    <?php 
        include 'info.php';
    ?>
    <main class="grid">
        <div class="cell" onclick="location.href='graphDvpp.php';">
            <p class="title"><abbr title="Delta VPP">VPP</abbr>[%]</p>
            <p class="value" id="data1"></p>
        </div>
        <div class="cell" onclick="location.href='graphMh.php';">
            <p class="title"><abbr title="Magnetic Heading">MH</abbr>[&#176;]</p>
            <p class="value" id="mh"></p>
        </div>
        <div class="cell" onclick="location.href='graphTws.php';">
            <p class="title"><abbr title="True wind speed">TWS</abbr>[kn]</p>
            <p class="value" id="tws"></p>
        </div>
        <div class="cell" onclick="location.href='graphVmg.php';">
            <p class="title"><abbr title="Data 2">VMG</abbr>[kn] </p>
            <p class="value" id="data2"></p>
        </div>
        <div class="cell" onclick="location.href='graphSog.php';">
            <p class="title"> <abbr title="Speed Over Ground">SOG</abbr>[kn] </p>
            <p class="value" id="sog"></p>
        </div>
        <div class="cell" onclick="location.href='graphSogp.php';">
            <p class="title"> <abbr title="Target Spedd">DVMG</abbr> [kn]</p>
            <p class="value" id="sogp"></p>
        </div>
        <div class="cell" onclick="location.href='graphSow.php';">
            <p class="title"> <abbr title="Speed Over Water">SOW </abbr>[kn]</p>
            <p class="value" id="sow"></p>
        </div>
        <div class="cell" onclick="location.href='graphAws.php';">
            <p class="title"> <abbr title="Apparent Wind Speed">AWS</abbr>[kn] </p>
            <p class="value" id="aws"></p>
        </div>
        <div class="cell" onclick="location.href='graphAwa.php';">
            <p class="title"><abbr title="Apparent Wind Angle">AWA</abbr>[&#176;]</p>
            <p class="value" id="awa"></p>
        </div>
        <div class="cell" onclick="location.href='graphCog.php';">
            <p class="title"><abbr title="Course Over Ground">COG</abbr>[&#176;]</p>
            <p class="value" id="cog"></p>
        </div>
        <div class="cell" onclick="location.href='graphTwa.php';">
            <p class="title"><abbr title="True Wind Angle">TWA</abbr>[&#176;]</p>
            <p class="value" id="twa"></p>
        </div>
        <div class="cell" onclick="location.href='graphTogp.php';">
            <p class="title"><abbr title="Target Angle">DANG</abbr>[&#176;]</p>
            <p class="value" id="togp"></p>
        </div>
        <div class="cell">
            <p class="title"><abbr title="Latitude">LAT</abbr></p>
            <p class="value" id="lat"></p>
        </div>
        <div class="cell">
            <p class="title"><abbr title="Longitude">LON </abbr></p>
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