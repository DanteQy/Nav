<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/swiperPlayground.css">
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
    <!--caricamento dei file css-->
    <style>@import url(css/informations.css);</style>
    <style>@import url(css/links.css);</style>
    <style>@import url(css/stili.css);</style>
    <style>@import url(css/contenuto.css);</style>
    <!--caricamento dei file javascript-->
    <script type="text/JavaScript" src="javascript/jquery.min.js"></script>
    <script type="text/JavaScript" src="javascript/global.js"></script>
    <script type="text/JavaScript" src="javascript/resize.js"></script>
    <script type="text/JavaScript" src="javascript/updating.js"></script>
    <script type="text/JavaScript" src="javascript/compassIndicator.js"></script>
    <script type="text/JavaScript">
      $(document).ready(function(){
        $('#a3').addClass('selected');
      });
      //funzione di aggiornamento dei dati
      function refreshInformations(){
        compass(cogV, 'cog', '.left.top', 0);
        compass(mhV, 'mh', '.left.bottom', 2);
        $('#sow').text(sowV);
        $('#sog').text(sogV);
        $('#lat').text(lat);
        $('#long').text(lon);
      }
      (function($){
        //funzione di inizializzazione delle dimensioni e dei dati
        $(document).ready(function(){
          resizeWindow();
          refreshInformations();
          updatingData();
        });
        //funzione che si attiva al ridimensionamento della pagina
        $(window).resize(function(){
          resizeWindow();
          refreshInformations();
        });
      })(jQuery);
    </script>
    
    <!-- Demo styles -->
    <style>
        * {
            box-sizing: border-box;
        }
        
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        
        .wrapper {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            height: 100%;
            width: 100%;
            background: #d3d3d3;
        }
        
        .item {
            height: 49%;
            width: 33%;
            background: #fff;
        }
        
        .swiper-container {
            width: 100%;
            height: 100%;
        }
        
        .swiper-slide {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <!-- Swiper -->
    <div class="wrapper">
        <div class="item">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="name">CURSE OVER GROUND</div>
                        <canvas id="cog" height="0" width="0"></canvas>
                    </div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div class="item">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div class="item">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div class="item">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div class="item">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div class="item">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        
    </div>
    <!-- Swiper JS -->
    <script src="javascript/swiper/swiper.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var mySwiper = new Swiper('.swiper-container', {
            // Navigation arrows
            nextButton: '.swiper-button-next'
            , prevButton: '.swiper-button-prev'
        , })
    </script>
</body>

</html>