<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Flot Examples: Real-time updates</title>
    <link href="css/examples.css" rel="stylesheet" type="text/css">
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
                    var prev = data.length > 0 ? data[data.length - 1] : awaV
                        , y = prev ; 
                    data.push(awaV);
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
                    , max: 100
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
            $('#long').text(lon);
            $('#data1').text(data1);
            $('#data2').text(data2);
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
    <div id="header">
        <h2>Real-time updates</h2> </div>
    <div id="content">
        <div class="demo-container">
            <div id="placeholder" class="demo-placeholder"></div>
        </div>
        <p class="value" id="lon"> </p>
        <p>Time between updates:
            <input id="updateInterval" type="text" value="" style="text-align: right; width:5em"> milliseconds</p>
    </div>
    <div id="footer"> Copyright &copy; 2007 - 2014 IOLA and Ole Laursen </div>
</body>

</html>