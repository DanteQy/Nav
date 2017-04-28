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
    <nav class="nav"> <a href="test2.php">test2</a> <a href="Graph.php">Grafo</a> <a href="test3.php">test3</a> <a href="#">C</a></nav>
    <main class="main-w">
        <div class="wrapper">
            <div class="item">
                <div class="swiper-container">
                    <div class="swiper-wrapper" data-container=".swiper-pagination">
                        <div class="swiper-slide" data-name="APPARENT WIND SPEED [kt]">
                            <object data="img/bussola2.png" class="bussola"></object>
                            <object data="img/Lancetta2.png" class="lancetta2" id="awa"></object>
                        </div>
                        <div class="swiper-slide" data-name="APPARENT WIND SPEED [kt]">
                            <div class="text">
                                <p class="title"> </p>
                                <p class="value" id="awa3">
                                    <script>
                                        $('.value').text(awaV);
                                    </script>
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide" data-name="APPARENT WIND SPEED [kt]"></div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="item">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-name="verde">
                            <object data="img/bussola2.png" class="bussola"></object>
                            <object data="img/Lancetta2.png" class="lancetta2" id="togp"></object>
                        </div>
                        <div class="swiper-slide" data-name="bianco"></div>
                        <div class="swiper-slide" data-name="nero"></div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="item1">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-name="rosa">
                            <object data="img/bussola2.png" class="bussola"></object>
                            <object data="img/Lancetta2.png" class="lancetta2" id="twa"></object>
                        </div>
                        <div class="swiper-slide" data-name="grigio">Slide 2</div>
                        <div class="swiper-slide" data-name="vola">Slide 3</div>
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