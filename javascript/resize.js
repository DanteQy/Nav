function resizeWindow() {
    //riduco a zero la dimensione delle immagini e di canvas per ridimensionare correttamente tutti gli elementi della pagina
    $('#fullscreen').height(0).width(0);
    //$('canvas').height(0).width(0);
    //definisco le variabili e le assegno una dimensione
    var height = parseInt($(window).innerHeight() * 0.99)
        , width = $(window).innerWidth()
        , infoHeight = $('#info').height()
        , linksHeight = height - infoHeight
        , linksWidth = parseInt(width * 0.1)
        , contHeight = height - infoHeight
        , contWidth = width - (2 * linksWidth)
        , historyHeight = height - infoHeight
        , historyWidth = width - (2 * linksWidth)
        , liHeight = parseInt(linksHeight * 0.34)
        , liWidth = linksWidth
        , aHeight = parseInt(liWidth * 0.7)
        , aWidth = parseInt(liHeight * 0.85);
    //assegno le dimensioni agli elementi della pagina
    $('body').height(height).width(width);
    //$('#fullscreen').height($('#info').height()).width($('#fullscreen').height());
    if (height > width) {
        $('#contenuto').height($(document).height() * 0.90).width(width);
        $('#history').height(historyHeight).width(historyWidth);
    }
    if (height < width) {
        $('#contenuto').height($(document).height() * 0.80).width(width);
        $('#history').height(historyHeight).width(historyWidth);
    }
}