<!DOCTYPE html>
<html>
  <head>
    <title>Storico vento</title>
    <meta name="author" content="Davide D'Osvaldo">
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
    <!--caricamento dei file css-->
    <style>@import url(css/informations.css);</style>
    <style>@import url(css/links.css);</style>
    <style>@import url(css/stili.css);</style>
    <style>@import url(css/history.css);</style>
    <!--caricamento dei file javascript-->
    <script type="text/JavaScript" src="javascript/jquery.min.js"></script>
    <script type="text/JavaScript" src="javascript/global.js"></script>
    <script type="text/JavaScript" src="javascript/resize.js"></script>
    <script type="text/JavaScript" src="javascript/updating.js"></script>
    <script type="text/JavaScript" src="javascript/storicovento.js"></script>
    <script type="text/JavaScript" src="javascript/storicografico.js"></script>
    <script type="text/JavaScript">
      $(document).ready(function(){
        $('#a6').addClass('selected');
      });
      //funzione di aggiornamento dei dati
      function refreshInformations(){
        $('#lat').text(lat);
        $('#long').text(lon);
        showHistory();
        showGraph();
      }
      (function($){
        //funzione di inizializzazione delle dimensioni e dei dati
        $(document).ready(function(){
          resizeWindow();
          updatingData();
        });
        //funzione che si attiva al ridimensionamento della pagina
        $(window).resize(function(){
          resizeWindow();
          refreshInformations();
        });
      })(jQuery);
    </script>
  </head>
  <body>
    <?php
      include 'Informations.php';
    ?>
    <div id="left">
      <?php
        include 'links.php';
      ?>
    </div>
    <div id="contenuto">
      <canvas id="history">
      </canvas>
      <canvas id="graph">
      </canvas>
    </div>
    <div id="right">
      <?php
        include 'links2.php';
      ?>
    </div>
  </body>
</html>
