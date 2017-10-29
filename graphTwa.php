<!DOCTYPE html PUBLIC  >
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content=" user-scalable=no" />
    <title>Flot Examples: Real-time updates</title>
   <link href="css/stileGraphs.css" rel="stylesheet" type="text/css">
    <link href="css/stile6x.css" rel="stylesheet" type="text/css">
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="../../excanvas.min.js"></script><![endif]-->
    <script language="javascript" type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/JavaScript" type="text/javascript" src="javascript/updating.js"></script>
    <script type="text/JavaScript" src="javascript/resize.js"></script>
    <script language="javascript" type="text/javascript" src="javascript/jquery.flot.js"></script>
    <script type="text/javascript">
        $(function () {
            // We use an inline data source in the example, usually data would
            // be fetched from a server
            var data = []
                , totalPoints = 300;

            function getRandomData() {
                if (data.length > 0) data = data.slice(1);
                // Do a random walk
                while (data.length < totalPoints) {
                    var prev = data.length > 0 ? data[data.length - 1] : twaV
                        , y = prev;
                    data.push(twaV);
                }
                // Zip the generated y values with the x values
                var res = [];
                for (var i = 0; i < data.length; ++i) {
                    res.push([i, data[i]])
                }
                return res;
            }
            // Set up the control widget
            var updateInterval = 30;
            $("#updateInterval").val(updateInterval).change(function () {
                var v = $(this).val();
                if (v && !isNaN(+v)) {
                    updateInterval = +v;
                    if (updateInterval < 1) {
                        updateInterval = 1;
                    }
                    else if (updateInterval > 2000) {
                        updateInterval = 2000;
                    }
                    $(this).val("" + updateInterval);
                }
            });
            var plot = $.plot("#placeholder", [getRandomData()], {
                series: {
                    shadowSize: 0 // Drawing is faster without shadows
                }
                , yaxis: {
                    min: 0
                    , max: 360  //qua ci va il valore massimo dell'asse delle ordinate
                }
                , xaxis: {
                    show: false
                }
            });

            function update() {
                plot.setData([getRandomData()]);
                // Since the axes don't change, we don't need to call plot.setupGrid()
                plot.draw();
                setTimeout(update, updateInterval);
            }
            update();
            // Add the Flot version string to the footer
            $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
        });
        //funzione di aggiornamento dei dati
        function refreshInformations() { 
            $('.twa').text(twaV); 
        }
        (function ($) {
            //funzione di inizializzazione delle dimensioni e dei dati
            $(document).ready(function () {
                resizeWindow();
                refreshInformations();
                updatingData();
            });
            //funzione che si attiva al ridimensionamento della pagina
            $(window).resize(function () {
                resizeWindow();
                refreshInformations();
            });
        })(jQuery);
    </script>
</head>

<body>
    <section class="header">
        <!-- Ci vanno header , dati e menu -->
        <h1  >TWA [°] : </h1>
        <h1 id="twa"> </h1> 
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
    <nav class="nav"> <a href="index.php">Indice</a> <a href="index4x.php">Dati</a> <a href="history.php">Storico</a> <a href="graphs.php">Grafici</a></nav>
    <div class="demo-container">
        <div id="placeholder" class="demo-placeholder"></div>
    </div>
    <div class="read">
        <p class="title">TRUE WIND ANGLE</p>
    </div>
    <div class="read">
        <p class="twa" style="font-size: 6vh;"> </p>
    </div>
    
    <div id="footer"> Copyright &copy; 2007 - 2014 IOLA and Ole Laursen </div>
</body>

</html>