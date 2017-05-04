function check() {
    var stringa = ' ';
    var bool = false;
    var arr = {
        aws: false
        , sow: false
        , awa: false
        , mh: false
        , tws: false
        , twa: false
        , sog: false
        , cog: false
        , sogp: false
        , togp: false
        , lat: false
        , lon: false
    };
    if (document.getElementById("caws").checked || arr.aws) {
        arr.aws = true;
        bool = true;
        stringa = stringa + '<div class="swiper-slide" data-name="AWS[kt]"><div class="text"><p class="title">APPARENT WIND SPEED</p>                                <p class="value" id="aws"><script>$(\'.value\').text(awsV);</script></p></div></div><br>';
    }
    if (document.getElementById("cawa").checked || arr.awa) {
        arr.awa = true;
        bool = true;
        stringa = stringa + '<div class="swiper-slide"><object data="img/bussola4n.png" class="bussola"></object>                                <object data="img/Lancetta3n.png" class="lancetta2" id="awa"></object></div><br>';
    }
    if (document.getElementById("csow").checked || arr.sow) {
        arr.sow = true;
        bool = true;
        stringa = stringa + '<div class="swiper-slide" data-name="SOW[kt]"><div class="text"><p class="title">SPEED OVER WATER</p>                                <p class="value" id="sow"><script>$(\'.value\').text(sowV);</script></p></div></div><br><br>';
    }
    if (document.getElementById("cmh").checked || arr.mh) {
        arr.mh = true;
        bool = true;
        stringa = stringa + '<div class="swiper-slide"><object data="img/bussola3.png" class="bussola"></object>                                <object data="img/Lancetta2.png" class="lancetta2" id="mh"></object></div><br>';
    }
    if (document.getElementById("ctws").checked || arr.tws) {
        arr.tws = true;
        bool = true;
        stringa = stringa + '<div class="swiper-slide" data-name="TWS[kt]"><div class="text"><p class="title">TRUE WIND SPEED</p>                                <p class="value" id="tws"><script>$(\'.value\').text(twsV);</script></p></div></div><br><br><br>';
    }
    if (document.getElementById("ctwa").checked || arr.twa) {
        arr.twa = true;
        bool = true;
        stringa = stringa + '<div class="swiper-slide"><object data="img/bussola4n.png" class="bussola"></object>                                <object data="img/Lancetta3n.png" class="lancetta2" id="twa"></object></div><br>';
    }
    if (document.getElementById("csog").checked || arr.sog) {
        arr.sog = true;
        bool = true;
        stringa = stringa + '<div class="swiper-slide" data-name="SOG[kt]"><div class="text"><p class="title">SPEED OVER GROUND</p>                                <p class="value" id="sog"><script>$(\'.value\').text(sogV);</script></p></div></div><br>';
    }
    if (document.getElementById("ccog").checked || arr.cog) {
        arr.cog = true;
        bool = true;
        stringa = stringa + '<div class="swiper-slide"><object data="img/bussola3.png" class="bussola"></object>                                <object data="img/Lancetta2.png" class="lancetta2" id="cog"></object></div><br><br>';
    }
    if (document.getElementById("csogp").checked || arr.sogp) {
        arr.sogp = true;
        bool = true;
        stringa = stringa + '<div class="swiper-slide" data-name="SOGP"><div class="text"><p class="title">TARGET SPEED</p>                                <p class="value" id="sogp"><script>$(\'.value\').text(sogpV);</script></p></div></div><br>';
    }
    if (document.getElementById("ctogp").checked || arr.togp) {
        arr.togp = true;
        bool = true;
        stringa = stringa + '<div class="swiper-slide"><object data="img/bussola3.png" class="bussola"></object>                                <object data="img/Lancetta2.png" class="lancetta2" id="togp"></object></div><br>';
    }
    if (document.getElementById("clat").checked || arr.lat) {
        arr.lat = true;
        bool = true;
        stringa = stringa + '<div class="swiper-slide" data-name="LAT"><div class="text"><p class="title">LATITUDE</p>                                <p class="value" id="sog"><script>$(\'.value\').text(lat);</script></p></div></div><br>';
    }
    if (document.getElementById("clon").checked || arr.lon) {
        arr.lon = true;
        bool = true;
        stringa = stringa + '<div class="swiper-slide" data-name="LON"><div class="text"><p class="title">LONGITUDE</p>                                <p class="value" id="lon"><script>$(\'.value\').text(lon);</script></p></div></div><br>';
    }
    
    localStorage.setItem("array", JSON.stringify(arr));
    var storedNames = JSON.parse(localStorage.getItem("array"));
    
    document.getElementById( 'col' ).style.display = 'none';
    return stringa;
}