<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" user-scalable=no" />
    <link rel="stylesheet" href="css/swiperPlayground.css">
    <style>
        /* Navigation Menu - Background */
        
        .navigation {
            /* critical sizing and position styles */
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 0;
            /* non-critical appearance styles */
            list-style: none;
            background: #111;
        }
        /* Navigation Menu - List items */
        
        .nav-item {
            /* non-critical appearance styles */
            width: 200px;
            border-top: 1px solid #111;
            border-bottom: 1px solid #000;
        }
        
        .nav-item a {
            /* non-critical appearance styles */
            display: block;
            padding: 1em;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.65) 100%);
            color: white;
            font-size: 1.2em;
            text-decoration: none;
            transition: color 0.2s, background 0.5s;
        }
        
        .nav-item a:hover {
            color: #111;
        }
        /* Site Wrapper - Everything that isn't navigation */
        
        .site-wrap {
            /* Critical position and size styles */
            height: 100%;
            width: 100%;
            background-color: white;
            /* Needs a background or else the nav will show through */
            position: relative;
            left: 0;
            z-index: 1;
        }
        /* Nav Trigger */
        
        .nav-trigger {
            /* critical styles - hide the checkbox input */
            position: absolute;
            clip: rect(0, 0, 0, 0);
        }
        
        label[for="nav-trigger"] {
            /* critical positioning styles */
            position: fixed;
            left: 15px;
            top: 15px;
            z-index: 2;
            /* non-critical apperance styles */
            height: 30px;
            width: 30px;
            cursor: pointer;
            background-size: contain;
        }
        /* Make the Magic Happen */
        
        .nav-trigger + label,
        .site-wrap {
            
            font-size: x-large;
            transition: left 0.2s;
        }
        
        .nav-trigger:checked + label {
            left: 215px;
        }
        
        .nav-trigger:checked ~ .site-wrap {
            left: 200px;
            /*box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.5);*/
        }
        
        body {
            /* Without this, the body has excess horizontal scroll when the menu is open */
            overflow-x: hidden;
        }
        /* Additional non-critical styles */
        /* Micro reset */
        
        *,
        *:before,
        *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
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
        /********************************/
        
        .topnav {
            overflow: hidden;
            background-color: #333;
        }
        
        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }
        
        .topnav .icon {
            display: none;
        }
        
        @media screen and (max-width: 600px) {
            .topnav a:not(: first-child) {
                display: none;
            }
            .topnav a.icon {
                float: right;
                display: block;
            }
        }
        
        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }
            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }
        /********************************/
    </style>
</head>

<body>
    <div class="topnav" id="myTopnav"> <a href="#home">Home</a> <a href="#news">News</a> <a href="#contact">Contact</a> <a href="#about">About</a> <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a> </div>
    <ul class="navigation">
        <li class="nav-item"><a href="#">A</a></li>
        <li class="nav-item"><a href="#">B</a></li>
        <li class="nav-item"><a href="#">C</a></li>
        <li class="nav-item"><a href="#">D</a></li>
        <li class="nav-item"><a href="#">E</a></li>
    </ul>
    <input type="checkbox" id="nav-trigger" class="nav-trigger" />
    <label for="nav-trigger">&#9776;</label>
    <div class="site-wrap">
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
    </div>
    <!-- Swiper JS -->
    <script src="javascript/swiper/swiper.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            }
            else {
                x.className = "topnav";
            }
        }
        var mySwiper = new Swiper('.swiper-container', {
            // Navigation arrows
            nextButton: '.swiper-button-next'
            , prevButton: '.swiper-button-prev'
        , })
    </script>
</body>

</html>