(function($){
  $(document).ready(function(){
    //visualizzo l'ora
    displayTime();
    
    //funzione di visualizzazione dell'ora
    function displayTime(){
      var now = new Date(),
          hh = now.getHours(),
          mm = now.getMinutes(),
          ss = now.getSeconds();
      $('#clock').text(((hh < 10) ? ('0' + hh) : hh) + ':' + ((mm < 10) ? ('0' + mm) : mm) + ':' + ((ss < 10) ? ('0' + ss) : ss));
      setTimeout(displayTime, 1000);
    }
    
    var $fulls = $('#fullscreen');
    
        
    //funzione di full screen
    $fulls.click(function(){
      if(!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement){
        $fulls.attr('src', 'img/ic_fullscreen_white_24dp.png');
        if(document.documentElement.requestFullscreen){
          document.documentElement.requestFullscreen();
        }else if(document.documentElement.mozRequestFullScreen){
          document.documentElement.mozRequestFullScreen();
        }else if(document.documentElement.webkitRequestFullscreen){
          document.documentElement.webkitRequestFullscreen();
        }else if(document.documentElement.msRequestFullscreen){
          document.documentElement.msRequestFullscreen();
        }
      }else{
        $fulls.attr('src', 'img/ic_fullscreen_white_24dp.png');
        if(document.exitFullscreen){
          document.exitFullscreen();
        }else if(document.mozCancelFullScreen){
          document.mozCancelFullScreen();
        }else if(document.webkitExitFullscreen){
          document.webkitExitFullscreen();
        }else if(document.msExitFullscreen){
          document.msExitFullscreen();
        }
      }
    });
    
      
  });
})(jQuery);