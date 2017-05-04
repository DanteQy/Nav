<!DOCTYPE html>
<?php
  include 'config.inc';
?>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content=" user-scalable=no" />
        <link rel="stylesheet" href="css/swiperPlayground.css">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/stileL.css">
        <script type="text/JavaScript" src="javascript/jquery.min.js"></script>
        <script type="text/JavaScript" src="javascript/global.js"></script>
        <script type="text/JavaScript" src="javascript/rotate.js"></script>
        <script type="text/JavaScript" src="javascript/resize.js"></script>
        <script type="text/JavaScript" src="javascript/updating.js"></script>
        <script>
            /*funzione di aggiornamento dei dati */
            function refreshInformations() {
                rotation(awaV, twaV, togpV, mhV, cogV);
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
            h3 {
                z-index: 100;
                position: absolute;
                font-size: 24px;
                font-weight: bold;
                margin-left: -40%;
                -webkit-transform: rotate(90deg);
                /* Firefox */
                -moz-transform: rotate(90deg);
                /* IE */
                -ms-transform: rotate(90deg);
                /* Opera */
                -o-transform: rotate(90deg);
                /* Internet Explorer */
                filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=3);
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
        <nav class="nav"> <a href="test2.php">Dati</a> <a href="Graph.php">Storico</a> <a href="test3.php">Grafico</a> <a href="test4.php">Tracciato</a></nav>
        <main class="main-w">
            <div class="wrapper">
                <div class="item">
                    <div class="swiper-container">
                        <div class="swiper-wrapper" data-container=".swiper-pagination">
                            <!-- ************************* -->
                            <div class="swiper-slide" data-name="AWA[°]">
                                <h3>APPARENT WIND SPEED</h3>
                                <object data="img/bussola4n.png" class="bussola"></object>
                                <object data="img/Lancetta3n.png" class="lancetta2" id="awa"></object>
                            </div>
                            <!-- ************************* -->
                            <div class="swiper-slide" data-name="AWS[kt]">
                                <div class="text">
                                    <p class="title">APPARENT WIND SPEED</p>
                                    <p class="value" id="aws"></p>
                                </div>
                            </div>
                            <!-- ************************* -->
                            <div class="swiper-slide" data-name="SOW[kt]">
                                <div class="text">
                                    <p class="title">SPEED OVER WATER</p>
                                    <p class="value" id="sow"></p>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- ************************* -->
                            <div class="swiper-slide" data-name="TOGP[°]">
                                <h3>TARGET ANGLE</h3>
                                <object data="img/bussola3.png" class="bussola"></object>
                                <object data="img/Lancetta2.png" class="lancetta2" id="togp"></object>
                            </div>
                            <!-- ************************* -->
                            <div class="swiper-slide" data-name="SOGP[kt]">
                                <div class="text">
                                    <p class="title">TARGET SPEED</p>
                                    <p class="value" id="sogp"></p>
                                </div>
                            </div>
                            <!-- ************************* -->
                            <div class="swiper-slide" data-name="SOG[kt]">
                                <div class="text">
                                    <p class="title">TARGET SPEED</p>
                                    <p class="value" id="sog"></p>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- ************************* -->
                            <div class="swiper-slide" data-name="COG">
                                <h3>COURSE OVER GROUND</h3>
                                <object data="img/bussola3.png" class="bussola"></object>
                                <object data="img/Lancetta2.png" class="lancetta2" id="cog"></object>
                            </div>
                            <!-- ************************* -->
                            <div class="swiper-slide" data-name="LAT">
                                <div class="text">
                                    <p class="title"> LATITUDE </p>
                                    <p class="value" id="lat"></p>
                                </div>
                            </div>
                            <!-- ************************* -->
                            <div class="swiper-slide" data-name="TWA[°]">
                                <h3>TRUE WIND ANGLE</h3>
                                <object data="img/bussola3.png" class="bussola"></object>
                                <object data="img/Lancetta2.png" class="lancetta2" id="twa"></object>
                            </div>
                            <!-- ************************* -->
                            <div class="swiper-slide" data-name="VMG">
                                <div class="text">
                                    <p class="title">VMG</p>
                                    <p class="value" id="data2"></p>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- ************************* -->
                            <div class="swiper-slide" data-name="MH">
                                <h3>MAGNETIC HEADING</h3>
                                <object data="img/bussola3.png" class="bussola"></object>
                                <object data="img/Lancetta2.png" class="lancetta2" id="mh"></object>
                            </div>
                            <!-- ************************* -->
                            <div class="swiper-slide" data-name="TWS[kt]">
                                <div class="text">
                                    <p class="title">TRUE WIND SPEED</p>
                                    <p class="value" id="tws"></p>
                                </div>
                            </div>
                            <!-- ************************* -->
                            <div class="swiper-slide" data-name="LON">
                                <div class="text">
                                    <p class="title">LONGITUDE</p>
                                    <p class="value" id="lon"></p>
                                </div>
                            </div>
                            <!-- ************************* -->
                            <div class="swiper-slide" data-name="DVPP">
                                <div class="text">
                                    <p class="title">DELTA VPP [%]</p>
                                    <p class="value" id="data1"></p>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </main>
        <script src="javascript/swiper/swiper.min.js"></script>
        <!-- Initialize Swiper -->
        <script>
            mySwiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination'
                , bulletActiveClass: 'swiper-pagination-bullet-active'
                , paginationClickable: true
                , onSliderMove: function (swiper) {
                    $(".swiper-pagination-bullet ").fadeIn();
                    setTimeout(function () {
                        $(".swiper-pagination-bullet ").fadeOut();
                    }, 2000)
                }
                , onTap: function (swiper) {
                    $(".swiper-pagination-bullet ").fadeIn();
                    setTimeout(function () {
                        $(".swiper-pagination-bullet ").fadeOut();
                    }, 1000)
                }
                , paginationBulletRender: function (swiper, index, className) {
                    return '<span class="' + className + '">' + swiper.slides.eq(index).attr('data-name') + '</span>';
                }
            });

            function hamburger(x) {
                x.classList.toggle("change");
            }
        </script>
    </body>

    </html>