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
        <script type="text/JavaScript" src="javascript/insert.js"></script>
        <script type="text/JavaScript" src="javascript/updating.js"></script>
        <script type="text/JavaScript" src="javascript/size.js"></script>
        <script type="text/JavaScript" src="javascript/compassIndicator.js"></script>
        <script>
            $(document).ready(function () {
                $('#a3').addClass('selected');
            }); /*funzione di aggiornamento dei dati */
            function refreshInformations() {
                rotation(awaV, twaV, togpV, mhV);
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
            /*******************************/
           
        </script>
        <style>
            #col {
                -webkit-column-count: 2;
                /* Chrome, Safari, Opera */
                -moz-column-count: 2;
                /* Firefox */
                column-count: 2;
            }
            
            .label {
                margin-bottom: 10px;
                font-size: 20px;
                font-weight: bold;
            }
            
            input[type=checkbox] {
                margin-right: 20px;
                /* Double-sized Checkboxes */
                -ms-transform: scale(1.5);
                /* IE */
                -moz-transform: scale(1.5);
                /* FF */
                -webkit-transform: scale(1.5);
                /* Safari and Chrome */
                -o-transform: scale(1.5);
                /* Opera */
                padding: 10px;
            }
        </style>
    </head>

    <body onload="checkCookie()">
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
            <div class="wrapper">
                <div class="item">
                    <div class="swiper-container">
                        <div class="swiper-wrapper" data-container=".swiper-pagination">
                            <div id="col">
                                <div class="label">
                                    <input type="checkbox" id="caws">AWS </div>
                                <div class="label">
                                    <input type="checkbox" id="csow">SOW</div>
                                <div class="label">
                                    <input type="checkbox" id="cawa"> AWA </div>
                                <div class="label">
                                    <input type="checkbox" id="cmh">MH</div>
                                <div class="label">
                                    <input type="checkbox" id="ctws">TWS</div>
                                <div class="label">
                                    <input type="checkbox" id="ctwa">TWA </div>
                                <div class="label">
                                    <input type="checkbox" id="csog">SOG</div>
                                <div class="label">
                                    <input type="checkbox" id="ccog">COG </div>
                                <div class="label">
                                    <input type="checkbox" id="csogp">SOGP </div>
                                <div class="label">
                                    <input type="checkbox" id="ctogp">TOGP</div>
                                <div class="label">
                                    <input type="checkbox" id="clat">LAT</div>
                                <div class="label">
                                    <input type="checkbox" id="clon">LON </div>
                                <div>
                                    <input type="button" value="LOAD" onclick="check()" /> </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div id="col">
                                <div class="label">
                                    <input type="checkbox" id="caws">AWS </div>
                                <div class="label">
                                    <input type="checkbox" id="csow">SOW</div>
                                <div class="label">
                                    <input type="checkbox" id="cawa"> AWA </div>
                                <div class="label">
                                    <input type="checkbox" id="cmh">MH</div>
                                <div class="label">
                                    <input type="checkbox" id="ctws">TWS</div>
                                <div class="label">
                                    <input type="checkbox" id="ctwa">TWA </div>
                                <div class="label">
                                    <input type="checkbox" id="csog">SOG</div>
                                <div class="label">
                                    <input type="checkbox" id="ccog">COG </div>
                                <div class="label">
                                    <input type="checkbox" id="csogp">SOGP </div>
                                <div class="label">
                                    <input type="checkbox" id="ctogp">TOGP</div>
                                <div class="label">
                                    <input type="checkbox" id="clat">LAT</div>
                                <div class="label">
                                    <input type="checkbox" id="clon">LON </div>
                                <div>
                                    <input type="button" value="LOAD" onclick="check()" /> </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div id="col">
                                <div class="label">
                                    <input type="checkbox" id="caws">AWS </div>
                                <div class="label">
                                    <input type="checkbox" id="csow">SOW</div>
                                <div class="label">
                                    <input type="checkbox" id="cawa"> AWA </div>
                                <div class="label">
                                    <input type="checkbox" id="cmh">MH</div>
                                <div class="label">
                                    <input type="checkbox" id="ctws">TWS</div>
                                <div class="label">
                                    <input type="checkbox" id="ctwa">TWA </div>
                                <div class="label">
                                    <input type="checkbox" id="csog">SOG</div>
                                <div class="label">
                                    <input type="checkbox" id="ccog">COG </div>
                                <div class="label">
                                    <input type="checkbox" id="csogp">SOGP </div>
                                <div class="label">
                                    <input type="checkbox" id="ctogp">TOGP</div>
                                <div class="label">
                                    <input type="checkbox" id="clat">LAT</div>
                                <div class="label">
                                    <input type="checkbox" id="clon">LON </div>
                                <div>
                                    <input type="button" value="LOAD" onclick="check()" /> </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div id="col">
                                <div class="label">
                                    <input type="checkbox" id="caws">AWS </div>
                                <div class="label">
                                    <input type="checkbox" id="csow">SOW</div>
                                <div class="label">
                                    <input type="checkbox" id="cawa"> AWA </div>
                                <div class="label">
                                    <input type="checkbox" id="cmh">MH</div>
                                <div class="label">
                                    <input type="checkbox" id="ctws">TWS</div>
                                <div class="label">
                                    <input type="checkbox" id="ctwa">TWA </div>
                                <div class="label">
                                    <input type="checkbox" id="csog">SOG</div>
                                <div class="label">
                                    <input type="checkbox" id="ccog">COG </div>
                                <div class="label">
                                    <input type="checkbox" id="csogp">SOGP </div>
                                <div class="label">
                                    <input type="checkbox" id="ctogp">TOGP</div>
                                <div class="label">
                                    <input type="checkbox" id="clat">LAT</div>
                                <div class="label">
                                    <input type="checkbox" id="clon">LON </div>
                                <div>
                                    <input type="button" value="LOAD" onclick="check()" /> </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </main>
        <!--<section class="footer">
        <h2><div class="long">E  --  Longitudine: </div> <div class="lat">N  --  Latitudine: </div> </h2> </section>
     Swiper JS -->
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
    <!--
            .

    <body onload="checkCookie()">-->