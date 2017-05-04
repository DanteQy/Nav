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
        <link rel="stylesheet" href="css/stile.css">
        <script src="javascript/coordinatesConversion.js"></script>
        <script type="text/JavaScript" src="javascript/jquery.min.js"></script>
        <script type="text/JavaScript" src="javascript/global.js"></script>
        <script type="text/JavaScript" src="javascript/resize.js"></script>
        <script type="text/JavaScript" src="javascript/rotate.js"></script> 
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
        <nav class="nav"> <a href="test.php">Indice</a> <a href="Graph.php">Storico</a> <a href="test3.php">Grafico</a> <a href="test4.php">Tracciato</a></nav>
        <main class="main-w">
            <div class="wrapper">
                <div class="item">
                    <div class="swiper-container">
                        <div class="swiper-wrapper" data-container=".swiper-pagination">
                            <div class="swiper-slide" data-name="AWA">
                                <object data="img/bussola3.png" class="bussola"></object>
                                <object data="img/Lancetta2.png" class="lancetta2" id="awa"></object>
                            </div>
                            <div class="swiper-slide">
                                <div class="text">
                                    <p class="title"> LATITUDE </p>
                                    <p class="value" id="lat">
                                        <script>
                                            $('#lat').text(lat);
                                        </script>
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text">
                                    <p class="title"> LONGITUDE </p>
                                    <p class="value" id="lon">
                                        <script>
                                            $('#lon').text(lon);
                                        </script>
                                    </p>
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
                            <div class="swiper-slide">
                                <object data="img/bussola4n.png" class="bussola"></object>
                                <object data="img/Lancetta3n.png" class="lancetta2" id="togp"></object>
                            </div>
                            <div class="swiper-slide">Slide 2</div>
                            <div class="swiper-slide">Slide 3</div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">Slide 1</div>
                            <div class="swiper-slide">Slide 2</div>
                            <div class="swiper-slide">Slide 3</div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">Slide 1</div>
                            <div class="swiper-slide">Slide 2</div>
                            <div class="swiper-slide">Slide 3</div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">Slide 1</div>
                            <div class="swiper-slide">Slide 2</div>
                            <div class="swiper-slide">Slide 3</div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">Slide 1</div>
                            <div class="swiper-slide">Slide 2</div>
                            <div class="swiper-slide">Slide 3</div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </main>
        <!--Swiper JS -->
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
                    }, 2000)
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