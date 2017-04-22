function resizeImage() {
    var widthI = $('.item').width();
    var heightI = $('.item').height();
    
    var imgBussola = document.getElementsByClassName('bussola');
    if (imgBussola && imgBussola.style) {
        imgBussola.style.width = '300px';
        imgBussola.style.height = '300px';
    }
}