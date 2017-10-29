<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" user-scalable=no" />
    <link rel="stylesheet" href="css/swiperPlayground.css">
    <link rel="stylesheet" href="css/stile.css">
    <link rel="stylesheet" href="css/stile6x.css">
    <script type="text/JavaScript" src="javascript/jquery.min.js"></script>
    <script type="text/JavaScript" src="javascript/global.js"></script>
    <script type="text/JavaScript" src="javascript/resize.js"></script>
    <script type="text/JavaScript" src="javascript/rotate.js"></script>
    <script type="text/JavaScript" src="javascript/updating.js"></script>
    <script>
        /*funzione di aggiornamento dei dati */
        function refreshInformations() {
            rotation(awaV, twaV, togpV, mhV, cogV);
            $('.aws').text(awsV);
            $('.sow').text(sowV);
            $('.awa').text(awaV);
            $('.mh').text(mhV);
            $('.tws').text(twsV);
            $('.twa').text(twaV);
            $('.sog').text(sogV);
            $('.cog').text(cogV);
            $('.sogp').text(sogpV);
            $('.togp').text(togpV);
            $('.lat').text(lat);
            $('.lon').text(lon);
            $('.data1').text(data1);
            $('.data2').text(data2);
            // the c in front of the id stands for copy
            $('.ctwa').text(twaV);
            $('.cmh').text(mhV);
            $('.ccog').text(cogV);
            $('.ctogp').text(togpV);
            $('.cawa ').text(awaV);
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
        @media screen and (orientation: landscape) {
            .center {
                color: hsla(190, 80%, 25%, 1);
                z-index: 1;
                position: fixed;
                font-size: 17vh;
                opacity: 0.3;
                align-content: center;
            }
        }
        
        @media screen and (orientation: portrait) {
            .center {
                color: red;
                z-index: 1;
                position: fixed;
                font-size: 6vh;
                opacity: 0.3;
                align-self: stretch;
            }
        }
        
        h3 {
            z-index: 100;
            position: absolute;
            font-size: 2vh;
            word-break: break-word;
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
    <?php 
        include 'info.php';
    ?>
        <main class="main-w">
            <div class="wrapper">
                <div class="item">
                    <div class="swiper-container">
                        <div class="swiper-wrapper" data-container=".swiper-pagination">
                            <?php 
                            include 'allSlides.php';
                            ?>
                        </div> 
                    </div>
                </div>
                <div class="item">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                             <?php 
                            include 'allSlides.php';
                            ?>
                        </div> 
                    </div>
                </div>
                <div class="item">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                             <?php 
                            include 'allSlides.php';
                            ?>
                        </div> 
                    </div>
                </div>
                <div class="item">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                             <?php 
                            include 'allSlides.php';
                            ?>
                        </div> 
                    </div>
                </div>
                <div class="item">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                             <?php 
                            include 'allSlides.php';
                            ?>
                        </div> 
                    </div>
                </div>
                <div class="item">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                             <?php 
                            include 'allSlides.php';
                            ?>
                        </div> 
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
                    /*
                                , onTap: function (swiper) {
                                    $(".swiper-pagination-bullet ").fadeIn();
                                    setTimeout(function () {
                                        $(".swiper-pagination-bullet ").fadeOut();
                                    }, 2000)
                                }*/
                    
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