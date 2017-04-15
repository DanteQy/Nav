<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" user-scalable=no" />
    <link rel="stylesheet" href="css/swiperPlayground.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/JavaScript" src="javascript/jquery.min.js"></script>
    <script type="text/JavaScript" src="javascript/global.js"></script>
    <script type="text/JavaScript" src="javascript/resize.js"></script>
    <script type="text/JavaScript" src="javascript/updating.js"></script>
    <script type="text/JavaScript" src="javascript/compassIndicator.js"></script>
    <script>
        $(document).ready(function () {
            $('#a3').addClass('selected');
        }); /*funzione di aggiornamento dei dati */
        function refreshInformations() {
            compass(cogV, 'cog', '.left.top', 0);
            compass(mhV, 'mh', '.left.bottom', 2);
            $('#sow').text(sowV);
            $('#sog').text(sogV);
            $('#lat').text(lat);
            $('#long').text(lon);
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
        /***************************/
        
        html,
        body {
            height: 100%;
            width: 100%;
            font-family: Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
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
            height: 49.5%;
            width: 33%;
            background: #fff;
        }
        
        .swiper-container {
            width: 100%;
            height: 100%;
        }
        
        .swiper-slide {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            overflow: hidden;
            background-color: white;
            background-position: fixed;
            font-family: Lato, sans-serif;
        }
        
        a {
            text-decoration: none;
        }
        /* Estilos de la barra superior */
        
        .header {
            height: 4.5rem;
            padding: .5rem;
            background: hsla(190, 80%, 25%, 1);
        }
        
        @media all and (min-height: 320px) and (max-height: 400px) {
            .header {
                height: 2.3rem;
                padding: .5rem;
                background: hsla(190, 80%, 25%, 1);
            }
            .menu-button--label {
                /*position: absolute;*/
                position: absolute;
                z-index: 100;
                top: .5rem;
                right: .5rem;
                width: auto;
                height: 1.8rem;
                background: hsla(180, 40%, 50%, 1);
                border-radius: 3px;
                cursor: pointer;
                text-align: center;
                color: white;
                transition: all .5s ease;
            }
            .bar1,
            .bar2,
            .bar3 {
                content: "'\2630';";
            }
        }
        
        .brand {
            line-height: 3rem;
        }
        /* Estilos del botón del menú */
        
        .menu-button--label {
            /*position: absolute;*/
            position: absolute;
            z-index: 100;
            top: .5rem;
            right: .5rem;
            width: 3rem;
            height: 3rem;
            background: hsla(180, 40%, 50%, 1);
            border-radius: 3px;
            cursor: pointer;
            text-align: center;
            line-height: 3rem;
            font-size: 2rem;
            color: white;
            transition: all .5s ease;
        }
        
        .menu-button--checkbox {
            display: none;
        }
        /* Se desplaza el menú a la derecha y se fija */
        
        .menu-button--checkbox:checked ~ .nav {
            right: 0;
            position: fixed;
        }
        /* Se desplaza el botón a la derecha y se fija */
        
        .menu-button--checkbox:checked ~ .menu-button--label {
            position: fixed;
            right: 210px;
        }
        /* Se desplaza el contenido a la derecha */
        
        .menu-button--checkbox:checked ~ .main-w {
            margin-left: -200px;
        }
        /* Estilos del menú y los items */
        
        .nav {
            position: fixed;
            top: 0;
            right: -200px;
            /* Se oculta el menú a la derecha */
            z-index: 10;
            /* Se le asigna un índice alto para que esté encima del contenido */
            width: 200px;
            height: 100vh;
            padding-top: 3.5rem;
            background-color: hsla(180, 20%, 10%, 1);
            border-left: 6px solid hsla(180, 40%, 50%, 1);
            transition: all .5s ease;
            /* Desplazamiento del menú */
        }
        
        #fullscreen {
            vertical-align: center;
            height: inherit;
            margin-right: 2rem;
        }
        
        h1 {
            vertical-align: text-top;
            align-content: center;
            display: inline-block;
            line-height: 3rem;
            margin-right: 2rem;
            margin-top: .5rem;
            height: inherit;
        }
        
        .nav__item {
            display: block;
            width: 100%;
            margin: 0 auto;
            line-height: 3rem;
            border-bottom: 1px solid hsla(180, 50%, 80%, 1);
            background-color: transparent;
            font-family: Lato, sans-serif;
            font-weight: 300;
            text-align: center;
            color: hsla(180, 50%, 80%, 1);
            transition: all 1s ease;
        }
        
        .nav__item:hover {
            background-color: hsla(180, 20%, 20%, 1);
        }
        /* Estilos del contenido */
        
        .main-w {
            width: 100%;
            height: 89.5vh;
            transition: all .5s ease;
        }
        /*************************************/
        
        .container {
            display: inline-block;
            cursor: pointer;
            align-items: center;
            margin-top: 0.3rem;
        }
        
        .bar1,
        .bar2,
        .bar3 {
            width: 35px;
            height: 5px;
            background-color: #333;
            margin: 6px 0;
            transition: 0.4s;
            color: white;
        }
        
        .change .bar1 {
            -webkit-transform: rotate(-45deg) translate(-9px, 6px);
            transform: rotate(-45deg) translate(-9px, 6px);
        }
        
        .change .bar2 {
            opacity: 0;
        }
        
        .change .bar3 {
            -webkit-transform: rotate(45deg) translate(-8px, -8px);
            transform: rotate(45deg) translate(-8px, -8px);
        }
        /*************************************/
        
        .focus.icon {
            color: #000;
            position: absolute;
            margin-left: 2px;
            margin-top: 2px;
            width: 15px;
            height: 15px;
            border-radius: 1px;
            border: solid 1px hsla(180, 20%, 10%, 1);
        }
        
        .focus.icon:before {
            content: '';
            position: absolute;
            left: 3px;
            top: -2px;
            width: 9px;
            height: 19px;
            background-color: hsla(180, 20%, 10%, 1);
            -webkit-transform-origin: center;
            transform-origin: center;
        }
        
        .focus.icon:after {
            content: '';
            position: absolute;
            left: 3px;
            top: -2px;
            width: 9px;
            height: 19px;
            color: white;
            background-color: hsla(180, 20%, 10%, 1);
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }
    </style>
</head>

<body>
    <section class="header">
        <!-- Ci vanno header , dati e menu -->
        <h1><span id="fullscreen" alt="fullscreen"><div class="focus icon"></div>
            </span></h1>
        <h1 class="brand">Logo</h1>
        <h1><span id="clock"></span></h1> </section>
    <input type="checkbox" class="menu-button--checkbox" id="menu-button--checkbox" />
    <label for="menu-button--checkbox" class="menu-button--label">
        <div class="container" onclick="hamburger(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </label>
    <nav class="nav"> <a href="#" class="nav__item">A</a> <a href="#" class="nav__item">B</a> <a href="#" class="nav__item">C</a> <a href="#" class="nav__item">D</a> </nav>
    <main class="main-w">
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
    </main>
    <!-- Swiper JS -->
    <script src="javascript/swiper/swiper.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        mySwiper = new Swiper('.swiper-container', {
            // Navigation arrows
            nextButton: '.swiper-button-next'
            , prevButton: '.swiper-button-prev'
        , });
        ì

        function hamburger(x) {
            x.classList.toggle("change");
        }
    </script>
</body>

</html>